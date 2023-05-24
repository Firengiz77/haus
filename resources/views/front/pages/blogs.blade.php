@extends('front.layout.master')

@section('title'){{ $meta->blog_meta_title }}@endsection
@section('desc'){{ $meta->blog_meta_desc }}@endsection
@section('keyw'){{ $meta->blog_meta_keyw }}@endsection




@section('container')



<div id="content" class="site-content   site-content-blog">
    <div class="page-header dtable text-center header-transparent">
        <div class="dcell">
            <div class="container">
                <h1 class="page-title">Blog</h1>
               
            </div>
        </div>
    </div>
</div>

<div class="entry-content">
    <div class="container">
        <div class="row">

            @foreach ($blogs as $blog)

            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="post-box masonry-post post-item">
                    <div class="post-inner">
                        <div class="entry-media post-cat-abs">
                            <a href="{{ route('blog_single',$blog->slug) }}"><img src="{{ asset($blog->image) }}" alt="{{ $blog->alt }}"></a>
                            <div class="post-cat">
                                <div class="posted-in"><a href="#">
                                    @foreach ($tags as $tag)
                                        @if($tag->id ==in_array($tag->id,$blog->tags()->pluck('id')->toArray()))
                                        {{ $tag->title }}
                                        @endif
                                        @endforeach
                                
                                </a></div>
                            </div>
                        </div>
                        <div class="inner-post">
                            <div class="entry-header">
                                <h5 class="entry-title">
                                    <a class="title-link" href="{{ route('blog_single',$blog->slug) }}">{{ $blog->title }}</a>
                                </h5>
                            </div>
                            <div class="the-excerpt">
                               {!!  substr($blog->desc,0,70) !!} ...
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            @endforeach
    
        </div>

        <ul class="page-pagination none-style">
            {{ $blogs->links('vendor.custom2') }}
           </ul>

    </div>
</div>





    
@endsection