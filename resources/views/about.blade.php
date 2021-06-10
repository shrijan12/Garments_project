@extends('layouts.master-layout')
@section('content')

    <section id="about" class="about">
        <div class="section-title pt-4">
            <h2>About Us</h2>
        </div>
        <div class="container">
            <div class="row no-gutters">
                @forelse($about_content as $a)
                    <div class="col-lg-6">
                        <img src="/storage/{{$a->about_image}}" class="img-fluid"  alt="">
                    </div>
                    <div class="col-lg-6 d-flex flex-column justify-content-center about-content">
                        <div class="section-title">
                            <h2>Our Factory</h2>
                            <h6 style="text-align: justify;">{{substr(strip_tags($a->about_desc),0,2000)}}</h6>
                            <br>
                        </div>
                    </div>
                    @empty
                    <div class="col-lg-6">
                        <img src="{{asset('resources/cate4.jpg')}}" class="img-fluid"  alt="">
                    </div>
                    <div class="col-lg-6 d-flex flex-column justify-content-center about-content">
                        <div class="section-title">
                            <h2>Our Factory</h2>
                            <h6 style="text-align: justify;">sum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text
                                ever since the 1500s, when an unknown printer took a galley of type and scrambled it to
                                make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting,
                                remaining essentia</h6>
                            <br>
                            <h6 style="text-align: justify;">sum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text
                                ever since the 1500s, when an unknown printer took a galley of type and scrambled it to
                                make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting,
                                remaining essentia</h6>
                        </div>
                    </div>
                @endforelse
            </div>
        </div>
    </section>
    <!--service haru hai aba -->
    <section id="services">
        <div class="container">
            <div class="section-title">
                @forelse($about_content as $ser)
                    <h2>{{$ser->service_heading}}</h2>
                    <p>{{substr(strip_tags($ser->service_head_desc),0,1000)}}</p>
                @empty
                    <h2>Services</h2>
                    <p>Sed tamen tempor magna labore dolore dolor sint tempor duis magna elit veniam aliqua esse amet veniam enim export quid quid veniam aliqua eram noster malis nulla duis fugiat culpa esse aute nulla ipsum velit export irure minim illum fore</p>
                @endforelse
            </div>

            <div class="row">
                @forelse($services as $s)
                    <div class="col-lg-6">
                        <div class="box wow fadeInLeft">
                            <div class="icon"><i class="{{$s->service_logo}}"></i></div>
                            <h4 class="title"><a href="">{{$s->service_name}}</a></h4>
                            <p class="description">{{substr(strip_tags($s->service_logo_desc),0,2000)}}</p>
                        </div>
                    </div>
                    @empty
                    <div class="col-lg-6">
                        <div class="box wow fadeInLeft">
                            <div class="icon"><i class="bx bx-chart"></i></div>
                            <h4 class="title"><a href="">Lorem Ipsum</a></h4>
                            <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident etiro rabeta lingo.</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="box wow fadeInRight">
                            <div class="icon"><i class="bx bx-pie-chart-alt"></i></div>
                            <h4 class="title"><a href="">Dolor Sitema</a></h4>
                            <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata nodera clas.</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="box wow fadeInLeft" data-wow-delay="0.2s">
                            <div class="icon"><i class="bx bx-shopping-bag"></i></div>
                            <h4 class="title"><a href="">Sed ut perspiciatis</a></h4>
                            <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur trinige zareta lobur trade.</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="box wow fadeInRight" data-wow-delay="0.2s">
                            <div class="icon"><i class="bx bx-map-pin"></i></div>
                            <h4 class="title"><a href="">Magni Dolores</a></h4>
                            <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum rideta zanox satirente madera</p>
                        </div>
                    </div>
                @endforelse
            </div>
        </div>
    </section>
    <section id="clients" class="wow fadeInUp">
        <div class="container">
            <div class="section-title">
                @forelse($about_content as $abt)
                    <h2>{{$abt->partners_heading}}</h2>
                    <p>{{substr(strip_tags($abt->partners_head_desc),0,2000)}}</p>
                @empty
                    <h2>Clients</h2>
                    <p>Sed tamen tempor magna labore dolore dolor sint tempor duis magna elit veniam aliqua esse amet veniam enim export quid quid veniam aliqua eram noster malis nulla duis fugiat culpa esse aute nulla ipsum velit export irure minim illum fore</p>
                @endforelse
            </div>
            <section class="customer-logos slider">
                @forelse($partners as $part)
                    <div class="slide"><img src="/storage/{{$part->partners_image}}"></div>
                    @empty
                    <div class="slide"><img src="{{asset('resources/index.png')}}"></div>
                    <div class="slide"><img src="{{asset('resources/logo.png')}}"></div>
                    <div class="slide"><img src="{{asset('resources/logo.png')}}"></div>
                    <div class="slide"><img src="{{asset('resources/logo.png')}}"></div>
                    <div class="slide"><img src="{{asset('resources/logo.png')}}"></div>
                    <div class="slide"><img src="{{asset('resources/logo.png')}}"></div>
                    <div class="slide"><img src="{{asset('resources/logo.png')}}"></div>
                    <div class="slide"><img src="{{asset('resources/logo.png')}}"></div>
                @endforelse

            </section>
        </div>
    </section>
    @endsection
