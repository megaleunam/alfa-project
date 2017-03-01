@extends('pginicial')


@section('tabla')
  <h2 class="sub-header"> Usuarios Registrados</h2>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Nombre</th>
                  <th>Correo</th>
                 
                  <th>Acciones</th>
                </tr>
              </thead>
              <tbody>
                
                 @foreach ($datos as $valores)
                    <tr>
                      <td>{{ $valores->name }}</td>
                      <td>{{ $valores->email }}</td>
                      <td></td>
                    </tr>
                  @endforeach 
              </tbody>
            </table>
                {!! $datos->render() !!}
                <p>
                  <a class="btn btn-primary" href="{{ URL::to('usuario/create') }}" role="button">Agregar</a>
              </p> 
          </div>
@endsection