@extends('admin.layout.master')

@section('container')

  <!-- Content wrapper -->
  <div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
      <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Admin /</span>  {{ __('brand') }}</h4>

      <!-- Basic Layout & Basic with Icons -->
      <div class="row">

        <!-- Basic with Icons -->
        <div class="col-lg-12">
          <div class="card mb-4">
            <div class="card-header d-flex align-items-center justify-content-between" style="display: flex;align-items: baseline;flex-direction: row;justify-content: space-between;">
              <h5 class="mb-0"> {{ __('add_category') }}</h5>
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

          
          @if($errors->any())

@foreach($errors->all() as $error)
<div class="alert alert-danger" role="alert" > {{$error}} </div>
@endforeach

@endif


          <form enctype="multipart/form-data" id="formAccountSettings" method="POST" action="{{ route('admin.brands_add') }}">
            @csrf
             <div class="d-flex align-items-start align-items-sm-center gap-4">
                 <div class="container">


                 <div class="form-group">
                <input type="hidden" name="category_id" value="0">



                   <div class="mb-3 col-md-12 ">
                    <label for="name" class="form-label"> {{ __('name') }} :</label>
                    <input required
                      class="form-control"
                      type="text"
                      id="name" name="name"  
                      placeholder=" {{ __('name') }}"
                    />
                  </div>

                  <div class="mb-3 col-md-12 ">
                    <label for="meta_title" class="form-label"> {{ __('meta_title') }} :</label>
                    <input required
                      class="form-control"
                      type="text"
                      id="meta_title" name="meta_title"  
                      placeholder=" {{ __('meta_title') }}"
                    />
                  </div>
                  <div class="mb-3 col-md-12 ">
                    <label for="meta_desc" class="form-label"> {{ __('meta_desc') }} :</label>
                    <input required
                      class="form-control"
                      type="text"
                      id="meta_desc" name="meta_desc"  
                      placeholder=" {{ __('meta_desc') }}"
                    />
                  </div>
                  <div class="mb-3 col-md-12 ">
                    <label for="meta_keyw" class="form-label"> {{ __('meta_keyw') }} :</label>
                    <input required
                      class="form-control"
                      type="text"
                      id="meta_keyw" name="meta_keyw"  
                      placeholder=" {{ __('meta_keyw') }}"
                    />
                  </div>


                  <div class="col-md-12">
                    <div class="mb-3">
                      <label>{{ __('thumbnail') }}:</label>
                        <input required type="file" class="form-control" name="image"
                         onchange="ThumbnailUrl(this)" required>
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
                    <label>{{ __('backround_image') }} 2:</label>
                      <input required type="file" class="form-control" name="logo"
                       onchange="ThumbnailUrl2(this)" required>
                     @error('logo')
                                  <span class="text-danger" role="alert">
                                     <strong>{{ $message }}</strong>
                                  </span>
                      @enderror
                   </div>
                         <img class="mb-3" src="" id="thumbnail2">
               </div>
               


                  <div class="mb-3 col-md-12 ">
                    <label for="meta_keyw" class="form-label"> {{ __('desc') }} :</label>
                    <textarea name="desc"    class="form-control" id="" cols="30" rows="10"></textarea>
                  </div>

              
               <div class="mb-3 col-md-12 ">
                   <label for="image">Multiple Image</label>
                    <input type="file" name="images[]"  multiple class="form-control" id="image" required>
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


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js" ></script>


   
 
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
