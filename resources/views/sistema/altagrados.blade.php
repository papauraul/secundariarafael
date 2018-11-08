@extends('sistema.alta')
@section('contenido')
@section('altas')
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
    
<h4  size="3">Clave</h1><input type = 'text' class="form-control" name = 'id_grado' value="{{$idgrado}}" readonly ='readonly'>
<br>
</td></tr>
</span>
</div>

<tr><td>
@if($errors->first('grado')) 
<i> {{ $errors->first('grado') }} </i> 
@endif	<br>

<span class="input-group-btn">
<div class="form-group input-group">
<h4> grado<input type = 'text' class="form-control" name  ='grado' value="{{old('grado')}}">
<br>
<br></td></tr>
</span>
</div>
<tr><td>
<input type = 'submit' class="btn btn-primary" value = 'Guardar'></td><td>
<input type = 'reset' class="btn btn-success" value = 'Cancelar'></td></tr>
</form>
</center>
</table>
@stop