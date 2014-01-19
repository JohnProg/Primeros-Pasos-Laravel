@extends('layouts.base')

@section('content')
	@if(isset($datos))
		<section>
			User: {{ $datos['user'] }} <br>
			Email: {{ $datos['email'] }} <br>
			Password: {{ Hash::make($datos['password']) }} <br>
		</section>
	@else
		{{ Form::open(array('method'=>'POST','url'=>'formulario')) }}

			user: {{ Form::text('user') }} <br>
			{{ $errors->first('user') }}

			email: {{ Form::text('email') }} <br>
			{{ $errors->first('email') }}

			password: {{ Form::password('password') }} <br>
			{{ $errors->first('password') }}

			re-password: {{ Form::password('re_password') }} <br>
			{{ $errors->first('re_password') }}
			
			{{ Form::submit('Enviar!') }}

		{{ Form::close() }}
	@endif	
@stop