@extends('layouts/master')

@section('content')
<div id="login-overlay" class="modal-dialog" >
  <div class="modal-content" >
      <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
          <h4 class="modal-title" id="myModalLabel">BOOKS REGISTRATION</h4>
      </div>
      <div class="modal-body" >
        <div class="row">
          <form method="POST" action="/livros/create" enctype="multipart/form-data" > 
            <div class="col-md-12" >
              <div class="well">
              {{ csrf_field() }}
              <div class="form-group">
                <label for="titulo">Título</label>
                <input type="text" class="form-control" id="titulo" name="titulo">
              </div>
              <div class="form-group">
                <label for="sinopse">Sinopse</label>
                <input type="text" class="form-control" id="sinopse" name="sinopse">
              </div>
              <div class="form-group">
                <label for="anodepublicacao">Ano de Publicação</label>
                <input type="date" class="form-control" id="anodepublicacao" name="anodepublicacao">
              </div>
              <div class="form-group" >
                <label for="imageFile">Imagem</label>
                <input type="file" class="form-control" id="imageFile" name="imageFile" style="background: #F5F5F5;">
              </div>
              
              <div class="form-group">
                  <label for="area" class="control-label">Área:</label>
                  <select id="area" name="area" style="width: 100%; height: 28px;">
                    @foreach($areas as $area)
                        <option value="{{ $area['id'] }}"> {{ $area['descricao'] }} </option>
                    @endforeach
                  </select>                              
              </div>
              <div class="form-group">
                <label for="descricao">descricao</label>
                <input type="text" class="form-control" id="descricao" name="descricao">
              </div>
              <div class="form-group">
                  <label for="categoria" class="control-label">Categoria:</label>
                  <select id="categoria" name="categoria" style="width: 100%; height: 28px;">
                    @foreach($categorias as $categoria)
                        <option value="{{ $categoria['id'] }}"> {{ $categoria['descricao'] }} </option>
                    @endforeach
                  </select>                              
              </div> 
              <div class="form-group">
                <label for="peso">peso</label>
                <input type="text" class="form-control" id="peso" name="peso">
              </div>
              <div class="form-group">
                <label for="valor">valor</label>
                <input type="text" class="form-control" id="valor" name="valor">
              </div>
              <div class="form-group">
                <label for="quantidade">quantidade</label>
                <input type="text" class="form-control" id="quantidade" name="quantidade">
              </div>
              <div class="form-group">
                  <label for="autor" class="control-label">Autores:</label>
                  <select multiple="multiple" size="5" id="autor" name="autor[]" style="width: 100%; ">
                    @foreach($autores as $autor)
                        <option value="{{ $autor['id'] }}"> {{ $autor['nome'] }} {{ $autor['sobrenome'] }} </option>
                    @endforeach
                  </select>                              
              </div> 
            </div>
            <div class="form-group" style="clear: both; max-width: 95%; margin: 0px auto;">
              @include('layouts/errors')
              <button type="submit" class="btn btn-success btn-block">Cadastrar!</button>
            </div>
          </form>
        </div>
      </div>
  </div>
</div>

<script type="text/javascript" src="http://code.jquery.com/jquery-2.1.4.min.js"></script> 
<script src="//cdn.jsdelivr.net/webshim/1.14.5/polyfiller.js"></script>
<script src="js/regioes.js"></script>
@endsection