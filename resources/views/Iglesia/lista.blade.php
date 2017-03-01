@extends('pginicial')


@section('tabla')
  <h2 class="sub-header">Iglesias</h2>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Nombre</th>
                  <th>Direccion</th>
                </tr>
              </thead>
              <tbody>
                
                 @foreach ($datos as $valores)
                    <tr>
                      <td>{{ $valores->id }}</td>
                      <td>{{ $valores->nombre }}</td>
                      <td>{{ $valores->direccion }}</td>
                    </tr>
                  @endforeach 
              </tbody>
            </table>
                {!! $datos->render() !!}
              <p>
                
                <a class="btn btn-primary" href="{{ URL::to('iglesia/create') }}" role="button">Agregar</a>
                
              </p>    
          </div>
@endsection