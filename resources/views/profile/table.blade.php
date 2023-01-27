
<!DOCTYPE html>
<html>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>

</br>
<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>My Account</h2>
            </div>
        </div>
    </div>
</br>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

<div class="w3-container">
    <div class="w3-card-4" style="width:50%;">
    <header class="w3-container w3-purple">
        <h2>USERNAME </h2>
    </header>

    <div class="w3-container">
    {{ Auth::user()->name }}
    </div>
</div>
<br>

<div class="w3-container">
    <div class="w3-card-4" style="width:50%;">
    <header class="w3-container w3-purple">
         <h2>EMAIL </h2>
    </header>

    <div class="w3-container">
    {{ Auth::user()->email }}
    </div>
</div>
<br>

<div class="w3-container">
    <div class="w3-card-4" style="width:50%;">
    <header class="w3-container w3-purple">
         <h2>PASSWORD </h2>
    </header>

    <div class="w3-container">
    ********
    </div>
</div>
<br>

<a class="btn btn-primary" href="{{ route('profile.edit',Auth::user()->id) }}">Edit</a>
<a class="btn btn-primary" href="{{ route('home') }}"> Back</a>

