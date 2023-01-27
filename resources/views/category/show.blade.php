@extends('layouts.template')

@section('content')


<div class="container">
    <div class="row mt-4" style="">
    @foreach ($products as $product)
        <div class="col-4 mb-2"  style="border: 3px solid black; margin-left:20px;">
            <div class="card" style="background-color: transparent;">
                <img class="card-img-top" src="{{ url($product->image) }}" alt="{{ $product->name }}" width="10" height="10">
                <div class="card-body" style="text-align:center; font-size: 20px;">
                   <b><h5 class="card-title">{{ $product->title }}</h5></b>
                   <b><h5 class="card-title">RM{{ $product->price }}</h5></b>
                   <p class="card-text">{{ $product->product_type }}</p>
                   <p class="card-text">{{ $product->vendor }}</p>
                </div>
                <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" value="{{ $product->products_id }}" name="id">
                    <input type="hidden" value="{{ $product->title }}" name="name">
                    <input type="hidden" value="{{ $product->price }}" name="price">
                    <input type="hidden" value="{{ $product->product_type }}" name="type">
                    <input type="hidden" value="{{ $product->vendor }}" name="vendor">
                    <input type="hidden" value="{{ $product->image }}"  name="image">
                    <button class="px-4 py-2 text-white bg-blue-800 rounded" style="display:flex; align-items:center; justify-content:center; margin-left: 35%;">Add To Cart</button>
                </form>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection