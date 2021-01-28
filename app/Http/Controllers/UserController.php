<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use Session;

class UserController extends Controller
{
    public function index() 
    {
        return view('home');
    }
    public function getRegister() 
    {
        return view('user.register');
    }

    public function postRegister(Request $request)
    {
        $this->validate($request, [
            'email' => 'email|required|unique:users',
            'password' => 'required|min:8|confirmed'
        ]);

        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));
        $user->save();
        return redirect('/');
    }

    public function getLogin() 
    {
        return view('user.login');
    }

    public function postLogin(Request $request)
    {
        $this->validate($request, [
            'email' => 'email|required',
            'password' => 'required|min:8'
        ]);

        if (Auth::attempt([
            'email' => $request->input('email'),
            'password' => $request->input('password')
            ])) {
                if (Session::has('oldUrl')) 
                {
                    $oldUrl = Session::get('oldUrl');
                    Session::forget('oldUrl');
                    return redirect()->to($oldUrl);
                }
                return redirect('/');
            };
            return redirect()->back();
    }

    public function getProfile() 
    {
        $orders = Auth::user()->orders;
        $orders->transform(function($order, $key) {
            $order->cart =unserialize($order->cart);
            return $order;
        });
        return view('user.profile', ['orders' => $orders]);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/login');
    }
}
