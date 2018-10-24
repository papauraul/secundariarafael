<html>
<body>


<h1>Alta municipio</h1>
<br>
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

municipio<input type = 'text' name  ='municipio' value="{{old('municipio')}}">
<br>

<input type = 'submit' value = 'Guardar'>
</form>
</body>
</html>