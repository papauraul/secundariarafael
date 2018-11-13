@extends('sistema.tablas')
@section('contenido')
@section('tablas')
<h1> Reporte de ciclo </h1>
<br>
<div class="tab">
	<table border="1" >
<thead>

<table class="table table-striped table-bordered table-hover" id="dataTables-example">
<tr><td>Clave</td><td>Ciclo Escolar</td><td>Generación</td><td>Acción</tr>

</thead>

	@foreach($cicloescolars as $cl)
	<tr>
	
	<td>{{$cl->id_ce}}</td><td>{{$cl->ciclo_escolar}}</td>
	<td>{{$cl->id_gen}}</td>
		<td>	
		
<a href="#">
<span class = "glyphicon glyphicon-trash"></span>

<a href="#"><span class = "glyphicon glyphicon-pencil"></span></a>

  </td>
	</tr>
	@endforeach
</table>
@stop
