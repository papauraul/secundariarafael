

<html>
<body>
<h1> Reporte de mununicipio </h1>
<br>
<table border= 1>
<tr><td>Clave</td><td>mununicipio</td>
<td>Operaciones</td></tr>
	@foreach($municipios as $mun)
	<tr>
	
	<td>{{$mun->id_mun}}</td><td>{{$mun->municipio}}</td>
	<td>
	<!--<a href="{{URL::action('controller_municipios@borramunicipio',['id_mun'=>$mun->id_mun])}}">-->
	Elimuninar</a>
	<!--<a href="{{URL::action('controller_municipios@munodificamunicipio',['id_mun'=>$mun->id_mun])}}">-->
	munodificar</a>
	</td></tr>
	@endforeach
</table>
     </body>
	 </html>



