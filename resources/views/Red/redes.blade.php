@extends('pginicial')


@section('tabla')
  <h2 class="sub-header">Redes</h2>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Pastor</th>
                  <th>Accion</th>
                </tr>
              </thead>
              <tbody>
                
                 @foreach ($datos as $valores)
                    <tr>
                      <td>{{ $valores->id }}</td>
                      <td>{{ $valores->id_pastor }}</td>
                      <td> <button type="button" class="btn btn-link">Editar</button> </td>
                    </tr>
                  @endforeach 
              </tbody>
            </table>
                {!! $datos->render() !!}
                <p>
                
                <a class="btn btn-primary" href="{{ URL::to('red/create') }}" role="button">Agregar Red</a>
                
              </p> 
          </div>
@endsection