@extends('layouts.app')

@section('title', 'Home - Teab')

@section('content')

    {{-- Header --}}
    @include('partials.header')

    {{-- About Section --}}
    <div class="about_section layout_padding">
        <div id="my_main_slider" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="about_main">
                                    <h1 class="about_taital">About Our</h1>
                                    <p class="about_text">It is a long established fact that a reader will be...</p>
                                    <div class="readmore_bt"><a href="#">Read More</a></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="image_2"><img src="{{ asset('images/img-2.png') }}"></div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- يمكنك تكرار carousel-item إذا أردت --}}
            </div>
            <a class="carousel-control-prev" href="#my_main_slider" role="button" data-slide="next">
                <i class="fa fa-angle-left"></i>
            </a>
            <a class="carousel-control-next" href="#my_main_slider" role="button" data-slide="next">
                <i class="fa fa-angle-right"></i>
            </a>
        </div>
    </div>

    {{-- Booking Section --}}
    <div class="booking_section">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1 class="booking_taital">Book Now Table</h1>
                    <p class="booking_text">It is a long established fact that a reader will be</p>
                </div>
                <div class="col-md-6">
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
                        {{-- خدمة واحدة مثال --}}
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
                        {{-- باقي الخدمات بنفس الطريقة --}}
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
            <p class="choose_text">It is a long established fact that a reader will be...</p>
            <div class="choose_section_2">
                <div class="choose_left">
                    <div class="choose_left_main">
                        <div class="icon_1"><img src="{{ asset('images/icon-1.png') }}"></div>
                    </div>
                    <div class="choose_right_main">
                        <h1 class="satisfied_text">99%<br><span class="satisfied_text_1">SATISFIED Customer</span></h1>
                    </div>
                </div>
                {{-- باقي الأعمدة بنفس الطريقة --}}
            </div>
        </div>
    </div>

    {{-- Shop Section --}}
    <div class="shop_section layout_padding">
        <div id="my_slider" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="container">
                        <h1 class="shop_taital">Our Tea Shop</h1>
                        <p class="shop_text">It is a long established fact that a reader will be...</p>
                        <div><img src="{{ asset('images/img-3.png') }}" class="image_3"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- FAQ Section --}}
    <div class="frequently_section layout_padding">
        <div class="container">
            <h1 class="frequently_taital">Frequently Asked Questions</h1>
            <p class="frequently_text">It is a long established fact that a reader will be...</p>
            <div class="frequently_section_2 layout_padding">
                <div class="bs-example">
                    <div class="accordion" id="accordionExample">
                        {{-- بطاقة FAQ واحدة مثال --}}
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h2 class="mb-0">
                                    <button type="button" class="btn btn-link w-100" data-toggle="collapse" data-target="#collapseOne">
                                        <i class="fa fa-plus"></i>Where can I get some?
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                <div class="card-body">
                                    <p>HTML stands for HyperText Markup Language. HTML is the standard markup language...</p>
                                </div>
                            </div>
                        </div>
                        {{-- باقي الأسئلة بنفس الطريقة --}}
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Clients Section --}}
    <div class="clients_section layout_padding">
        <div id="custum_slider" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="container">
                        <h1 class="clients_taital">Client's Testimonial</h1>
                        <p class="clients_text">Potential Clients are pouring our website on a daily basis...</p>
                        <div class="client_img"><img src="{{ asset('images/client-img.png') }}"></div>
                        <h1 class="louis_text">Louis Gilyard</h1>
                        <h1 class="smyth_text">SMYTH</h1>
                        <div class="border"></div>
                    </div>
                </div>
            </div>
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
    @include('partials.footer')

@endsection
