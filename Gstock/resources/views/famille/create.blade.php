@extends('layout')
@section('content')
 
<div class="card">
  <div class="card-header">familles Page</div>
  <div class="card-body">
      
      <form action="{{ url('familles') }}" method="post">
        {!! csrf_field() !!}
        <label>familles</label></br>
        <input type="text" name="familles" id="familles" class="form-control"></br>
        
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop
