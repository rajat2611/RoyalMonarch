


@extends('pages/layouts.lay')

@section('content')
<!-- Slider Area Start-->
<div class="services-area">
    <div class="container">

        <!-- Section-tittle -->
        <div class="row d-flex justify-content-center">
            <div class="col-lg-10" style="background: url('/storaged/{{$blog->image}}');background-repeat: no-repeat;">
                <div class="post-banner-title-box-copy">
                    <h1 class="hero-heading-h1 white-copy">Investment Accounts Explained: Taxable vs. Non-taxable</h1>
                </div>
                <div class="post-feature-img-box">
                    <img src="/storage/{{$blog->image}}" style="width: 100%;height: 100%;">
                    
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Slider Area End-->

<!--================Blog Area =================-->
<section class="blog_area single-post-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 posts-list offset-2">
                <div class="single-post">
                    <div class="blog_details">
                        <p class="excert">
                            {!!$blog->resume !!}
                        </p>
                    </div>
                </div>

                <div class="blog-author">
                    <div class="media align-items-center">
                        <div class="media-body">
<!--                            <a href="#">
                                <h2>Author : </h2> <h4>{{$blog->author}}</h4>
                            </a>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================ Blog Area end =================-->



@endsection




@section('5')
active
@endsection
