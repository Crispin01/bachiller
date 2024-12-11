@extends('layouts.admin')
@section('content')
<div class="main-content">
    <div class="page-content">
      <div class="container-fluid">

        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header align-items-center d-flex">
                        <h4 class="card-title mb-0 flex-grow-1">Alquilers</h4>
                    </div><!-- end card header -->

                    <!-- Default Modals -->
            <div id="myModal" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                      <h5 class="modal-title" id="myModalLabel">Modal Heading</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> </button>
                  </div>
                  <div class="modal-body">
                    <form action="{{route('alquileres.store')}}" method="POST">
                      @csrf
                      <div class="form-group">
                          <label for="exampleFormControlInput1">Nombre Inquilino</label>
                          <select class="form-select mb-3" aria-label="Default select example" name="nombre_inquilino">
                            <option selected>Seleccionar Inquilino</option>
                            @foreach ($inquilinos as $inquilino)
                                <option value="{{$inquilino->id_inquilino}}" >{{$inquilino->nombre}}</option>
                            @endforeach
                        </select>
                      </div>
                      <div class="form-group">
                          <label for="exampleFormControlInput2">Nombre Cuarto</label>
                          <select class="form-select mb-3" aria-label="Default select example" name="nombre_cuarto">
                            <option selected>Seleccionar Cuarto</option>
                            @foreach ($cuartos as $cuarto)
                                <option value="{{$cuarto->id_cuarto}}" >{{$cuarto->numero_cuarto}}</option>
                            @endforeach
                        </select>
                      </div>
                      <div class="form-group">
                          <label for="exampleFormControlInput3">Fecha Inicio</label>
                          <input type="date" name="fecha_inicio" class="form-control" placeholder="Ingrese Fecha Inicio">
                      </div>
                      <div class="form-group">
                          <label for="exampleFormControlInput4">Fecha Fin</label>
                          <input type="date" name="fecha_fin" class="form-control" placeholder="Ingrese Fecha Fin">
                      </div>
                  </div>
                  <div class="modal-footer">
                      <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-primary ">Save Changes</button>
                  </div>
                </form>

                </div><!-- /.modal-content -->
              </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->

                    <div class="card-body">
                        <div class="live-preview">
                            <div class="table-responsive">
                              <div class="d-flex justify-content-end">
                                <button type="button" class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#myModal">Standard Modal</button>
                              </div>
                                <table class="table align-middle table-nowrap mb-0">
                                    <thead>
                                        <tr>
                                            <th scope="col">Nombre Inquilino</th>
                                            <th scope="col">Nombre Cuarto</th>
                                            <th scope="col">Fecha Inicio</th>
                                            <th scope="col">Fecha Fin</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                      @foreach ($alquileres as $alquiler)
                                        <tr>
                                          <td>{{ $alquiler->nombre_inquilino }}</td>
                                          <td>{{ $alquiler->nombre_cuarto }}</td>
                                          <td>{{ $alquiler->fecha_inicio }}</td>
                                          <td>{{ $alquiler->fecha_fin }}</td>
                                        </tr>
                                      @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div><!-- end card-body -->
                </div><!-- end card -->
            </div>

        </div>

    </div>
  </div>
</div>

@endsection
