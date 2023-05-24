@extends('front.layout.master')

@section('title'){{ $meta->portfolio_meta_title }}@endsection
@section('desc'){{ $meta->portfolio_meta_desc }}@endsection
@section('keyw'){{ $meta->portfolio_meta_keyw }}@endsection



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
    .nav-home-1.tparrows:before {
        display: none;
    }

    .nav-home-1 {
        display: none;
    }

    .head-box-text {
        position: relative;
        display: flex;
        z-index: 1000;
        align-items: center;
        justify-content: center;
        height: 100%;
        width: 100%;
    }

    .head-box-text .pinfo {
        width: 40%;
        color: white;
        margin-left: 200px;
    }



    .img-box-all img {
        width: 100%;
        height: auto;
    }







    .projects-box:hover .lightbox-zoom {
        opacity: 0.7;
    }







    #ninja-slider .caption {
        position: absolute;
        top: 100%;
    }

    #ninja-slider .slider-inner {
        padding-bottom: 100px !important;
    }

    #ninja-slider li {
        margin-bottom: 100px !important;
    }

    #ninja-slider ul {
        overflow: visible !important;
    }

    #ninja-slider li {
        /*overflow:hidden;*/
    }

    section {
        position: relative;
        padding-top: 0px;
        padding-bottom: 0px;
    }

    footer {

        margin-top: 0px;
    }

    .photo-gallery .carousel {
        margin: 0px 0 0 0;
        padding: 0px;
    }

    .slotholder,.head-box-text{
        height: 400px !important;
       
}
.p-0 {
height: 329px;
padding: 0 !important;
}

   

    .site-footer {
        padding-top: 20px;
        padding-bottom: 20px;
        background-color: #1A1A1A;
        color: #A3A3A3;
    }

    .projects-grid5 .projects-box img {
        position: absolute;
        top: 0;
        left: 0;
        border-radius:10px ;
        object-fit: cover;
        transition: all 0.3s linear;
        -webkit-transition: all 0.3s linear;
        -moz-transition: all 0.3s linear;
        -o-transition: all 0.3s linear;
        -ms-transition: all 0.3s linear;
    }
    .projects-grid5{
        display: flex;
        justify-content: space-between;
        flex-wrap: wrap;
        height: 100%;
        margin-bottom: 100px;
        gap: 10px;
        
    }
    .projects-grid5 .projects-box {
        height: 100%;
        position: relative;
        overflow: hidden;
        border-radius:10px ;
    }
    .projects-grid5.img-scale .projects-box:hover img {
        
-webkit-transform: scale(1.1);
-ms-transform: scale(1.1);
transform: scale(1.1);
}
    .project-item1-1 {
        position: relative;
        width: 250px;
        height: 200px;
        border-radius: 20px;
        /*  transform: translateY(50px); */
    }
    .project-item1-5 {
        position: relative;
        width: 250px;
        height: 200px;
        border-radius: 20px;
        /*  transform: translateY(50px); */
    }
    .project-item1-5:nth-child(even){
        height: 270px;
    }
    .project-item1-5:nth-child(odd){
        height: 250px;
    }
    .project-item1-1:nth-child(even) {

        width: 250px;
        height: 300px;
        border-radius: 20px;
         transform: translateY(10px);
    }
    .project-item1-1:nth-child(odd) {

        width: 250px;
        height: 250px;
        border-radius: 20px;
         transform: translateY(50px);
    }

   .photo-gallery .carousel .carousel-item img {
max-width: 100%;
max-height: 100%;
display: inline-block;
position: absolute;
bottom: 0;
margin: 0 auto;
left: 0;
right: 0;
width: 100%;
height: 100%;
}

@media (max-width: 986px) {
.slotholder, .head-box-text {
height: 100% !important;
}
.p-0 {
height: 100% !important;
padding: 0 !important;
}
.head-box-text .pinfo {
text-align: center;
width: 80%;
color: white;
margin-left: 0;
}
}
@media (max-width: 616px) {
.project-item1-1:nth-child(odd) {
width: 100%;
height: 250px;
border-radius: 20px;
transform: translateY(70px);
}
.projects-grid5 {
display: flex;
/* justify-content: space-between; */
justify-content: center;
flex-wrap: wrap;
height: 100%;
margin-bottom: 100px;
gap: 72px;
}
}
@media (max-width: 479px) {

.ml-5 {
margin-left: 0 !important;
}
.mr-5 {
margin-right: 0 !important;
}
}
</style>






<div id="content" class="site-content">
    <div class="page-header dtable text-center header-transparent page-header-contact">
        <div class="dcell">
            <div class="container">
                <h1 class="page-title">Portfolio Images</h1>
             
            </div>
        </div>
    </div>
</div>









    <!-- Popap Gallery -->
    <!-- XXXXXXXXXXXXXXXXXXXXXXXXx Grid Edit Word  XXXXXXXXXXXXXXXXXXXXXXXXXXx-->

    <section class="ml-5 mr-5 section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 photo-gallery">

                    <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="0">
                        <!-- Carousel indicators -->

                        <!-- Wrapper for carousel items -->
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="projects-grid5 pf_4_cols style-2 p-info-s2 img-scale w-auto no-gaps mx-0">

                                    @if($portfolio !== null)
                                    @foreach ($portfolio->image as $key => $images)
                                    <div class="project-item1-1">
                                        <div class="projects-box">
                                            <a href="{{ asset('uploads/portfolio/' . $images) }}" class="lightbox" title="">
                                                <img src="{{ asset('uploads/portfolio/' . $images) }}" alt="{{ $portfolio->title }}">
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