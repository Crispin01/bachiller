@extends('layouts.admin')
@section('content')
<div class="main-content">
    <div class="page-content">
      <div class="container-fluid">

        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header align-items-center d-flex">
                        <h4 class="card-title mb-0 flex-grow-1">Inquilinos</h4>
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
                    <form action="{{route('inquilinos.store')}}" method="POST">
                      @csrf
                      <div class="form-group">
                          <label for="exampleFormControlInput1">Nombre</label>
                          <input type="text" name="nombre" class="form-control" placeholder="Ingrese nombre">
                      </div>
                      <div class="form-group">
                          <label for="exampleFormControlInput2">Apellido</label>
                          <input type="text" name="apellido" class="form-control" placeholder="Ingrese apellido">
                      </div>
                      <div class="form-group">
                          <label for="exampleFormControlInput3">Email</label>
                          <input type="email" name="email" class="form-control" placeholder="Ingrese email">
                      </div>
                      <div class="form-group">
                          <label for="exampleFormControlInput4">Telefono</label>
                          <input type="number" name="telefono" class="form-control" placeholder="Ingrese Telefono">
                      </div>
                      <div class="form-group">
                        <label for="exampleFormControlInput4">DNI</label>
                        <input type="number" name="dni" class="form-control" placeholder="Ingrese DNI">
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
                                            <th scope="col">Nombre</th>
                                            <th scope="col">Apellido</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Telefono</th>
                                            <th scope="col">DNI</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                      @foreach ($inquilinos as $inquilino)
                                        <tr>
                                          <td>{{ $inquilino->nombre }}</td>
                                          <td>{{ $inquilino->apellido }}</td>
                                          <td>{{ $inquilino->email }}</td>
                                          <td>{{ $inquilino->telefono }}</td>
                                          <td>{{ $inquilino->dni }}</td>
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
