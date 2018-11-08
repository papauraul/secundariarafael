@extends('sistema.tablas')
@section('contenido')
<h1> Reporte de tutor </h1>
<br>
@section('campos')
<table class="table table-striped table-bordered table-hover" id="dataTables-example">
<tr><td>Clave</td><td>Nombre</td><td>App</td>
<td>Amm</td><td>Edad</td><td>Sexo</td><td>Parentesco</td><td>Calle</td><td>Localidad</td>
<td>Telefono</td><td>Archivo</td><td>Alumno</td><td>Municipio</td></tr>

	@foreach($tutors as $tut)
	<tr>
	
	<td>{{$tut->id_tut}}</td><td>{{$tut->nom_tut}}</td>
	<td>{{$tut->app_tut}}</td><td>{{$tut->apm_tut}}</td>
	<td>{{$tut->edad}}</td><td>{{$tut->sexo}}</td>
	<td>{{$tut->parentesco}}</td><td>{{$tut->calle}}</td>
    <td>{{$tut->localidad}}</td><td>{{$tut->telefono}}</td>
    <td><img src="{{asset('archivos/'.$tut->archivo)}}" height="50" width="50"></td>
    <td>{{$tut->id_alum}}</td><td>{{$tut->id_mun}}</td>
	</tr>
	
	@endforeach
</table>
@stop
@section('pie')
   
	@stop