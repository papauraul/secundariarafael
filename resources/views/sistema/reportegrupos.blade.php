@extends('sistema.tablas')
@section('contenido')
@section('tablas')
<h1> Reporte grupos</h1>
<br>

<table class="table table-striped table-bordered table-hover" id="dataTables-example">
<tr><td>Clave</td><td>Grupo</td><td>Grado</td><td>Acción</td></tr>

	@foreach($grupos as $gr)
	<tr>
	
	<td>{{$gr->id_profe}}</td><td>{{$gr->grupo}}</td>
	<td>{{$gr->id_grado}}</td>
	<td>	

	<a href="#">
<span class = "glyphicon glyphicon-trash"></span>

<a href="#"><span class = "glyphicon glyphicon-pencil"></span></a>
	
  </td>
	</tr>
	
	@endforeach
</table>
@stop
@section('pie')
   
	@stop