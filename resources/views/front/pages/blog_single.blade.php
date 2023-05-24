@extends('front.layout.master')

@section('title'){{ $blog->meta_title }}@endsection
@section('desc'){{ $blog->meta_description }}@endsection
@section('keyw'){{ $blog->meta_keyword }}@endsection





@section('container')


<div id="content" class="site-content">
    <div class="page-header dtable text-center header-transparent">
        <div class="dcell">
            <div class="container">
                <h1 class="page-title">{{ $blog->title }}</h1>
            
            </div>
        </div>
    </div>
</div>

<div class="entry-content-blogSingle">
    <div class="container">
        <div class="row">
            <div class="blogSingle">
                <article class="blog-post post-box">
                    <div class="entry-media post-cat-abs post-cat-abs2">
                        <img src="{{ asset($blog->image) }}" alt="{{ $blog->alt }}">
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
                       {!! $blog->desc !!}



                        <div class="entry-footer clearfix">
                            <div class="tagcloud">
                     
                                @foreach ($tags as $tag)
                                @if($tag->id ==in_array($tag->id,$blog->tags()->pluck('id')->toArray()))
                                <a  rel="tag">{{ $tag->title }}</a> 
                                @endif
                                @endforeach

                            </div>            
                            <div class="share-post">
                                <a class="twit" target="_blank" href="twitter.html" title="Twitter"><i class="fab fa-twitter"></i></a>
                                <a class="face" target="_blank" href="facebook.html" title="Facebook"><i class="fab fa-facebook-f"></i></a>
                                <a class="pint" target="_blank" href="pinterest.html" title="Pinterest"><i class="fab fa-pinterest-p"></i></a>
                                <a class="linked" target="_blank" href="linkedin.html" title="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                            </div>        
                        </div>
                  
                    
                          
                        <div class="related-posts">
                            <h3>Related Posts</h3>
                            <div class="row">
                                @foreach($related_blogs as $related)
                                <div class="col-lg-6 col-md-6">
                                    <div class="post-box post-item">
                                        <div class="post-inner">
                                            <div class="entry-media post-cat-abs">
                                                <a href="{{ route('blog_single',$related->slug) }}"><img src="{{ asset($related->image) }}" alt="{{ $related->alt }}"></a>
                                                <div class="post-cat">
                                                    <div class="posted-in"><a href=""> 
                                                         @foreach ($tags as $tag)
                                                        @if($tag->id ==in_array($tag->id,$related->tags()->pluck('id')->toArray()))
                                                        {{ $tag->title }}
                                                        @endif
                                                        @endforeach</a></div>
                                                </div>
                                            </div>
                                            <div class="inner-post">
                                                <div class="entry-header">
                                                    <h5 class="entry-title">
                                                        <a class="title-link" href="{{ route('blog_single',$related->slug) }}">{{ $blog->title }}</a>
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
                        </div>
                    </div>
                </article>

            </div>
         


        </div>
    </div>
</div>



    
@endsection