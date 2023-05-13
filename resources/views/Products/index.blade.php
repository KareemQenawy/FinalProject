@extends('Components.main')
@section('page_title')
    All PRODUCTS
@endsection
@section('content')
<h1 class="text-center text-danger my-5">welcome to products page!</h1>
<div class="container">
    <div class="row">
        @foreach ($products as $product )
        <div class="col-md-6">
            <div class="card">
                <img src="{{ asset("$product->image") }}" class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title">{{ $product->name }}</h5>
                <p class="card-text">{{  $product->desc }}</p>
                <p class="card-text">{{  $product->category->name }}</p>
                <a href="{{ url("/products" , $product->id )}}" class="btn btn-primary">Details</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
