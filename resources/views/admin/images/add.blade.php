@extends('admin.layout.master')

@section('container')

<link rel="stylesheet" href="{{ asset('/admin/assets/css/choise.css')}}">

  <!-- Content wrapper -->
  <div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
      <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Admin /</span> {{ __('attributes') }}</h4>

      <!-- Basic Layout & Basic with Icons -->
      <div class="row">

        <!-- Basic with Icons -->
        <div class="col-lg-12">
          <div class="card mb-4">
            <div class="card-header d-flex align-items-center justify-content-between" style="display: flex;align-items: baseline;flex-direction: row;justify-content: space-between;">
              <h5 class="mb-0">{{ __('add') }}</h5>
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


          <form enctype="multipart/form-data" id="formAccountSettings" method="POST" action="{{ route('admin.images_add') }}">
            @csrf
             <div class="d-flex align-items-start align-items-sm-center gap-4">
                 <div class="container">

          
                  
                  <div class="col-md-12">
                    <div class="mb-3">
                      <label>{{ __('thumbnail') }}:</label>
                        <input required type="file" class="form-control" name="image[]"
                         onchange="ThumbnailUrl(this)" required multiple>
                       @error('image')
                                    <span class="text-danger" role="alert">
                                       <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                     </div>
                           <img class="mb-3" src="" id="thumbnail">
                 </div>
                 
 
                
                   <button type="submit" class="btn btn-outline-secondary account-image-reset mb-4">
                     <i class="bx bx-reset d-block d-sm-none"></i>
                     <span class="d-none d-sm-block">{{ __('add') }}</span>
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



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js" ></script>
    <script src="{{ asset('/admin/vendors/ckeditor/ckeditor.js') }}"></script>
    <script src="{{ asset('/admin/assets/js/cketditor.js') }}"></script>
    <script src="{{ asset('/admin/js/choise.js')}} "></script>
   
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
    }
</script>


@endsection