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
            <form method="POST" action="/autores/create"> 
              <div class="col-md-12" >
                <div class="well">
					     {{ csrf_field() }}
                    <div class="form-group">
                        <label for="nome" class="control-label">Nome do(a) Autor(a):</label>
                        <input type="text" class="form-control" id="nome" name="nome">
                     </div>  
                    <div class="form-group">
                        <label for="sobrenome" class="control-label">Sobrenome:</label>
                        <input type="text" class="form-control" id="sobrenome" name="sobrenome">
                     </div>  
                    <div class="form-group">
                        <label for="descricao" class="control-label">Descrição do(a) Autor(a):</label>
                        <textarea class="form-control" id="descricao" name="descricao" cols="40" rows="5"></textarea>
                     </div>  
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