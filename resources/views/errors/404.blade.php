@extends('front.layout.master')
@section('container')
<section class="error-page" style="background-image: url({{ asset('/front/assets/img/hero-img-1.jpg') }})" >
    <div class="container" data-aos="fade-up"  data-aos-delay="200" data-aos-duration="300">
        <div class="row">
            <div class="col-lg-6">
                <div class="page-not-found">
                    <h2>404</h2>
                    <h3>Ooops, Page Not Found</h3>
                    <a href="{{ route('index') }}" class="sec-btn">Back To Home</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

