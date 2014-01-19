@extends('layouts.base')

@section('content')
	{{ Form::open() }}

		nombre: {{ Form::text('nombre') }} <br>
		edad: {{ Form::text('edad') }} <br>
		correo: {{ Form::text('correo') }} <br>
		
		{{ Form::submit('Enviar!') }}

	{{ Form::close() }}
@stop