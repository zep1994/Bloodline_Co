@extends('layouts.app')

@section('content')
    @if (Session::has('cart'))
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-8 col-md-offset-3 col-sm-offset-3">
                <ul class="list-group">
                    @foreach ($products as $product) 
                        <li class="list-group-item ml-4">
                            <span class="badge">{{ $product['qty'] }}</span>
                            <strong>{{ $product['item']['name'] }}</strong>
                            <span>{{ $product['item']['description'] }}</span>
                            <span class="label label-success">${{ $product['price'] }}</span>
                            <div class="btn-group ml-4">
                                <button type="button" class="btn btn-primary btn-xs dropdown-toggle" data-toggle="dropdown">
                                    Action <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a href="/reduce/{{ $product['item']['id'] }}">Reduce by 1</a></li>
                                    <li><a href="/remove/{{ $product['item']['id'] }}">Reduce Item</a></li>
                                </ul>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-md-3 col-md-offset-3 col-sm-offset-3">
                <strong>Total: ${{ $totalPrice }}</strong>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-sm-6 col-md-3 col-md-offset-3 col-sm-offset-3">
                <a href="/checkout" class="btn btn-success">Checkout</a>
            </div>
        </div>
    </div>
    @else
        <div class="row">
            <div class="col-sm-6 col-md-3 col-md-offset-3 col-sm-offset-3">
                <h2>No Items In Cart</h2>
            </div>
        </div>
    @endif

@endsection
