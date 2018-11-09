@extends('sistema.tablas')
@section('contenido')
@section('tablas')
<h1> Reporte de ciclo </h1>
<br>

<table class="table table-striped table-bordered table-hover" id="dataTables-example">
<tr><td>Clave</td><td>Ciclo Escolar</td><td>Generacion</td></tr>

	@foreach($cicloescolars as $cl)
	<tr>
	
	<td>{{$cl->id_ce}}</td><td>{{$cl->ciclo_escolar}}</td>
	<td>{{$cl->id_gen}}</td>
	</tr>
	
	@endforeach
</table>
@stop
@stop
@section('pie')
   
	@stop