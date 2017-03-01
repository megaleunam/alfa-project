@extends('pginicial')


@section('tabla')
  <h2 class="sub-header">Redes</h2>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Pastor</th>
                </tr>
              </thead>
              <tbody>
                
                 @foreach ($datos as $valores)
                    <tr>
                      <td>{{ $valores->id }}</td>
                      <td>{{ $valores->id_pastor }}</td>
                     
                    </tr>
                  @endforeach 
              </tbody>
            </table>
                {!! $datos->render() !!}
          </div>
@endsection