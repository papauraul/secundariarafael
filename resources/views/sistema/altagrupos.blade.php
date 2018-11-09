@extends('sistema.tablas')
@section('contenido')
@section('tablas')
<center>
<h1>Alta Grupos</h1>
 <table>

<form action = "{{route('guardagrupo')}}" method = "POST" >                   
{{csrf_field()}}
<tr><td>
@if($errors->first('id_grupo')) 
<i> {{ $errors->first('id_grupo') }} </i> 
@endif	<br>

<span class="input-group-btn">
<div class="form-group input-group">
    
<h4  size="3">Clave<input type = 'text'  name = 'id_grupo' value="{{$idg}}" readonly ='readonly'>
<br>
</td></tr>
</span>
</div>

<tr><td>
@if($errors->first('grupo')) 
<i> {{ $errors->first('grupo') }} </i> 
@endif	<br>
<span class="input-group-btn">
<div class="form-group input-group">

<h4>Grupo<input type = 'text'  name  ='grupo' value="{{old('grupo')}}">
<br>
</td></tr>
</span>
</div>
<tr><td>
<div class="form-group">
<label>Seleccione id de grados</label>
              </td><td>
              <select  class="form-control" name = 'id_grado'>
            @foreach($grados as $g)
			<option value = '{{$g->id_grado}}'>{{$g->grado}}</option>
			@endforeach
                  </select>
<br>
<br>
<tr><td>
<input type = 'submit' class="btn btn-primary" value = 'Guardar'></td><td>
<input type = 'reset' class="btn btn-success" value = 'Cancelar'></td></tr>
</form>
</center>
</table>
@stop