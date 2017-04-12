<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="/css/blog.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="/css/styles.css">
    <script src="/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container-fluid" >
<div class="row">
<div class="col-md-10 col-md-offset-1">
  <h2 class="center">Livros</h2>         
  <table class="table table-hover table-condensed"  >
    <thead>
      <tr>
        <th></th>
        <th>Título</th>
        <th>Sinopse</th>
      </tr>
    </thead>
    <tbody>
	<tr>
		<td><a href="#"><img src="{{ asset($livro->image) }}" alt="" ></a></td>
		<td>{{ $livro->titulo }}</td>
		<td>{{ $livro->sinopse }} (Autores: 
			@foreach($livro->autores as $autor)
		    	"{{ $autor->nome}} {{ $autor->sobrenome}}"
			@endforeach
		)</td>
		<td ><a href="#" class="buttons"><span class="glyphicon glyphicon-edit"></span></a>
						<a href="#" class="buttons"><span class="glyphicon glyphicon-remove"></span></a></td>
	</tr>	
    </tbody>
  </table>
</div>
</div>
</div>

<style type="text/css">
	
td{
	text-align: justify;
}

td:nth-child(2) {
    min-width: 250px;
}

img{
	max-width: 200px ;
	max-height: 200px;
}

.center{
	text-align: center;
}

.buttons{
	margin-top: .15em;
	padding-top: .15em;
}

</style>
</body>
</html>