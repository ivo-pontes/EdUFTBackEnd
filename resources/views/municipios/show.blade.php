<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<ul>
		@foreach($municipios as $municipio)
			<li> {{ $municipio->descricao }}</li>
		@endforeach
	</ul>
</body>
</html>