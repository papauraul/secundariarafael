@extends('sistema.tablas')
@section('contenido')
@section('tablas')
<center>
 <table>
<div class="contenedor">
<h1>Alta Grupos</h1>

<form action = "{{route('guardagrupo')}}" method = "POST" >                   
{{csrf_field()}}

<!--<input type="hidden" name="_token" value="8FYyOYdjGSRQnl8G0dcTMZSrduj47BccdM9MnAAi">
-->
<tr><td>
@if($errors->first('id_grupo')) 
<i> {{ $errors->first('id_grupo') }} </i> 
@endif
    
Clave<input type = 'text' class="form-control" name = 'id_grupo' value="{{$idg}}" readonly ='readonly'>

</td></tr>

<tr><td>
@if($errors->first('grupo')) 
<i> {{ $errors->first('grupo') }} </i> 
@endif

Grupo<input type = 'text' class="form-control"  name  ='grupo' value="{{old('grupo')}}">
<br>
</td></tr>

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

</div>
</form>
</center>
</table>
@stop