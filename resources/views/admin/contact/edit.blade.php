@extends('admin.layout.master')

@section('container')
<link rel="stylesheet" href="{{ asset('/admin/assets/css/choise.css')}}">


          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->
          

            <div class="container-xxl flex-grow-1 container-p-y">
                <div style=" display: flex;align-items: baseline;flex-direction: column;">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Admin /</span> {{ __('contact') }} </h4>

              <ul class="d-flex justify-content-end">
                                    @foreach ($all_languages as $a_language)
                                        <li style="margin-right: 10px">
                                            <a class="btn btn-{{ app()->getLocale() == $a_language->code ? 'danger' : 'primary' }} btn-large"
                                                href="{{ route('locale', $a_language->code) }}">
                                                {{ $a_language->code }}
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>

                </div>
          

              <!-- Examples -->
              <div class="row mb-5">
                <div class="col-md-4 col-lg-2 mb-3 card-body" style="border:1px solid #a1acb8;border-radius:8px">
                    @if(session()->has('message'))
                      <div class="alert alert-success">
                          {{ session()->get('message') }}
                      </div>
                  @endif
                    <form enctype="multipart/form-data" id="formAccountSettings" method="POST" action="{{ route('admin.contact_update',$contact) }}">
                        @csrf

                     

                          <div class="mb-3 col-md-12 ">
                            <label for="email" class="form-label">{{ __('email') }} :</label>
                            <input 
                              class="form-control"
                              type="text"
                              id="email" name="email" 
                              value="{{ $contact->email }}" 
                            />
                          </div>
                          <div class="mb-3 col-md-12 ">
                            <label for="phone" class="form-label">{{ __('phone') }} :</label>
                            <input 
                              class="form-control"
                              type="text"
                              id="phone" name="phone" 
                              value="{{ $contact->phone }}" 
                            />
                          </div>

                     
                          <div class="mb-3 col-md-12">
                            <label for="desc" class="form-label">{{ __('address') }} :</label>
                            <textarea name="address"  class="form-control" id="editor" cols="30" rows="10">{{ $contact->address }}</textarea>
                          </div>


                          <div class="mb-3 col-md-12 ">
                            <label for="fb" class="form-label">{{ __('fb') }} :</label>
                            <input 
                              class="form-control"
                              type="text"
                              id="fb" name="fb" 
                              value="{{ $contact->fb }}" 
                            />
                          </div>
                          <div class="mb-3 col-md-12 ">
                            <label for="wp" class="form-label">{{ __('wp') }} :</label>
                            <input
                              class="form-control"
                              type="text"
                              id="wp" name="wp" 
                              value="{{ $contact->wp }}" 
                            />
                          </div>
                          <div class="mb-3 col-md-12 ">
                            <label for="linkedin" class="form-label">{{ __('linkedin') }} :</label>
                            <input
                              class="form-control"
                              type="text"
                              id="linkedin" name="linkedin" 
                              value="{{ $contact->linkedin }}" 
                            />
                          </div>
                          <div class="mb-3 col-md-12 ">
                            <label for="insta" class="form-label">{{ __('insta') }} :</label>
                            <input
                              class="form-control"
                              type="text"
                              id="insta" name="insta" 
                              value="{{ $contact->insta }}" 
                               />
                           </div>
                               <button type="submit" class="btn btn-outline-secondary account-image-reset mb-4">
                                 <i class="bx bx-reset d-block d-sm-none"></i>
                                 <span class="d-none d-sm-block">{{ __('edit') }}</span>
                               </button>
     
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


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js" ></script>
    <script src="{{ asset('/admin/vendors/ckeditor/ckeditor.js') }}"></script>
    <script src="{{ asset('/admin/assets/js/cketditor.js') }}"></script>

   



@endsection