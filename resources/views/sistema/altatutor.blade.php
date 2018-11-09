@extends('sistema.tablas')
@section('contenido')
@section('tablas')
<center>
<h1>Alta Tutor</h1>
 <table>

<th>Alta Tutor</th>

<form action =  "{{route('guardatutor')}}" method ="POST" enctype="multipart/form-data">                 
{{csrf_field()}}

@if($errors->first('id_tut')) 
<i> {{ $errors->first('id_tut') }} </i> 
@endif	<br>
        
Clave<input type = 'text' name = 'id_tut' value="{{$idtut}}" readonly ='readonly'>

<br>
@if($errors->first('nom_tut')) 
<i> {{ $errors->first('nom_tut') }} </i> 
@endif	<br>

nom_tut<input type = 'text' name  ='nom_tut' value="{{old('nom_tut')}}">
<br>

<br>
@if($errors->first('app_tut')) 
<i> {{ $errors->first('app_tut') }} </i> 
@endif	<br>

app_tut<input type = 'text' name  ='app_tut' value="{{old('app_tut')}}">
<br>

<br>
@if($errors->first('apm_tut')) 
<i> {{ $errors->first('apm_tut') }} </i> 
@endif	<br>

apm_tut<input type = 'text' name  ='apm_tut' value="{{old('apm_tut')}}">
<br>

<br>
@if($errors->first('edad')) 
<i> {{ $errors->first('edad') }} </i> 
@endif	<br>

edad<input type = 'text' name  ='edad' value="{{old('edad')}}">
<br>

<br>
Sexo<input type="radio" name="sexo" value="F" CHECKED>F
<input type="radio" name="sexo" value="M">M
<br>

<br>
@if($errors->first('parentesco')) 
<i> {{ $errors->first('parentesco') }} </i> 
@endif	<br>

parentesco<input type = 'text' name  ='parentesco' value="{{old('parentesco')}}">
<br>

<br>
@if($errors->first('calle')) 
<i> {{ $errors->first('calle') }} </i> 
@endif	<br>

calle<input type = 'text' name  ='calle' value="{{old('calle')}}">
<br>

<br>
@if($errors->first('localidad')) 
<i> {{ $errors->first('localidad') }} </i> 
@endif	<br>

localidad<input type = 'text' name  ='localidad' value="{{old('localidad')}}">
<br>

<br>
@if($errors->first('telefono')) 
<i> {{ $errors->first('telefono') }} </i> 
@endif	<br>

telefono<input type = 'text' name  ='telefono' value="{{old('telefono')}}">
<br>

<br>
@if($errors->first('archivo')) 
<i> {{ $errors->first('archivo') }} </i> 
@endif	<br>

Seleccione foto<input type='file' name ='archivo'>
<br>

<br>
seleccione id de alumno <select name = 'id_alum'>
                        @foreach($alumnos as $alum)
						<option value ="{{$alum->id_alum}}" >{{$alum->nom_al}}</option>
                        @endforeach
						</select>
<br>
seleccione id de nom_tut <select name = 'id_mun'>
                        @foreach($municipios as $mun)
						<option value ="{{$mun->id_mun}}"> {{$mun->municipio}}</option>
                        @endforeach
						</select>
<br>					
<input type = 'submit' value = 'Guardar'>
</form>
</center>
</table>
@stop