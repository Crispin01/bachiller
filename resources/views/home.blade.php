@extends('layouts.admin')
@section('content')

    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content">
      <div class="page-content">
        <div class="container-fluid">

        <div class="row">
          <div class="col-xl-6 col-md-12">
              <!-- card -->
              <div class="card card-animate">
                  <div class="card-body">
                      <div class="d-flex align-items-center">
                          <div class="flex-grow-1 overflow-hidden">
                              <p class="text-uppercase fw-medium text-muted text-truncate mb-0"> Total Earnings</p>
                          </div>
                          <div class="flex-shrink-0">
                              <h5 class="text-success fs-14 mb-0">
                                  <i class="ri-arrow-right-up-line fs-13 align-middle"></i> +16.24 %
                              </h5>
                          </div>
                      </div>
                      <div class="d-flex align-items-end justify-content-between mt-4">
                          <div>
                              <h4 class="fs-22 fw-semibold ff-secondary mb-4">$<span class="counter-value" data-target="559.25">0</span>k </h4>
                              <a href="" class="text-decoration-underline">View net earnings</a>
                          </div>
                          <div class="avatar-sm flex-shrink-0">
                              <span class="avatar-title bg-success rounded fs-3">
                                  <i class="bx bx-dollar-circle"></i>
                              </span>
                          </div>
                      </div>
                  </div><!-- end card body -->
              </div><!-- end card -->
          </div><!-- end col -->

          <div class="col-xl-6 col-md-12">
              <!-- card -->
              <div class="card card-animate">
                  <div class="card-body">
                      <div class="d-flex align-items-center">
                          <div class="flex-grow-1 overflow-hidden">
                              <p class="text-uppercase fw-medium text-muted text-truncate mb-0">Orders</p>
                          </div>
                          <div class="flex-shrink-0">
                              <h5 class="text-danger fs-14 mb-0">
                                  <i class="ri-arrow-right-down-line fs-13 align-middle"></i> -3.57 %
                              </h5>
                          </div>
                      </div>
                      <div class="d-flex align-items-end justify-content-between mt-4">
                          <div>
                              <h4 class="fs-22 fw-semibold ff-secondary mb-4"><span class="counter-value" data-target="36894">0</span></h4>
                              <a href="" class="text-decoration-underline">View all orders</a>
                          </div>
                          <div class="avatar-sm flex-shrink-0">
                              <span class="avatar-title bg-info rounded fs-3">
                                  <i class="bx bx-shopping-bag"></i>
                              </span>
                          </div>
                      </div>
                  </div><!-- end card body -->
              </div><!-- end card -->
          </div><!-- end col -->

          <div class="col-xl-6 col-md-12">
              <!-- card -->
              <div class="card card-animate">
                  <div class="card-body">
                      <div class="d-flex align-items-center">
                          <div class="flex-grow-1 overflow-hidden">
                              <p class="text-uppercase fw-medium text-muted text-truncate mb-0">Customers</p>
                          </div>
                          <div class="flex-shrink-0">
                              <h5 class="text-success fs-14 mb-0">
                                  <i class="ri-arrow-right-up-line fs-13 align-middle"></i> +29.08 %
                              </h5>
                          </div>
                      </div>
                      <div class="d-flex align-items-end justify-content-between mt-4">
                          <div>
                              <h4 class="fs-22 fw-semibold ff-secondary mb-4"><span class="counter-value" data-target="183.35">0</span>M </h4>
                              <a href="" class="text-decoration-underline">See details</a>
                          </div>
                          <div class="avatar-sm flex-shrink-0">
                              <span class="avatar-title bg-warning rounded fs-3">
                                  <i class="bx bx-user-circle"></i>
                              </span>
                          </div>
                      </div>
                  </div><!-- end card body -->
              </div><!-- end card -->
          </div><!-- end col -->

          <div class="col-xl-6 col-md-12">
              <!-- card -->
              <div class="card card-animate">
                  <div class="card-body">
                      <div class="d-flex align-items-center">
                          <div class="flex-grow-1 overflow-hidden">
                              <p class="text-uppercase fw-medium text-muted text-truncate mb-0"> My Balance</p>
                          </div>
                          <div class="flex-shrink-0">
                              <h5 class="text-muted fs-14 mb-0">
                                  +0.00 %
                              </h5>
                          </div>
                      </div>
                      <div class="d-flex align-items-end justify-content-between mt-4">
                          <div>
                              <h4 class="fs-22 fw-semibold ff-secondary mb-4">$<span class="counter-value" data-target="165.89">0</span>k </h4>
                              <a href="" class="text-decoration-underline">Withdraw money</a>
                          </div>
                          <div class="avatar-sm flex-shrink-0">
                              <span class="avatar-title bg-danger rounded fs-3">
                                  <i class="bx bx-wallet"></i>
                              </span>
                          </div>
                      </div>
                  </div><!-- end card body -->
              </div><!-- end card -->
          </div><!-- end col -->
        </div> <!-- end row-->

        {{-- <div class="row">
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

        </div> --}}
      </div>
    </div>



@endsection
