
@extends('sistema.tablas')
@section('contenido')
<br>

@section('campos')
<table class="table table-striped table-bordered table-hover" id="dataTables-example">
<tr><td>Clave</td><td>Grado</td></tr>

	@foreach($grados as $g)
	<tr>
	
	<td>{{$g->id_grado}}</td><td>{{$g->grado}}</td>
	</tr>
	
	@endforeach
</table>
@stop
@section('pie')
   
	@stop