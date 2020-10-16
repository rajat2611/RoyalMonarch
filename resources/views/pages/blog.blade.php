


@extends('pages/layouts.lay')

@section('content')

<!-- Slider Area Start-->
<div class="services-area">
    <div class="container">
        <!-- Section-tittle -->
        <div class="row d-flex justify-content-center">
            <div class="col-lg-8">
                {{--                <div class="section-tittle text-cen                ter mb-80">--}}
                {{--                    <span>Blog</sp                        an>--}}
                            {{--                    <h2>Our                         Blog Area​</h2>--}}
            {{--</div>--}}
              </div>
         </                    div>                                 
    </div>
                    </div>
             <!-- Slider Are             a End-->

<!--===========            =====Blog Area =================-->
            <section class="blog        _area section-paddingr">
                    <div class="container">
                        <div class="row justify-content-center mb-2">
                            <div class="col-xl-12">
                                <div class="section_tittle text-center mb-5">
                                    <h2 class="mb-50 font-weight-600"> <span style="color: #CDCDCD;">Experience.</span><span style="color: #999999;"> Wisdom.</span><span style="color: #1b31a7;"> Influence.</span>

                                    </h2>
                                    <h4 style="text-align: left" class="mb-3"> Sharing is Caring
                                    </h4>

                                    <p style="text-align: left">
                                        We are country of 130 crores people, strong and diversified. 85 Crores above the age of 15 years and can understand the value of money and need of saving and investing.  But the thing is they are not aware of all the possibilities. This is an initiative to make every Indian be well aware about their financial responsibility and possibility to grow their money. To do that, first they need to understand, “How money works”. 85 crores readers across the country and one purpose together, “Knowledge to humanize the financial planning”
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="row justify-content-center">
                            <div class="col-lg-8 mb-5 mb-lg-0">
                                <div class="blog_left_sidebar">
                                    @forelse ($blogs as $blog)
                                    <article class="blog_item">
                                        @if ($blog->image)
                                        <div class="blog_item_img">
                                            <img src="/storage/images/{{$blog->image}}" class="card-img rounded-0" >
                                            <?php /* <a href="#" class="blog_item_date">
                                              <h3>{{ $blog->created_at->format('d') }}</h3>
                                              <p>{{ $blog->created_at->format('M') }}</p>
                                              </a> */ ?>
                                        </div>
                                        @else
                                        <a href="#" class="blog_item_date">
                                            <h3>{{ $blog->created_at->format('d') }}</h3>
                                            <p>{{ $blog->created_at->format('M') }}</p>
                                        </a>
                                        @endif
                                        <div class="blog_details">
                                            <p class="mb-1 text-grey-darker">{{date('d M Y',strtotime($blog->created_at))}}</p>
                                            <a class="d-inline-block" href="/blog/{{$blog->id}}">
                                                <h2>{{$blog->title}}</h2>
                                            </a>
                                            @if ($blog->resume)
                                            <p>{{$blog->resume}}</p>
                                        </div>
                                    </article>
                                    @endif
                                    @empty
                                    <p>No blogs for Now</p>
                                    @endforelse


                                    {{ $blogs->links() }}

                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="blog_right_sidebar">
                                    <div class="row">
                                        <div class="col-md-12 blog_search">
                                            <div class="container justify-content-center">
                                                <form action="" class="row">
                                                    <div class="form-group col-md-10">
                                                        <input type="text" name="search" class="form-control" placeholder="Search..." value="{{isset($_GET['search']) ? $_GET['search'] : ""}}">
                                                    </div>
                                                    <div class="form-group mb-0 col-md-2">
                                                        <button class=" btn btn2 py-4 px-2">Search</button>
                                                    </div>
                                                </form>
                                            </div> 
                                        </div>
                                    </div>
                                    <aside class="single_sidebar_widget post_category_widget">

                                        <h4 class="widget_title">Category</h4>
                                        <ul class="list cat-list">0
                                            @foreach ($list as $item=>$value)
                                            <li>
                                                <a href="/blogs/{{$item}}" class="d-flex">
                                                    <p>{{ucfirst($item)}} </p>

                                                </a>
                                                @if($item=="banking")
                                                <ul style="margin-left: 15%;list-style-type: circle;">
                                                    <li>
                                                        <a href="#" class="d-flex">
                                                            <p>Savings </p>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="d-flex">
                                                            <p>Loans </p>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="d-flex">
                                                            <p>Deposite </p>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="d-flex">
                                                            <p>Credit Cards </p>
                                                        </a>
                                                    </li>
                                                </ul>
                                                @elseif($item=="investement")
                                                <ul style="margin-left: 15%;list-style-type: circle;">
                                                    <li>
                                                        <a href="#" class="d-flex">
                                                            <p>Savings Schemes</p>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="d-flex">
                                                            <p>Short Term Investment </p>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="d-flex">
                                                            <p>Long Term Investment  </p>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="d-flex">
                                                            <p>Commodity</p>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="d-flex">
                                                            <p>Equity</p>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="d-flex">
                                                            <p>Debt</p>
                                                        </a>
                                                    </li>
                                                </ul>
                                                @elseif($item=="mutual_Fund")
                                                <ul style="margin-left: 15%;list-style-type: circle;">
                                                    <li>
                                                        <a href="#" class="d-flex">
                                                            <p>Equity Funds</p>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="d-flex">
                                                            <p>Fixed Income Funds </p>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="d-flex">
                                                            <p>Money Market Funds  </p>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="d-flex">
                                                            <p>Balanced or Hybrid Funds</p>
                                                        </a>
                                                    </li>
                                                </ul>
                                                @elseif($item=="insurance")
                                                <ul style="margin-left: 15%;list-style-type: circle;">
                                                    <li>
                                                        <a href="#" class="d-flex">
                                                            <p>Life Insurance</p>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="d-flex">
                                                            <p>Health Insurance </p>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="d-flex">
                                                            <p>General  Insurance  </p>
                                                        </a>
                                                    </li>
                                                </ul>
                                                @elseif($item=="real_estate")
                                                <ul style="margin-left: 15%;list-style-type: circle;">
                                                    <li>
                                                        <a href="#" class="d-flex">
                                                            <p>Land </p>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="d-flex">
                                                            <p>Residential </p>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="d-flex">
                                                            <p>Commercial  </p>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="d-flex">
                                                            <p>Industrial</p>
                                                        </a>
                                                    </li>
                                                </ul>
                                                @endif
                                            </li>
                                            @endforeach
                                        </ul>
                                    </aside>

                                </div>
                            </div>

                        </div>
                    </div>
                </section>
                <!--================Blog Area =================-->

                @endsection
                @section('5')
                active
                @endsection
