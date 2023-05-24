@extends('front.layout.master')

@section('title'){{ $brand->meta_title }}@endsection
@section('desc'){{ $brand->meta_desc }}@endsection
@section('keyw'){{ $brand->meta_keyw }}@endsection



@section('container')


<div id="content" class="site-content  site-content-catego ">
    <div class="p-0">
     
        <div id="rev_slider_one_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="mask-showcase"
            data-source="gallery">
            <!-- START REVOLUTION SLIDER 5.4.1 fullscreen mode -->
            <!-- id="rev_slider_one"  -->
            <div id="rev_slider_one-edit" data-version="5.4.1">
             
                    <!-- SLIDE 1 -->
               
                        <!-- MAIN IMAGE -->
                        <img class="rev-img" src="{{ asset($brand->image) }}">

                        <div class="head-box-text-cate">
                            <div class="img-box-all">
                                <img src="{{ asset($brand->logo) }}" alt="">
                            </div>

                            <p class="pinfo">{{ $brand->desc }} </p>
                        </div>

                

                  <!--   <img src="images/author.png" alt=""> -->


                <div class="tp-bannertimer"></div>

            </div>
        </div>

    </div>





</div>
</section>

<!-- XXXXXXXXXXXXXXXXXXXXXXXXx Grid Edit Word  XXXXXXXXXXXXXXXXXXXXXXXXXXx-->
@foreach($brands as $brand)

        @php
           $count_images = App\Models\CountImage::where('alt_category_id',$brand->id)->orderBy('count','desc')->take(4)->get();
        @endphp
     
                
<section class="p-0   ml-5 mr-5 section">
    <div class="container-fluid">
        <div class="projects-grid  pf_4_cols style-2 p-info-s2 img-scale w-auto no-gaps mx-0">


         
           @if( !(empty($brand->images)) && count($brand->images) == 4)
            @php
           $count = 3;
           @endphp
                   
                    @foreach ($brand->images as $key => $images)
                        <div class="project-item{{ $count }}">
                            <div class="projects-box">
                                <div class="projects-thumbnail">
                                        <img src="{{ asset('uploads/brand/' . $images) }}"  alt="">   
                                     
                                     @if($count == 5)
                                        <div class="seeAllbrand">
                                            <a href="{{ route('subcategory',$brand->slug) }}">
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
                                 <a href="{{ route('subcategory',$brand->slug) }}">
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
{{-- 
<section class="p-0  mt-4  ml-5 mr-5">
    <div class="container-fluid">
        <div class="projects-grid  pf_4_cols style-2 p-info-s2 img-scale w-auto no-gaps mx-0">

            <div class="project-item1">
                <div class="projects-box">
                    <div class="projects-thumbnail">
                        <img src="images/projects-grid/project-metro1.jpg" alt="">
                    </div>

                </div>
            </div>


            <!-- <div class="project-item2">
             <div class="projects-box">
                 <div class="projects-thumbnail">
                         <img src="images/projects-grid/project2.jpg" alt="">           
                 </div> 
             </div>
         </div> -->


            <div class="project-item3">
                <div class="projects-box">
                    <div class="projects-thumbnail">

                        <img src="images/projects-grid/project3.jpg" alt="">


                    </div>

                </div>
            </div>



            <div class="project-item4">
                <div class="projects-box">
                    <div class="projects-thumbnail">

                        <img src="images/projects-grid/project4.jpg" alt="">


                    </div>

                </div>
            </div>


            <div class="project-item5">
                <div class="projects-box">
                    <div class="projects-thumbnail">

                        <img src="images/projects-grid/project5.jpg" alt="">
                        <div class="seeAllbrand">
                            <a href="seeAllBrands1-2.html">
                                <button class="btnSee">brands</button>
                            </a>
                        </div>

                    </div>

                </div>
            </div>
        </div>


   


    </div>
</section> --}}


@endsection