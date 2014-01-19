@extends('layouts/base')

@section('titulo')
	otro titulo
@stop

@section('head')
	<style>
		body{
			background: rgb(243, 241, 198);
			color: rgb(66, 64, 71);
			font-size: 30px;
			font-weight: bolder;
			font-family: sans-serif;
			text-align: center;
			margin: 20px 0;
		}
		li{
			font-size: 20px;
		}
		table,td,th{
			border: 1px solid black;
			background: white;
		}
	</style>
@stop

@section('content')
	Hi, here {{ $usuario }}
	<p>
		{{ $mensaje }}
	</p>
	<section>
		<h3>My Friends</h3>
		<ul>
			@foreach ($usuarios as $usuario)
				<li>
					{{ $usuario }}
				</li>
			@endforeach
		</ul>
	</section>

	<section>
		<h3>My Students</h3>
		<ul>
			<table>
				<thead>
					<tr>
						<th>Id</th>
						<th>NOmbre</th>
						<th>Edad</th>
						<th>Correo</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($estudiantes as $estudiante)
						<tr>
							<td>{{ $estudiante->id }}</td>
							<td>{{ $estudiante->nombre }}</td>
							<td>{{ $estudiante->edad }}</td>
							<td>{{ $estudiante->correo }}</td>
						</tr>					
					@endforeach
				</tbody>
			</table>
			
		</ul>
	</section>
@stop

@section('script')
	<script>
		console.log('hi!');
	</script>
@stop
