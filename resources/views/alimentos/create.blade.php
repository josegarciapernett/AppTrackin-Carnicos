@extends('master')
@section('content')

<div class="row">
	<form class="form-horizontal" role="form" method="POST" action="{{ url('alimentos') }}">
{{ csrf_field() }}
  <div class="form-group">
    <label for="nombre_alimento" class="col-sm-2 control-label">Nombre Alimento</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="nombre_alimento" placeholder="Nombre de Alimento">
   
        @if($errors->has('nombre_alimento'))        
        <span style="color:red;">{{ $errors->first('nombre_alimento') }}<\span>
        @endif

    </div>
  </div>

 <div class="form-group">
    <label for="temp_max" class="col-sm-2 control-label">Temperatura Maxima</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="temp_max" placeholder="Temperatura Maxima">
        @if($errors->has('temp_max'))        
        <span style="color:red;">{{ $errors->first('temp_max') }}<\span>
        @endif
    </div>
  </div>

 <div class="form-group">
    <label for="temp_min" class="col-sm-2 control-label">Temperatura Minima</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="temp_min" placeholder="Temperatura Minima">
        @if($errors->has('temp_min'))        
        <span style="color:red;">{{ $errors->first('temp_min') }}<\span>
        @endif
    </div>
  </div>


  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-primary">Guardad Datos</button>
    </div>
  </div>
</form>
	  </div>
	  @stop

