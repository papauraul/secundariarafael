<html>
<body>


<h1>Alta profesor</h1>
<br>
<form action =  "{{route('guardaprofesor')}}" method ="POST" enctype="multipart/form-data">                 
{{csrf_field()}}

@if($errors->first('id_profe')) 
<i> {{ $errors->first('id_profe') }} </i> 
@endif	<br>
        
Clave<input type = 'text' name = 'id_profe' value="{{$idprof}}" readonly ='readonly'>

<br>
@if($errors->first('rfc')) 
<i> {{ $errors->first('rfc') }} </i> 
@endif	<br>

RFC<input type = 'text' name  ='rfc' value="{{old('rfc')}}">
<br>

<br>
@if($errors->first('nombre')) 
<i> {{ $errors->first('nombre') }} </i> 
@endif	<br>

Nombre<input type = 'text' name  ='nombre' value="{{old('nombre')}}">
<br>

<br>
@if($errors->first('app')) 
<i> {{ $errors->first('app') }} </i> 
@endif	<br>

app<input type = 'text' name  ='app' value="{{old('app')}}">
<br>

<br>
@if($errors->first('apm')) 
<i> {{ $errors->first('apm') }} </i> 
@endif	<br>

apm<input type = 'text' name  ='apm' value="{{old('apm')}}">
<br>

Sexo<input type="radio" name="sexo" value="F" CHECKED>F
<input type="radio" name="sexo" value="M">M

<br>
@if($errors->first('edad')) 
<i> {{ $errors->first('edad') }} </i> 
@endif	<br>

edad<input type = 'text' name  ='edad' value="{{old('edad')}}">
<br>

<br>
@if($errors->first('calle')) 
<i> {{ $errors->first('calle') }} </i> 
@endif	<br>

calle<input type = 'text' name  ='calle' value="{{old('calle')}}">
<br>

<br>
@if($errors->first('localidad')) 
<i> {{ $errors->first('localidad') }} </i> 
@endif	<br>

localidad<input type = 'text' name  ='localidad' value="{{old('localidad')}}">
<br>

<br>
@if($errors->first('telefono')) 
<i> {{ $errors->first('telefono') }} </i> 
@endif	<br>

telefono<input type = 'text' name  ='telefono' value="{{old('telefono')}}">
<br>

<br>
@if($errors->first('archivo')) 
<i> {{ $errors->first('archivo') }} </i> 
@endif	<br>

Seleccione foto<input type='file' name ='archivo'>
<br>

seleccione id de nom_tut <select name = 'id_mun'>
                        @foreach($municipios as $mun)
						<option value ="{{$mun->id_mun}}" >{{$mun->municipio}}</option>
                        @endforeach
						</select>
<br>					
<input type = 'submit' value = 'Guardar'>
</form>
</body>
</html>