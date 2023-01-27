<!DOCTYPE html>
<html>
<head>
<style>
.button {
  background-color: purple; /* Green */
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

.grid-container {
    display: grid;
    grid-template-columns: 1fr 1fr;
    grid-gap: 20px;
}
</style>
</head>
<body>

<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>DISCOVER</h2>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <div class="grid-container">

    <div class="grid-child purple">
        <h1>CATEGORY</h1>
        @foreach ($discover as $d)
        <button class="button button1">{{ $d-> product_type }} <a href="{{ route('discover.create') }}"></a></button>
        @endforeach
    </div>

    <div class="grid-child green">
        <h1>BRAND</h1>
        @foreach ($discover as $d)
        <button class="button button1">{{ $d-> vendor }} <a href="{{ route('discover.create') }}"></a></button>
        @endforeach
    </div>
  
</div>
</body>
</html>


