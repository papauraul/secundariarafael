<html>
<body>

<h1>Alta Ciclo</h1>
<br>
<form action = "{{route('guardaciclo')}}" method = "POST" >                   
{{csrf_field()}}

@if($errors->first('id_ce')) 
<i> {{ $errors->first('id_ce') }} </i> 
@endif	<br>
        
Clave<input type = 'text' name = 'id_ce' value="{{$idce}}" readonly ='readonly'>
<br>

@if($errors->first('ciclo_escolar')) 
<i> {{ $errors->first('ciclo_escolar') }} </i> 
@endif	<br>

ciclo_escolar<input type = 'text' name  ='ciclo_escolar' value="{{old('ciclo_escolar')}}">
<br>
Seleccione id de generacion<select name = 'id_gen'>
            @foreach($generacions as $gen)
			<option value = '{{$gen->id_gen}}'>{{$gen->generacion}}</option>
			@endforeach
                  </select>
<br>
<input type = 'submit' value = 'Guardar'>
</form>
</body>
</html>