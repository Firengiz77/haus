@extends('admin.layout.master')
@section('container')
<style>
  #ulli{
    display:flex;
    justify-content:flex-end;
    margin-right:20px
  }
  #ulli li{
    margin: 10px;
  }
  .current{
    color: red !important;
  }
</style>

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
            <div style="display: flex;align-items: baseline;flex-direction: row;justify-content: space-between;">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Admin /</span> {{ __('products') }}</h4>
              <a class="btn btn-success" href="{{ route('admin.product_show') }}"> {{ __('add_product') }} </a>
            
              <form class="searchform searchform-2"  action="{{ route('search') }}" method="get">
                <input  required id="search_input" name="q" type="text" class="searchform__input" name="search" placeholder="{{ __('search') }}">
                <button type="submit" class="searchform__submit">
                    <i class="dl-icon-search1"></i>
                </button>
               
            </form>

          </div>
              <!-- Basic Bootstrap Table -->
              <div class="card">
                <h5 class="card-header">{{ __('products') }}</h5>
                
                <div class="table-responsive text-nowrap">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>{{ __('row') }}</th>
                        <th>{{ __('category') }}</th>
                         <th>{{ __('alt_category') }}</th>
                        <th>{{ __('alt_attribute') }} </th>
                        <th>{{ __('edit') }}</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0" id="search_result">
               
                 @foreach($products as $product )
                 @php
                 $brand = App\Models\Brand::where('id',$product['brands']['category_id'])->first();
                 $brand2 = App\Models\Brand::where('id',$product['brands']['id'])->first();
                 @endphp
                      <tr>
                        <td>{{ ++$loop->index }}</td>
                         <td>{{ $brand->name }}</td>
                         <td>{{ $brand2->name }}</td>
                        <td>     {{  $product->alt }}  </td>
                       
                        <td>
                          <a href="{{ route('admin.product_edit',$product->id) }}" class="btn btn-outline-primary">{{ __('edit') }}</a>
                          <a href="{{ route('admin.product_delete',$product->id) }}" class="btn btn-outline-danger delete-confirm">{{ __('delete') }}</a>
                        </td>
                      </tr>
                   
                 @endforeach

                    </tbody>
                  </table>
                 <ul id="ulli">
                  {{  $products->links('vendor.custom2') }}

                 </ul>

                </div>
              </div>
              <!--/ Basic Bootstrap Table -->

              <hr class="my-5" />
            </div>
            <!-- / Content -->


            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
     

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


<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
<script>
     $('#search_input').on('keyup', function() {
         var keyword = $('#search_input').val();
         search(keyword);
     });

     function search(keyword) {
         var url = '{{ route('search', ':keyword') }}';
         url = url.replace(':keyword', keyword);

         $.ajax({
             type: "GET",
             url: url,
             success: function(data) {
               const p = document.getElementById("error");
        // p.innerHTML = data.error;
                 $('#search_result').html(data);
             }
         })
     }
 </script>


    
@endsection