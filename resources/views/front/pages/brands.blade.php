@extends('front.layout.master')

@section('title'){{ $meta->about_meta_title }}@endsection
@section('desc'){{ $meta->about_meta_desc }}@endsection
@section('keyw'){{ $meta->about_meta_keyw }}@endsection

@section('container')

<div id="content" class="site-content">
    <div class="page-header dtable text-center header-transparent pheader-about">
        <div class="dcell">
            <div class="container">
                <h1 class="page-title">Brands</h1>
            </div>
        </div>
    </div>
</div>

@foreach($all_brands as $key => $brand)
@php
    $count_images = App\Models\CountImage::where('category_id',$brand->id)->orderBy('count','desc')->take(4)->get();
@endphp

    <section class="p-0 mt-5 mb-5 ml-5 mr-5">
        <div class="container-fluid">
         <div class="projects-grid  pf_4_cols style-2 p-info-s2 img-scale w-auto no-gaps mx-0">
       
       
       
       @if( !(empty($brand->images)) && count($brand->images) == 4)
       @php
       $count = 3
       @endphp
                @foreach ($brand->images as $key => $images)
                    <div class="project-item{{ $count }}">
                        <div class="projects-box">
                            <div class="projects-thumbnail">
                                    <img src="{{ asset('uploads/brand/' . $images) }}"  alt="">   
                                 
                                 @if($count == 5)
                                    <div class="seeAllbrand">
                                        <a href="{{ route('category',$brand->slug) }}">
                                            <button class="btnSee">{{ $brand->name }} </button>
                                        </a>
                                      </div>
                                   @endif
                                   
                                
                                </div>
                        </div>
                    </div>
                    @php
                    $count+=1;
                    @endphp
               @endforeach
        @else
            
               @if($count_images !== null)
           @if(count($count_images) == 4)
           @foreach($count_images as  $key => $images)
           
            <div class="project-item{{ $key+=3 }}">
                <div class="projects-box">
                    <div class="projects-thumbnail">
                            <img src="{{ asset('uploads/products/' . $images->image) }}" alt="">   
                         
                         @if($key == 5)
                            <div class="seeAllbrand">
                                <a href="{{ route('category',$brand->slug) }}">
                                    <button class="btnSee">{{ $brand->name }} </button>
                                </a>
                              </div>
                           @endif
                           
                        
                        </div>
                </div>
            </div>
            @endforeach
            @endif
            @endif
            
       @endif
       
       
       
        
      

             </div>
         </div>
     </section>
 
  @endforeach



    
@endsection