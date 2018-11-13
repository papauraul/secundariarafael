@extends('sistema.tablas')
@section('contenido')
@section('tablas')
<h1> Reporte grados</h1>
<br>


<table class="table table-striped table-bordered table-hover" id="dataTables-example">
<tr><td>Clave</td><td>Grado</td><td>Acción</td></tr>

	@foreach($grados as $g)
	<tr>
	
	<td>{{$g->id_grado}}</td><td>{{$g->grado}}</td>
	<td>	

	<a href="{{URL::action('controller_grados@eliminagrados',['id_grado'=>$g->id_grado])}}">
<span class = "glyphicon glyphicon-trash"></span>

<a href="#"><span class = "glyphicon glyphicon-pencil"></span></a>
	
  </td>
	</tr>
	
	@endforeach
</table>
@stop
