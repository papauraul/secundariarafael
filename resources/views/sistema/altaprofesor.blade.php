@extends('sistema.tablas')
@section('contenido')
@section('tablas')
<center>
 <table>
<div class="contenedor">
<h1>Alta Profesor</h1>


<form action =  "{{route('guardaprofesor')}}" method ="POST" enctype="multipart/form-data">                 
{{csrf_field()}}

<!--<input type="hidden" name="_token" value="8FYyOYdjGSRQnl8G0dcTMZSrduj47BccdM9MnAAi">
--->
<tr><td>
@if($errors->first('id_profe')) 
<i> {{ $errors->first('id_profe') }} </i> 
@endif
        
Clave<input type = 'text' class="form-control" name = 'id_profe' value="{{$idprof}}" readonly ='readonly'>
</tr></td>
<br>

<tr><td>
<br>
@if($errors->first('rfc')) 
<i> {{ $errors->first('rfc') }} </i> 
@endif

RFC<input type = 'text' class="form-control" name  ='rfc' value="{{old('rfc')}}">

<br>
@if($errors->first('nombre')) 
<i> {{ $errors->first('nombre') }} </i> 
@endif

Nombre<input type = 'text' class="form-control" name  ='nombre' value="{{old('nombre')}}">

<br>
@if($errors->first('app')) 
<i> {{ $errors->first('app') }} </i> 
@endif

Apellido Paterno<input type = 'text' class="form-control" name  ='app' value="{{old('app')}}">

<br>
@if($errors->first('apm')) 
<i> {{ $errors->first('apm') }} </i> 
@endif

Apellido Materno<input type = 'text' class="form-control" name  ='apm' value="{{old('apm')}}">
<br>

Sexo<input type="radio" name="sexo" value="F" CHECKED>F
<input type="radio" name="sexo" value="M">M
<br>
<br>
@if($errors->first('edad')) 
<i> {{ $errors->first('edad') }} </i> 
@endif

Edad<input type = 'text' class="form-control" name  ='edad' value="{{old('edad')}}">

<br>
@if($errors->first('calle')) 
<i> {{ $errors->first('calle') }} </i> 
@endif

Calle<input type = 'text' class="form-control" name  ='calle' value="{{old('calle')}}">

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
@endif

<br>
Seleccione foto<input type='file' name ='archivo'>
<br>
seleccione Municipio <select name = 'id_mun'>
                        @foreach($municipios as $mun)
						<option value ="{{$mun->id_mun}}" >{{$mun->municipio}}</option>
                        @endforeach
						</select>
<br><br><br>			
<tr><td>
<input type = 'submit' class="btn btn-primary" value = 'Guardar'></td><td>
<input type = 'reset' class="btn btn-success" value = 'Cancelar'></td></tr>

</div>
</form>
</center>
</table>
@stop