@extends('layouts/master')

@section('content')
<div id="login-overlay" class="modal-dialog" >
  <div class="modal-content" >
      <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
          <h4 class="modal-title" id="myModalLabel">REGISTRATION</h4>
      </div>
      <div class="modal-body" style=" max-width: 700px;">
          <div class="row">
            <form method="POST" action="/register"> 
              <div class="col-sm-6"  >
                  <div class="well">

							{{ csrf_field() }}
                          <div class="form-group">
                              <label for="name" class="control-label">Nome:</label>
                              <input type="text" class="form-control" id="name" name="name"  >
                              
                          </div>
                          <div class="form-group">
                              <label for="email" class="control-label">Email:</label>
                              <input type="text" class="form-control" id="email" name="email"  title="Please enter you email" placeholder="example@gmail.com">
                              
                          </div>
                          <div class="form-group">
                              <label for="password" class="control-label">Password:</label>
                              <input type="password" class="form-control" id="password" name="password"  title="Please enter your password">
                              
                          </div>
                          <div class="form-group">
                              <label for="password_confirmation" class="control-label">Password Confirmation:</label>
                              <input type="password" class="form-control" id="password_confirmation" name="password_confirmation"  title="Reenter your password">
                              
                          </div>
                          <div class="form-group">
                              <label for="cep" class="control-label">CEP:</label>
                              <input type="text" class="form-control" id="cep" name="cep"  >
                              
                          </div>	
                          <div class="form-group">
                              <label for="cpf" class="control-label">CPF:</label>
                              <input type="text" class="form-control" id="name" name="cpf"  >
                              
                          </div>	
							            <div class="form-group">
                              <label for="datanasc" class="control-label">Data de Nascimento:</label>
                              <input type="date" class="form-control" id="datanasc" name="datanasc"  >
                              
                          </div>						              
                  </div>
            </div>

              <div class="col-sm-6 " style="float:right; padding-top: 1.5px;" >
                <div class="well">

                    <div class="form-group">
                        <label for="sobrenome" class="control-label">Sobrenome:</label>
                        <input type="text" class="form-control" id="sobrenome" name="sobrenome"  >
                    </div>
                    <div class="form-group" style="text-align: center;">
                        <label for="sexo" class="control-label" style="float: left;">Sexo:</label>
                         <input type="radio" name="sexo" value="M" style="margin-left: 15px;margin-right: 15px;"> M
                         <input type="radio" name="sexo" value="F" style="margin-left: 15px;margin-right: 15px;"> F 
                    </div>
                    <div class="form-group">
                        <label for="endereco" class="control-label">Endereço:</label>
                    </div> 
                    <div class="form-group">
                        <label for="estado" class="control-label">Estado:</label>
                        <select id="estado" name="estado" style="width: 100%; height: 28px;">
                        	@foreach($estados as $estado)
                            @if($estado['id'] == '27')
                              <option selected value="{{$estado['id']}}"> {{ $estado['descricao'] }} </option>
                            @else
                              <option value="{{ $estado['id'] }}"> {{ $estado['descricao'] }} </option>
                            @endif
                          @endforeach
                        </select>                              
                    </div>
                    <div class="form-group">
                        <label for="municipio" class="control-label">Cidade:</label>
                        <select id="municipio" name="municipio" style="width: 100%;  height: 28px;" >
                              <option> Cidade </option>
                        </select>                              
                    </div>
                    <div class="form-group">
                        <label for="rua" class="control-label">Rua:</label>
                        <input type="text" class="form-control" id="rua" name="rua">
                        
                    </div>
                    <div class="form-group">
                        <label for="cep" class="control-label">Numero:</label>
                        <input type="text" class="form-control" id="cep" name="cep"  >
                        
                    </div>	
                    <div class="form-group">
                        <label for="cpf" class="control-label">Bairro:</label>
                        <input type="text" class="form-control" id="name" name="cpf"  >
                        
                    </div>						              
                </div>
            </div>
            <div class="form-group" style="clear: both; max-width: 90%; margin: 0px auto;">
              @include('layouts/errors')
              <button type="submit" class="btn btn-success btn-block">Register!</button>
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