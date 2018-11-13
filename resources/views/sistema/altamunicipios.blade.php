@extends('sistema.tablas')
@section('contenido')
@section('tablas')
<center>
 <table>
<div class="contenedor">
<h1>Alta Municipio</h1>


<form action =  "{{route('guardamunicipio')}}" method ="POST" >                 
{{csrf_field()}}

<!--<input type="hidden" name="_token" value="8FYyOYdjGSRQnl8G0dcTMZSrduj47BccdM9MnAAi">-->

<tr><td>
@if($errors->first('id_mun')) 
<i> {{ $errors->first('id_mun') }} </i> 
@endif
        
Clave<input type = 'text' class="form-control" name = 'id_mun' value="{{$idmun}}" readonly ='readonly'>
</tr></td>

<tr><td>
@if($errors->first('municipio')) 
<i> {{ $errors->first('municipio') }} </i> 
@endif	<br>

Municipio<input type = 'text' class="form-control" name  ='municipio' value="{{old('municipio')}}">
<br><br><br>
 <tr><td>
<input type="submit" class="btn btn-primary" value = 'Guardar'></td><td>
<input type = 'reset' class="btn btn-success" value = 'Cancelar'></td></tr>

</div>
</form>
</center>
</table>
@stop