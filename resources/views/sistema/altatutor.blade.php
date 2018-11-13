@extends('sistema.tablas')
@section('contenido')
@section('tablas')
<center>
 <table>
<div class="contenedor">
<h1>Alta Tutor</h1>

<form action =  "{{route('guardatutor')}}" method ="POST" enctype="multipart/form-data">                 
{{csrf_field()}}

<!--<input type="hidden" name="_token" value="8FYyOYdjGSRQnl8G0dcTMZSrduj47BccdM9MnAAi">
-->
<tr><td>
@if($errors->first('id_tut')) 
<i> {{ $errors->first('id_tut') }} </i> 
@endif	

Clave<input type = 'text' class="form-control" name = 'id_tut' value="{{$idtut}}" readonly ='readonly'>
</tr></td>
<br>
<tr><td>
<br>
@if($errors->first('nom_tut')) 
<i> {{ $errors->first('nom_tut') }} </i> 
@endif

Nombre<input type = 'text' class="form-control" name  ='nom_tut' value="{{old('nom_tut')}}">

<br>
@if($errors->first('app_tut')) 
<i> {{ $errors->first('app_tut') }} </i> 
@endif

Apellido Paterno<input type = 'text' class="form-control" name  ='app_tut' value="{{old('app_tut')}}">

<br>
@if($errors->first('apm_tut')) 
<i> {{ $errors->first('apm_tut') }} </i> 
@endif

Apellido Materno<input type = 'text' class="form-control" name  ='apm_tut' value="{{old('apm_tut')}}">

<br>
@if($errors->first('edad')) 
<i> {{ $errors->first('edad') }} </i> 
@endif

Edad<input type = 'text' class="form-control" name  ='edad' value="{{old('edad')}}">

<br>
Sexo<input type="radio" name="sexo" value="F" CHECKED>F
<input type="radio" name="sexo" value="M">M
<br>
<br>
@if($errors->first('parentesco')) 
<i> {{ $errors->first('parentesco') }} </i> 
@endif

Parentesco<input type = 'text' class="form-control" name  ='parentesco' value="{{old('parentesco')}}">

<br>
@if($errors->first('calle')) 
<i> {{ $errors->first('calle') }} </i> 
@endif	

Calle<input type = 'text' name  ='calle' value="{{old('calle')}}">
<br>

<br>
@if($errors->first('localidad')) 
<i> {{ $errors->first('localidad') }} </i> 
@endif

Localidad<input type = 'text' class="form-control" name  ='localidad' value="{{old('localidad')}}">

<br>
@if($errors->first('telefono')) 
<i> {{ $errors->first('telefono') }} </i> 
@endif

Telefono<input type = 'text' class="form-control" name  ='telefono' value="{{old('telefono')}}">

<br>
@if($errors->first('archivo')) 
<i> {{ $errors->first('archivo') }} </i> 
@endif	<br>

Seleccione foto<input type='file' name ='archivo'>
<br>

Seleccione Alumno <select name = 'id_alum'>
                        @foreach($alumnos as $alum)
						<option value ="{{$alum->id_alum}}" >{{$alum->nom_al}}</option>
                        @endforeach
						</select>
<br>
Seleccione Municipio<select name = 'id_mun'>
                        @foreach($municipios as $mun)
						<option value ="{{$mun->id_mun}}"> {{$mun->municipio}}</option>
                        @endforeach
						</select>
<br><br><br>		
<input type = 'submit' class="btn btn-primary" value = 'Guardar'>

<input type = 'reset' class="btn btn-success" value = 'Cancelar'>

</div>
</form>
</center>
</table>
@stop