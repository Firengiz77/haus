@extends('admin.layout.master')

@section('container')


          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->
          

            <div class="container-xxl flex-grow-1 container-p-y">
                <div style=" display: flex;align-items: baseline;flex-direction: column;">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">{{ __('admin') }} /</span> {{ __('brands') }} </h4>

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
          

                @if($errors->any())

@foreach($errors->all() as $error)
<div class="alert alert-danger" role="alert" > {{$error}} </div>
@endforeach

@endif


              <!-- Examples -->
              <div class="row mb-5">
                <div class="col-md-4 col-lg-2 mb-3 card-body" style="border:1px solid #a1acb8;border-radius:8px">
                    @if(session()->has('message'))
                      <div class="alert alert-success">
                          {{ session()->get('message') }}
                      </div>
                  @endif
                    <form enctype="multipart/form-data" id="formAccountSettings" method="POST" action="{{ route('admin.brands_update',$brand->id) }}">
                        @csrf


                        <div class="form-group">
        
                          <input type="hidden" name="category_id" value="{{ $main_cat->id }}">
                        

    
                          <div class="mb-3 col-md-12 ">
                            <label for="name" class="form-label">{{ __('name') }}</label>
                            <input
                              class="form-control"
                              type="text"
                              id="name" name="name" 
                              value="{{ $brand->name }}" 
                              placeholder="{{ $brand->name }}"
                            />
                          </div>
                      
                          <div class="mb-3 col-md-12 ">
                            <label for="meta_title" class="form-label"> {{ __('meta_title') }} :</label>
                            <input required
                              class="form-control"
                              type="text"
                              id="meta_title" name="meta_title"  
                              value="{{ $brand->meta_title }}" 
                            />
                          </div>
                          <div class="mb-3 col-md-12 ">
                            <label for="meta_desc" class="form-label"> {{ __('meta_desc') }} :</label>
                            <input required
                              class="form-control"
                              type="text"
                              id="meta_desc" name="meta_desc"  
                              value="{{ $brand->meta_desc }}" 
                            />
                          </div>
                          <div class="mb-3 col-md-12 ">
                            <label for="meta_keyw" class="form-label"> {{ __('meta_keyw') }} :</label>
                            <input required
                              class="form-control"
                              type="text"
                              id="meta_keyw" name="meta_keyw"  
                              value="{{ $brand->meta_keyw }}" 
                            />
                          </div>
        
                          <div class="mb-3">
                            <label>{{ __('thumbnail') }}:</label>
                            <input  type="file" class="form-control" name="image"
                                onchange="ThumbnailUrl(this)" >
                            @error('image')
                                <span class="text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <img class="mb-3" src="" id="thumbnail">
                    </div>
                    <div class="col-md-12">
                        <div class="mb-3">
                            <label>{{ __('current_thumbnail') }}:</label>
                            <img style="width: 80px; object-fit:cover" src="{{ asset($brand->image) }}"
                                alt="">
                        </div>
                    </div>


                    <div class="mb-3">
                      <label>{{ __('thumbnail') }}:</label>
                      <input  type="file" class="form-control" name="logo"
                          onchange="ThumbnailUrl2(this)" >
                      @error('logo')
                          <span class="text-danger" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                  
                  <img class="mb-3" src="" id="thumbnail2">
              </div>
              <div class="col-md-12">
                  <div class="mb-3">
                      <label>{{ __('current_thumbnail') }}:</label>
                      <img style="width: 80px; object-fit:cover" src="{{ asset($brand->logo) }}"
                          alt="">
                  </div>
              </div>

                          <div class="mb-3 col-md-12 ">
                            <label for="meta_keyw" class="form-label"> {{ __('desc') }} :</label>
                            <textarea name="desc"    class="form-control" id="" cols="30" rows="10">{{ $brand->desc }} </textarea>
                          </div>
        
             <div class="mb-3 col-md-12 ">
                          <label for="image">Multiple Image</label>
                          <input type="file" name="images[]"  multiple class="form-control" id="image" >
                       </div>
                  
                  
                  
        
                   <div class="upload-box" style="flex-wrap:wrap;display:flex;margin-bottom:20px">
                @if($brand !== null)
                    @foreach ($brand->images as $key => $images)
                    <div class="col-md-3"  >
                        <div class="image-box">
                            <img src="{{ asset('uploads/brand/' . $images) }}"   style="margin:10px;width:150px;height:150px;box-shadow:2px 2px 4px gray" alt="">
                           <div id="newform24" class='a_remove2_{{$key}}'>
                            <button type="button" data_id="{{$key}}" class="a_remove3 btn btn-primary me-2" onclick="delete_images('{{route('admin.delete_images_brand',$brand->id)}}','{{ $key }}')"  id="{{ $key }}" >
																 <input type="hidden" name="current_images[]" value="{{ $images }}" id='a_remove'>
                                    Delete
                               </button>
                              </div>
                        </div>
                         </div>
                    @endforeach
                    @endif

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




        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js" integrity="sha512-n/4gHW3atM3QqRcbCn6ewmpxcLAHGaDjpEBu4xZd47N0W2oQ+6q7oc3PXstrJYXcbNU1OHdQ1T7pAP+gi5Yu8g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    
        <script>
          $('.delete-confirm').on('click', function (event) {
              event.preventDefault();
              const url = $(this).attr('href');
              swal({
                  title: 'Are you sure?',
                  text: 'This record and it`s details will be permanantly deleted!',
                  icon: 'warning',
                  buttons: ["Cancel", "Yes!"],
              }).then(function(value) {
                  if (value) {
                      window.location.href = url;
                  }
              });
          });
    </script>



<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
 crossorigin="anonymous" referrerpolicy="no-referrer"></script>
 
<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script> 

    {{-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script> --}}
    {{-- <script src="{{ asset('back/assets/js/swal.js') }}"></script> --}}



<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js" integrity="sha512-n/4gHW3atM3QqRcbCn6ewmpxcLAHGaDjpEBu4xZd47N0W2oQ+6q7oc3PXstrJYXcbNU1OHdQ1T7pAP+gi5Yu8g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8.0.6/dist/sweetalert2.all.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/sweetalert2@8.0.6/dist/sweetalert2.min.css" rel="stylesheet"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


<script>
  $(function() {
  const events = {
    click: 'click'
  };
  
  const $button = $('.delete-confirm');
  
  $button.on(events.click, function(event) {

  });
})


  </script>
<script src="{{ asset('/admin/js/own.js') }}"></script>






    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js" ></script>
    <script src="{{ asset('/admin/vendors/ckeditor/ckeditor.js') }}"></script>
    <script src="{{ asset('/admin/assets/js/cketditor.js') }}"></script>
   


<script>
    function ThumbnailUrl(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#thumbnail').attr('src', e.target.result).width(100).height(90);
            };
            reader.readAsDataURL(input.files[0]);
        }
    };
    function ThumbnailUrl2(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#thumbnail2').attr('src', e.target.result).width(100).height(90);
            };
            reader.readAsDataURL(input.files[0]);
        }
    }
</script>

    
@endsection