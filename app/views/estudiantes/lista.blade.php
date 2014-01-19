@extends('layouts.base')

@section('content')
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
					<td>{{ $estudiante->nombre }}</td>
					<td>{{ $estudiante->edad }}</td>
					<td>{{ $estudiante->correo }}</td>
				</tr>					
			@endforeach
		</tbody>
	</table>
@stop