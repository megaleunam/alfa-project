@extends('pginicial')


@section('tabla')
  <h2 class="sub-header"> Asistencia Reunion Celular</h2>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Celula</th>
                  <th>Discipulo</th>
                  <th>Fecha</th>
                  <th>Asistencia</th>
                  
                </tr>
              </thead>
              <tbody>
                
                 @foreach ($datos as $valores)
                    <tr>
                      <td>{{ $valores->id }}</td>
                      <td>{{ $valores->id_celula }}</td>
                      <td>{{ $valores->id_discipulo }}</td>
                      <td>{{ $valores->fecha}}</td>
                      <td>{{ $valores->asistencia }}</td>
                      
                    </tr>
                  @endforeach 
              </tbody>
            </table>
                {!! $datos->render() !!}
                <p>
                  <a class="btn btn-primary" href="{{ URL::to('asiste/create') }}" role="button">Agregar</a>
              </p> 
          </div>
@endsection
