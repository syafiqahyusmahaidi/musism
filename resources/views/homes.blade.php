@extends('layouts.template')

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
<body>
	<!-- This is the header of the page -->

  <div>
	  <img class="pageimage" src="{{asset('admin/dist/img/homie.png')}}">
  </div>
	</br>
  <h2>Musical Instruments</h2>

	<!-- This is next row -->
  <div class="container">

<div class="row">
<div class="col-6 col-md-4">
</br>
</br>
</br>


  <div class="card">

    <!-- This is the brand -->
    <div class = "card-header">
          <h5> Brands</h5>
    </div>

        <div class = "card-body">
        <div class="category">
          <ul class="list-group">
            @foreach ($brand as $b)
            <li class="list-group-item"><a href="/products/brand/{{ $b->brand_id }}">{{ $b->vendor }}</a></li>
            @endforeach
          </ul>
        </div>
          </div>

  <!-- This is the category -->
          <div class = "card-header">
              <h5> Category
          </div>

          <div class = "card-body">
          <div class="category">
          <ul class="list-group">
            @foreach ($category as $c)
            <li class="list-group-item"><a href="/service/category/{{ $c->category_id }}">{{ $c->product_type }}</a></li>
            @endforeach
          </ul>
        </div>
          </div>
</div>

</div>


  <!-- This is the products on homepage -->

    <div class="col-12 col-md-8">
    {{ $products->appends(['search2'=> request()->query('search2')])->links() }}
            <div class="row justify-content-center">
            
            <div class="redirect">  
            @forelse ($products as $product)
              <div class="col-md-6">
                              <div class="card m-3 house-card">
                                  <div class="card-header">
                                      <img class="card-img-top" src="{{ url($product->image) }}" alt="{{ $product->name }}" width="200" height="250">
                                  </div>
                                  <div class="card-body">
                                      <p><b><h5 class="card-title">{{ $product->title }}</h5></b></p>
                                        <p><b><h5 class="card-title">RM{{ $product->price }}</h5></b></p>
                                  </div>
                                  <div class="card-footer">
                                      <div class="d-flex justify-content-between">
                                          <div>
                                              <form action="" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" value="{{ $product->products_id }}" name="id">
                        <input type="hidden" value="{{ $product->title }}" name="name">
                        <input type="hidden" value="{{ $product->price }}" name="price">
                        <input type="hidden" value="{{ $product->image }}"  name="image">
                        <input type="hidden" value="1" name="quantity">
                        <button class="px-4 py-2 text-black bg-blue-800 rounded" style="display:flex; align-items:center; justify-content:center; margin-left: 35%;" href="{{ url($product->product_url) }}">View Product</button>
                      </form> 
                                          </div>
                                      </div>
                                   </div>
                              </div>
                          </div>
                          </div>

              @empty
              <p class="text-center">
                No result found for query <strong>{{ request()->query('search2') }}</strong>
              </p>

              @endforelse
            </div>
  
</div>
  </div>


</div>	

<!-- SCIPTS -->
@section('script')
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
@endsection
</body>




@endsection

