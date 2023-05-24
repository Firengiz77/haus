@extends('admin.layout.master')

@section('container')

  <!-- Content wrapper -->
  <div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
      <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Admin /</span>  {{ __('meta_tag') }}</h4>

      <!-- Basic Layout & Basic with Icons -->
      <div class="row">

        <!-- Basic with Icons -->
        <div class="col-lg-12">
          <div class="card mb-4">
            <div class="card-header d-flex align-items-center justify-content-between" style="display: flex;align-items: baseline;flex-direction: row;justify-content: space-between;">
              <h5 class="mb-0"> {{ __('add_tag') }}</h5>
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
            <div class="card-body">
              @if(session()->has('message'))
              <div class="alert alert-success">
                  {{ session()->get('message') }}
              </div>
          @endif



          <form enctype="multipart/form-data" id="formAccountSettings" method="POST" action="{{ route('admin.meta_tags_add') }}">
            @csrf
             <div class="d-flex align-items-start align-items-sm-center gap-4">
                 <div class="container">

                   <div class="mb-3 col-md-12 ">
                    <label for="home_meta_title" class="form-label"> Home Meta {{ __('title') }} :</label>
                    <input
                      class="form-control"
                      type="text"
                      id="home_meta_title" name="home_meta_title"  
                      placeholder=" Home Meta {{ __('title') }}"
                      required
                    />
                  </div>

                  <div class="mb-3 col-md-12 ">
                    <label for="home_meta_desc" class="form-label">Home Meta {{ __('desc') }} :</label>
                    <input
                      class="form-control"
                      type="text"
                      id="home_meta_desc" name="home_meta_desc"  
                      placeholder="Home Meta {{ __('desc') }}"
                      required
                    />
                  </div>

                  <div class="mb-3 col-md-12 ">
                    <label for="home_meta_keyw" class="form-label">Home Meta  {{ __('keyw') }} :</label>
                    <input
                      class="form-control"
                      type="text"
                      id="home_meta_keyw" name="home_meta_keyw"  
                      placeholder="Home Meta {{ __('keyw') }}"
                      required
                    />
                  </div>


                  {{-- about meta  --}}
                  <div class="mb-3 col-md-12 ">
                    <label for="about_meta_title" class="form-label"> About Meta {{ __('title') }} :</label>
                    <input
                      class="form-control"
                      type="text"
                      id="about_meta_title" name="about_meta_title"  
                      placeholder=" About Meta {{ __('title') }}"
                      required
                    />
                  </div>

                  <div class="mb-3 col-md-12 ">
                    <label for="about_meta_desc" class="form-label">About Meta {{ __('desc') }} :</label>
                    <input
                      class="form-control"
                      type="text"
                      id="about_meta_desc" name="about_meta_desc"  
                      placeholder="About Meta {{ __('desc') }}"
                      required
                    />
                  </div>

                  <div class="mb-3 col-md-12 ">
                    <label for="about_meta_keyw" class="form-label">About Meta  {{ __('keyw') }} :</label>
                    <input
                      class="form-control"
                      type="text"
                      id="about_meta_keyw" name="about_meta_keyw"  
                      placeholder=" About Meta {{ __('keyw') }}"
                      required
                    />
                  </div>

                    {{-- contact meta  --}}
                    <div class="mb-3 col-md-12 ">
                      <label for="contact_meta_title" class="form-label"> Contact Meta {{ __('title') }} :</label>
                      <input
                        class="form-control"
                        type="text"
                        id="contact_meta_title" name="contact_meta_title"  
                        placeholder=" Contact Meta {{ __('title') }}"
                        required
                      />
                    </div>
  
                    <div class="mb-3 col-md-12 ">
                      <label for="contact_meta_desc" class="form-label">Contact Meta {{ __('desc') }} :</label>
                      <input
                        class="form-control"
                        type="text"
                        id="contact_meta_desc" name="contact_meta_desc"  
                        placeholder="Contact Meta {{ __('desc') }}"
                        required
                      />
                    </div>
  
                    <div class="mb-3 col-md-12 ">
                      <label for="contact_meta_keyw" class="form-label">Contact Meta  {{ __('keyw') }} :</label>
                      <input
                        class="form-control"
                        type="text"
                        id="contact_meta_keyw" name="contact_meta_keyw"  
                        placeholder=" Contact Meta {{ __('keyw') }}"
                        required
                      />
                    </div>
  
                          {{-- blog meta  --}}
                          <div class="mb-3 col-md-12 ">
                            <label for="blog_meta_title" class="form-label"> Blog Meta {{ __('title') }} :</label>
                            <input
                              class="form-control"
                              type="text"
                              id="blog_meta_title" name="blog_meta_title"  
                              placeholder=" Blog Meta {{ __('title') }}"
                              required
                            />
                          </div>
        
                          <div class="mb-3 col-md-12 ">
                            <label for="blog_meta_desc" class="form-label">Blog Meta {{ __('desc') }} :</label>
                            <input
                              class="form-control"
                              type="text"
                              id="blog_meta_desc" name="blog_meta_desc"  
                              placeholder="Blog Meta {{ __('desc') }}"
                              required
                            />
                          </div>
        
                          <div class="mb-3 col-md-12 ">
                            <label for="blog_meta_keyw" class="form-label">Blog Meta  {{ __('keyw') }} :</label>
                            <input
                              class="form-control"
                              type="text"
                              id="blog_meta_keyw" name="blog_meta_keyw"  
                              placeholder=" Blog Meta {{ __('keyw') }}"
                              required
                            />
                          </div>
        
                              {{-- portfolio meta  --}}
                              <div class="mb-3 col-md-12 ">
                                <label for="portfolio_meta_title" class="form-label"> Portfolio Meta {{ __('title') }} :</label>
                                <input
                                  class="form-control"
                                  type="text"
                                  id="portfolio_meta_title" name="portfolio_meta_title"  
                                  placeholder=" Portfolio Meta {{ __('title') }}"
                                  required
                                />
                              </div>

                              <div class="mb-3 col-md-12 ">
                                <label for="portfolio_meta_desc" class="form-label">Portfolio Meta {{ __('desc') }} :</label>
                                <input
                                  class="form-control"
                                  type="text"
                                  id="portfolio_meta_desc" name="portfolio_meta_desc"  
                                  placeholder="Portfolio Meta {{ __('desc') }}"
                                  required
                                />
                              </div>

                              <div class="mb-3 col-md-12 ">
                                <label for="portfolio_meta_keyw" class="form-label">Portfolio Meta  {{ __('keyw') }} :</label>
                                <input
                                  class="form-control"
                                  type="text"
                                  id="portfolio_meta_keyw" name="portfolio_meta_keyw"  
                                  placeholder=" Portfolio Meta {{ __('keyw') }}"
                                  required
                                />
                              </div>
              
                   <button type="submit" class="btn btn-outline-secondary account-image-reset mb-4">
                     <i class="bx bx-reset d-block d-sm-none"></i>
                     <span class="d-none d-sm-block"> {{ __('add') }} </span>
                   </button>

                   
                 </div>
               </div>
                </form>

    
            </div>
          </div>
        </div>


      </div>
    </div>
    <!-- / Content -->


    <script src="{{ asset('/admin/js/file-upload.js') }}"></script>
    <script src="{{ asset('/admin/js/translate.js') }}"></script>
    <script src="{{ asset('/admin/vendors/ckeditor/ckeditor.js') }}"></script>
    <script src="{{ asset('/admin/assets/js/cketditor.js') }}"></script>
@endsection
