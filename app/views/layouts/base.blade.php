<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>
		@section('titulo')
			Titulo por defecto
		@show		
	</title>
	@yield('head')
</head>
<body>
	@yield('content')

	@yield('script')
</body>
</html>