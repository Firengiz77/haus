@extends('admin.layout.master')

@section('container')
<link rel="stylesheet" href="{{ asset('/admin/assets/css/choise.css')}}">


          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->
          

            <div class="container-xxl flex-grow-1 container-p-y">
                <div style=" display: flex;align-items: baseline;flex-direction: column;">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Admin /</span> {{ __('product') }} </h4>

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

                  @if($errors->any())

                @foreach($errors->all() as $error)
                <div class="alert alert-danger" role="alert" > {{$error}} </div>
                @endforeach
                @endif


                    <form enctype="multipart/form-data" id="formAccountSettings" method="POST" action="{{ route('admin.product_update',$product) }}">
                        @csrf

                        <div class="col-md-12">
                          <div class="mb-3">
                              <label>{{ __('category') }}: *</label>
                              <select name="cat_id" class="form-control" >

                          

                                  <option style="text-align: center;color:red" value="">Kateqoriya
                                      Seçin</option>

                                      @foreach($brands as $brand)
                                      @if($brand->category_id == 0)
                                      <option value="{{ $brand->id }}"  >
                                       {{ $brand->name }}
                                      </option>
                                        @endif
                                      @endforeach
                                   </select>
                                 @error('category_id')
                                  <span class="text-danger" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>
                      </div>

                      <div class="col-md-12">
                        <div class="mb-3">
                            <label>{{ __('sub_category') }}: *</label>
                            <select name="category1_id" class="form-control">
                                <option style="text-align: center;color:red" value="">
                                  Alt kateqoriya yoxdursa bunu seçin</option>
                                    @foreach($brands as $brand)
                                    <option value="{{ $brand->id }}" @if($brand->id == $product['brands']['category_id']) selected @endif >
                                    {{ $brand->name }}  </option>
                                    @endforeach
                                  </select>
                            @error('sub_category_id')
                                <span class="text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>



                      <div class="col-md-12">
                          <div class="mb-3">
                              <label>{{ __('sub_category') }}: *</label>
                              <select name="category_id" class="form-control">
                                  <option style="text-align: center;color:red" value="">
                                    Alt Alt kateqoriya yoxdursa bunu seçin</option>

                                      @foreach($brands as $brand)
                                      <option value="{{ $brand->id }}" @if($brand->id == $product['brands']['id']) selected @endif  >{{ $brand->name }}</option>
                                      @endforeach
                                    </select>
                                   @error('category_id')
                                  <span class="text-danger" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>
                      </div>



                                <div class="col-md-12">
                                  <div class="mb-3">
                                      <label>{{ __('thumbnail') }}:</label>
                                      <input type="file" class="form-control" name="images[]" multiple="multiple"
                                         >
                                      @error('images')
                                          <span class="text-danger" role="alert">
                                              <strong>{{ $message }}</strong>
                                          </span>
                                      @enderror
                                  </div>
                                  <div style="display:flex;flex-wrap: wrap;">
                            @if($product !== null)
                    @foreach ($product->images as $key => $images)

                    <div class="col-md-3" >
                        <div class="image-box">
                            <img src="{{ asset('uploads/products/' . $images) }}" style="width:150px;height:150px;box-shadow:2px 2px 2px gray;margin:8px" alt="">
                           <div id="newform24" class='a_remove2_{{$key}}'>
                            <button type="button" data_id="{{$key}}" class="a_remove3 btn btn-primary me-2" onclick="delete_images('{{route('admin.delete_images_product',$product->id)}}','{{ $key }}')"  id="{{ $key }}" >
																 <input type="hidden" name="current_images[]" value="{{ $images }}" id='a_remove'>
                                    Delete
                               </button>
                              </div>
                        </div>
                         </div>
                          @endforeach
                          @endif
                                </div>
                            


                          <div class="mb-3 col-md-12 ">
                            <label for="alt" class="form-label">{{ __('alt') }} :</label>
                            <input
                              class="form-control"
                              type="text"
                              id="alt" name="alt" 
                              value="{{ $product->alt }}" 
                   
                            />
                          </div>

                      


                     

                          <div class="mb-3 col-md-12">
                            <label for="meta_title" class="form-label">{{ __('meta_title') }} :</label>
                            <input
                              class="form-control"
                              type="text"
                              id="meta_title" name="meta_title"  
                              value="{{ $product->meta_title }}" 
                            />
                          </div>

                          <div class="mb-3 col-md-12">
                            <label for="meta_desc" class="form-label">{{ __('meta_desc') }} :</label>
                            <input
                              class="form-control"
                              type="text"
                              id="meta_desc" name="meta_desc"  
                              value="{{ $product->meta_desc }}" 
                            />
                          </div>

                          <div class="mb-3 col-md-12">
                            <label for="meta_keyword" class="form-label">{{ __('meta_keyword') }} :</label>
                            <input
                              class="form-control"
                              type="text"
                              id="meta_keyword" name="meta_keyword"  
                              value="{{ $product->meta_keyword }}" 
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
                  `<option value="">Alt Kateqoriya yoxdursa bunu SEÇİN</option>`
              )
          }
      });
  });
</script>



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



@endsection