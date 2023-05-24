 @foreach($products as $product )
    @php
    $brand = App\Models\Brand::where('id',$product['brands']['category_id'])->first();
    $brand2 = App\Models\Brand::where('id',$product['brands']['id'])->first();
    @endphp
         <tr>
           <td>{{ ++$loop->index }}</td>
            <td>{{ $brand->name }}</td>
            <td>{{ $brand2->name }}</td>
           <td> {{  $product->alt }}  </td>
          
           <td>
             <a href="{{ route('admin.product_edit',$product->id) }}" class="btn btn-outline-primary">{{ __('edit') }}</a>
             <a href="{{ route('admin.product_delete',$product->id) }}" class="btn btn-outline-danger delete-confirm">{{ __('delete') }}</a>
           </td>
         </tr>
      
    @endforeach