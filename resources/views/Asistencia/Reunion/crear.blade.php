@extends('pginicial')


@section('tabla')
  <h2 class="sub-header">Agregar Iglesia</h2>
    <div class="col-md-6">
             
                  {{Form::open(['route' => 'asiste.store','method'=>'POST','class'=>'form-horizontal'])}}
                  
                    <div class="form-group">
                      {!! Form::label('lblnombre', 'Celula'); !!}
                      {!! Form::text('celula',null,['class'=>'form-control', 'placeholder'=>' Nro celula']) !!}
                    </div>
                      <div class="form-group">
                      {!! Form::label('lbldiscipulo', 'Discipulo'); !!}
                      {!! Form::text('discipulo',null,['class'=>'form-control', 'placeholder'=>'identificador de discipulo']) !!}
                    </div>
                      <div class="form-group">
                         {!! Form::label('lblfecha', 'Fecha'); !!}
                         {!! Form::text('fecha',null,['class'=>'form-control', 'placeholder'=>'Fecha Reunion Celular']) !!}
                    </div>
                    
                     <div class="form-group">
                        <div class="col-xs-offset-3 col-xs-9">
                        <label class="checkbox-inline">
                        {{ Form::checkbox('asistencia', 'true') }}
                           ASISTENCIA
                        </label>
                        </div>
                  
                      {{Form::submit('Crear',['class' => 'btn btn-primary'])}}
                  
                  </div>
                  
                  {{ Form::close() }}
    </div>
           
@endsection