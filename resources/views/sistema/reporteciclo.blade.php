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
<a href="{{URL::action('controller_cicloescolars@eliminaciclo',['id_ce'=>$cl->id_ce])}}">
<button type="button" class="btn btn-default btn-sm">
          <span class="glyphicon glyphicon-trash"></span>  
        </button>
		<a href="#"><button type="button" class="btn btn-default btn-sm">
          <span class="glyphicon glyphicon-edit"></span> Edit
        </button></a>
</a>
  </button>
  </td>
	</tr>
	@endforeach
</table>
@stop
