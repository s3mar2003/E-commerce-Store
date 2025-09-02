@extends('layouts.app')
@section('title', 'Home - Teab')
@section('content')

   

<!-- Banner Section -->
 <div class="banner_section layout_padding">
            <div id="main_slider" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">

                    <!-- Slide 1 -->
                    <div class="carousel-item active">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6">
                                    <h1 class="banner_taital">Test of <span style="color: #f3801f;">Tea</span></h1>
                                </div>
                                <div class="col-md-6">
                                    <div><img src="{{ asset('images/img-1.png') }}" class="image_1" alt="Slide 1"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 2 -->
                    <div class="carousel-item">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6">
                                    <h1 class="banner_taital">Test of <span style="color: #f3801f;">Tea</span></h1>
                                </div>
                                <div class="col-md-6">
                                    <div><img src="{{ asset('images/img-1.png') }}" class="image_1" alt="Slide 2"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 3 -->
                    <div class="carousel-item">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6">
                                    <h1 class="banner_taital">Test of <span style="color: #f3801f;">Tea</span></h1>
                                </div>
                                <div class="col-md-6">
                                    <div><img src="{{ asset('images/img-1.png') }}" class="image_1" alt="Slide 3"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Carousel Controls -->
                <a class="carousel-control-prev" href="#main_slider" role="button" data-bs-slide="prev">
                    <i class="fa fa-angle-left"></i>
                </a>
                <a class="carousel-control-next" href="#main_slider" role="button" data-bs-slide="next">
                    <i class="fa fa-angle-right"></i>
                </a>
            </div>
        </div>

        <!-- Play Icon -->
        <div class="container">
            <div class="play_icon">
                <a href="#"><img src="{{ asset('images/play-icon.png') }}" alt="Play"></a>
            </div>
        </div>

    </div>

    

{{-- About Section --}}
<div class="about_section layout_padding">
    <div id="my_main_slider" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            {{-- Slide 1 --}}
            <div class="carousel-item active">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="about_main">
                                <h1 class="about_taital">About Our</h1>
                                <p class="about_text">
                                    It is a long established fact that a reader will be It is a long established fact that a reader will be
                                     It is a long established fact that a reader will be
                                </p>
                                <div class="readmore_bt"><a href="#">Read More</a></div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="image_2"><img src="{{ asset('images/img-2.png') }}" alt="About Image"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="carousel-item">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="about_main">
                                <h1 class="about_taital">About Our</h1>
                                <p class="about_text">
                                    It is a long established fact that a reader will be It is a long established 
                                    fact that a reader will be It is
                                    a long established fact that a reader will be
                                </p>
                                <div class="readmore_bt"><a href="#">Discover More</a></div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="image_2"><img src="{{ asset('images/img-3.png') }}" alt="About Image"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Controls --}}
        <a class="carousel-control-prev" href="#my_main_slider" role="button" data-slide="prev">
            <i class="fa fa-angle-left"></i>
        </a>
        <a class="carousel-control-next" href="#my_main_slider" role="button" data-slide="next">
            <i class="fa fa-angle-right"></i>
        </a>
    </div>
</div>

{{-- Booking Section --}}
<div class="booking_section layout_padding">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <h1 class="booking_taital">Book Now Table</h1>
                <p class="booking_text">Reserve your seat and enjoy our delicious tea with friends.</p>
            </div>
            <div class="col-md-6 text-md-right text-center">
                <div class="booking_bt"><a href="#">Book Table For Tea</a></div>
            </div>
        </div>
    </div>
</div>


    {{-- Services Section --}}
<div class="services_section layout_padding">
    <div class="container">
        <h1 class="services_taital">Our Tea Services</h1>
        <p class="services_text">It is a long established fact that a reader will be</p>
        <div class="services_section_2 layout_padding">
            <div class="row">
                <div class="col-md-6">
                    <div class="box_main active">
                        <div class="left_main">
                            <div class="cup_img_1"><img src="{{ asset('images/cup-img-1.png') }}"></div>
                        </div>
                        <div class="middle_main">
                            <div class="border_10 active"></div>
                        </div>
                        <div class="right_main">
                            <h6 class="milk_text">Milk Tea</h6>
                            <h1 class="price_text">$10</h1>
                        </div>
                    </div>

                    <div class="box_main">
                        <div class="left_main">
                            <div class="cup_img_1"><img src="{{ asset('images/cup-img-2.png') }}"></div>
                        </div>
                        <div class="middle_main">
                            <div class="border_10"></div>
                        </div>
                        <div class="right_main">
                            <h6 class="milk_text">Green Tea</h6>
                            <h1 class="price_text">$12</h1>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="box_main">
                        <div class="left_main">
                            <div class="cup_img_1"><img src="{{ asset('images/cup-img-3.png') }}"></div>
                        </div>
                        <div class="middle_main">
                            <div class="border_10"></div>
                        </div>
                        <div class="right_main">
                            <h6 class="milk_text">Black Tea</h6>
                            <h1 class="price_text">$9</h1>
                        </div>
                    </div>


                   <div class="box_main">
                        <div class="left_main">
                            <div class="cup_img_1"><img src="{{ asset('images/cup-img-4.png') }}"></div>
                        </div>
                        <div class="middle_main">
                            <div class="border_10"></div>
                        </div>
                        <div class="right_main">
                            <h6 class="milk_text">Herbal Tea</h6>
                            <h1 class="price_text">$15</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="see_bt"><a href="#">See More</a></div>
    </div>
</div>


    {{-- Choose Section --}}
   <div class="choose_section">
   <div class="container">
      <h1 class="choose_taital">Why Choose Us</h1>
      <p class="choose_text">
         It is a long established fact that a reader will beIt is a long established fact that a reader will be
      </p>
      <div class="choose_section_2">
         
         <div class="choose_left">
            <div class="choose_left_main">
               <div class="icon_1">
                  <img src="{{ asset('images/icon-1.png') }}" alt="Satisfied Customers">
               </div>
            </div>
            <div class="choose_right_main">
               <h1 class="satisfied_text">99%<br>
                  <span class="satisfied_text_1">SATISFIED Customer</span>
               </h1>
            </div>
         </div>

         <div class="choose_middle">
            <div class="choose_left_main">
               <div class="icon_1">
                  <img src="{{ asset('images/icon-2.png') }}" alt="Awesome Tea">
               </div>
            </div>
            <div class="choose_right_main">
               <h1 class="satisfied_text">40+<br>
                  <span class="satisfied_text_1">AWESOME TEA</span>
               </h1>
            </div>
         </div>

         <div class="choose_middle_1">
            <div class="choose_left_main">
               <div class="icon_1">
                  <img src="{{ asset('images/icon-3.png') }}" alt="Customer Count">
               </div>
            </div>
            <div class="choose_right_main">
               <h1 class="satisfied_text">4500+<br>
                  <span class="satisfied_text_1">Customer</span>
               </h1>
            </div>
         </div>

         <div class="choose_right">
            <div class="choose_left_main">
               <div class="icon_1">
                  <img src="{{ asset('images/icon-4.png') }}" alt="Daily Visitors">
               </div>
            </div>
            <div class="choose_right_main">
               <h1 class="satisfied_text">190+<br>
                  <span class="satisfied_text_1">DAILY VISITORS</span>
               </h1>
            </div>
         </div>

      </div>
   </div>
</div>


  <!-- shop section start -->
<div class="shop_section layout_padding">
   <div id="my_slider" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
         <div class="carousel-item active">
            <div class="container">
               <h1 class="shop_taital">Our Tea Shop</h1>
               <p class="shop_text">It is a long established fact that a reader will beIt is a long established fact that a reader will be</p>
               <div><img src="{{ asset('images/img-3.png') }}" class="image_3"></div>
            </div>
         </div>
         <div class="carousel-item">
            <div class="container">
               <h1 class="shop_taital">Our Tea Shop</h1>
               <p class="shop_text">It is a long established fact that a reader will beIt is a long established fact that a reader will be</p>
               <div><img src="{{ asset('images/img-3.png') }}" class="image_3"></div>
            </div>
         </div>
         <div class="carousel-item">
            <div class="container">
               <h1 class="shop_taital">Our Tea Shop</h1>
               <p class="shop_text">It is a long established fact that a reader will beIt is a long established fact that a reader will be</p>
               <div><img src="{{ asset('images/img-3.png') }}" class="image_3"></div>
            </div>
         </div>
      </div>

      <a class="carousel-control-prev" href="#my_slider" role="button" data-slide="prev">
         <i class="fa fa-arrow-left"></i>
      </a>
      <a class="carousel-control-next" href="#my_slider" role="button" data-slide="next">
         <i class="fa fa-arrow-right" style="text-align: left;"></i>
      </a>
   </div>
</div>


   <!-- frequently section start -->
<div class="frequently_section layout_padding">
   <div class="container">
      <h1 class="frequently_taital">Frequently Asked Questions</h1>
      <p class="frequently_text">
        It is a long established fact that a reader will beIt is a long established fact that a reader will be
      </p>
      <div class="frequently_section_2 layout_padding">
         <div class="bs-example">
            <div class="accordion" id="accordionExample">
               
               <div class="card">
                  <div class="card-header" id="headingOne">
                     <h2 class="mb-0">
                        <button type="button" class="btn btn-link w-100" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                           <i class="fa fa-plus"></i> Where can I get some?
                        </button>
                     </h2>
                  </div>
                  <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                     <div class="card-body">
                        <p>HTML stands for HyperText Markup Language. HTML is the standard markup language for describing the structure of web pages. <a href="https://www.tutorialrepublic.com/html-tutorial/" target="_blank">Learn more.</a></p>
                     </div>
                  </div>
               </div>

               <div class="card">
                  <div class="card-header" id="headingTwo">
                     <h2 class="mb-0">
                        <button type="button" class="btn btn-link w-100 collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                           <i class="fa fa-plus"></i> Why do we use it?
                        </button>
                     </h2>
                  </div>
                  <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordionExample">
                     <div class="card-body">
                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it.  <a href="https://www.tutorialrepublic.com/twitter-bootstrap-tutorial/" target="_blank">Learn more.</a></p>
                     </div>
                  </div>
               </div>

               <div class="card">
                  <div class="card-header" id="headingThree">
                     <h2 class="mb-0">
                        <button type="button" class="btn btn-link w-100 collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                           <i class="fa fa-plus"></i> Where does it come from?
                        </button>
                     </h2>
                  </div>
                  <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                     <div class="card-body">
                        <p>CSS stands for Cascading Style Sheet. CSS allows you to specify various style properties for a given HTML element such as colors, backgrounds, fonts etc <a href="https://www.tutorialrepublic.com/css-tutorial/" target="_blank">Learn more.</a></p>
                     </div>
                  </div>
               </div>

               <div class="card">
                  <div class="card-header" id="headingFour">
                     <h2 class="mb-0">
                        <button type="button" class="btn btn-link w-100 collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                           <i class="fa fa-plus"></i> What is Lorem Ipsum?
                        </button>
                     </h2>
                  </div>
                  <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                     <div class="card-body">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                     </div>
                  </div>
               </div>

               <div class="card">
                  <div class="card-header" id="headingFive">
                     <h2 class="mb-0">
                        <button type="button" class="btn btn-link w-100 collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                           <i class="fa fa-plus"></i> Why do we use it?
                        </button>
                     </h2>
                  </div>
                  <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
                     <div class="card-body">
                        <p>It has survived not only five centuries, but also the leap into electronic typesetting.</p>
                     </div>
                  </div>
               </div>

            </div>
         </div>
      </div>
   </div>
</div>


   <!-- clients section start -->
<div class="clients_section layout_padding">
   <div id="custum_slider" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
         <div class="carousel-item active">
            <div class="container">
               <h1 class="clients_taital">Client's Testimonial</h1>
               <p class="clients_text">
                  Potential Clients are pouring our website on a daily basis after we use Organic Visit, really recommended their great job!
               </p>
               <div class="client_img"><img src="images/client-img.png" alt="Client"></div>
               <h1 class="louis_text">Louis Gilyard</h1>
               <h1 class="smyth_text">SMYTH</h1>
               <div class="border"></div>
            </div>
         </div>
         <div class="carousel-item">
            <div class="container">
               <h1 class="clients_taital">Client's Testimonial</h1>
               <p class="clients_text">
                  Potential Clients are pouring our website on a daily basis after we use Organic Visit, really recommended their great job!
               </p>
               <div class="client_img"><img src="images/client-img.png" alt="Client"></div>
               <h1 class="louis_text">Louis Gilyard</h1>
               <h1 class="smyth_text">SMYTH</h1>
               <div class="border"></div>
            </div>
         </div>
         <div class="carousel-item">
            <div class="container">
               <h1 class="clients_taital">Client's Testimonial</h1>
               <p class="clients_text">
                  Potential Clients are pouring our website on a daily basis after we use Organic Visit, really recommended their great job!
               </p>
               <div class="client_img"><img src="images/client-img.png" alt="Client"></div>
               <h1 class="louis_text">Louis Gilyard</h1>
               <h1 class="smyth_text">SMYTH</h1>
               <div class="border"></div>
            </div>
         </div>
      </div>

      <a class="carousel-control-prev" href="#custum_slider" role="button" data-slide="prev">
         <i class="fa fa-angle-left"></i>
      </a>
      <a class="carousel-control-next" href="#custum_slider" role="button" data-slide="next">
         <i class="fa fa-angle-right"></i>
      </a>
   </div>
</div>

    {{-- Contact Section --}}
    <div class="contact_section layout_padding">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <div class="mail_main">
                        <h1 class="contact_taital">Contact us</h1>
                        <form action="#">
                            <div class="form-group">
                                <input type="text" class="email-bt" placeholder="Name" name="Name">
                            </div>
                            <div class="form-group">
                                <input type="text" class="email-bt" placeholder="Email" name="Email">
                            </div>
                            <div class="form-group">
                                <input type="text" class="email-bt" placeholder="Subject" name="Subject">
                            </div>
                            <div class="form-group">
                                <textarea class="massage-bt" placeholder="Message" rows="5" name="Message"></textarea>
                            </div>
                        </form>
                        <div class="send_btn">
                            <div class="main_bt"><a href="#">Send</a></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="map_main">
                        <div class="map-responsive">
                            <iframe src="https://www.google.com/maps/embed/v1/place?key=YOUR_KEY&q=Eiffel+Tower+Paris+France" width="600" height="600" frameborder="0" style="border:0; width: 100%;" allowfullscreen=""></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Footer --}}
    {{-- @include('partials.footer') --}}

@endsection
