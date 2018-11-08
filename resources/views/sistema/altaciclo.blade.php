@extends('sistema.alta')
@section('contenido')
@section('altas')
<center>
<h1>Alta Ciclo</h1>
 <table>

<form action = "{{route('guardaciclo')}}" method = "POST" >                   
{{csrf_field()}}
        


@if($errors->first('id_ce')) 
<i> {{ $errors->first('id_ce') }} </i> 
@endif	
	
<h1  size="3">Clave</h1></td><td><input type = 'text'  class="form-control" name = 'id_ce' value="{{$idce}}" readonly ='readonly' class="form-control">

<tr><td>
@if($errors->first('ciclo_escolar')) 
<i> {{ $errors->first('ciclo_escolar') }} </i> 
@endif	
<span class="input-group-btn">
<div class="form-group input-group">

<h1>Ciclo Escolar</h1></td><td><input type = 'text' class="form-control" name  ='ciclo_escolar' value="{{old('ciclo_escolar')}}">
</td></tr>
</span>
</div>
<tr><td>
<div class="form-group">
                                            <label>Seleccione id de generacion</label>
                                            </td><td>
<select class="form-control" name = 'id_gen'>
            @foreach($generacions as $gen)
			<option value = '{{$gen->id_gen}}'>{{$gen->generacion}}</option>
			@endforeach
                  </select>
</td></tr>
 </div>
 <br>
 <br>
 <tr><td>
<input type = 'submit' class="btn btn-primary" value = 'Guardar'></td><td>
<input type = 'reset' class="btn btn-success" value = 'Cancelar'></td></tr>
</form>
</center>
</table>
@stop
