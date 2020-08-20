

@extends('pages/layouts.lay')

@section('content')


<main>
    <!-- Slider Area Start-->
    <div class="services-area ">
        <div class="container">
            <!-- Section-tittle -->
            <div class="row d-flex justify-content-center">
                <div class="col-lg-8">
                    <div class="section-tittle text-center mb-80">
                        <span>Contact</span>
                        <h2>Contact Us​</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Slider Area End-->
    <!-- ================ contact section start ================= -->
    <section class="contact-section p-5">
        <div class="section-title">
            <h2> <span style="color: #CDCDCD;">Trust.</span><span style="color: #999999;"> Transparency.</span><span style="color: #1b31a7;"> Accountability.</span>

            </h2>
        </div>
        <div class="container bg-light p-5" style="border-radius: 20px; margin-bottom: 60px;">



            <div class="section-top-border">
                <div class="row">
                    <div class="col-lg-8 col-md-8">
                        <h3 class="mb-30">Get in Touch</h3>
                        <form method="POST" action="/contact">
                            @csrf
                            <div class="mt-10">
                                <input type="text" name="first_name" placeholder="First Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'First Name'" required class="single-input">
                                @error('first_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            </div>
                            <div class="mt-10">
                                <input type="text" name="last_name" placeholder="Last Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Last Name'" required class="single-input">
                                @error('last_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            </div>

                            <div class="input-group-icon  mt-10">
                                <div class="icon"><i class="fa fa-envelope" aria-hidden="true"></i>
                                </div>

                                <input type="email" name="email" placeholder="Email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email address'" required class="single-input">
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            </div>
                            <div class="input-group-icon mt-10">
                                <div class="icon"><i class="fa fa-phone" aria-hidden="true"></i>
                                    </i>
                                </div>
                                <input type="text" name="phone" placeholder="Your Phone" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Phone'" required class="single-input">
                                @error('phone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            </div>


                            <div class="mt-10 ">
                                <textarea class="single-textarea " placeholder="Message " onfocus="this.placeholder='' " onblur="this.placeholder='Message' " required name="message"></textarea>
                                @error('message')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            </div>
                            <button type="submit" class="btn btn-secondary p-3 mt-3">submit</button>
                            <!-- For Gradient Border Use -->
                            <!-- <div class="mt-10 ">
                                        <div class="primary-input ">
                                            <input id="primary-input " type="text " name="first_name " placeholder="Primary color " onfocus="this.placeholder='' " onblur="this.placeholder='Primary color' ">
                                            <label for="primary-input "></label>
                                        </div>
                                    </div> -->

                        </form>
                    </div>
                    <div class="col-lg-3 offset-lg-1 pt-5" style="padding-top: 80px !important;">
                        <div class="media contact-info ">
                            <span class="contact-info__icon "><i class="ti-home "></i></span>
                            <div class="media-body ">
                                <h3>Kolkata, INDIA.</h3>
                                <p>Cd-100, Sec-1, Salt Lake, CA 700064</p>


                            </div>
                        </div>
                        <div class="media contact-info ">
                            <span class="contact-info__icon "><i class="ti-tablet "></i></span>
                            <div class="media-body ">
                                <h3>+1 253 565 2365</h3>
                                <p>Mon to Fri 9am to 6pm</p>
                            </div>
                        </div>
                        <div class="media contact-info ">
                            <span class="contact-info__icon "><i class="ti-email "></i></span>
                            <div class="media-body ">
                                <h3>support@example.com</h3>
                                <p>Send us your query anytime!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ================ contact section end ================= -->

    <!-- ======= F.A.Q Section ======= -->
    <section id="faq" class="faq">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Frequently Asked Questions</h2>
            </div>

            <ul class="faq-list">

                <li data-aos="fade-up" data-aos-delay="100">
                    <a data-toggle="collapse" aria-expanded="false" aria-controls="faq1" href="#faq1">Non consectetur a erat nam at lectus urna duis? <i class='bx bx-down-arrow ' ></i></i></a>
                    <div id="faq1" class="collapse" data-parent=".faq-list">
                        <p>
                            Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
                        </p>
                    </div>
                </li>

                <li data-aos="fade-up" data-aos-delay="200">
                    <a data-toggle="collapse" href="#faq2" aria-expanded="false" aria-controls="faq2">Feugiat scelerisque varius morbi enim nunc faucibus a pellentesque?<i class='bx bx-down-arrow' ></i></a>
                    <div id="faq2" class="collapse" data-parent=".faq-list">
                        <p>
                            Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in
                            cursus turpis massa tincidunt dui.
                        </p>
                    </div>
                </li>

                <li data-aos="fade-up" data-aos-delay="300">
                    <a data-toggle="collapse" href="#faq3" aria-expanded="false" aria-controls="faq3">Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi? <i class='bx bx-down-arrow ' ></i></a>
                    <div id="faq3" class="collapse" data-parent=".faq-list">
                        <p>
                            Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna
                            molestie at elementum eu facilisis sed odio morbi quis
                        </p>
                    </div>
                </li>

                <li data-aos="fade-up" data-aos-delay="400">
                    <a data-toggle="collapse" href="#faq4" aria-expanded="false" aria-controls="faq4">Ac odio tempor orci dapibus. Aliquam eleifend mi in nulla? <i class='bx bx-down-arrow bx-fade-rigt' ></i></a>
                    <div id="faq4" class="collapse" data-parent=".faq-list">
                        <p>
                            Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in
                            cursus turpis massa tincidunt dui.
                        </p>
                    </div>
                </li>

                <li data-aos="fade-up" data-aos-delay="500">
                    <a data-toggle="collapse" href="#faq5" aria-expanded="false" aria-controls="faq5">Tempus quam pellentesque nec nam aliquam sem et tortor consequat?<i class='bx bx-down-arrow ' ></i></i></a>
                    <div id="faq5" class="collapse" data-parent=".faq-list">
                        <p>
                            Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in
                        </p>
                    </div>
                </li>

                <li data-aos="fade-up" data-aos-delay="600">
                    <a data-toggle="collapse" href="#faq6" aria-expanded="false" aria-controls="faq6">Tortor vitae purus faucibus ornare. Varius vel pharetra vel turpis nunc eget lorem dolor? <i class='bx bx-down-arrow ' ></i></i></a>
                    <div id="faq6" class="collapse" data-parent=".faq-list">
                        <p>
                            Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque. Pellentesque
                            diam volutpat commodo sed egestas egestas fringilla phasellus faucibus. Nibh tellus molestie nunc non blandit massa enim nec.
                        </p>
                    </div>
                </li>

            </ul>

        </div>
    </section>
    <!-- End Frequently Asked Questions Section -->
    <!-- End F.A.Q Section -->


    <!--The div element for the map -->
    <div class="container bg-light mt-5 p-2 rounded">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3672.707055944778!2d72.4967650149188!3d22.99779738496566!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e9add24c1abaf%3A0x416bcc7b54495c45!2sWestgate%20Business%20Bay%20by%20True%20Value!5e0!3m2!1sen!2sin!4v1587559109270!5m2!1sen!2sin"
            width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>

</main>

@endsection


   
  
@section('6')
    active
@endsection
