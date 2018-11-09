@extends('sistema.tablas')
@section('contenido')
@section('tablas')
<center>
<h1>Alta Grados</h1>
 <table>


<form action =  "{{route('guardagrado')}}" method ="POST" >                 
{{csrf_field()}}

 <tr><td>
@if($errors->first('id_grado')) 
<i> {{ $errors->first('id_grado') }} </i> 
@endif	<br>
<span class="input-group-btn">
<div class="form-group input-group">
<h4>Clave</h1><input type = 'text' class="form-control" name = 'id_grado' value="{{$idgrado}}" readonly ='readonly'>
</span>
</div>
		</tr></td>
	<br> <br>
	
<tr><td>
@if($errors->first('grado')) 
<i> {{ $errors->first('grado') }} </i> 
@endif	<br>
<span class="input-group-btn">
<div class="form-group input-group">

<h4> Grado<input type = 'text' class="form-control" name  ='grado' value="{{old('grado')}}">
</span>
</div>
		</tr></td>
		<br> <br>
</span>
</div>
<tr><td>
<input type = 'submit' class="btn btn-primary" value = 'Guardar'></td><td>
<input type = 'reset' class="btn btn-success" value = 'Cancelar'></td></tr>
</form>
</center>
</table>
@stop