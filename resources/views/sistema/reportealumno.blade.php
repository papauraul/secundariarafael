@extends('sistema.tablas')
@section('contenido')
@section('tablas')

<h1> Reporte alumnos</h1>
<br>
<div class="tab">

<thead>

<table border="1" class="table table-striped table-bordered table-hover" id="dataTables-example">
<tr><td>Clave</td><td>Nombre</td><td>App</td>
<td>Amm</td><td>Sexo</td><td>Calle</td><td>Localidad</td>
<td>Archivo</td><td>Codigo</td><td>Generacion</td>
<td>Grado</td><td>Municipio</td><td>Grupo</td><td>Acción</td>
</thead></tr>
	@foreach($alumnos as $al)
	<tr>
	
	<td>{{$al->id_alum}}</td><td>{{$al->nom_al}}</td>
	<td>{{$al->app_al}}</td><td>{{$al->apm_al}}</td>
	<td>{{$al->sexo}}</td><td>{{$al->calle}}</td>
	<td>{{$al->localidad}}</td><td><img src="{{asset('archivos/'.$al->archivo)}}" height="50" width="50"></td>
	<td>{{$al->codigo_al}}</td><td>{{$al->id_gen}}</td>
	<td>{{$al->id_grado}}</td><td>{{$al->mun}}</td>
	<td>{{$al->id_grupo}}</td>
	<td>	
	
<a href="_#">
<span class = "glyphicon glyphicon-trash"></span>

<a href="#"><span class = "glyphicon glyphicon-pencil"></span></a>
  </td>
	</tr>
	
	@endforeach
</table>
</div>
@stop




