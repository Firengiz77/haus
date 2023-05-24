@foreach ($subcategories as $sub_category)
    <option value="{{ $sub_category->id }}"   >{{ $sub_category->name }}
    </option>
@endforeach
