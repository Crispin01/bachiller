@extends('layouts.admin')
@section('content')
<div class="main-content">
    <div class="page-content">
      <div class="container-fluid">

        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header align-items-center d-flex">
                        <h4 class="card-title mb-0 flex-grow-1">Cuartos</h4>
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
                    <form action="{{route('cuartos.store')}}" method="POST">
                      @csrf
                      <div class="form-group">
                          <label for="exampleFormControlInput1">Número Cuarto</label>
                          <input type="text" name="numero_cuarto" class="form-control" placeholder="Ingrese cuarto">
                      </div>
                      <div class="form-group">
                          <label for="exampleFormControlInput2">Detalles</label>
                          <input type="text" name="detalles_cuarto" class="form-control" placeholder="Ingrese detalles">
                      </div>
                      <div class="form-group">
                          <label for="exampleFormControlInput4">Precio</label>
                          <input type="number" name="precio" class="form-control" placeholder="Ingrese Precio">
                      </div>
                      <div class="form-group">
                        <label for="exampleFormControlInput4">Estado</label>
                        <input type="number" name="estado" class="form-control" placeholder="Ingrese Estado">
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
                                            <th scope="col">Número Cuarto</th>
                                            <th scope="col">Detalles</th>
                                            <th scope="col">Precio</th>
                                            <th scope="col">Estado</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                      @foreach ($cuartos as $cuarto)
                                        <tr>
                                          <td>{{ $cuarto->numero_cuarto }}</td>
                                          <td>{{ $cuarto->detalles_cuarto }}</td>
                                          <td>{{ $cuarto->precio }}</td>
                                            <td>
                                                @if($cuarto->estado == 1)
                                                  <span class="badge bg-success">Disponible</span>
                                                @else
                                                  <span class="badge bg-danger">Ocupado</span>
                                                @endif
                                            </td>
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
