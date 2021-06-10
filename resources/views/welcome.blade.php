@extends('layouts.master-layout')
@section('content')
 <section id="hero">
        <div class="hero-container">
            <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">
                <ol class="carousel-indicators">
                    @forelse($banner_content as $b)
                        <li data-target=".carouselExampleCaptions" data-slide-to="{{ $loop->index }}" class="{{ $loop->first ? 'active' : '' }}"></li>
                    @empty
                        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>
                    @endforelse
                </ol>
                <div class="carousel-inner" role="listbox">
                    <!-- Slide 1 -->
                    @forelse($banner_content as $c)
                        <div class="carousel-item  {{ $loop->first ? 'active' : '' }}">
                            <img src="/storage/{{$c->banner_image}}">
                            <div class="carousel-container">
                                <div class="carousel-content container">
                                    <h2 class="animated fadeInDown">Lorem Ipsum Dolor</h2>
                                    <p class="animated fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
                                    <a href="#about" class="btn-get-started animated fadeInUp scrollto">Read More</a>
                                </div>
                            </div>
                        </div>
                    @empty
                    <div class="carousel-item active" style="background-image: url('assets/img/slide/ban1.jpg');">
                        <div class="carousel-container">
                            <div class="carousel-content container">
                                <h2 class="animated fadeInDown">Lorem Ipsum Dolor</h2>
                                <p class="animated fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
                                <a href="#about" class="btn-get-started animated fadeInUp scrollto">Read More</a>
                            </div>
                        </div>
                    </div>
                    <!-- Slide 3 -->
                    <div class="carousel-item" style="background-image: url('assets/img/slide/ban3.jpg');">
                        <div class="carousel-container">
                            <div class="carousel-content container">
                                <h2 class="animated fadeInDown">Lorem Ipsum Dolor</h2>
                                <p class="animated fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
                                <a href="#about" class="btn-get-started animated fadeInUp scrollto">Read More</a>
                            </div>
                        </div>
                    </div>
                    @endforelse
                </div>
                <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon bx bx-left-arrow-circle" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon bx bx-right-arrow-circle" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </section><!-- End Hero -->

    <main id="main">
        <!-- ======= About Us Section ======= -->
        <section id="about" class="about">
            @forelse($home_content as $h)
                <div class="container">
                    <div class="row no-gutters">
                        <div class="col-lg-6">
                            <img src="/storage/{{$h->aboutus_image}}" class="img-fluid" alt="">
                        </div>
                        <div class="col-lg-6 d-flex flex-column justify-content-center about-content">
                            <div class="section-title">
                                <h2>{{  $h->aboutus_heading }}</h2>
                              <h6  style="text-align: justify;letter-spacing: .04em"> {{substr(strip_tags($h->aboutus_content),0,500)}}</h6>
                            </div>
                        </div>
                    </div>
                </div>
                @empty
            <div class="container">
                <div class="row no-gutters">
                    <div class="col-lg-6">
                        <img src="{{asset('resources/cate2.jpg')}}" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-6 d-flex flex-column justify-content-center about-content">
                        <div class="section-title">
                            <h2>About Us</h2>
                            <h5 style="text-align: justify;">sum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text
                                ever since the 1500s, when an unknown printer took a galley of type and scrambled it to
                                make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting,
                                remaining essentia</h5>
                            <br>
                            <h5 style="text-align: justify;">sum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text
                                ever since the 1500s, when an unknown printer took a galley of type and scrambled it to
                                make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting,
                                remaining essentia</h5>
                        </div>
                    </div>
                </div>
            </div>
            @endforelse
        </section><!-- End About Us Section -->

        <section id="category" class="category section-bg">
            <div class="container">
                <div class="section-title">
                    @forelse($categories_content as $h)
                        <h2>{{$h->categories_title}}</h2>
                        @empty
                        <h2>Category</h2>
                    @endforelse
                </div>
                <div class="row category-container">
                    @forelse($categories_content as $cat)
                        <div class="col-lg-4 col-md-6 category-item filter-app">
                            <div class="category-wrap">
                                <img src="/storage/{{$cat->categories_image}}"  alt="" height="400px" width="100%">
                                <div class="category-info">
                                    <h4>{{$cat->name}}</h4>
                                    <div class="category-links">
                                        @if($cat->button_name != null)
                                           <a href="/category/{{$cat->name}}"> <button class="btn btn-primary">{{$cat->button_name}}</button></a>
                                        @else
                                           <a href="/category/{{$cat->name}}"><button class="btn btn-primary">View</button></a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="col-lg-4 col-md-6 category-item filter-app">
                            <div class="category-wrap">
                                <img src="{{asset('resources/cate01.jpg')}}"  alt="" height="400px" width="100%">
                                <div class="category-info">
                                    <h4>Knit</h4>
                                    <p>Tshirt</p>
                                    <div class="category-links">
                                        <button class="btn btn-primary">View</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 category-item filter-app">
                            <div class="category-wrap">
                                <img src="{{asset('resources/cate02.jpg')}}"   alt="" height="400px" width="100%">
                                <div class="category-info">
                                    <h4>Knit</h4>
                                    <p>Tshirt</p>
                                    <div class="category-links">
                                        <button class="btn btn-primary">View</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 category-item filter-app">
                            <div class="category-wrap">
                                <img src="{{asset('resources/cate03.jpg')}}"  alt="" height="400px" width="100%">
                                <div class="category-info">
                                    <h4>Knit</h4>
                                    <p>Tshirt</p>
                                    <div class="category-links">
                                        <button class="btn btn-primary">View</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 category-item filter-app">
                            <div class="category-wrap">
                                <img src="{{asset('resources/cate04.jpg')}}"  alt="" height="400px" width="100%">
                                <div class="category-info">
                                    <h4>Knit</h4>
                                    <p>Tshirt</p>
                                    <div class="category-links">
                                        <button class="btn btn-primary">View</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 category-item filter-app">
                            <div class="category-wrap">
                                <img src="{{asset('resources/cate05.jpg')}}"   alt="" height="400px" width="100%">
                                <div class="category-info">
                                    <h4>Knit</h4>
                                    <p>Tshirt</p>
                                    <div class="category-links">
                                        <button class="btn btn-primary">View</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 category-item filter-app">
                            <div class="category-wrap">
                                <img src="{{asset('resources/cate06.jpg')}}"  alt="" height="400px" width="100%">
                                <div class="category-info">
                                    <h4>Knit</h4>
                                    <p>Tshirt</p>
                                    <div class="category-links">
                                        <button class="btn btn-primary">View</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforelse
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-5">
                                </div>
                                <div class="col-lg-4 pt-5 pb-4">
                                    <a href="/category"><button class="btn btn-primary align-items-center" style="padding: 10px;align-content: center;margin-left: 10px;">View More <i style="margin-top: 2px" class="bx bx-arrow-to-right"></i></button>
                                    </a>
                                </div>
                                <div class="col-lg-3">
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </section>
        <!--yaha samma ta sabai milya cha-->
        <!--aba yaha bata naya section factory ko lagi-->
        <section id="about" class="about">
            @forelse($home_content as $factory)
                <div class="container">
                    <div class="row no-gutters">
                        <div class="col-lg-6">
                            <img src="/storage/{{$factory->factory_image}}" class="img-fluid"  alt="">
                        </div>
                        <div class="col-lg-6 d-flex flex-column justify-content-center about-content">
                            <div class="section-title">
                                <h2>{{$factory->factory_heading}}</h2>
                                <h6 style="text-align: justify;letter-spacing: .04em">{{substr(strip_tags($factory->factory_content),0,1000)  }}</h6>
                            </div>
                        </div>
                    </div>
                </div>
                @empty
                    <div class="container">
                        <div class="row no-gutters">
                            <div class="col-lg-6">
                                <img src="{{asset('resources/cate4.jpg')}}" class="img-fluid"  alt="">
                            </div>
                            <div class="col-lg-6 d-flex flex-column justify-content-center about-content">
                                <div class="section-title">
                                    <h2>Our Factory</h2>
                                    <h5 style="text-align: justify;">sum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text
                                        ever since the 1500s, when an unknown printer took a galley of type and scrambled it to
                                        make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting,
                                        remaining essentia</h5>
                                    <br>
                                    <h5 style="text-align: justify;">sum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text
                                        ever since the 1500s, when an unknown printer took a galley of type and scrambled it to
                                        make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting,
                                        remaining essentia</h5>
                                </div>
                            </div>
                        </div>
                    </div>
            @endforelse
        </section>
        <!--naya section yaha samapta huncha-->
        <!--aba yaha bata outlets ko lagi-->
        <section id="about" class="about">
            @forelse($home_content as $out)
                <div class="container">
                    <div class="row no-gutters">
                        <div class="col-lg-6 d-flex flex-column justify-content-center about-content">
                            <div class="section-title">
                                <h2>{{$out->outlet_heading}}</h2>
                                <h6 style="text-align: justify;letter-spacing: .04em">{{substr(strip_tags($out->outlet_content),0,1000)}}</h6>
                            </div>

                        </div>
                        <div class="col-lg-6">
                            <img src="/storage/{{$out->outlet_image}}" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
                @empty
                    <div class="container">
                        <div class="row no-gutters">
                            <div class="col-lg-6 d-flex flex-column justify-content-center about-content">
                                <div class="section-title">
                                    <h2>Outlets</h2>
                                    <p style="letter-spacing: .1em;text-align: justify">sum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text
                                        ever since the 1500s, when an unknown printer took a galley of type and scrambled it to
                                        make a type specimen book.</p><br>
                                    <h5 style="text-align: justify">sum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text
                                        ever since the 1500s, when an unknown printer took a galley of type and scrambled it to
                                        ever since the 1500s, when an unknown printer took a galley of type and scrambled it to
                                        make a type specimen book.</h5>
                                </div>

                            </div>
                            <div class="col-lg-6">
                                <img src="{{asset('resources/cate9.png')}}" class="img-fluid" alt="">
                            </div>
                        </div>
                    </div>
            @endforelse
        </section>
        <!--outlets end here-->
        <!--product-->

        <section class="about-lists">
            <div class="container">
                <div class="section-title pt-4">
                    <h2>Products</h2>
                </div>

                <div class="row no-gutters">
                    @forelse($products as $p)
                        <div class="col-lg-4 col-md-6 content-item" data-aos="fade-up">
                            <br>
                            <img src="/storage/{{$p->product_image}}" width="250px" height="300px">
                           <h4>{{$p->product_name}}</h4>
                            <a style="margin-left: 30px;" href="/category/{{$p->product_category}}/{{$p->id}}"><button class="btn btn-dark">More Details</button></a>
                        </div>
                        @empty
                    <div class="col-lg-4 col-md-6 content-item" data-aos="fade-up">
                        <img src="{{asset('resources/prod1.jpg')}}" width="250px" height="300px">
                        <h4>Product-1</h4>
                    </div>

                    <div class="col-lg-4 col-md-6 content-item" data-aos="fade-up" data-aos-delay="100">
                        <img src="{{asset('resources/prod2.jpg')}}" width="250px" height="300px">
                        <h4>Product-2</h4>
                    </div>

                    <div class="col-lg-4 col-md-6 content-item" data-aos="fade-up" data-aos-delay="200">
                        <img src="{{asset('resources/prod3.jpg')}}" width="250px" height="300px">
                        <h4>Product-3</h4>
                    </div>
                    <div class="col-lg-4 col-md-6 content-item" data-aos="fade-up">
                        <img src="{{asset('resources/prod1.jpg')}}" width="250px" height="300px">
                        <h4>Product-4</h4>
                    </div>

                    <div class="col-lg-4 col-md-6 content-item" data-aos="fade-up" data-aos-delay="100">
                        <img src="{{asset('resources/prod2.jpg')}}" width="250px" height="300px">
                        <h4>Product-5</h4>
                    </div>

                    <div class="col-lg-4 col-md-6 content-item" data-aos="fade-up" data-aos-delay="200">

                        <img src="{{asset('resources/prod3.jpg')}}" width="250px" height="300px">
                        <h4>Product-6</h4>
                    </div>
                </div>
                @endforelse
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-5">
                                </div>
                                <div class="col-lg-4 pt-5 pb-4">
                                    <a href="/product"><button class="btn btn-primary align-items-center" style="padding: 10px;align-content: center;margin-left: 10px;">View More <i style="margin-top: 2px" class="bx bx-arrow-to-right"></i></button>
                                    </a>
                                </div>
                                <div class="col-lg-3">
                                </div>
                            </div>
                        </div>


            </div>
        </section>
@endsection

