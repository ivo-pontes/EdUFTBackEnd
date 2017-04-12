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
    	<?php// dd($livros); ?>
    	@if(count($livros) > 1)
	   		@foreach($livros as $livro)
	   			<tr>
	   				<td><a href="/livros/{{ $livro->id  }}"><img src="{{ asset($livro->image) }}" alt="" ></a></td>
	   				<td>{{ $livro->titulo }}</td>
	   				<td>{{ $livro->sinopse }} (Autores:
	   				@foreach($livro->autores as $autor)
					    "{{ $autor->nome}} {{ $autor->sobrenome}}"
					@endforeach
					)</td>
					<td> <div class="buttons"><a href="#" ><span class="glyphicon glyphicon-edit"></span></a>
					<a href="#"><span class="glyphicon glyphicon-remove"></span></a></div></td>
	   			</tr>
			@endforeach
		@elseif(count($livros) <= 0)
			NOT FOUND
		@else
   			<tr>
   				<td><a href="/livros/{{ $livro->id }}"><img src="{{ asset($livros->image) }}" alt="" ></a></td>
   				<td>{{ $livros->titulo }}</td>
   				<td>{{ $livros->sinopse }} (Autores: 
   				@foreach($livros->autores as $autor)
				    "{{ $autor->nome}} {{ $autor->sobrenome}}"
				@endforeach
				)</td>
				<td> <div class="buttons"><a href="#" ><span class="glyphicon glyphicon-edit"></span></a>
					<a href="#"><span class="glyphicon glyphicon-remove"></span></a></div></td>
   			</tr>	
		@endif

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
	padding-top: 30px;
}

td div a:nth-child(2){
	padding-top: 50px;
}

</style>
</body>
</html>