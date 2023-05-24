@extends('front.layout.master')


@section('title'){{ $meta->home_meta_title }}@endsection
@section('desc'){{ $meta->home_meta_desc }}@endsection
@section('keyw'){{ $meta->home_meta_keyw }}@endsection





@section('container')


<div id="content" class="site-content  site-content-head">
    <div class="p-0">
    
        <div id="rev_slider_one_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="mask-showcase" data-source="gallery">
            <!-- START REVOLUTION SLIDER 5.4.1 fullscreen mode -->
            <div id="rev_slider_one" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.4.1">
                <ul>
                
                    @foreach ($sliders as $key => $slider)
                 
                    <!-- SLIDE 1 -->
                    <li data-index="rs-7{{ $key }}" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="300"  data-thumb="{{ asset($slider->image) }}"  data-rotate="0"  data-saveperformance="off"  data-title="" data-param1="1" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                        <!-- MAIN IMAGE -->
                        <img   src="{{ asset($slider->image) }}" data-bgcolor='rgba(255,255,255,0)'  alt="{{ $slider->alt }}"  data-bgposition="center center" data-bgfit="cover" class="rev-slidebg" data-bgrepeat="no-repeat" data-bgparallax="off" data-no-retina>
                        
                        <!-- LAYER 1  right image overlay dark-->

                                                    
                        <!-- LAYER 3  Thin text title-->
                        {{-- <div class="tp-caption tp-resizeme tp-caption-big" 
                            id="slide-70-layer-1" 
                            data-x="['center','center','center','center']" data-hoffset="['56','46','34','0']" 
                            data-y="['center','center','center','center']" data-voffset="['-64','-72','-65','-50']" 
                            data-fontsize="['206',150','0','0']"
                            data-lineheight="['206','170','127','80']"
                            data-letterspacing="['104','85','63','39']"
                            data-fontweight="['900','900','900','900']"
                            data-color="['transparent','transparent','transparent','transparent']"
                            data-whitespace="nowrap"
                 
                          
        
                            >Design
                        </div> --}}
                               
                        <!-- LAYER 4  Bold Title-->
                        <div class="tp-caption tp-resizeme tp-caption-main" 
                            id="slide-70-layer-2" 
                            data-x="['center','center','center','center']" data-hoffset="['2','0','0','0']" 
                            data-y="['center','center','center','center']" data-voffset="['-56','-63','-60','-65']"
                            data-fontsize="['93','72','55','40']"
                            data-lineheight="['83','70','51','55']"
                            data-color="['#fff','#fff','#fff','#fff']"
                            data-fontweight="['200','200','200','200']"
                            data-whitespace="nowrap"
                 
                            data-type="text" 
                            data-responsive_offset="on" 
                            
                            data-frames='[{"delay":900,"speed":1000,"frame":"0","from":"x:50px;opacity:0;","to":"o:1;","ease":"power3.inOut"},{"delay":"wait","speed":1000,"frame":"999","to":"x:50px;opacity:0;","ease":"power3.inOut"}]'

                            data-textAlign="['left','left','left','left']"
        
                            >{{ $slider->desc }}
                        </div>
                                                            
                        <!-- LAYER 5  Paragraph-->
                        <div class="tp-caption tp-resizeme tp-desc" 
                            id="slide-70-layer-3" 
                            data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                            data-y="['center','center','center','center']" data-voffset="['54','43','31','15']" 
                            data-fontsize="['19','18','17','16']"
                            data-lineheight="['33','27','28','24']"
                            data-width="['818','630','500','417']"
                            data-weight="['500','500','500','500']"
                            data-color="['#fff','#fff','#fff','#fff']"
                            data-whitespace="normal"
                 
                            data-type="text" 
                            data-responsive_offset="on" 
        
                            data-frames='[{"delay":1200,"speed":1000,"frame":"0","from":"x:50px;opacity:0;","to":"o:1;","ease":"power3.inOut"},{"delay":"wait","speed":1000,"frame":"999","to":"x:50px;opacity:0;","ease":"power3.inOut"}]'
                            
                            data-textAlign="['center','center','center','center']"
        
                            > {{ $slider->desc_1 }}
                            </div> 

                        <!-- LAYER 6  Read More-->
                        <div class="tp-caption rev-btn" 
                            id="slide-70-layer-4" 
                            data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"  
                            data-y="['center','center','center','center']" data-voffset="['170','140','119','110']"
                            data-fontsize="['13','18','17','0']"
                            data-lineheight="['25','18','16','16']"
                            data-width="none"
                            data-height="none"
                            data-whitespace="nowrap"   
                            data-responsive_offset="on" 
        
                            data-frames='[{"delay":1500,"speed":1000,"frame":"0","from":"x:50px;opacity:0;","to":"o:1;","ease":"power3.inOut"},{"delay":"wait","speed":1000,"frame":"999","to":"x:50px;opacity:0;","ease":"power3.inOut"}]'
                            
                            data-textAlign="['center','center','center','center']"
                            data-paddingtop="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]"
                            data-paddingbottom="[0,0,0,0]"
                            data-paddingleft="[0,0,0,0]"
        
                            ><a href="{{ $slider->link }}" class="octf-btn octf-btn-primary btn-slider btn-large">View Collection</a>
                        </div>  

                    </li>  
                    @endforeach         

                </ul>
              
                <div class="tp-bannertimer"></div>
              
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

           
    
    </div>



<section>







<div class="head-blog">
<h4>OUR BLOG</h4>

</div>
<div class="entry-content-index">
<div class="container">
    
    <div class="row">
       
        @foreach($blogs as $key => $blog)
        @if($key == 0)
        <div class="content-area col-lg-5 col-md-12 col-sm-12 col-xs-12">
         
                <div class="post-inner">
                    <div class="entry-media post-cat-abs">
                        <a href="{{ route('blog_single',$blog->slug) }}"><img src="{{ asset($blog->image) }}" alt="{{ $blog->alt }}"></a>
                    </div>
                </div>
                <div class="left-text-box">
                    <h5>{{ $blog->title }}</h5>
                    {!! substr($blog->desc,0,120) !!}
                </div>
        </div>
        @endif
        @endforeach

   

        <div class="widget-area primary-sidebar col-lg-7 col-md-12 col-sm-12 col-xs-12">
            @foreach($blogs as $key => $blog)
            @if($key != 0)
                <div class="box-blog-img">
                    <div class="post-inner-box">
                        <a href="#"><img src="{{ asset($blog->image) }}" alt="{{ $blog->alt }}"></a>
                    </div>
                        <div class="box-text ml-5">
                             <a href="post.html"><h4>
                                {{  $blog->title }}</h4></a> 
                                {!! substr($blog->desc,0,120) !!}


                        </div>
                        
                </div>
            @endif
                      @endforeach
                      <div class="btn-box-blog">
        <a href="{{ route('blogs') }}"><button>See More</button></a>
    </div>
        </div>
     
        
    </div>
   
</div>
</div>
</section>





<!-- @@@@@@@@@@@@@@@@@@@@@ Logo and ofice spaces @@@@@@@@@@@@@@@@@@@@@@@@ -->
@foreach($clients as $client)
<div class="client-1 bg-light-1">
<div class="container-fluid">
<div class="row">
    <div class="col-lg-12">
        <div class="clients-slide owl-theme owl-carousel">

            @if($client !== null)
            @foreach ($client->images as $key => $images)

            <div class="img-item">
                <figure>
                    <img src="{{ asset('uploads/client/' . $images) }}" alt="{{ $client->alt }}">
                </figure>
            </div>
           
            @endforeach
            @endif
          
   
        </div>
    </div>
</div>
</div>
</div>
@endforeach


    
@endsection