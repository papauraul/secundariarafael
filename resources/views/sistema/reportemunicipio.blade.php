@extends('sistema.tablas')
@section('contenido')
@section('tablas')
<h1> Reporte de mununicipio </h1>
<br>

<table class="table table-striped table-bordered table-hover" id="dataTables-example">
<tr><td>Clave</td><td>Municipio</td><td>Acción</td></tr>
	@foreach($municipios as $mun)
	<tr>
	
	<td>{{$mun->id_mun}}</td><td>{{$mun->municipio}}</td>
	<td>	

	<!--Eliminación-->
	<a href="{{URL::action('controller_municipios@eliminamunicipio',['id_mun'=>$mun->id_mun])}}"><span class = "glyphicon glyphicon-trash"></span>
    <!--Modificar-->
    <a href="#"><span class = "glyphicon glyphicon-pencil"></span></a>
	
  </td>
	</tr>
	@endforeach
</table>
@stop
