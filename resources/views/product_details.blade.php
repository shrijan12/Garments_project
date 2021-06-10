@extends('layouts.master-layout')
@section('content')
    <section class="product-shop spad page-details">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="product-pic-zoom">
                                <img class="product-big-img" src="/storage/{{$posts->product_image}}" height="600" width="500" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="product-details">
                                <div class="pd-title">
                                    <span>{{$posts->category->name}}</span>
                                    <h3>{{$posts->product_name}}</h3>
                                </div>
                                <div class="pd-desc">
                                    <p>{{substr(strip_tags($posts->product_short_description),0,2000)}}</p>
                                </div>
                                <div class="pd-desc">
                                    <p>{{substr(strip_tags($posts->product_description),0,2000)}}</p>
                                </div>
                                <div class="pd-desc">
                                    <p>{{$posts->product_features}}</p>
                                </div>
                                <div class="quantity">
                                    <a href="#">
                                        <button class="btn btn-dark" data-toggle="modal" data-id="{{ $posts->id }}" data-target="#logoutModal2{{$posts->id}}">
                                            <i class="bx bx-shopping-bag"></i>
                                            Order Now
                                        </button>
                                    </a>
                                </div>
                                <div class="modal fade" id="logoutModal2{{$posts->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content modal-lg">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Enter Details </h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                @if ($errors->any())
                                                    <div class="alert alert-danger">
                                                        <ul>
                                                            @foreach ($errors->all() as $error)
                                                                <li>{{ $error }}</li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                @endif
                                                <form method="POST" action="/order/{{$posts->id}}"  enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label for="Icons"> Full Name</label>
                                                                <input type="text" class="form-control" id="name" name="name" placeholder="Full Name">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label for="Icons"> Email</label>
                                                                <input type="text" class="form-control" id="email" name="email" placeholder="Email">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label for="Icons">Product Size</label>
                                                                <select class="form-control" name="Quantity">
                                                                    <option value="null">-------</option>
                                                                    @if($posts->category->categories_size != null)
                                                                        <option value="{{$posts->category->categories_size}}">{{$posts->category->categories_size}}</option>
                                                                    @else
                                                                        <option value="null">-------</option>
                                                                    @endif
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label for="Icons">Please Confirm your product</label>
                                                                <select class="form-control" name="product_name">
                                                                    <option value="null">-------</option>
                                                                    @if($posts->product_name != null)
                                                                        <option value="{{$posts->product_name}}">{{$posts->product_name}}</option>
                                                                    @else
                                                                        <option value="null">-------</option>
                                                                    @endif
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label for="Icons">Product Type</label>
                                                                <select class="form-control" name="size">
                                                                    <option value="null">-------</option>
                                                                    @if($posts->category->categories_type != null)
                                                                        <option value="{{$posts->category->categories_type}}">{{$posts->category->categories_type}}</option>
                                                                    @else
                                                                        <option value="null">-------</option>
                                                                    @endif
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label for="Icons"> Phone</label>
                                                                <input type="text" class="form-control" id="email" name="phone" placeholder="Phone">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label for="Icons"> Address</label>
                                                                <input type="text" class="form-control" id="address" name="address" placeholder="Address">
                                                            </div>
                                                        </div>


                                                        <div class="col-lg-12">
                                                            <div class="form-group">
                                                                <label for="exampleInputPassword1">Message</label>
                                                                <textarea type="text" class="form-control" id="product_description" rows="5" name="message" placeholder="Product Description">
                                                            </textarea>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <button class="btn btn-primary buttons"  value="submit" type="submit">Submit</button>
                                                    <button class="btn btn-warning buttons"  value="reset" type="reset">Reset</button>
                                                </form>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
