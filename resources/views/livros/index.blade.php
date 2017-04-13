<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="/css/blog.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="/css/styles.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/script.js"></script>
</head>
<body>

<div class="container-fluid" >
<div class="row">
<div class="col-md-10 col-md-offset-1">
  <div class="modal fade" id="confirmar" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Confirmar Exclusão</h4>
        </div>
        <div class="modal-body">
          <p id="mensagemModal"> </p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-warning" data-dismiss="modal" id="excluir">Excluir</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        </div>
      </div>
      
    </div>
  </div>

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

	   		@foreach($livros as $livro)
	   			<tr>
	   				<td><a href="/livros/{{ $livro->id  }}"><img src="{{ asset($livro->image) }}" alt="" ></a></td>
	   				<td>{{ $livro->titulo }}</td>
	   				<td>{{ $livro->sinopse }} (Autores:
	   				@foreach($livro->autores as $autor)
					    "{{ $autor->nome}} {{ $autor->sobrenome}}"
					@endforeach
					)</td>
					<td> <div class="buttons"><a href="/livros/{{$livro->id}}/edit" ><span class="glyphicon glyphicon-edit"></span></a>
					<form action="/livros/{{ $livro->id }}" method="POST" id="formExcluir">
					    <input type="hidden" name="_method" value="DELETE">
					    {{ csrf_field() }}
					    <button type="button" name="buttonRemover" id="buttonRemover" data-toggle="modal" data-target="#confirmar" value="{{ $livro->titulo }}"><span class="glyphicon glyphicon-remove"></span></button></td>
					</form>	
	   			</tr>
			@endforeach
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
	padding-top: 40px;
}

#buttonRemover {
	border:none; 
	background: none;
	clear: both;
	padding-left: .06em;
}

#buttonRemover span {
	color: #337AB7;
}

#buttonRemover span:hover {
	color: #23527C;
}


</style>

</body>
</html>