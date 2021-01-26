@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>User Profile</h1>
        <hr>
        <h2>My Orders</h2>
        @foreach($orders as $order) 
            <div class="panel panel-default">
                <div class="panel-body">
                    <ul class="list-group">
                        @foreach($order->cart->items as $item)
                            <li class="list-group-item">
                                <span class="badge">${{ $item['price'] }}</span>
                                {{ $item['item']['name']}} | {{ $item['qty'] }} Units
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="panel-footer">Total Price: ${{ $order->cart->totalPrice }}</div>
            </div>
        @endforeach
    </div>
@endsection 