@extends('layouts.master-layout')
@section('content')
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <h2>Our Products</h2>
                        <div class="bt-option">
                            <a href="/">Home</a> /
                            <span>Products</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section End -->

    <!-- Rooms Section Begin -->
    <section class="rooms-section spad">
        <div class="container">
            <div class="row">
                @forelse($posts as $p)
                <div class="col-lg-4 col-md-6">
                    <div class="room-item">
                        <img src="/storage/{{$p->product_image}}" height="400" width="100" alt="">
                        <div class="ri-text">
                            <h4>{{$p->product_name}}</h4>
                            <a href="/category/{{$p->product_category}}/{{$p->id}}"><button class="btn btn-dark">More Details</button></a>
                        </div>
                    </div>
                </div>
                @empty
                    <div class="text" style="width: 100%">
                        <h2 style="text-align: center;margin-left: 5%;">No data Avilable please Contact Administrator</h2>
                    </div>

                @endforelse
{{--                <div class="col-lg-12">--}}
{{--                    <div class="room-pagination">--}}
{{--                        <a href="#">1</a>--}}
{{--                        <a href="#">2</a>--}}
{{--                        <a href="#">Next <i class="fa fa-long-arrow-right"></i></a>--}}
{{--                    </div>--}}
{{--                </div>--}}
            </div>
        </div>
    </section>
@endsection
