@extends('pginicial')


@section('tabla')
  <h2 class="sub-header"> Agregar Persona</h2>
          <div class="col-md-6">
           {{Form::open(['route' => 'persona.store','method'=>'POST','class'=>'form-horizontal'])}}
               
                <div class="form-group">
                    <label class="control-label col-xs-3">Nombre:</label>
                    <div class="col-xs-9">
                      <input name='nombre' type="text" class="form-control" placeholder="Nombre">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-xs-3">Celula:</label>
                    <div class="col-xs-9">
                       <input name='celula' type="text" class="form-control" placeholder="Celula">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-xs-3" >Telefono:</label>
                     <div class="col-xs-9">
                        <input name='telefono' type="tel" class="form-control" placeholder="Telefono">
                     </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-xs-3">Email:</label>
                    <div class="col-xs-9">
                      <input name='correo' type="email" class="form-control" id="inputEmail" placeholder="Email">
                    </div>
                </div>
                 <div class="form-group">
                    <label  class="control-label col-xs-3">F. Nacimiento:</label>
                       <div class="col-xs-9">
                        {!! Form::date('fecha', \Carbon\Carbon::now(),['class' => 'form-control']) !!}
                       </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-xs-3">Dirección:</label>
                  <div class="col-xs-9">
                      <textarea name='direccion' rows="3" class="form-control" placeholder="Dirección"></textarea>
                  </div>

                </div>
             
              
                 <div class="col-xs-offset-3 col-xs-9">
                  {{Form::submit('Crear',['class' => 'btn btn-primary'])}}
                 
                </div>
              {{ Form::close() }}
                
          </div>
@endsection