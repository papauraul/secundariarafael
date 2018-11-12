@extends('sistema.principal')

@section('contenido')
<form action="{{route('guardaedicionciclo')}}" method="POST" enctype='multipart/form-data'>
	{{csrf_field()}}
	@if($errors->first('idm'))
	<i>{{$errors->first('idm')}}</i>
	@endif<br>
	 Clave: <input type="text" name="idm" value="{{$maestro->idm}}" readonly>	
	<br>
	@if($errors->first('nombre'))
	<i>{{$errors->first('nombre')}}</i>
	@endif<br>
	Nombre: <input type="text" name="nombre" value="{{$maestro->nombre}}">
	<br>
	@if($errors->first('edad'))
	<i>{{$errors->first('edad')}}</i>
	@endif<br>
	Edad: <input type="text" name="edad" value="{{$maestro->edad}}">
	<br>
	@if($errors->first('correo'))
	<i>{{$errors->first('correo')}}</i>
	@endif<br>
	Correo: <input type="text" name="correo" value="{{$maestro->correo}}">
	<br>
	@if($errors->first('cp'))
	<i>{{$errors->first('cp')}}</i>
	@endif<br>
	Codigo Postal: <input type="text" name="cp" value="{{$maestro->cp}}">
	
	<br>
	Seleccione Carrera <select name='idc'>
						<option value="{{$idc}}">{{$carrera}}</option>
							@foreach($todasdemas as $td)
								<option value="{{$td->idc}}">{{$td->nombre}}</option>
							@endforeach
						</select>
	<br>

	<img src="{{asset('archivos/'.$maestro->archivo)}}" height="150" width="150">
	<br>
	@if($errors->first('archivo'))
	<i>{{$errors->first('archivo')}}</i>
	@endif<br>
	seleccione foto <input type='file' name='archivo'>
	<br>
	<input type="submit" value="guadar">
</form>
@stop