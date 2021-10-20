@extends('layouts.app')

@section('content')
<div class ="container">
<h2>Tell us something about you</h2>

<div>
  @if(session()->has('errors'))

  @foreach($errors->all() as $e)

  <p>{{$e}}</p>
  @endforeach

@endif


</div>

<form action="/user-detail" method = "POST">
@csrf
  <label for="name"> Name:</label><br>
  <input type="text" id="name" name="name" value=""><br>

  <label for="email">Email:</label><br>
  <input type="text" id="" name="email" value=""><br><br>

  <label for="email">Phone:</label><br>
  <input type="text" id="" name="phone" value=""><br><br>

  <label for="email">Gender:</label><br>
  <input type="text" id="" name="gender" value=""><br><br>

  <input type="submit" value="Submit">
</form>
</div>

@endsection