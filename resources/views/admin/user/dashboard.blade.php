@extends('admin.layout.master')
@section('container')
@php
$id=auth()->id();
$admin=App\Models\User::find($id);
@endphp

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <div class="row">
                <div class="col-lg-12 mb-4 order-0">
                @if(session()->has('message'))
                <div class="alert alert-success">
                    {{ session()->get('message') }}
                </div>
            @endif
                  <div class="card">
                    <div class="d-flex align-items-end row ">
                      <div class="col-sm-7">
                        <div class="card-body">
                          <h5 class="card-title text-primary">Welcome to Haus Luxury Admin panel , {{$admin->name}} 🎉</h5>
                          <p class="mb-4">
                            Check your new badge in your profile.
                          </p>
                        </div>
                      </div>
                      <div class="col-sm-5 text-center text-sm-left">
                        <div class="card-body pb-0 px-0 px-md-4">
                          <img
                            src="{{asset('/admin/assets/img/illustrations/man-with-laptop-light.png')}}"
                            height="140"
                            alt="View Badge User"
                            data-app-dark-img="illustrations/man-with-laptop-dark.png"
                            data-app-light-img="illustrations/man-with-laptop-light.png"
                          />
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-12 col-md-12 order-1 " style="margin-top: 50px">
                      <div class="row">
                        <div class="col-lg-4 col-md-4 col-6 mb-4">
                          <div class="card">
                            <div class="card-body">
                              <div class="card-title d-flex align-items-start justify-content-between">
                                <div class="avatar flex-shrink-0">
                                  <img
                                    src="{{ asset('/admin/assets/img/icons/unicons/chart-success.png') }}"
                                    alt="chart success"
                                    class="rounded"
                                  />
                                </div>
                                <div class="dropdown">
                                  <button
                                    class="btn p-0"
                                    type="button"
                                    id="cardOpt3"
                                    data-bs-toggle="dropdown"
                                    aria-haspopup="true"
                                    aria-expanded="false"
                                  >
                                    <i class="bx bx-dots-vertical-rounded"></i>
                                  </button>
                                  <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                                    <a class="dropdown-item" href="{{ route('admin.all_admin') }}">View More</a>
                                  </div>
                                </div>
                              </div>
                              <span class="fw-semibold d-block mb-1">User</span>
                              <h3 class="card-title mb-2">{{ count($user) }}</h3>

                            </div>
                          </div>
                        </div>
          
          
          
          
          
          
                         <div class="col-lg-4 col-md-4 col-6 mb-4">
                          <div class="card">
                            <div class="card-body">
                              <div class="card-title d-flex align-items-start justify-content-between">
                                <div class="avatar flex-shrink-0">
                                  <img
                                    src="{{ asset('/admin/assets/img/icons/unicons/chart-success.png') }}"
                                    alt="chart success"
                                    class="rounded"
                                  />
                                </div>
                                <div class="dropdown">
                                  <button
                                    class="btn p-0"
                                    type="button"
                                    id="cardOpt3"
                                    data-bs-toggle="dropdown"
                                    aria-haspopup="true"
                                    aria-expanded="false"
                                  >
                                    <i class="bx bx-dots-vertical-rounded"></i>
                                  </button>
                                  <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                                    <a class="dropdown-item" href="{{ route('admin.blog') }}">View More</a>
                                  </div>
                                </div>
                              </div>
                              <span class="fw-semibold d-block mb-1">Blog</span>
                              <h3 class="card-title mb-2">{{ count($blog) }}</h3>

                            </div>
                          </div>
                        </div>
               <div class="col-lg-4 col-md-4 col-6 mb-4">
                          <div class="card">
                            <div class="card-body">
                              <div class="card-title d-flex align-items-start justify-content-between">
                                <div class="avatar flex-shrink-0">
                                  <img
                                    src="{{ asset('/admin/assets/img/icons/unicons/chart-success.png') }}"
                                    alt="chart success"
                                    class="rounded"
                                  />
                                </div>
                                <div class="dropdown">
                                  <button
                                    class="btn p-0"
                                    type="button"
                                    id="cardOpt3"
                                    data-bs-toggle="dropdown"
                                    aria-haspopup="true"
                                    aria-expanded="false"
                                  >
                                    <i class="bx bx-dots-vertical-rounded"></i>
                                  </button>
                                  <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                                    <a class="dropdown-item" href="{{ route('admin.product') }}">View More</a>
                                  </div>
                                </div>
                              </div>
                              <span class="fw-semibold d-block mb-1">Products</span>
                              <h3 class="card-title mb-2">{{ count($product) }}</h3>

                            </div>
                          </div>
                        </div>
           <div class="col-lg-4 col-md-4 col-6 mb-4">
                          <div class="card">
                            <div class="card-body">
                              <div class="card-title d-flex align-items-start justify-content-between">
                                <div class="avatar flex-shrink-0">
                                  <img
                                    src="{{ asset('/admin/assets/img/icons/unicons/chart-success.png') }}"
                                    alt="chart success"
                                    class="rounded"
                                  />
                                </div>
                                <div class="dropdown">
                                  <button
                                    class="btn p-0"
                                    type="button"
                                    id="cardOpt3"
                                    data-bs-toggle="dropdown"
                                    aria-haspopup="true"
                                    aria-expanded="false"
                                  >
                                    <i class="bx bx-dots-vertical-rounded"></i>
                                  </button>
                                  <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                                    <a class="dropdown-item" href="{{ route('admin.slider') }}">View More</a>
                                  </div>
                                </div>
                              </div>
                              <span class="fw-semibold d-block mb-1">Slider</span>
                              <h3 class="card-title mb-2">{{ count($slider) }}</h3>

                            </div>
                          </div>
                        </div>
         
            <!-- / Content -->

       

            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
    

  
  
 <!-- Vendors JS -->
 <script src="{{asset('/admin/assets/vendor/libs/apex-charts/apexcharts.js')}}"></script>


@endsection