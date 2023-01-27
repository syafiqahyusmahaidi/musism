@section('content')

<html> 
    <head> 
      
        <!-- CSS style to put div side by side 
        <style type="text/css"> 
        .container {
            width:600px;
            height:190px;
            background-color:green;
            padding-top:20px;
            padding-left:15px;
            padding-right:15px;
        }
        #st-box {
            float:left;
            width:180px;
            height:160px;
            background-color:white;
            border:solid black;
        }
        #nd-box {
            float:left;
            width:180px;
            height:160px;
            background-color:white; 
            border:solid black;
            margin-left:20px;
        }
        #rd-box {
            float:right;
            width:180px;
            height:160px;
            background-color:white;
            border:solid black;
        }
        h1 {
            color:Green;
        }
        </style> -->
    </head> 
      
    <body>
        <center> 
        <h1>ITEM DETAILS</h1>
          
        <div class="container">
            <div id="st-box">
            <img class="card-img-top" src="{{ url($product->image) }}" alt="{{ $product->name }}" width="10" height="10">
            </div>
              
            <div id="nd-box">
            <div class="col-4 mb-2"  style="border: 3px solid black; margin-left:20px;">
            <div class="card" style="background-color: transparent;">
                <div class="card-body" style="text-align:center; font-size: 20px;">
                   <b><h5 class="card-title">{{ $product->title }}</h5></b>
                   <b><h5 class="card-title">RM{{ $product->price }}</h5></b>
                   <p class="card-text">{{ $product->product_type }}</p>
                   <p class="card-text">{{ $product->vendor }}</p>
                </div>
                @csrf
                    <input type="hidden" value="{{ $product->id }}" name="id">
                    <input type="hidden" value="{{ $product->title }}" name="name">
                    <input type="hidden" value="{{ $product->price }}" name="price">
                    <input type="hidden" value="{{ $product->product_type }}" name="type">
                    <input type="hidden" value="{{ $product->vendor }}" name="vendor">
                    <input type="hidden" value="{{ $product->image }}"  name="image">

            </div>
              
        </div>
        </center>
    </body>
</html>                    
@endsection
