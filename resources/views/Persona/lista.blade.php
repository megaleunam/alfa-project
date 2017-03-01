@extends('pginicial')


@section('tabla')
  <h2 class="sub-header"> Personas</h2>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Nombre</th>
                  <th>Celula</th>
                  <th>Telefono</th>
                  <th>Direccion</th>
                  <th>Correo</th>
                  <th>Fecha Nacimiento</th>
                </tr>
              </thead>
              <tbody>
                
                 @foreach ($datos as $valores)
                    <tr>
                      <td>{{ $valores->id }}</td>
                      <td>{{ $valores->nombre }}</td>
                      <td>{{ $valores->id_celula }}</td>
                      <td>{{ $valores->telefono }}</td>
                      <td>{{ $valores->direccion }}</td>
                      <td>{{ $valores->correo }}</td>
                      <td>{{ $valores->fecha_nacimiento }}</td>
                    </tr>
                  @endforeach 
              </tbody>
            </table>
                {!! $datos->render() !!}
                <p>
                  <a class="btn btn-primary" href="{{ URL::to('persona/create') }}" role="button">Agregar</a>
              </p> 
          </div>
@endsection
