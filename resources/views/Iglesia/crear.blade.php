@extends('pginicial')


@section('tabla')
  <h2 class="sub-header">Agregar Iglesia</h2>
    <div class="col-md-6">
             
                  {{Form::open(['route' => 'iglesia.store','method'=>'POST','class'=>'form-horizontal'])}}
                  
                    <div class="form-group">
                      {!! Form::label('lblnombre', 'Nombre'); !!}
                      {!! Form::text('nombre',null,['class'=>'form-control', 'placeholder'=>'Nombre de la Iglesia']) !!}
                    </div>
                  
                  <div class="form-group">
                      {!! Form::label('lbldireccion','Direccion') !!}
                      {!! Form::text('direccion',null,['class'=>'form-control','placeholder'=>'Direccion']) !!}
                  </div>
                  
                      {{Form::submit('Crear',['class' => 'btn btn-primary'])}}
                  
                  </div>
                  
                  {{ Form::close() }}
    </div>
           
@endsection