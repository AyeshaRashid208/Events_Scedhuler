@extends('layouts.app')
@section('page_title')
    Home
@endsection
@section('content')
    <main class="">
        <!-- banner -->
        <section class="py-3 py-lg-5 mb-3 mb-lg-5 banner">
            <div class="col-xxl-10 col-xl-10 col-lg-10 col-11 mx-auto text-center text-xl-start">
                <div class="banner_content">
                    <h1>Manage Your SM with us</h1>
                    <p>Automate the way you search through hashtags and suggested profiles to find results 100x faster.</p>
                    <a href="signup.html" class="mt-4 btn subscribe-btn">Make Registration <i
                            class="ms-3 fas fa-arrow-alt-circle-right"></i></a>
                </div>
                <div class="screen1 banner_img floating d-none d-xl-block"><img class="img-fluid"
                        src="{{ asset('assets/images/Dashboard_screen.png') }}" alt="" /></div>
                <div class="screen2 floating d-block d-xl-none"><img class="img-fluid"
                        src="{{ asset('assets/images/Dashboard_screen2.png') }}" alt="" /></div>
            </div>
        </section>
        <!-- testimonials -->
        <section class="py-3 py-lg-5 mb-3 mb-lg-5">
            <div class="col-xxl-9 col-xl-9 col-lg-8 col-10 mx-auto">
                <div class="text-center main_heading mb-3 mb-lg-5">
                    <h4>Our top notch services</h4>
                    <p class="fontsize16">We need a presentation in the form of a one page that pushes to register on our
                        portal, which details our services and how the portal works.</p>
                </div>
            </div>
            <!--  -->
            <div class="col-xxl-6 col-xl-7 col-lg-8 col-10 mx-auto">
                <!-- one -->
                @foreach ($service as $index => $item)
                    @if ($index % 2 == 0)
                        <div class="row align-items-center">
                            <div class="main_heading col-lg-8 order-1">
                                <span class="fontsize14 light_purple_text">{{ $item->title ?? '' }}</span>
                                <h4 class="fontsize30">{{ $item->name ?? '' }}</h4>
                                <p class="fontsize16 ms-0">{{ $item->description ?? '' }}</p>
                                <a href="#" class="mt-4 black_text fontsize16 d-block">Learn More <i
                                        class="ms-3 fas fa-arrow-alt-circle-right"></i></a>
                            </div>
                            <div class="col-lg-4 text-center order-0 order-lg-1 floating"><img class="img-fluid"
                                    src="{{ asset($item->image ?? '') }}" alt="icon" /></div>
                        </div>
                    @else
                        <!-- two -->
                        <div class="row align-items-center mt-lg-5">
                            <div class="col-lg-4 text-center order-0 order-lg-1 floating"><img class="img-fluid"
                                    src="{{ asset($item->image ?? '') }}" alt="icon" /></div>
                            <div class="main_heading col-lg-8 order-1 text-lg-end">
                                <span class="fontsize14 yellow_text">{{ $item->title ?? '' }}</span>
                                <h4 class="fontsize30">{{ $item->name ?? '' }}</h4>
                                <p class="fontsize16 me-lg-0">{{ $item->description ?? '' }}</p>
                                <a href="#" class="mt-4 black_text fontsize16 d-block">Learn More <i
                                        class="ms-3 fas fa-arrow-alt-circle-right"></i></a>
                            </div>
                        </div>
                    @endif
                @endforeach
                <!-- three -->
                {{-- <div class="row align-items-center mt-lg-5">
                <div class="main_heading col-lg-8 order-1">
                    <span class="fontsize14 red_text">services</span>
                    <h4 class="fontsize30">Profile & Post Boosting</h4>
                    <p class="fontsize16 ms-0">We need a presentation in the form of a one page that pushes to register on our portal, which details our services.</p>
                    <a href="#" class="mt-4 black_text fontsize16 d-block">Learn More <i class="ms-3 fas fa-arrow-alt-circle-right"></i></a>
                </div>
                <div class="col-lg-4 order-0 order-lg-1">
                    <div class="text-center">
                        <span class="fontsize14 mb-3 d-inline-block paragraph_text">Number of follower </span>
                        <p class=""><img class="img-fluid" src="{{asset('assets/images/graph1.png')}}" alt="icon" /></p>
                        <div class="d-flex align-items-center justify-content-between">
                            <a href="javascript:;" class="black_text fontsize12">instagram</a>
                            <a href="javascript:;" class="black_text fontsize12">Dribble</a>
                            <a href="javascript:;" class="black_text fontsize12">Twitter</a>
                        </div>
                    </div>
                </div>
            </div> --}}
            </div>
        </section>
        <!-- testimonials -->
        <section class="py-3 py-lg-5 mb-3 mb-lg-5 testimonials">
            <div class="col-xxl-7 col-xl-8 col-lg-9 col-10 mx-auto">
                <div class="text-center main_heading mb-3 mb-lg-5">
                    <h4>Happy Clients</h4>
                    <p class="fontsize16">The Marketing Accountability Standards Board (MASB) endorses the definitions,
                        purposes, and constructs of classes.</p>
                </div>
                <div class="row align-items-center">
                    <div class="col-lg-8">
                        <div class="cicle_box mb-4">F</div>
                        <div class="clinent_comment client-slidee owl-carousel">
                            @foreach ($review as $item)
                                <div class="col-12">
                                    <p>{{ $item->description ?? '' }}</p>
                                    <div class="title mt-5">
                                        <h5>{{ $item->name ?? '' }}</h5>
                                        <p class="m-0">{{ $item->profession ?? '' }}</p>
                                    </div>
                                </div>
                            @endforeach
                            {{-- <div class="col-12">
                            <p>Not weekly or monthly like other sites out there. This ensures that we offer prospective homebuyers and investors with the freshest- hottest deals on the Internet.</p>
                            <div class="title mt-5">
                                <h5>Rowhan Smith</h5>
                                <p class="m-0">CEO, Foreclosure</p>
                            </div>
                        </div> --}}
                        </div>
                    </div>
                    <div class="col-lg-4 ms-auto floating text-center d-none d-lg-block"><img class="img-fluid"
                            src="{{ asset('assets/images/client_profile.png') }}" alt="icon" /></div>
                </div>
            </div>
        </section>
        <!-- price -->
        <section class="py-3 py-lg-5 mb-3 mb-lg-5 pricing">
            <div class="col-xxl-9 col-xl-9 col-lg-10 col-11 mx-auto">
                <div class="row align-items-center">
                    <div class="col-lg-7 order-1">
                        <div class="tab-content text-center text-lg-start" id="myTabContent">
                            <div class="tab-pane fade show active" id="Monthly" role="tabpanel"
                                aria-labelledby="Monthly-tab">
                                <div class="floating"><img class="img-fluid"
                                        src="{{ asset('assets/images/price-img.png') }}" alt="icon" /></div>
                            </div>
                            <div class="tab-pane fade" id="Yearly" role="tabpanel" aria-labelledby="Yearly-tab">
                                <div class="floating"><img class="img-fluid"
                                        src="{{ asset('assets/images/price-img.png') }}" alt="icon" /></div>
                            </div>
                            <div class="tab-pane fade" id="Customize" role="tabpanel" aria-labelledby="Customize-tab">
                                <div class="floating"><img class="img-fluid"
                                        src="{{ asset('assets/images/price-img.png') }}" alt="icon" /></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 order-lg-1 order-0">
                        <div class="text-left main_heading">
                            <span>PRICE VALU</span>
                            <h4>Our Pricing</h4>
                            <p class="fontsize18 mw-100">We need a presentation in the form of a one page that pushes to
                                register on our portal</p>
                        </div>
                        <ul class="nav nav-tabs mt-3 mt-lg-5" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="Monthly-tab" data-bs-toggle="tab"
                                    data-bs-target="#Monthly" type="button" role="tab" aria-controls="Monthly"
                                    aria-selected="true">Monthly</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="Yearly-tab" data-bs-toggle="tab" data-bs-target="#Yearly"
                                    type="button" role="tab" aria-controls="Yearly"
                                    aria-selected="false">Yearly</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="Customize-tab" data-bs-toggle="tab"
                                    data-bs-target="#Customize" type="button" role="tab" aria-controls="Customize"
                                    aria-selected="false">Customize</button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- subscribe_part start-->
        <section class="py-3 py-lg-5 mb-3 mb-lg-5">
            <div class="col-xxl-9 col-xl-9 col-lg-10 col-11 mx-auto">
                <div class="subscrioption_box">
                    <div class="content text-center">
                        <h3>Subscribe our newsletter</h3>
                        <p class="fontsize14 text-white">Join thousands of marketers and entrepreneurs for a 2-day event at
                            the forefront of social commerce.</p>
                        @if (session('success1'))
                            <div class="alert alert-success">
                                {{ session('success1') }}
                            </div>
                        @endif
                        {!! $errors->first('email', "<span class='text-danger'>:message</span>") !!}
                        <form action="{{ route('Newsletter') }}" method="POST">
                            @csrf
                            <input type="text" class="form-control" name="email" placeholder="Email">
                            <button type="submit" class="mt-4 btn subscribe-btn">Subscribe <i
                                    class="ms-3 fas fa-arrow-alt-circle-right"></i></button>
                        </form>

                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
