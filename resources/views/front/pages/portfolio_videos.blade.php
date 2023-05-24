@extends('front.layout.master')

@section('title'){{ $meta->portfolio_meta_title }}@endsection
@section('desc'){{ $meta->portfolio_meta_desc }}@endsection
@section('keyw'){{ $meta->portfolio_meta_keyw }}@endsection



@section('container')


<div id="content" class="site-content">
    <div class="page-header dtable text-center header-transparent pheader-about">
        <div class="dcell">
            <div class="container">
                <h1 class="page-title">Portfolio Videos</h1>
           
            </div>
        </div>
    </div>
</div>

<section class="about-company">
 
        <div class="row">
        
            <div class="col-lg-12 col-md-12 align-self-center">
                <div class="about-detail">
                    <!--<div class="ot-heading is-dots">-->
                        <!--<span>[ PORTFOLIO vIDEOS ]</span>-->
                        <!--<h2 class="main-heading">Best Interior Videos</h2>-->
                    <!--</div>-->
                    <div class="videoIframes">
                        @foreach ($portfolio as $item)
                        <iframe style="border-radius: 20px;" width="560" height="315" src="{{ $item->link }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                        @endforeach
                    </div>
                 
                
                </div>
            </div>
        </div>
  
</section>






















@endsection