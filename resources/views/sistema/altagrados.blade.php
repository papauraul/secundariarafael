@extends('sistema.tablas')
@section('contenido')
@section('tablas')
<center>
<table>
<div class="contenedor">
<h1>Alta Grados</h1>
 
<form action =  "{{route('guardagrado')}}" method ="POST" >                 
{{csrf_field()}}

<!--<input type="hidden" name="_token" value="8FYyOYdjGSRQnl8G0dcTMZSrduj47BccdM9MnAAi">
	--->
 <tr><td>
@if($errors->first('id_grado')) 
<i> {{ $errors->first('id_grado') }} </i> 
@endif	<br>

<h4>Clave</h1><input type = 'text' class="form-control" name = 'id_grado' value="{{$id_grado}}" readonly ='readonly'>
		</tr></td>
	<br> <br>
	
<tr><td>
@if($errors->first('grado')) 
<i> {{ $errors->first('grado') }} </i> 
@endif	<br>

<h4> Grado<input type = 'text' class="form-control" name  ='grado' value="{{old('grado')}}">
		</tr></td>
		<br> <br> <br>
<tr><td>
<input type = 'submit' class="btn btn-primary" value = 'Guardar'></td><td>
<input type = 'reset' class="btn btn-success" value = 'Cancelar'></td></tr>

</div>
</form>
</center>
</table>
@stop