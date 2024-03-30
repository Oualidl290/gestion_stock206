@extends('layout')
@section('content')
 
<div class="card">
  <div class="card-header">Edit Page</div>
  <div class="card-body">
      
      <form action="{{ url('sousfamilles/' .$sousfamilles->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$sousfamilles->id}}" id="id" />
        <label>SousFamille </label></br>
        <input type="text" name="sousfamilles" id="sousfamilles" value="{{$sousfamilles->name}}" class="form-control"></br>
        
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop
