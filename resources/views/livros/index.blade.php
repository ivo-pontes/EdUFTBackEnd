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
	   				<td><a href="#"><img src="{{ asset($livro->image) }}" alt="" ></a></td>
	   				<td>{{ $livro->titulo }}</td>
	   				<td>{{ $livro->sinopse }} (Autores:
	   				@if(count($livro->autores) == 1)
	   					"{{ $autor->nome}} {{ $autor->sobrenome}}"
	   				@else
		   				@foreach($livro->autores as $autor)
						    "{{ $autor->nome}} {{ $autor->sobrenome}}"
						@endforeach
					@endif
					)</td>
	   			</tr>
			@endforeach
		@elseif(count($livros) <= 0)
			NOT FOUND
		@else
   			<tr>
   				<td><a href="#"><img src="{{ asset($livros->image) }}" alt="" ></a></td>
   				<td>{{ $livros->titulo }}</td>
   				<td>{{ $livros->sinopse }} (Autores: 
   				@if(count($livros->autores) == 1)
   					"{{ $autor->nome}} {{ $autor->sobrenome}}"
   				@else
	   				@foreach($livros->autores as $autor)
					    "{{ $autor->nome}} {{ $autor->sobrenome}}"
					@endforeach
				@endif
				)</td>
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

</style>
</body>
</html>