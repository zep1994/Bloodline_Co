@extends('layouts.app')

@section('content')

<h1>Bloodline Clothing</h1>

<div class="container">
    @if ($message = Session::get('success'))
        <div class="col-md-8 alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>    
            <strong>{{ $message }}</strong>
        </div>
    @endif
    <div class="row">
    @foreach ($products as $product) 
        <div class="col-sm">
            <div class="card mb-3" style="width: 18rem;">
                <img class="card-img-top" src="{{ $product->image }}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">{{ $product->name }}</h5>
                    <p class="card-text">{{ $product->description }}</p>
                    <p>${{ $product->price }}</p>
                    <a href="/add-to-cart/{{ $product->id }}" class="btn btn-success">Add To Cart</a>
                </div>
            </div>
        </div>
    @endforeach
        <!-- <div class="col-sm">
        One of three columns
        </div>
        <div class="col-sm">
        One of three columns
        </div> -->
    </div>
</div>

@endsection