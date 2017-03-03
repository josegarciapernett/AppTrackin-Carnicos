@extends('master')
@section('content')

	<div class="row">
	  <div class="col-md-12">
	  <h1>Alimentos</h1>
		
	</div>
		
	</div>
	<div class="row">
	<table class="table table-striped">
	<tr>
		<th>No</th>
		<th>Nombre del Alimento</th>
		<th>Temperatura Maxima</th>
		<th>Temperatura Minima</th>
	</tr>


<a href="{{route('alimentos.create')}}" class="btn btn-info pull-right">Ingresar Alimento</a><br/>

		<?php $no=1; ?>	


	@foreach($alimento as $alimentos)
		<tr>
			<td>{{$no++}}</td>
			<td>{{$alimentos->nombre_alimento}}</td>
			<td>{{$alimentos->temp_max}}</td>
			<td>{{$alimentos->temp_min}}</td>
	<td>
		<form class="" action="{{route('alimentos.destroy',$alimentos->id)}}" method="post">
		<input type="hidden" name="_method" value="delete">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<a href="{{route('alimentos.edit',$alimentos->id)}}" class="btn btn-primary">Editar</a>
		<input type="submit"  class="btn btn-danger" onclick="return confirm('Está seguro de borrar estos datos')" name="name" value="delete">
		</form>

	</td>		
				</tr>
		@endforeach

	</table>
		
	</div>

	@stop

	