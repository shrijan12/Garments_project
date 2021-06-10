@extends('layouts.master-layout')
@section('content')
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>View Categories</h2>
                        <div class="bt-option">
                            <a href="/">Home</a> /
                            <span>Categories</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section id="category" class="category section-bg">
        <div class="container">
            <div class="row category-container">
                @forelse($category_content as $cat)
                    <div class="col-lg-4 col-md-6 category-item filter-app">
                        <div class="category-wrap">
                            <img src="/storage/{{$cat->categories_image}}"  alt="" height="400px" width="100%">
                            <div class="category-info">
                                <h4>{{$cat->name}}</h4>
                                <div class="category-links">
                                    @if($cat->button_name != null)
                                        <a href="/category/{{$cat->name}}"><button class="btn btn-primary">{{$cat->button_name}}</button></a>
                                    @else
                                        <a href="/category/{{$cat->name}}"><button class="btn btn-primary">View</button></a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">

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

            </div>
        </div>
    </section>

@endsection
