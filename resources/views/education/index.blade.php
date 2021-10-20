@extends('layouts.app')

@section('content')


<h2>Education detail</h2>

@foreach($education as $e)


<div class="card">
    <div class="card-body">
        <h4 class="card-title"> {{$e->degree}} {{$e->school_name}} ({{$e->graduation_start_date}} -
            {{$e->graduation_end_date}})
        </h4>


    </div>
</div>


<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title"> {{$e->degree}}</h5>
    <h6 class="card-subtitle mb-2 text-muted">{{$e->school_name}}</h6>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="card-link">Edit</a>
    <a href="#" class="card-link">Delete</a>
  </div>
</div>

@endforeach



@endsection