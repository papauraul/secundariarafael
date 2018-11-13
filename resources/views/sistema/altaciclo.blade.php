@extends('sistema.tablas')
@section('contenido')
@section('tablas')
<center>
 <table>
<div class="contenedor">
<h1>Alta Ciclo</h1>

<form action = "{{route('guardaciclo')}}" method = "POST" >                   
{{csrf_field()}}
        
		
<!--<input type="hidden" name="_token" value="8FYyOYdjGSRQnl8G0dcTMZSrduj47BccdM9MnAAi">
-->	
	<tr><td>	
@if($errors->first('id_ce')) 
<i> {{ $errors->first('id_ce') }} </i> 
@endif	

<h4>Clave</h4></td><td><input type = 'text'  class="form-control" name = 'id_ce' value="{{$idce}}" readonly ='readonly'>

		</tr></td>
	<br> <br>
<tr><td>
@if($errors->first('ciclo_escolar')) 
<i> {{ $errors->first('ciclo_escolar') }} </i> 
@endif	

<h4>Ciclo_Escolar</h4></td><td><input type = 'text' class="form-control" name  ='ciclo_escolar' value="{{old('ciclo_escolar')}}">

		</tr></td>
		<br> <br>
</div>
<tr><td>

                                            <label>Seleccione id de generacion</label>
                                            </td><td>
<select class="form-control" name = 'id_gen'>
            @foreach($generacions as $gen)
			<option value = '{{$gen->id_gen}}'>{{$gen->generacion}}</option>
			@endforeach
                  </select>
</td></tr>
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
