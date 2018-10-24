<html>
<body>


<h1>Alta grados</h1>
<br>
<form action =  "{{route('guardagrado')}}" method ="POST" >                 
{{csrf_field()}}

@if($errors->first('id_grado')) 
<i> {{ $errors->first('id_grado') }} </i> 
@endif	<br>
        
Clave<input type = 'text' name = 'id_grado' value="{{$idgrado}}" readonly ='readonly'>
<br>
@if($errors->first('grado')) 
<i> {{ $errors->first('grado') }} </i> 
@endif	<br>

grado<input type = 'text' name  ='grado' value="{{old('grado')}}">
<br>

<input type = 'submit' value = 'Guardar'>
</form>
</body>
</html>