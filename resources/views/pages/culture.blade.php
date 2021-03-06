
@extends('pages/layouts.lay')

@section('content')
<main>
    <!-- Slider Area Start-->
    <div class="services-area">
        <div class="container">
            <!-- Section-tittle -->
            <div class="row d-flex justify-content-center">
                <div class="col-lg-8">
                    {{--                    <div class="section-tittle text                    -center mb-40">--}}
                    {{--                        <span>Our Culture</span>--}}
{{--                        <h2>About us</h2>--}}
{{--                    </div>--}}
                </div>
            </div>
        </div>
    </div>
    <!-- Slider Area End-->
    <!-- Slider Area Start-->
    <div class="slider-area">
        <div class="">
            <div class="d-flex align-items-center">
                <div class="container">
                    <div class="row d-flex">
                        <div class="col-md-12 mb-50">
                            <h1 class="text-center font-weight-600 font-60" data-animation="fadeInRight" data-delay=".4s" class="mb-5"> <span style="color: #CDCDCD;">Integrity.</span><span style="color: #999999;"> Authenticity.</span><span style="color: #1b31a7;"> Excellence.</span></h1>
                    </div>
                    <div class="col-lg-2 col-md-9 about_menu_link">
                        @include('/pages.contact_menu')
                    </div>
                    <div class="col-8 item-list-area">
                        <div class="hero__caption hero__caption2 text-center">
                            <p data-animation="fadeInRight" data-delay=".4s" style="width: 88%;text-align: justify;margin:auto;">
                                The foundation of the Royal Monarch culture is integrity, Authenticity, and Excellence. Our inclusive environment respects the diversity of talent and values the unique perspective of each member of our Royal Monarch family. Our culture rewards <span class="text-blue">Intelligence, growth, and performance</span></p>
                        </div>
                        <div class="p-5"></div>
                    </div>
                    <div class="col-10 offset-1 mt-50">
                        <div class="d-md-flex mb-50 ">
                            <div class="one-forth order-last align-self-center col-md-6 col-sm-12">
                                <img src="/image/culture/Integrity.jpg" class="" alt="" width="85%">
                            </div>
                            <div class="one-half align-self-center col-md-6">
                                <h2 class="mb-4 color-light-blue culture-section-title">
                                    <img src="/image/culture/Integrity-icon.png" style="width: 53px">
                                    <span>Integrity</span>
                                </h2>
                                <p class="font-weight-500">
                                    We define integrity as the consistency of our actions, values, methods, expectations, outcomes, and measurement. Leadership demands responsibility.
                                    <p class="mb-0 font-weight-300">Whoever is careless with the truth in small matters cannot be trusted with important matters.</p>
                                    <footer class="blockquote-footer">Albert Einstein <cite title="Source Title">[1879 – 1955]</cite></footer>
                                </p>
                            </div>
                        </div>
                        <div class="d-md-flex mb-50">
                            <div class="one-forth align-self-center col-md-6 col-sm-12">
                                <img src="/image/culture/Stewardship.jpg" class="" alt="">
                            </div>
                            <div class="one-half align-self-center col-md-6">
                                <h2 class="mb-4 color-light-blue culture-section-title">
                                    <img src="/image/culture/Stweardship-icon.png" style="width: 53px">
                                    <span>Stewardship</span>                                
                                </h2>
                                <p class="font-weight-500">
                                    Stewardship is the planning, management, and accountability of our client and firm resources. We aspire to be the best stewards of capital, education, and time.
                                </p>
                                    <blockquote class="blockquote">
                                        <p class="mb-0 font-weight-300">We cannot always build the future of our youth, but we can build our youth for the future.</p>
                                        <footer class="blockquote-footer">Franklin D. Roosevelt <cite title="Source Title">[1882 – 1945]</cite></footer>
                                    </blockquote>
                            </div>
                        </div>
                        <div class="d-md-flex mb-50">
                            <div class="one-forth order-last align-self-center col-md-6 col-sm-12">
                                <img src="/image/culture/Collaboration.jpg" class="" alt="">
                            </div>
                            <div class="one-half align-self-center col-md-6">
                                <h2 class="mb-4 color-light-blue culture-section-title">
                                    <img src="/image/culture/Collaboration-icon.png" style="width: 53px">
                                    <span>Collaboration</span>
                                </h2>
                                <p class="font-weight-500">
                                    Collaboration guides how Royal Monarch interacts and partners with clients, associations, education institutions, governments, and society at large.
                                </p>
                                    <blockquote class="blockquote">
                                        <p class="mb-0 font-weight-300">Talent wins games, but teamwork and intelligence wins championships.</p>
                                        <footer class="blockquote-footer"> Michael Jordan <cite title="Source Title">[1963 – present]</cite></footer>
                                    </blockquote>
                            </div>
                        </div>
                        <div class="d-md-flex mb-50">
                            <div class="one-forth align-self-center col-md-6 col-sm-12">
                                <img src="/image/culture/Diversity.jpg" class="" alt="">
                            </div>
                            <div class="one-half align-self-center col-md-6">
                                <h2 class="mb-4 color-light-blue culture-section-title">
                                    <img src="/image/culture/DIVERSITY-icon.png" style="width: 53px">
                                    <span>Diversity</span>
                                </h2>
                                <p class="font-weight-500">
                                    Diversity is the embracing of the differences among beings, creatures, beliefs, norms, and values. Stewarding a diverse culture, with respect to thought, age, ethnicity, skills, country origin, knowledge, and experience, requires a comprehensive understanding
                                    of all such channels.
                                </p>
                                    <blockquote class="blockquote">
                                        <p class="mb-0 font-weight-300">We all should know that diversity makes for a rich tapestry, and we must understand that all the threads of the tapestry are equal in value no matter what their colour.</p>
                                        <footer class="blockquote-footer"> Maya Angelou <cite title="Source Title">[1928 – 2014]</cite></footer>
                                    </blockquote>
                            </div>
                        </div>
                        <div class="d-md-flex mb-50">
                            <div class="one-forth order-last align-self-center ml-md-6 col-md-5 col-sm-12">
                                <img src="/image/culture/Innovation.jpg" class="" alt="">
                            </div>
                            <div class="one-half align-self-center co-md-6">
                                <h2 class="mb-4 color-light-blue culture-section-title">
                                    <img src="/image/culture/Innovation-icon.png" style="width: 53px">
                                    <span>Innovation</span>
                                </h2>
                                <p class="font-weight-500">
                                    Innovation, one of the most powerful forces of change through history, fundamentally improves our globe’s progress trajectory.
                                    <blockquote class="blockquote">
                                        <p class="mb-0 font-weight-300">Innovation distinguishes between a leader and a follower.</p>
                                        <footer class="blockquote-footer"> Steve Jobs <cite title="Source Title">[1955 – 2011]</cite></footer>
                                    </blockquote>
                                </p>
                            </div>
                        </div>
                        <div class="d-md-flex mb-50">
                            <div class="one-forth align-self-center col-md-6 col-sm-12">
                                <img src="/image/culture/Education.jpg" class="" alt="">
                            </div>
                            <div class="one-half align-self-center col-md-6">
                                <h2 class="mb-4 color-light-blue culture-section-title">
                                <img src="/image/culture/Education-icon.png" style="width: 53px">
                                <span>Education</span>
                                </h2>
                                <p class="font-weight-500">
                                    We foster an education-based culture that values how knowledge, skills, habits, experience, and wisdom are transferred amongst our clients, team, and the global community at large.
                                    <blockquote class="blockquote">
                                        <p class="mb-0 font-weight-300">An investment in knowledge pays the best interest.</p>
                                        <footer class="blockquote-footer"> Benjamin Franklin <cite title="Source Title">[1706 – 1790]</cite></footer>
                                    </blockquote>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- about shape -->
    <div class="about-shape">
        <div class="shape-left">
            <img src="/img/hero/about_shape1.png" alt="">
        </div>
        <div class="shape-right">
            <img src="/img/hero/about-sharpe2.png" alt="">
        </div>
    </div>
</div>
<!-- Slider Area End-->

<!-- section Area start-->

<section class="ftco-section ftco-no-pb ftco-no-pt" id="chapter-section">
    <div class="container">
        <div class="row justify-content-center py-5 mt-5">
            {{--                <div class="col-md-12 heading-section text-cente            r">--}}
            {{--                    <h2 class="mb-4">Ou            r Firm</h2>--}}
            {{--           </div>--}}
            </di        v>

            <?php /*
              <div class="row">
              <div class="col-md-3 mb-4">
              <nav id="navi">
              <ul>
              <li><a href="#page-1">INTEGRITY</a></li>
              <li><a href="#page-2">STEWARDSHIP
              </a></li>
              <li><a href="#page-3">COLLABORATION
              </a></li>
              <li><a href="#page-4">DIVERSITY</a></li>
              <li><a href="#page-5">INNOVATION</a></li>
              <li><a href="#page-6">EDUCATION</a></li>


              </ul>
              </nav>
              </div>
              <div class="col-md-9">
              <div id="page-1" class="page bg-light one row align-items-center">
              <div class="col-md-3"> <img src="/img/cultur/1.png" alt="">
              </div>
              <div class="col-md-9">
              <h2 class="heading">INTEGRITY</h2>
              <p>
              We define integrity as the consistency of our actions, values, methods, expectations, outcomes, and measurement. Leadership demands responsibility.
              <blockquote class="blockquote">
              <p class="mb-0">Whoever is careless with the truth in small matters cannot be trusted with important matters.</p>
              <footer class="blockquote-footer">Albert Einstein <cite title="Source Title">[1879 – 1955]</cite></footer>
              </blockquote>
              </p>
              </div>

              </div>
              <div id="page-2" class="page bg-light row two align-items-center">
              <div class="col-md-9">
              <h2 class="heading">STEWARDSHIP</h2>
              <p>
              Stewardship is the planning, management, and accountability of our client and firm resources. We aspire to be the best stewards of capital, education, and time.
              <blockquote class="blockquote">
              <p class="mb-0">We cannot always build the future of our youth, but we can build our youth for the future.</p>
              <footer class="blockquote-footer">Franklin D. Roosevelt <cite title="Source Title">[1882 – 1945]</cite></footer>
              </blockquote>
              </p>
              </div>
              <div class="col-md-3"> <img src="/img/cultur/2.png" alt="">
              </div>

              </div>
              <div id="page-3" class="page bg-light row align-items-center three">
              <div class="col-md-3"> <img src="/img/cultur/3.png" alt="">
              </div>
              <div class="col-md-9">
              <h2 class="heading">COLLABORATION</h2>
              <p>
              Collaboration guides how Royal Monarch interacts and partners with clients, associations, education institutions, governments, and society at large.
              <blockquote class="blockquote">
              <p class="mb-0">Talent wins games, but teamwork and intelligence wins championships.</p>
              <footer class="blockquote-footer"> Michael Jordan <cite title="Source Title">[1963 – present]</cite></footer>
              </blockquote>
              </p>
              </div>

              </div>
              <div id="page-4" class="page bg-light row align-items-center four">
              <div class="col-md-9">
              <h2 class="heading">DIVERSITY</h2>
              <p>

              Diversity is the embracing of the differences among beings, creatures, beliefs, norms, and values. Stewarding a diverse culture, with respect to thought, age, ethnicity, skills, country origin, knowledge, and experience, requires a comprehensive understanding
              of all such channels.
              <blockquote class="blockquote">
              <p class="mb-0">We all should know that diversity makes for a rich tapestry, and we must understand that all the threads of the tapestry are equal in value no matter what their colour.</p>
              <footer class="blockquote-footer"> Maya Angelou <cite title="Source Title">[1928 – 2014]</cite></footer>
              </blockquote>
              </p>
              </div>

              <div class="col-md-3"> <img src="/img/cultur/4.png" alt="">
              </div>
              </div>

              <div id="page-5" class="page bg-light row align-items-center five">
              <div class="col-md-3"> <img src="/img/cultur/5.png" alt="">
              </div>
              <div class="col-md-9">
              <h2 class="heading">INNOVATION</h2>
              <p>

              Innovation, one of the most powerful forces of change through history, fundamentally improves our globe’s progress trajectory.
              <blockquote class="blockquote">
              <p class="mb-0">Innovation distinguishes between a leader and a follower.</p>
              <footer class="blockquote-footer"> Steve Jobs <cite title="Source Title">[1955 – 2011]</cite></footer>
              </blockquote>
              </p>
              </div>

              </div>

              <div id="page-6" class="page bg-light row align-items-center six">
              <div class="col-md-9">
              <h2 class="heading">EDUCATION</h2>

              <p>

              We foster an education-based culture that values how knowledge, skills, habits, experience, and wisdom are transferred amongst our clients, team, and the global community at large.
              <blockquote class="blockquote">
              <p class="mb-0">An investment in knowledge pays the best interest.</p>
              <footer class="blockquote-footer"> Benjamin Franklin <cite title="Source Title">[1706 – 1790]</cite></footer>
              </blockquote>

              </p>

              </div>

              <div class="col-md-3"> <img src="/img/cultur/6.png" alt="">
              </div>
              </div>

              </div>
              </div> */ ?>
        </div>
</section>

<!-- section Area end-->




</main>


@endsection




@section('2')
active
@endsection
