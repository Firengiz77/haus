@extends('admin.layout.master')

@section('container')


          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->
          

            <div class="container-xxl flex-grow-1 container-p-y">
                <div style=" display: flex;align-items: baseline;flex-direction: column;">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Admin /</span> {{ __('meta_tag') }} </h4>

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
                    <form enctype="multipart/form-data" id="formAccountSettings" method="POST" action="{{ route('admin.meta_tags_update',$meta_tag) }}">
                        @csrf
                        
    
                        <div class="mb-3 col-md-12 ">
                          <label for="home_meta_title" class="form-label"> Home Meta {{ __('title') }} :</label>
                          <input  
                            class="form-control"
                            type="text"
                            id="home_meta_title" name="home_meta_title"  
                            value="{{ $meta_tag->home_meta_title }}"
                             
                          />
                        </div>
      
                        <div class="mb-3 col-md-12 ">
                          <label for="home_meta_desc" class="form-label">Home Meta {{ __('desc') }} :</label>
                          <input  
                            class="form-control"
                            type="text"
                            id="home_meta_desc" name="home_meta_desc"  
                            value="{{ $meta_tag->home_meta_desc }}"
                             
                          />
                        </div>
      
                        <div class="mb-3 col-md-12 ">
                          <label for="home_meta_keyw" class="form-label">Home Meta  {{ __('keyw') }} :</label>
                          <input  
                            class="form-control"
                            type="text"
                            id="home_meta_keyw" name="home_meta_keyw"  
                            value="{{ $meta_tag->home_meta_keyw }}"     
                              
                          />
                        </div>
      
      
                        {{-- about meta  --}}
                        <div class="mb-3 col-md-12 ">
                          <label for="about_meta_title" class="form-label"> About Meta {{ __('title') }} :</label>
                          <input  
                            class="form-control"
                            type="text"
                            id="about_meta_title" name="about_meta_title"  
                            value="{{ $meta_tag->about_meta_title }}"     
                             
                          />
                        </div>
      
                        <div class="mb-3 col-md-12 ">
                          <label for="about_meta_desc" class="form-label">About Meta {{ __('desc') }} :</label>
                          <input  
                            class="form-control"
                            type="text"
                            id="about_meta_desc" name="about_meta_desc"  
                            value="{{ $meta_tag->about_meta_desc }}"   
                             
                          />
                        </div>
      
                        <div class="mb-3 col-md-12 ">
                          <label for="about_meta_keyw" class="form-label">About Meta  {{ __('keyw') }} :</label>
                          <input  
                            class="form-control"
                            type="text"
                            id="about_meta_keyw" name="about_meta_keyw"  
                            value="{{ $meta_tag->about_meta_keyw }}"   
                             
                          />
                        </div>
      
                          {{-- contact meta  --}}
                          <div class="mb-3 col-md-12 ">
                            <label for="contact_meta_title" class="form-label"> Contact Meta {{ __('title') }} :</label>
                            <input  
                              class="form-control"
                              type="text"
                              id="contact_meta_title" name="contact_meta_title"  
                              value="{{ $meta_tag->contact_meta_title }}" 
                               
                            />
                          </div>
        
                          <div class="mb-3 col-md-12 ">
                            <label for="contact_meta_desc" class="form-label">Contact Meta {{ __('desc') }} :</label>
                            <input  
                              class="form-control"
                              type="text"
                              id="contact_meta_desc" name="contact_meta_desc"  
                              value="{{ $meta_tag->contact_meta_desc }}" 
                               
                            />
                          </div>
        
                          <div class="mb-3 col-md-12 ">
                            <label for="contact_meta_keyw" class="form-label">Contact Meta  {{ __('keyw') }} :</label>
                            <input  
                              class="form-control"
                              type="text"
                              id="contact_meta_keyw" name="contact_meta_keyw"  
                              value="{{ $meta_tag->contact_meta_keyw }}" 
                               
                            />
                          </div>
        
              
                                    {{-- portfolio meta  --}}
                                    <div class="mb-3 col-md-12 ">
                                      <label for="portfolio_meta_title" class="form-label"> Portfolio Meta {{ __('title') }} :</label>
                                      <input  
                                        class="form-control"
                                        type="text"
                                        id="portfolio_meta_title" name="portfolio_meta_title"  
                                        value="{{ $meta_tag->portfolio_meta_title }}" 
                                         
                                      />
                                    </div>
      
                                    <div class="mb-3 col-md-12 ">
                                      <label for="portfolio_meta_desc" class="form-label">Portfolio Meta {{ __('desc') }} :</label>
                                      <input  
                                        class="form-control"
                                        type="text"
                                        id="portfolio_meta_desc" name="portfolio_meta_desc"  
                                        value="{{ $meta_tag->portfolio_meta_desc }}" 
                                         
                                      />
                                    </div>
      
                                    <div class="mb-3 col-md-12 ">
                                      <label for="portfolio_meta_keyw" class="form-label">Portfolio Meta  {{ __('keyw') }} :</label>
                                      <input  
                                        class="form-control"
                                        type="text"
                                        id="portfolio_meta_keyw" name="portfolio_meta_keyw"  
                                        value="{{ $meta_tag->portfolio_meta_keyw }}" 
                                         
                                      />
                                    </div>

                         {{-- portfolio meta  --}}
                         <div class="mb-3 col-md-12 ">
                          <label for="blog_meta_title" class="form-label"> Blog Meta {{ __('title') }} :</label>
                          <input  
                            class="form-control"
                            type="text"
                            id="blog_meta_title" name="blog_meta_title"  
                            value="{{ $meta_tag->blog_meta_title }}" 
                             
                          />
                        </div>

                        <div class="mb-3 col-md-12 ">
                          <label for="blog_meta_desc" class="form-label">Blog Meta {{ __('desc') }} :</label>
                          <input  
                            class="form-control"
                            type="text"
                            id="blog_meta_desc" name="blog_meta_desc"  
                            value="{{ $meta_tag->blog_meta_desc }}" 
                             
                          />
                        </div>

                        <div class="mb-3 col-md-12 ">
                          <label for="blog_meta_keyw" class="form-label">Blog Meta  {{ __('keyw') }} :</label>
                          <input  
                            class="form-control"
                            type="text"
                            id="blog_meta_keyw" name="blog_meta_keyw"  
                            value="{{ $meta_tag->blog_meta_keyw }}" 
                             
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



    
@endsection