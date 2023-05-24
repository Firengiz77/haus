@extends('front.layout.master')

@section('title'){{ $products->meta_title }}@endsection
@section('desc'){{ $products->meta_desc }}@endsection
@section('keyw'){{ $products->meta_keyword }}@endsection



@section('container')

    <!-- Lightbox -->
    <link href="{{ asset('/front/assets/css/lightbox.css') }}" rel="stylesheet" />
    <!-- WOW CSS -->
    <link rel="stylesheet" href="{{ asset('/front/assets/css/animate.css') }}">

    <link rel="stylesheet" href="{{ asset('/front/assets/fonts/icomoon/style.css') }}">

    <link rel="stylesheet" href="{{ asset('/front/assets/css/owl.carousel.min.css') }}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('/front/assets/css/bootstrap.min.css') }}">

    <!-- Style -->
    <link rel="stylesheet" href="{{ asset('/front/assets/css/style.css') }}">

<style>
  
</style>




<div id="content" class="site-content site-content-product">
    <div class="p-0">
   
        <div id="rev_slider_one_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="mask-showcase"
            data-source="gallery">
            <!-- START REVOLUTION SLIDER 5.4.1 fullscreen mode -->
            <div id="rev_slider_one-edit" data-version="5.4.1">
             
                    <!-- SLIDE 1 -->
               
                        <!-- MAIN IMAGE -->
                        <img class="rev-img" src="{{ asset($brand->image) }}">

                        <div class="head-box-text-cate">
                            <div class="img-box-all">
                                <img src="{{ asset($brand->logo) }}" alt="">
                            </div>

                            <p class="pinfo">  {{ $brand->desc }}</p>
                        </div>

                

                  <!--   <img src="images/author.png" alt=""> -->


                <div class="tp-bannertimer"></div>

            </div>
        </div>

    </div>




    <!-- Popap Gallery -->
    <!-- XXXXXXXXXXXXXXXXXXXXXXXXx Grid Edit Word  XXXXXXXXXXXXXXXXXXXXXXXXXXx-->

    <section class="ml-5 mr-5 section section-product">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 photo-gallery">

                    <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="0">
                        <!-- Carousel indicators -->

                        <!-- Wrapper for carousel items -->
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="projects-grid5 pf_4_cols style-2 p-info-s2 img-scale w-auto no-gaps mx-0">

                                    @if($products !== null)
                                    @foreach ($products->images as $key => $images)
                                    <div class="project-item1-1">
                                        <div class="projects-box">
                                            <a href="{{ asset('uploads/products/' . $images) }}" class="lightbox" title="" id="count_{{ $key }}" 
                                            onclick="count({{ $key }},{{ $brand['brands']['category_id'] }},'{{ $images  }}',{{ $brand->category_id }},{{ $brand->id }})">
                                              
                                                <img src="{{ asset('uploads/products/' . $images) }}" alt="{{ $products->alt }}">
                                            </a>
                                        </div>
                                    </div>
                                    @endforeach
                                    @endif

                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>


    </section>



</div>


@section('js')
<script src="{{ asset('/front/assets/js/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('/front/assets/js/popper.min.js') }}"></script>
<script src="{{ asset('/front/assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('/front/assets/js/jquery.sticky.js') }}"></script>
<script src="{{ asset('/front/assets/js/main.js') }}"></script>
<script src="{{ asset('/front/assets/js/slick.js') }}"></script>
<script src="{{ asset('/front/assets/js/wow.js') }}"></script>
<script src="{{ asset('/front/assets/js/lightbox.js') }}"></script>


<script>

    function count(id,category_id,image,alt_category_id,alt_alt_category_id){

	$.get("/count_images/" + id + '/' + category_id + '/' + image + '/' + alt_category_id + '/' + alt_alt_category_id,
		   {
			   id: id,
               category_id: category_id,
               alt_category_id: alt_category_id,
               alt_alt_category_id: alt_alt_category_id,
               image: image
		   },
		   function (data) {
		        // alert('countlandi');
                console.log('countlandi.Markup')
		   });
   
    }
</script>



<script>
    new WOW().init();
</script>
<script>
    lightbox('.lightbox', {

        captions: true,

        captionsSelector: 'self',

        captionAttribute: 'title',

        nav: 'auto',

        navText: [

            '&lsaquo;',

            '&rsaquo;'

        ],

        close: true,

        closeText: '&times;',

        counter: true,

        keyboard: true,

        zoom: true,

        zoomText: '&plus;',

        docClose: false,

        swipeClose: true,

        scroll: false

    });
</script>

@endsection


@endsection