@extends('admin.layout.master')

@section('container')

<link rel="stylesheet" href="{{ asset('/admin/assets/css/choise.css')}}">

  <!-- Content wrapper -->
  <div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
      <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Admin /</span> {{ __('products') }}</h4>

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


          @if($errors->any())

          @foreach($errors->all() as $error)
        <div class="alert alert-danger" role="alert" > {{$error}} </div>
          @endforeach

          @endif

          <form enctype="multipart/form-data" id="formAccountSettings" method="POST" action="{{ route('admin.product_add') }}">
            @csrf
             <div class="d-flex align-items-start align-items-sm-center gap-4">
                 <div class="container">




                 <div class="form-group">
                          <select name="cat_id" id="" class="form-select">
                            <option value="0"> {{ __('select_category') }}</option>
                            @foreach($brands as $brand)
                            <option value="{{ $brand->id }}" > {{ $brand->name }} </option>
                            @endforeach
                          </select>
                        </div>
      
                      <div class="col-md-4">
                          <div class="mb-3">
                              <label>{{ __('sub_category') }}:</label>
                              <select name="category1_id" class="form-control">
                                  <option style="text-align: center;color:red" value="">Alt
                                      kateqoriya yoxdursa bunu seçin</option>
                              </select>
                              @error('sub_category_id')
                                  <span class="text-danger" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>
                      </div>

                      <div class="col-md-4">
                        <div class="mb-3">
                            <label>{{ __('sub_category') }}:</label>
                            <select name="category_id" class="form-control">
                                <option style="text-align: center;color:red" value="">Alt
                                    kateqoriya yoxdursa bunu seçin</option>
                            </select>
                            @error('category_id')
                                <span class="text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>


          

                 <div class="form-group">


                  <label for="image">Multiple Image</label>
                  <input type="file" name="images[]"  multiple class="form-control" id="image" >
                </div>


                 
          

                  <div class="mb-3 col-md-12">
                    <label for="alt" class="form-label">{{ __('alt') }} :</label>
                    <input required
                      class="form-control"
                      type="text"
                      id="alt" name="alt"  
                      placeholder="{{ __('alt_title') }}"
                    />
                  </div>

                  
             
                  
                  <div class="mb-3 col-md-12">
                    <label for="meta_title" class="form-label">{{ __('meta_title') }} :</label>
                    <input
                      class="form-control"
                      type="text"
                      id="meta_title" name="meta_title"  
                      placeholder="{{ __('meta_title') }}"
                    />
                  </div>

                  <div class="mb-3 col-md-12">
                    <label for="meta_desc" class="form-label">{{ __('meta_desc') }} :</label>
                    <input
                      class="form-control"
                      type="text"
                      id="meta_desc" name="meta_desc"  
                      placeholder="{{ __('meta_desc') }}"
                    />
                  </div>
                  <div class="mb-3 col-md-12">
                    <label for="meta_keyword" class="form-label">{{ __('meta_keyword') }} :</label>
                    <input
                      class="form-control"
                      type="text"
                      id="meta_keyword" name="meta_keyword"  
                      placeholder="{{ __('meta_keyword') }}"
                    />
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
   

    <script>
    $(document).ready(function() {
        var multipleCancelButton = new Choices('#choices-multiple-remove-button', {
            removeItemButton: true,
        });
    });
</script>



<script>
  $(document).ready(function() {
      $('select[name="cat_id"]').on('change', function() {
          var category1_id = $(this).val();
          if (category1_id) {
              $.ajax({
                  url: "/admin/category/ajax/" + category1_id,
                  type: "GET",
                  success: function(data) {
                      $('select[name="category1_id"]').html('')
                      $('select[name="category1_id"]').html(
                          `<option value="">Alt Kateqoriya yoxdursa bunu SEÇİN</option>`
                      )
                      $('select[name="category1_id"]').append(data)
                  },
              });
          } else {
              $('select[name="category1_id"]').html(
                  `<option value="">Alt Kateqoriya yoxdursa bunu SEÇİN</option>`
              )
          }
      });
  });
</script>

<script>
  $(document).ready(function() {
      $('select[name="category1_id"]').on('change', function() {
          var category_id = $(this).val();
          if (category_id) {
              $.ajax({
                  url: "/admin/category/ajax/" + category_id,
                  type: "GET",
                  success: function(data) {
                      $('select[name="category_id"]').html('')
                      $('select[name="category_id"]').html(
                          `<option value="">Alt Kateqoriya yoxdursa bunu SEÇİN</option>`
                      )
                      $('select[name="category_id"]').append(data)
                  },
              });
          } else {
              $('select[name="category_id"]').html(
                  `<option value="">Alt Alt Kateqoriya yoxdursa bunu SEÇİN</option>`
              )
          }
      });
  });
</script>

@endsection
