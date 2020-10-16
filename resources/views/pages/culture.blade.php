
@extends('pages/layouts.lay')

@section('content')
<main>
    <!-- Slider Area Start-->
    <div class="services-area">
        <div class="container">
            <!-- Section-tittle -->
            <div class="row d-flex justify-content-center">
                <div class="col-lg-8">
{{--                    <div class="section-tittle text-center mb-40">--}}
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
                            <h1 class="text-center font-weight-600" data-animation="fadeInRight" data-delay=".4s" class="mb-5"> <span style="color: #CDCDCD;">Integrity.</span><span style="color: #999999;"> Authenticity.</span><span style="color: #1b31a7;"> Excellence.</span></h1>
                        </div>
                        <div class="col-lg-2 col-md-9 about_menu_link">
                            @include('/pages.contact_menu')
                        </div>
                        <div class="col-8 offset-lg-1">
                            <div class="hero__caption hero__caption2 text-center">
                                <p data-animation="fadeInRight" data-delay=".4s" style="width: 88%;text-align: justify;margin:auto;">
                                    The foundation of the Royal Monarch culture is integrity, Authenticity, and Excellence. Our inclusive environment respects the diversity of talent and values the unique perspective of each member of our Royal Monarch family. Our culture rewards Intelligence, growth, and performance</p>
                            </div>
                            <div class="p-5"></div>
                            <div class="d-md-flex mb-4">
                                <div class="one-forth order-last align-self-center">
                                    <!--<img src="/img/firm/mission.png" class="" alt="">-->
                                    <svg width="100" height="100" viewBox="0 0 600 600" style="width: 150px;height: 125px;position: absolute;right: 100px;margin-top: -10px;" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke="none" stroke-width="0" fill="#ff00ff2e" d="M300,582.0697525312426C382.5290701553225,586.8405444964366,449.9789794690241,525.3245884688669,502.5850820975895,461.55621195738473C556.606425686781,396.0723002908107,615.8543463187945,314.28637112970534,586.6730223649479,234.56875336149918C558.9533121215079,158.8439757836574,454.9685369536778,164.00468322053177,381.49747125262974,130.76875717737553C312.15926192815925,99.40240125094834,248.97055460311594,18.661163978235184,179.8680185752513,50.54337015887873C110.5421016452524,82.52863877960104,119.82277516462835,180.83849132639028,109.12597500060166,256.43424936330496C100.08760227029461,320.3096726198365,92.17705696193138,384.0621239912766,124.79988738764834,439.7174275375508C164.83382741302287,508.01625554203684,220.96474134820875,577.5009287672846,300,582.0697525312426"></path>
                                    </svg>
                                    <img src="/image/culture/Integrity.png" class="" alt="" style="width: 50%">
                                </div>
                                <div class="one-half ml-md-5 align-self-center">
                                    <h2 class="mb-4 color-light-blue">Integrity</h2>
                                    <p>
                                        We define integrity as the consistency of our actions, values, methods, expectations, outcomes, and measurement. Leadership demands responsibility.
                                        <p class="mb-0">Whoever is careless with the truth in small matters cannot be trusted with important matters.</p>
                                        <footer class="blockquote-footer">Albert Einstein <cite title="Source Title">[1879 – 1955]</cite></footer>
                                    </p>
                                </div>
                            </div>
                            <div class="d-md-flex mb-4">
                                <div class="one-forth align-self-center">
                                    <svg width="100" height="100" viewBox="0 0 600 600" style="width: 150px;height: 125px;position: absolute;left: -15px;margin-top: -10px;" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke="none" stroke-width="0" fill="#1b31a721" d="M300,503.46388370962813C374.79870501325706,506.71871716319447,464.8034551963731,527.1746412648533,510.4981551193396,467.86667711651364C555.9287308511215,408.9015244558933,512.6030010748507,327.5744911775523,490.211057578863,256.5855673507754C471.097692560561,195.9906835881958,447.69079081568157,138.11976852964426,395.19560036434837,102.3242989838813C329.3053358748298,57.3949838291264,248.02791733380457,8.279543830951368,175.87071277845988,42.242879143198664C103.41431057327972,76.34704239035025,93.79494320519305,170.9812938413882,81.28167332365135,250.07896920659033C70.17666984294237,320.27484674793965,64.84698225790005,396.69656628748305,111.28512138212992,450.4950937839243C156.20124167950087,502.5303643271138,231.32542653798444,500.4755392045468,300,503.46388370962813"></path>
                                   </svg>
                                    <img src="/image/culture/Stweardship.png" class="" alt="" style="width: 50%">
                                </div>
                                <div class="one-half ml-md-5 align-self-center">
                                    <h2 class="mb-4 color-light-blue">Stewardship</h2>
                                    <p>
                                        Stewardship is the planning, management, and accountability of our client and firm resources. We aspire to be the best stewards of capital, education, and time.
                                        <blockquote class="blockquote">
                                            <p class="mb-0">We cannot always build the future of our youth, but we can build our youth for the future.</p>
                                            <footer class="blockquote-footer">Franklin D. Roosevelt <cite title="Source Title">[1882 – 1945]</cite></footer>
                                        </blockquote>
                                    </p>
                                </div>
                            </div>
                            <div class="d-md-flex mb-4">
                                <div class="one-forth order-last align-self-center">
                                    <!--<img src="/img/firm/mission.png" class="" alt="">-->
                                    <svg width="100" height="100" viewBox="0 0 600 600" style="width: 150px;height: 125px;position: absolute;right: 100px;margin-top: -10px;" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke="none" stroke-width="0" fill="#0080002b" d="M300,582.0697525312426C382.5290701553225,586.8405444964366,449.9789794690241,525.3245884688669,502.5850820975895,461.55621195738473C556.606425686781,396.0723002908107,615.8543463187945,314.28637112970534,586.6730223649479,234.56875336149918C558.9533121215079,158.8439757836574,454.9685369536778,164.00468322053177,381.49747125262974,130.76875717737553C312.15926192815925,99.40240125094834,248.97055460311594,18.661163978235184,179.8680185752513,50.54337015887873C110.5421016452524,82.52863877960104,119.82277516462835,180.83849132639028,109.12597500060166,256.43424936330496C100.08760227029461,320.3096726198365,92.17705696193138,384.0621239912766,124.79988738764834,439.7174275375508C164.83382741302287,508.01625554203684,220.96474134820875,577.5009287672846,300,582.0697525312426"></path>
                                    </svg>
                                    <img src="/image/culture/Collaboration.png" class="" alt="" style="width: 50%">
                                </div>
                                <div class="one-half ml-md-5 align-self-center">
                                    <h2 class="mb-4 color-light-blue">Collaboration</h2>
                                    <p>
                                        Collaboration guides how Royal Monarch interacts and partners with clients, associations, education institutions, governments, and society at large.
                                        <blockquote class="blockquote">
                                            <p class="mb-0">Talent wins games, but teamwork and intelligence wins championships.</p>
                                            <footer class="blockquote-footer"> Michael Jordan <cite title="Source Title">[1963 – present]</cite></footer>
                                        </blockquote>
                                    </p>
                                </div>
                            </div>
                            <div class="d-md-flex mb-4">
                                <div class="one-forth align-self-center">
                                    <svg width="100" height="100" style="width: 150px;height: 150px;position: absolute;left: 4px;" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke="none" stroke-width="0" fill="#ff000021" d="M300,521.0016835830174C376.1290562159157,517.8887921683347,466.0731472004068,529.7835943286574,510.70327084640275,468.03025145048787C554.3714126377745,407.6079735673963,508.03601936045806,328.9844924480964,491.2728898941984,256.3432110539036C474.5976632858925,184.082847569629,479.9380746630129,96.60480741107993,416.23090153303,58.64404602377083C348.86323505073057,18.502131276798302,261.93793281208167,40.57373210992963,193.5410806939664,78.93577620505333C130.42746243093433,114.334589627462,98.30271207620316,179.96522072025542,76.75703585869454,249.04625023123273C51.97151888228291,328.5150500222984,13.704378332031375,421.85034740162234,66.52175969318436,486.19268352777647C119.04800174914682,550.1803526380478,217.28368757567262,524.383925680826,300,521.0016835830174"></path>
                                    </svg>
                                    <img src="/image/culture/DIVERSITY.png" class="" alt="" style="width: 50%">
                                </div>
                                <div class="one-half ml-md-5 align-self-center">
                                    <h2 class="mb-4 color-light-blue">Diversity</h2>
                                    <p>
                                        Diversity is the embracing of the differences among beings, creatures, beliefs, norms, and values. Stewarding a diverse culture, with respect to thought, age, ethnicity, skills, country origin, knowledge, and experience, requires a comprehensive understanding
                                        of all such channels.
                                        <blockquote class="blockquote">
                                            <p class="mb-0">We all should know that diversity makes for a rich tapestry, and we must understand that all the threads of the tapestry are equal in value no matter what their colour.</p>
                                            <footer class="blockquote-footer"> Maya Angelou <cite title="Source Title">[1928 – 2014]</cite></footer>
                                        </blockquote>
                                    </p>
                                </div>
                            </div>
                            <div class="d-md-flex mb-4">
                                <div class="one-forth order-last align-self-center">
                                    <!--<img src="/img/firm/mission.png" class="" alt="">-->
                                    <svg width="100" height="100" viewBox="0 0 600 600" style="width: 150px;height: 125px;position: absolute;margin-top: -6px;right: 106px;" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke="none" stroke-width="0" fill="#1b31a721" d="M300,503.46388370962813C374.79870501325706,506.71871716319447,464.8034551963731,527.1746412648533,510.4981551193396,467.86667711651364C555.9287308511215,408.9015244558933,512.6030010748507,327.5744911775523,490.211057578863,256.5855673507754C471.097692560561,195.9906835881958,447.69079081568157,138.11976852964426,395.19560036434837,102.3242989838813C329.3053358748298,57.3949838291264,248.02791733380457,8.279543830951368,175.87071277845988,42.242879143198664C103.41431057327972,76.34704239035025,93.79494320519305,170.9812938413882,81.28167332365135,250.07896920659033C70.17666984294237,320.27484674793965,64.84698225790005,396.69656628748305,111.28512138212992,450.4950937839243C156.20124167950087,502.5303643271138,231.32542653798444,500.4755392045468,300,503.46388370962813"></path>
                                   </svg>
                                    <img src="/image/culture/Innovation.png" class="" alt="" style="width: 50%">
                                </div>
                                <div class="one-half ml-md-5 align-self-center">
                                    <h2 class="mb-4 color-light-blue">Innovation</h2>
                                    <p>
                                        Innovation, one of the most powerful forces of change through history, fundamentally improves our globe’s progress trajectory.
                                        <blockquote class="blockquote">
                                            <p class="mb-0">Innovation distinguishes between a leader and a follower.</p>
                                            <footer class="blockquote-footer"> Steve Jobs <cite title="Source Title">[1955 – 2011]</cite></footer>
                                        </blockquote>
                                    </p>
                                </div>
                            </div>
                            <div class="d-md-flex mb-4">
                                <div class="one-forth align-self-center">
                                    <svg width="100" height="100" viewBox="0 0 600 600" style="width: 150px;height: 125px;position: absolute;margin-top: -15px;left: -18px;" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke="none" stroke-width="0" fill="#ff00ff2e" d="M300,582.0697525312426C382.5290701553225,586.8405444964366,449.9789794690241,525.3245884688669,502.5850820975895,461.55621195738473C556.606425686781,396.0723002908107,615.8543463187945,314.28637112970534,586.6730223649479,234.56875336149918C558.9533121215079,158.8439757836574,454.9685369536778,164.00468322053177,381.49747125262974,130.76875717737553C312.15926192815925,99.40240125094834,248.97055460311594,18.661163978235184,179.8680185752513,50.54337015887873C110.5421016452524,82.52863877960104,119.82277516462835,180.83849132639028,109.12597500060166,256.43424936330496C100.08760227029461,320.3096726198365,92.17705696193138,384.0621239912766,124.79988738764834,439.7174275375508C164.83382741302287,508.01625554203684,220.96474134820875,577.5009287672846,300,582.0697525312426"></path>
                                    </svg>
                                    <img src="/image/culture/Education.png" class="" alt="" style="width: 50%">
                                </div>
                                <div class="one-half ml-md-5 align-self-center">
                                    <h2 class="mb-4 color-light-blue">Education</h2>
                                    <p>
                                        We foster an education-based culture that values how knowledge, skills, habits, experience, and wisdom are transferred amongst our clients, team, and the global community at large.
                                        <blockquote class="blockquote">
                                            <p class="mb-0">An investment in knowledge pays the best interest.</p>
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
{{--                <div class="col-md-12 heading-section text-center">--}}
{{--                    <h2 class="mb-4">Our Firm</h2>--}}
{{--                </div>--}}
            </div>
            
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
