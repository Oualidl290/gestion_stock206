@extends('layout')
@section('content')
 
<div class="card">
  <div class="card-header">Edit Page</div>
  <div class="card-body">
      
      <form action="{{ url('familles/' .$familles->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$familles->id}}" id="id" />
        <label>Famille </label></br>
        <input type="text" name="familles" id="familles" value="{{$familles->name}}" class="form-control"></br>
        
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop