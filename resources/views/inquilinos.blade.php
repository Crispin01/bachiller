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

                    <div class="card-body">
                        <div class="live-preview">
                            <div class="table-responsive">
                                <table class="table align-middle table-nowrap mb-0">
                                    <thead>
                                        <tr>
                                            <th scope="col">ID</th>
                                            <th scope="col">Customer</th>
                                            <th scope="col">Date</th>
                                            <th scope="col">Invoice</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row"><a href="#" class="fw-medium">#VZ2110</a></th>
                                            <td>Bobby Davis</td>
                                            <td>October 15, 2021</td>
                                            <td>$2,300</td>
                                            <td><a href="javascript:void(0);" class="link-success">View More <i class="ri-arrow-right-line align-middle"></i></a></td>
                                        </tr>
                                        <tr>
                                            <th scope="row"><a href="#" class="fw-medium">#VZ2109</a></th>
                                            <td>Christopher Neal</td>
                                            <td>October 7, 2021</td>
                                            <td>$5,500</td>
                                            <td><a href="javascript:void(0);" class="link-success">View More <i class="ri-arrow-right-line align-middle"></i></a></td>
                                        </tr>
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
