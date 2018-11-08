@extends('sistema.alta')
@section('contenido')
@section('altas')
<center>
<h1>Alta Municipio</h1>
 <table>


<form action =  "{{route('guardamunicipio')}}" method ="POST" >                 
{{csrf_field()}}

@if($errors->first('id_mun')) 
<i> {{ $errors->first('id_mun') }} </i> 
@endif	<br>
        
Clave<input type = 'text' name = 'id_mun' value="{{$idmun}}" readonly ='readonly'>
<br>
@if($errors->first('municipio')) 
<i> {{ $errors->first('municipio') }} </i> 
@endif	<br>

municipio<input type = 'text'  name  ='municipio' value="{{old('municipio')}}">
<br>
<br>
 <tr><td>
<input type = 'submit' class="btn btn-primary" value = 'Guardar'></td><td>
<input type = 'reset' class="btn btn-success" value = 'Cancelar'></td></tr>
</form>
</center>
</table>
@stop