@extends('admin.layout.master')

@section('container')


          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->
          

            <div class="container-xxl flex-grow-1 container-p-y">
                <div style=" display: flex;align-items: baseline;flex-direction: column;">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Admin /</span> {{ __('form') }} </h4>

                </div>
          

              <!-- Examples -->
              <div class="row mb-5">
                <div class="col-md-4 col-lg-2 mb-3 card-body" style="border:1px solid #a1acb8;border-radius:8px">
                    @if(session()->has('message'))
                      <div class="alert alert-success">
                          {{ session()->get('message') }}
                      </div>
                  @endif
                    <form enctype="multipart/form-data" id="formAccountSettings">
                        @csrf
                        
    
                        <div class="mb-3 col-md-12 ">
                          <label for="home_meta_title" class="form-label">  {{ __('name') }} :</label>
                          <input  
                            class="form-control"
                           
                            value="{{  $form->name }}"
                             
                          />
                        </div>
      
                        <div class="mb-3 col-md-12 ">
                          <label for="home_meta_desc" class="form-label"> {{ __('email') }} :</label>
                          <input  
                            class="form-control"
                            value="{{  $form->email }}"
                          />
                        </div>
      
                        <div class="mb-3 col-md-12 ">
                          <label for="about_meta_title" class="form-label">  {{ __('message') }} :</label>
                          <textarea  class="form-control" cols="30" rows="10">{{  $form->message }}</textarea>
                        </div>
                     
                             </div>
                           </div>
                            </form>
                  </div>

              </div>
              <!-- Examples -->

            </div>
            <!-- / Content -->


            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->



    
@endsection