@extends('layout')
@section('content')
 
<div class="card">
  <div class="card-header">sousfamilles Page</div>
  <div class="card-body">
      
      <form action="{{ url('sousfamilles') }}" method="post">
        {!! csrf_field() !!}
        <label>sousfamilles</label></br>
        <input type="text" name="sousfamilles" id="sousfamilles" class="form-control"></br>
        
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop
