@extends('adminSidebar')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2><b>PRODUCTS</b></h2>
            </div>
            
        </div>
    </div>
    <br>
    <br>

    @if ($message = Session::get('success'))
        <div class="alert alert-success"></div>
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>NAME</th>
            <th>PRICE</th>
            <th>Action</th>
        </tr>
        @foreach ($adminmanageproduct as $product)
        <tr>
            <td>{{ $product->title }}</td>
            <td>{{ $product->price }}</td>
            <td>
                <form action="{{ route('adminmanageproduct.destroy',$product->id) }}" method="POST">
    
                    <a class="btn btn-primary" href="{{ route('adminmanageproduct.edit',$product->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
      @endforeach
      {!! $adminmanageproduct->links() !!}

    </table>
    
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('adminHome') }}" style="width:20%; text-align:center; margin-top: 5%;"> Back</a>
            </div>
            <br>
            <br>
            <br>
  

    
      
@endsection