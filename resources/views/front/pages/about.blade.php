@extends('front.layout.master')

@section('title'){{ $meta->about_meta_title }}@endsection
@section('desc'){{ $meta->about_meta_desc }}@endsection
@section('keyw'){{ $meta->about_meta_keyw }}@endsection





@section('container')

<div id="content" class="site-content">
    <div class="page-header dtable text-center header-transparent pheader-about">
        <div class="dcell">
            <div class="container">
                <h1 class="page-title">About Us</h1>
            </div>
        </div>
    </div>
</div>

<section class="about-company">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 align-self-center">
                <div class="about-detail">
                    <div class="ot-heading is-dots">
                        <span>[ about company ]</span>
                      {!! $about->desc !!}
                    </div>
            </div>
        </div>
    </div>
</section>

<section class="our-philosophy">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 theratio-align-center text-center">
                <div class="ot-heading is-dots">
                    <span>[ company strategy ]</span>
                    <h2 class="main-heading text-light">Our Philosophy</h2>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            @foreach ($attributes as $key => $attribute)
                
          
            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 mb-5 mb-xl-0">
                <div class="support-box">
                    <div class="inner-box">
                        <div class="overlay flex-middle">
                            <div class="inner">
                                {!!  $attribute->desc !!}
                            </div>
                        </div>
                        <div class="content-box">
                            <div class="icon-title">
                           @if($key == 0)
                                <span class="ot-flaticon-brickwall"></span>
                                @elseif($key == 1)
                                <span class="ot-flaticon-paint"></span>
                                @else
                                <span class="ot-flaticon-cube"></span>
                              @endif

                                <h5>{{ $attribute->name }}</h5>
                            </div>
                            <img src="{{ asset($attribute->image) }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>


    
@endsection