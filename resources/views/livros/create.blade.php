@extends('layouts/master')

@section('content')
<div id="login-overlay" class="modal-dialog" >
  <div class="modal-content" >
      <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
          <h4 class="modal-title" id="myModalLabel">AREA REGISTRATION</h4>
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