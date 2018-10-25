<html>
<body>

<h1>Alta Grupo</h1>
<br>
<form action = "{{route('guardagrupo')}}" method = "POST" >                   
{{csrf_field()}}

@if($errors->first('id_grupo')) 
<i> {{ $errors->first('id_grupo') }} </i> 
@endif	<br>
        
Clave<input type = 'text' name = 'id_grupo' value="{{$idg}}" readonly ='readonly'>
<br>

@if($errors->first('grupo')) 
<i> {{ $errors->first('grupo') }} </i> 
@endif	<br>

grupo<input type = 'text' name  ='grupo' value="{{old('grupo')}}">
<br>
Seleccione id de grados<select name = 'id_grado'>
            @foreach($grados as $g)
			<option value = '{{$g->id_grado}}'>{{$g->grado}}</option>
			@endforeach
                  </select>
<br>
<input type = 'submit' value = 'Guardar'>
</form>
</body>
</html>