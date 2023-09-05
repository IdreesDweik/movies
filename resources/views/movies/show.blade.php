@extends('movies.layout')
@section('content')
 
 
<div class="card">
  <div class="card-header">Movies Page</div>
  <div class="card-body">
   
 
        <div class="card-body">
        <h5 class="card-title">Movie name : {{ $students->movie_name }}</h5>
        <p class="card-text">Movie description : {{ $students->movie_description }}</p>
        <p class="card-text">Movie gener : {{ $students->movie_gener }}</p>
  </div>
       
    </hr>
  
  </div>
</div>