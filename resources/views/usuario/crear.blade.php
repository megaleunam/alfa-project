@extends('pginicial')


@section('tabla')
  <h2 class="sub-header">Registro Usuario</h2>
          <div class="col-md-6">
                               
              {{Form::open(['route' => 'usuario.store','method'=>'POST','class'=>'form-horizontal'])}}

                <div class="form-group">
                    <label class="control-label col-xs-3">Nombre:</label>
                    <div class="col-xs-9">
                      <input name='name' type="text" class="form-control" placeholder="Nombre">
                    </div>
                </div>
                
                
                <div class="form-group">
                    <label class="control-label col-xs-3">Email:</label>
                    <div class="col-xs-9">
                      <input name="email" type="email" class="form-control" id="inputEmail" placeholder="Email">
                    </div>
                </div>
                  <div class="form-group">
                  <label class="control-label col-xs-3">Password:</label>
                    <div class="col-xs-9">
                    <input name="password" type="password" class="form-control" id="inputPassword" placeholder="Password">
                    </div>
                  </div>
             
                <div class="form-group">
                    <div class="col-xs-offset-3 col-xs-9">
                    <label class="checkbox-inline">
                    <input type="checkbox" value="news"> Enviar noticias.
                    </label>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-xs-offset-3 col-xs-9">
                    <label class="checkbox-inline">
                    <input type="checkbox" value="agree">  Accepto <a href="#">Terminos y condiciones</a>.
                    </label>
                    </div>
                </div>
               
                <div class="col-xs-offset-3 col-xs-9">
                  {{Form::submit('Crear',['class' => 'btn btn-primary'])}}
                 
                  {{ Form::close() }}
           </div>
             
@endsection