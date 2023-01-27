@extends('layouts.template')

@section('title')
    Services
@endsection

@section('style')
<link rel="stylesheet" href="{{asset('css/shop.css')}}">
@endsection

@section('content')
<div class="content">
  <div class="container">
    <div class="row">
      <div class="col-lg-4">
        <div class="category">
          <h2 id="category-label">Category</h2>
          <ul class="list-group">
            <li class="list-group-item"><a href="/service">All</a></li>
            @foreach ($category as $cat)
                <li class="list-group-item {{ $cat->id == $id ? 'active' : ''}} "><a href="/service/category/{{ $cat->id }}">{{ $cat->services }}</a></li>
            @endforeach
          </ul>
        </div>

        
        <h2 id="category-label" class="text-center mt-5">Search Services</h2>
        <form action="" class="form-inline ml-5">
          <input type="text" class="form-control" name="search">
          <button class="btn btn-primary">Search</button>
        </form>
      </div>
        <div class="col-lg-8">
          <div class="item-list">
          <h2>Services</h2>
          <hr style="margin-bottom: 2em;">
          <div class="row list-product">
            @foreach ($services as $service)
                <div class="col-lg-4 mb-5 item">
                    <a href=" /service/detail/ {{ $service->id }}">
                    <img src="{{asset($service->image)}}" alt="nopic" height="180" width="180">
                    </a>
                    <p class="product-name mt-3 font-weight-bold"><a href="">{{ $service->name }}</a></p>
                    <p class="product-price">RM {{ number_format ($service->price) }}</p>
                </div>
            @endforeach
          </div>
        </div>
        {{ $services -> links()}}
      </div>
    </div>
  </div>

</div>
@endsection

@section('script')
<script type="text/javascript" src="{{asset('js/script.js')}}"></script>
@endsection

