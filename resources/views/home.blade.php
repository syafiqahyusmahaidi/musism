@extends('layouts.template')

@section('style')
<link rel="stylesheet" href="{{asset('css/shop.css')}}">
@endsection

@section('content')

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <style>
    body {
  font-family: Arial;
  background-color: #d3c8e8;
  color: #636b6f;
}

h2{
text-align: center;
}

* {
  box-sizing: border-box;
}

form.example input[type=text] {
  padding: 10px;
  font-size: 17px;
  border: 1px solid grey;
  float: left;
  width: 80%;
  background: #f1f1f1;
}

form.example button {
  float: left;
  width: 20%;
  padding: 10px;
  background: #2196F3;
  color: white;
  font-size: 17px;
  border: 1px solid grey;
  border-left: none;
  cursor: pointer;
}

form.example button:hover {
  background: #0b7dda;
}

form.example::after {
  content: "";
  clear: both;
  display: table;
}

.button {
  background-color: violet; /* Green */
  border: none;
  color: white;
  padding: 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
.button1 {border-radius: 12px;}

* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

/* Float four columns side by side */
.column {
  float: left;
  width: 25%;
  padding: 0 10px;
}

/* Remove extra left and right margins, due to padding */
.row {margin: 0 -5px;}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive columns */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
    display: block;
    margin-bottom: 20px;
  }
}

/* Style the counter cards */
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 12px;
  text-align: center;
  background-color: #f1f1f1;
}

img {
  max-width: auto;
  height: auto;
}

.pageimage{
  height: 500px;
  width: 100%;
}

</style>
</head>

<div>
	  <img class="pageimage" src="{{asset('admin/dist/img/homie.png')}}">
  </div>


<div class="content">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-4">
        <div class="category">
          <h2 id="category-label">Brands</h2>
          <ul class="list-group">
            <li class="list-group-item"><a href="/home">All</a></li>
            @foreach ($brand as $cat)
                <li class="list-group-item {{ $cat->id == $id ? 'active' : ''}} "><a href="/product/brand/{{ $cat->id }}">{{ $cat->bname}}</a></li>
            @endforeach
          </ul>
        </div>
      </div>


        <div class="col-lg-8">
          <div class="item-list">
          <h2>products</h2>
          <hr style="margin-bottom: 2em;">
          <div class="row list-product">
            @foreach ($products as $product)
                <div class="col-lg-4 mb-5 item">
                    <a href=" /product/detail/ {{ url($product->product_url) }}">
                    <img src="{{asset($product->image)}}" alt="nopic" height="180" width="180">
                    </a>
                    <p class="product-name mt-3 font-weight-bold"><a href="">{{ $product->title }}</a></p>
                    <p class="product-price">RM {{ number_format ($product->price) }}</p>
                </div>
            @endforeach
          </div>
        </div>
        {{ $products -> links()}}
      </div>
    </div>
  </div>

</div>
@endsection

@section('script')
<script type="text/javascript" src="{{asset('js/script.js')}}"></script>
@endsection





