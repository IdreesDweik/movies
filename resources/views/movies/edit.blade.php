@extends('movies.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Contactus Page</div>
  <div class="card-body">
      
      <form action="{{ url('movie/' .$students->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$students->id}}" id="id" />
        <label>Movie name</label></br>
        <input type="text" name="movie_name" id="name" value="{{$students->movie_name}}" class="form-control"></br>
        <label>Movie description</label></br>
        <input type="text" name="movie_description" id="description" value="{{$students->movie_description}}" class="form-control"></br>
        <label>Movie gener</label></br>
        <input type="text" name="movie_gener" id="gener" value="{{$students->movie_gener}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop