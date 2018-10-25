<html>
<body>

<h1>Alta nom_al</h1>
<br>
<form action = "{{route('guardalumno')}}" method = "POST" >                   
{{csrf_field()}}

@if($errors->first('id_alum')) 
<i> {{ $errors->first('id_alum') }} </i> 
@endif	<br>
        
Clave<input type = 'text' name = 'id_alum' value="{{$ida}}" readonly ='readonly'>
<br>

@if($errors->first('nom_al')) 
<i> {{ $errors->first('nom_al') }} </i> 
@endif	<br>

nom_al<input type = 'text' name  ='nom_al' value="{{old('nom_al')}}"> 

@if($errors->first('app_al')) 
<i> {{ $errors->first('app_al') }} </i> 
@endif	<br>

app_al<input type = 'text' name  ='app_al' value="{{old('app_al')}}">


@if($errors->first('apm_al')) 
<i> {{ $errors->first('apm_al') }} </i> 
@endif	<br>

apm_al<input type = 'text' name  ='apm_al' value="{{old('apm_al')}}">

@if($errors->first('sexo')) 
<i> {{ $errors->first('sexo') }} </i> 
@endif	<br>

sexo<input type = 'text' name  ='sexo' value="{{old('sexo')}}">


@if($errors->first('calle')) 
<i> {{ $errors->first('calle') }} </i> 
@endif	<br>

calle<input type = 'text' name  ='calle' value="{{old('calle')}}">

@if($errors->first('localidad')) 
<i> {{ $errors->first('localidad') }} </i> 
@endif	<br>

localidad<input type = 'text' name  ='localidad' value="{{old('localidad')}}">

@if($errors->first('archivo')) 
<i> {{ $errors->first('archivo') }} </i> 
@endif	<br>
Seleccione foto<input type='file' name ='archivo'>
<BR>

@if($errors->first('codigo_al')) 
<i> {{ $errors->first('codigo_al') }} </i> 
@endif	<br>

localidad<input type = 'text' name  ='codigo_al' value="{{old('codigo_al')}}">

<br>
Seleccione id de generacion<select name = 'id_gen'>
            @foreach($generacions as $gen)
			<option value = '{{$gen->id_gen}}'>{{$gen->generacion}}</option>
			@endforeach
                  </select>

<br>
Seleccione id de grados<select name = 'id_grado'>
            @foreach($grados as $g)
			<option value = '{{$g->id_grado}}'>{{$g->grado}}</option>
			@endforeach
                  </select>


	
<br>
Seleccione id de municipio<select name = 'id_mun'>
            @foreach($municipios as $m)
			<option value = '{{$m->id_mun}}'>{{$m->municipio}}</option>
			@endforeach
                  </select>
				  
				  <br>
Seleccione id de grupos<select name = 'id_grupo'>
            @foreach($grupos as $gr)
			<option value = '{{$gr->id_grupo}}'>{{$gr->grupo}}</option>
			@endforeach
                  </select>	
<br>
<input type = 'submit' value = 'Guardar'>
</form>
</body>
</html>