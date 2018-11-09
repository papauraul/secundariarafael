@extends('sistema.tablas')
@section('contenido')
@section('tablas')
<h1> Reporte de profesor </h1>
<br>

<table class="table table-striped table-bordered table-hover" id="dataTables-example">
<tr><td>Clave</td><td>RFC</td><td>Nombre</td><td>App</td>
<td>Amm</td><td>Sexo</td><td>Edad</td><td>Calle</td><td>Localidad</td>
<td>Telefono</td><td>Archivo</td><td>Municipio</td></tr>

	@foreach($profesors as $pr)
	<tr>
	
	<td>{{$pr->id_profe}}</td><td>{{$pr->rfc}}</td>
	<td>{{$pr->nombre}}</td><td>{{$pr->app}}</td>
	<td>{{$pr->apm}}</td><td>{{$pr->sexo}}</td>
	<td>{{$pr->edad}}</td><td>{{$pr->calle}}</td>
    <td>{{$pr->localidad}}</td><td>{{$pr->telefono}}</td>
    <td><img src="{{asset('archivos/'.$pr->archivo)}}" height="50" width="50"></td>
	<td>{{$pr->id_mun}}</td>
	</tr>
	
	@endforeach
</table>
@stop
@section('pie')
   
	@stop