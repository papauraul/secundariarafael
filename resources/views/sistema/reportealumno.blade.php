

<html>
<body>
<h1> Reporte de alumno </h1>
<br>
<table border= 1>
<tr><td>Clave</td><td>Nombre</td><td>App</td>
<td>Amm</td><td>sexo</td><td>calle</td><td>localidad</td>
<td>archivo</td><td>codigo</td><td>id generacion</td>
<td>id grado</td><td>id municipio</td><td>id grupo</td></tr>
	@foreach($alumnos as $al)
	<tr>
	
	<td>{{$al->id_alum}}</td><td>{{$al->nom_al}}</td>
	<td>{{$al->app_al}}</td><td>{{$al->apm_al}}</td>
	<td>{{$al->sexo}}</td><td>{{$al->calle}}</td>
	<td>{{$al->localidad}}</td><td>{{$al->archivo}}</td>
	<td>{{$al->codigo_al}}</td><td>{{$al->id_gen}}</td>
	<td>{{$al->id_grado}}</td><td>{{$al->mun}}</td>
	<td>{{$al->id_grupo}}</td>
	<td>
	
	@endforeach
</table>
     </body>
	 </html>



