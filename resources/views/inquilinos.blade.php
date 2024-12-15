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

<!-- MODAL CREAR  -->
	  <div id="myModal" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
		<div class="modal-dialog">
		  <div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="myModalLabel">Agregue Inquilino</h5>
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
				<button type="button" class="btn btn-light" data-bs-dismiss="modal">Cerrar</button>
				<button type="submit" class="btn btn-primary ">Guardar datos</button>
			</div>
		  </form>
		  </div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->
	  </div><!-- /.modal -->

  @foreach ($inquilinos as $inquilino)
<!-- MODAL ACTUALIZAR  -->
	  <div id="editarModal{{ $inquilino->id_inquilino }}" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel{{ $inquilino->id_inquilino }}" aria-hidden="true" style="display: none;">
		<div class="modal-dialog">
		  <div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="myModalLabel">Agregue Inquilino</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> </button>
			</div>
			<div class="modal-body">
			  <form action="{{route('inquilinos.update', $inquilino->id_inquilino )}}" method="POST">
				@csrf
				@method('PUT')
				<div class="form-group">
					<label for="exampleFormControlInput1">Nombre</label>
					<input type="text" name="nombre" class="form-control" placeholder="Ingrese nombre" value="{{ $inquilino->nombre }}">
				</div>
				<div class="form-group">
					<label for="exampleFormControlInput2">Apellido</label>
					<input type="text" name="apellido" class="form-control" placeholder="Ingrese apellido" value="{{ $inquilino->apellido }}">
				</div>
				<div class="form-group">
					<label for="exampleFormControlInput3">Email</label>
					<input type="email" name="email" class="form-control" placeholder="Ingrese email" value="{{ $inquilino->email }}">
				</div>
				<div class="form-group">
					<label for="exampleFormControlInput4">Telefono</label>
					<input type="number" name="telefono" class="form-control" placeholder="Ingrese Telefono" value="{{ $inquilino->telefono }}">
				</div>
				<div class="form-group">
				  <label for="exampleFormControlInput4">DNI</label>
				  <input type="number" name="dni" class="form-control" placeholder="Ingrese DNI" value="{{ $inquilino->dni }}">
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-light" data-bs-dismiss="modal">Cerrar</button>
				<button type="submit" class="btn btn-primary ">Actualizar datos</button>
			</div>
		  </form>
		  </div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->
	  </div><!-- /.modal -->
  @endforeach
<!-- MODAL ACTUALIZAR FIN -->

<!-- MODAL ELIMINAR -->
@foreach ($inquilinos as $inquilino)
<div class="modal fade" id="eliminarModal{{ $inquilino->id_inquilino }}" tabindex="-1" aria-labelledby="eliminarModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="eliminarModalLabel">Eliminar Inquilino</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<p>¿Estás seguro de eliminar este registro?</p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-success" data-bs-dismiss="modal">Cancelar</button>
				<form method="POST" action="{{ route('inquilinos.destroy', $inquilino->id_inquilino) }}">
					@csrf
					@method('DELETE')
					<button type="submit" class="btn btn-danger">Eliminar</button>
				</form>
			</div>
		</div>
	</div>
</div>
@endforeach
<!-- MODAL ELIMINAR -->


			<div class="card-body">
			  <div class="live-preview">
				<div class="table-responsive">
				  <div class="d-flex justify-content-end">

					<button type="button" class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#myModal">Agregar Inquilino</button>
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
							  <td>
								<button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#editarModal{{ $inquilino->id_inquilino }}">Editar</button>
							  </td>
							  <td>
								<button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#eliminarModal{{ $inquilino->id_inquilino }}">Eliminar</button>
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
