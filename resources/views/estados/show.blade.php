<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<ul>
		@foreach($estados as $estado)
			<li> {{ $estado->name }}</li>
		@endforeach
	</ul>
</body>
</html>