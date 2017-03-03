@extends('master')
@section('content')

	<div class="row">
	  <div class="col-md-12">
	  <h1>Editar Alimeno</h1>
		
	</div>
		
	</div>


	<div class="row">
		

<form class="" action="{{route('alimentos.update',$alimento->id)}}" method="post">
	  	
	  	<input name="_method" type="hidden" value="PATCH"> 
	  	{{csrf_field()}}

	  	<div class="form-group{{ ($errors->has('nombre_alimento')) ? $errors->first('nombre_alimento') : '' }}">
	  		<input type="text" name="title" class="form-control" placeholder="Ingrese el Nombre de Alimento" value="{{$alimento->nombre_alimento}}">
	  		{!! $errors->first('title','<p class="help-block">:message</p>') !!}
	  	</div>	

	  		  	<div class="form-group{{ ($errors->has('temp_max')) ? $errors->first('temp_max') : '' }}">
	  		<input type="text" name="title" class="form-control" placeholder="Ingrese la temperatura maxima" value="{{$alimento->temp_max}}">
	  		{!! $errors->first('title','<p class="help-block">:message</p>') !!}
	  	</div>	

	  	<div class="form-group{{ ($errors->has('temp_min')) ? $errors->first('temp_min') : '' }}">
	  		<input type="text" name="title" class="form-control" placeholder="Ingrese la temperatura minima" value="{{$alimento->temp_min}}">
	  		{!! $errors->first('title','<p class="help-block">:message</p>') !!}
	  	</div>	

	  	<div class="form-group">
	  		
	  		<input type="submit" class="btn btn-primary" value="Guardar">

	  	</div>

	  	</form>



	</div>



	@stop