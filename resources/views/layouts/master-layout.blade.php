<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>CUGarments Pvt Ltd</title>
    <meta content="" name="descriptison">
    <meta content="" name="keywords">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i,900" rel="stylesheet">
    <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/nice-select.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/infinite-slider.css')}}">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">


</head>
<body>

<!--toggle navigation menu-->
<button type="button" class="mobile-nav-toggle d-lg-none"><i class="bx bx-menu"></i></button>
<!--end of toggle navigation menu-->
<section id="topbar" class="d-none d-lg-block">
    <div class="container clearfix" style="box-shadow: 0 5px 25px 0 rgba(214, 215, 216, 0.6);padding: 10px">
        <div class="social-links float-left">
            @forelse($social as $headers)
                    <a href="{{$headers->icon_url}}" class="twitter"><i class="{{$headers->icons}}"></i></a>
            @empty
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="skype"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            @endforelse
        </div>
        <div class="contact-info float-right">
            @forelse($navcontact as $head1)
                <a href="{{$head1->contact_url}}">
                    <i class="{{$head1->contact_icons}}"></i>{{$head1->contact_item}}
                </a>
            @empty
                <i class="bx bx-envelope"></i><a href="#">contact@example.com</a>
                <i class="bx bx-phone-call"></i> +1 5589 55488 55
            @endforelse
        </div>
    </div>
</section>
<header id="header">
    <div class="container" style="box-shadow: 0 5px 25px 0 rgba(214, 215, 216, 0.6);">
        <div class="logo float-left align-items-start">
            @forelse($navlogo as $h)
                    <img src="/storage/{{$h->logo}}" height="105px" width="105px" style="padding: 0px">
                    @empty
                    <img src="{{asset('resources/logo.png')}}" height="105px" width="105px" style="padding: 0px">
            @endforelse
        </div>
        <nav class="nav-menu float-right d-none d-lg-block">
            <ul>
                @forelse($navitems as $h2)
                    <li><a href="{{$h2->nav_url}}">{{$h2->nav_name}}</a></li>
                @empty
                <li class="active"><a href="/">Home</a></li>
                <li><a href="/about">About Us</a></li>
                <li><a href="/category">Categories</a></li>
                <li><a href="/product">Products</a></li>
                <li><a href="/contact">Contact Us</a></li>
                @endforelse
            </ul>
        </nav>
    </div>
</header>
@yield('content')
    <!--yaha bata footer-->
    <footer id="footer">
        <div class="container">
            <div class="copyright">
                @forelse($footer as $f1)
                &copy; Copyright <strong>{{$f1->desc1}}</strong>. All Rights Reserved
                @empty
                &copy; Copyright <strong>Chaulagain Garments Udhyog</strong>. All Rights Reserved
                @endforelse
            </div>
            <div class="foot">
                @forelse($footer as $foo1)
                {{$foo1->desc2}} <a href="{{$foo1->url}}"> Designed And Developed by Temonk</a>
                @empty
                    Designed and Developed by <a href="https://temonk.com/">Temonk</a>
                @endforelse
            </div>
        </div>
    </footer>
    <!--footer samapta-->
    <a href="#" class="back-to-top"><i class="bx bx-arrow-to-top"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{asset('assets/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
    <script src="{{asset('assets/vendor/php-email-form/validate.js')}}"></script>
    <script src="{{asset('assets/vendor/jquery-sticky/jquery.sticky.js')}}"></script>
<!-- Template Main JS File -->
<script src="{{asset('assets/js/main.js')}}"></script>
<script>
    $(document).ready(function(){
        $('.customer-logos').slick({
            slidesToShow: 6,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 1000,
            arrows: false,
            dots: false,
            pauseOnHover: false,
            responsive: [{
                breakpoint: 768,
                settings: {
                    slidesToShow: 4
                }
            }, {
                breakpoint: 520,
                settings: {
                    slidesToShow: 3
                }
            }]
        });
    });
</script>
</body>

</html>
