
@extends('sistema.tablas')
@section('contenido')
<br>

@section('campos')
<table class="table table-striped table-bordered table-hover" id="dataTables-example">
<tr><td>Clave</td><td>Grupo</td><td>Grado</td></tr>

	@foreach($grupos as $gr)
	<tr>
	
	<td>{{$gr->id_profe}}</td><td>{{$gr->grupo}}</td>
	<td>{{$gr->id_grado}}</td>
	</tr>
	
	@endforeach
</table>
@stop
@section('pie')
   
	@stop