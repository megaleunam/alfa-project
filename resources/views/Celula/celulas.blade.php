@extends('pginicial')


@section('tabla')
  <h2 class="sub-header">Celulas</h2>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Lider</th>
                  <th>Colider</th>
                  <th>Anfitrion</th>
                  <th>Direccion</th>
                </tr>
              </thead>
              <tbody>
                
                 @foreach ($datos as $valores)
                    <tr>
                      <td>{{ $valores->id }}</td>
                      <td>{{ $valores->id_lider }}</td>
                      <td>{{ $valores->id_colider }}</td>
                      <td>{{ $valores->id_anfitrion }}</td>
                      <td>{{ $valores->direccion }}</td>
                    </tr>
                  @endforeach 
              </tbody>
            </table>
                {!! $datos->render() !!}
                  <p>
                      <a class="btn btn-primary" href="{{ URL::to('asiste/create') }}" role="button">Agregar asistencia</a>
                  
                  </p> 
          </div>
@endsection