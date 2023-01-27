@extends('layouts.template')

@section('content')
<html>
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
<body>

<div class="container-fluid">
    <div class="row justify-content-center py-5 area-wise-show">
        <h2 class="text-center"> Search Result: </h2>
        <br>
    </div>
</div>

<!-- This is the product list -->

<div class="row justify-content-center">
<div class=" col-lg-8" style="">
    <div class="row justify-content-center">
    @foreach ($products as $product)
        <div class="col-5 mb-3"  style="border: 3px solid black; margin-left:20px;">
            <div class="card" style="background-color: transparent;">
                <img class="card-img-top" src="{{ url($product->image) }}" alt="{{ $product->name }}" width="200" height="250">
                <div class="card-body" style="text-align:center; font-size: 20px;">
                   <b><h5 class="card-title">{{ $product->title }}</h5></b><br>
                   <b><h5 class="card-title">RM{{ $product->price }}</h5></b>
                </div>
                <form action="" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" value="{{ $product->products_id }}" name="id">
                    <input type="hidden" value="{{ $product->title }}" name="name">
                    <input type="hidden" value="{{ $product->price }}" name="price">
                    <input type="hidden" value="{{ $product->image }}"  name="image">
                    <button class="px-4 py-2 text-black bg-blue-800 rounded" style="display:flex; align-items:center; justify-content:center; margin-left: 35%;" href= "{{ url($product->product_url) }}">View Product</button>
                </form>
            </div>
        </div>
        @endforeach
    </div>
</div>
</div>
</div>

<!-- SCIPTS -->

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>

@endsection