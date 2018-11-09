@extends('sistema.tablas')
@section('contenido')
@section('tablas')
<h1> Reporte de mununicipio </h1>
<br>

<table class="table table-striped table-bordered table-hover" id="dataTables-example">
<tr><td>Clave</td><td>mununicipio</td></tr>
	@foreach($municipios as $mun)
	<tr>
	
	<td>{{$mun->id_mun}}</td><td>{{$mun->municipio}}</td>
	</tr>
	@endforeach
</table>
@stop
@section('pie')
   
	@stop