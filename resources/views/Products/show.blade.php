@extends('Components.main')
@section('page_title')
{{ $product->name }}
@endsection

@section('content')


<div class="container my-5">
   <div class="row">
       <div class="col-md-6">
        <img src="{{asset("$product->image")}}" alt="">
       </div>
       <div class="col-md-6">
           <h2>{{ $product->name }}</h2>
           <p>{{ $product->desc }}</p>
           <p>{{ $product->category->name }}</p>
       </div>

    </div>
</div>

@endsection
