@extends('layouts.template')
   
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center py-5 area-wise-show">
        <h2 class="text-center"> Edit Profile </h2>
        <br>
    </div>
</div>
   
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
  
    <form action="{{ route('profile.update',$profile->id) }}" method="POST">
        @csrf
        @method('PUT')
   
        <div class="row justify-content-center">
            <input type="hidden" name="id" value="{{ $profile->id }}"> <br/>

            <div class="col-xs-12 col-sm-12 col-md-8">
                <div class="form-group">
                    <strong>Name:</strong>
                    <input type="text" name="name" value="{{ $profile->name }}" class="form-control" placeholder="Name">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-8">
                <div class="form-group">
                    <strong>Email:</strong>
                    <input type="type" class="form-control" name="email" value="{{ $profile->email }}" placeholder="Email"></input>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-8">
                <div class="form-group">
                    <strong>Password:</strong>
                    <input type="password" class="form-control" name="password" placeholder="Password"></input>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
                <a class="btn btn-primary" href="{{ route('profile.index') }}"> Back</a>
            </div>
        </div>

    </form>


@endsection