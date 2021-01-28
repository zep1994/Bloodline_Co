<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Order;
use Stripe;
use Session;
use Auth;
use Intervention\Image\ImageManagerStatic as Image;

class ProductController extends Controller
{
    public function index() 
    {
        $products = Product::all();
        return view('shop.index', ['products' => $products]);
    }

    public function create() 
    {
        return view('products.create');
    }

    public function store(Request $request) 
    {
        $product = new Product();
        $product->name = $request->input('name');
        $product->description = $request->input('description');
        if ($request->hasFile('image')){
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(300, 300)->save( public_path('/img/' . $filename ) );

            $product->image = $filename;
        }
        $product->price = $request->input('price');
        $product->save();
        return redirect('/products');
    }

    public function getAddToCart(Request $request, $id) 
    {
        $product = Product::find($id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($product, $product->id);

        $request->session()->put('cart', $cart);
        Session::flash('success', 'Successfully Added To Cart');
        return redirect('/products');
    }

    public function getReduceByOne($id)
    {
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->reduceByOne($id);

        if (($cart->items) >= 0) 
        {
            Session::put('cart', $cart);
        } else {
            Session::forget('cart', $cart);
        }
        return redirect('/shopping-cart');
    }

    public function getRemoveItem($id) 
    {
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->removeItem($id);

        if (($cart->items) >= 0) 
        {
            Session::put('cart', $cart);
        } else {
            Session::forget('cart', $cart);
        }
        Session::put('cart', $cart);
        return redirect('/shopping-cart');
    }

    public function getCart() 
    {
        if (!Session::has('cart')) {
            return view('shop.cart');
        }

        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        return view('shop.cart', ['products' => $cart->items, 'totalPrice' => $cart->totalPrice]);
    }

    /**
     * payment view
     */
    public function getCheckout()
    {
        if (!Session::has('cart')) {
            return view('shop.shoppingCart');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        $total = $cart->totalPrice;

        return view('shop.checkout', ['total' => $total]);
    }

    /**
     * handling payment with POST
     */
    public function postCheckout(Request $request)
    {
        if (!Session::has('cart')) {
            return redirect()->route('shop.shoppingCart');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);

        Stripe\Stripe::setApiKey('sk_test_51IB3XJKrNVWoZ44h7LLWAE5dDrUX2DIG8Byu1SqebFX5H1meRs5yzHJIpwit4uimChyjc3gd3M0s9SzVPufH4yv400oZhxt8LK');
        try {
            $charge = Stripe\Charge::create ([
                "amount" => $cart->totalPrice * 100,
                "currency" => "usd",
                "source" => $request->stripeToken,
                "description" => "Making test payment." 
            ]);

            $order = new Order();
            $order->cart = serialize($cart);
            $order->address = $request->input('address');
            $order->name = $request->input('name');
            $order->payment_id = $charge->id;

            Auth::user()->orders()->save($order);
            Session::forget('cart');
        } catch (\Throwable $th) {
            return redirect('/checkout')->with('error', $th->getMessage());
        }
        return redirect('/')->with('success', 'Payment Successfully Processed');
    }
}
