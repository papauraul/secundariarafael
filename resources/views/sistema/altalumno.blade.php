@extends('sistema.tablas')
@section('contenido')
@section('tablas')
<center>
 <table>
 <div class="contenedor">
<h1>Alta Alumno</h1>

<form action = "{{route('guardalumno')}}" method = "POST" enctype="multipart/form-data">                   
{{csrf_field()}}

<!--<input type="hidden" name="_token" value="8FYyOYdjGSRQnl8G0dcTMZSrduj47BccdM9MnAAi">
-->
<tr><td>
@if($errors->first('id_alum')) 
<i> {{ $errors->first('id_alum') }} </i> 
@endif

Clave<input type = 'text' class="form-control" name = 'id_alum' value="{{$ida}}" readonly ='readonly'>

</td></tr>

<tr><td>
<br>
@if($errors->first('nom_al')) 
<i> {{ $errors->first('nom_al') }} </i> 
@endif

Nombre<input type = 'text' class="form-control" name  ='nom_al' value="{{old('nom_al')}}"> 
</td></tr>

<tr><td>
<br>
@if($errors->first('app_al')) 
<i> {{ $errors->first('app_al') }} </i> 
@endif

Apellido Paterno<input type = 'text' class="form-control" name  ='app_al' value="{{old('app_al')}}">
</td></tr>

<tr><td>
<br>
@if($errors->first('apm_al')) 
<i> {{ $errors->first('apm_al') }} </i> 
@endif

Apellido Materno<input type = 'text' class="form-control" name  ='apm_al' value="{{old('apm_al')}}">

<br>
Sexo<input type="radio" name="sexo" value="F" CHECKED>F
<input type="radio" name="sexo" value="M">M
<br>
<br>
@if($errors->first('calle')) 
<i> {{ $errors->first('calle') }} </i> 
@endif

Calle<input type = 'text' class="form-control" name ='calle' value="{{old('calle')}}">
<br>
@if($errors->first('localidad')) 
<i> {{ $errors->first('localidad') }} </i> 
@endif

Localidad<input type = 'text' class="form-control" name  ='localidad' value="{{old('localidad')}}">
<br>
@if($errors->first('archivo')) 
<i> {{ $errors->first('archivo') }} </i> 
@endif
Seleccione foto<input type='file' name ='archivo'>

<br>
@if($errors->first('codigo_al')) 
<i> {{ $errors->first('codigo_al') }} </i> 
@endif

Codigo Alumno<input type = 'text' class="form-control" name  ='codigo_al' value="{{old('codigo_al')}}">
<br>
Seleccione id de generacion<select name = 'id_gen'>
            @foreach($generacions as $gen)
			<option value = '{{$gen->id_gen}}'>{{$gen->generacion}}</option>
			@endforeach
                  </select>

<br> <br>
Seleccione id de grados<select name = 'id_grado'>
            @foreach($grados as $g)
			<option value = '{{$g->id_grado}}'>{{$g->grado}}</option>
			@endforeach
                  </select>


	
<br> <br>
Seleccione id de municipio<select name = 'id_mun'>
            @foreach($municipios as $m)
			<option value = '{{$m->id_mun}}'>{{$m->municipio}}</option>
			@endforeach
                  </select>
				  
				  <br>  <br>
Seleccione id de grupos<select name = 'id_grupo'>
            @foreach($grupos as $gr)
			<option value = '{{$gr->id_grupo}}'>{{$gr->grupo}}</option>
			@endforeach
                  </select>	
				  <br>
<br>
<br>
<tr><td>
<input type = 'submit' class="btn btn-primary" value = 'Guardar'></td><td>
<input type = 'reset' class="btn btn-success" value = 'Cancelar'></td></tr>

</div>
</form>
</center>
</table>
@stop