


@extends('pages/layouts.lay')

@section('content')
    <!-- Slider Area Start-->
    <div class="services-area">
        <div class="container">

            <!-- Section-tittle -->
            <div class="row d-flex justify-content-center">
                <div class="col-lg-8">
                    <div class="section-tittle text-center mb-80">
                        <span>Single Blog</span>
                        <h2>Single Blog​</h2>
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
                <div class="col-lg-8 posts-list">
                    <div class="single-post">
                        @if ($blog->image)

                        <div class="blog_item_img">
                            <div class="feature-img">
                                <img class="img-fluid" src="/storage/images/{{$blog->image}}" alt="">
                            </div>
                          
                        </div>
                        @endif
                        <div class="blog_details">
                            <h2>{{$blog->title}}
                            </h2>

                            <p class="excert">
                             {{$blog->body}}
                            </p>
                        </div>
                    </div>

                    <div class="blog-author">
                        <div class="media align-items-center">
                            <div class="media-body">
                                <a href="#">
                                   <h2>Author : </h2> <h4>{{$blog->author}}</h4>
                                </a>
                                
                            </div>
                        </div>
                    </div>


                </div>
                <div class="col-lg-4">
                    <div class="blog_right_sidebar">

                        <aside class="single_sidebar_widget popular_post_widget">
                            <h3 class="widget_title">Recent Post</h3>
                            @foreach ($rec_blogs as $item)
                            <div class="d-flex flex-column align-items-start">

                                @if ($item->image)

                                
                                 <img src="{{$item->image}}" style="width: 50px; height:50px;border-radius:100px;"  alt="post">

                                @endif
                                <div class="media post_item">
                                    <div class="media-body">
                                        <a href="single-blog.html">
                                            <h3>{{$item->first_line}}</h3>
                                        </a>
                                        <p>{{$item->created_at->format('M. d, y')}}</p>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            
                           
                        </aside>
                        <aside class="single_sidebar_widget post_category_widget">
                            <h4 class="widget_title">Category</h4>
                            <ul class="list cat-list">
                                @foreach ($list as $item=>$value)
                                <li>
                                    <a href="/blogs/{{$item}}" class="d-flex">
                                    <p>{{$item}} </p>
                                    <p>({{$value}})</p>
                                    </a>
                                </li> 
                                @endforeach
                            </ul>
                        </aside>

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
