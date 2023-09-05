@extends('movies.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Movies Page</div>
  <div class="card-body">
      
      <form action="{{ url('movie') }}" method="post">
        {!! csrf_field() !!}
        <label>Movie name</label></br>
        <input type="text" name="movie_name" id="name" class="form-control"></br>
        <label>Movie description</label></br>
        <input type="textarea" name="movie_description" id="description" class="form-control"></br>
        <label>Movie gener</label></br>
        <input type="text" name="movie_gener" id="gener" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop