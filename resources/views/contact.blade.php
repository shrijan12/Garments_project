@extends('layouts.master-layout')
@section('content')

    <section id="contact">
        <div class="container">
            <div class="section-title">
                @forelse($contact as $contacts)
                    <h2>{{$contacts->contact_heading}}</h2>
                    @empty
                    <h2>Contact Us</h2>
                @endforelse
            </div>
            <div class="row contact-info">
                @forelse($c as $co)
                    <div class="col-md-4">
                        <div class="contact-address">
                            <i class="{{$co->contact_icons}}"></i>
                            <h3>{{$co->contact_name}}</h3>
                            <address>{{$co->contact_content}}</address>
                        </div>
                    </div>
                @empty
                <div class="col-md-4">
                    <div class="contact-address">
                        <i class="bx bxs-location-plus"></i>
                        <h3>Address</h3>
                        <address>TBD</address>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="contact-phone">
                        <i class="bx bxs-phone-incoming"></i>
                        <h3>Phone Number</h3>
                        <p><a href="tel:+155895548855">+977 98********</a></p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="contact-email">
                        <i class="bx bxs-envelope"></i>
                        <h3>Email</h3>
                        <p><a href="mailto:info@example.com">email@email.com</a></p>
                    </div>
                </div>
                @endforelse
            </div>
        </div>

        <div class="container mb-4">
            @forelse($contact as $c)
                <iframe src="{{$c->Contact_Url}}" width="100%" height="380" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            @empty
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d883.2939839032448!2d85.38539162920827!3d27.680956698925208!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb1a68822544ad%3A0xd400223c4327286d!2sWaachunani%20tole!5e0!3m2!1sen!2snp!4v1591465323744!5m2!1sen!2snp" width="100%" height="380" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            @endforelse
        </div>

        <div class="container">
            <div class=row>
                <div class="col-lg-2">

                </div>
                <div class="col-lg-8">
                    <div class="form">
                        <form action="/queries" method="post" role="form" class="php-email-form">
                            @csrf
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Your Name"/>
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                            </span>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" placeholder="Your Email" />
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control @error('subject') is-invalid @enderror" name="subject" id="subject" placeholder="Subject" />
                                @error('subject')
                                <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                            </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <textarea class="form-control @error('message') is-invalid @enderror" name="message" rows="5" data-rule="required" ></textarea>
                                @error('message')
                                <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                            </span>
                                @enderror
                            </div>
                            <div class="text-center"><button type="submit">Send Message</button></div>
                        </form>
                    </div>
                </div>

                <div class="col-lg-2">

                </div>
            </div>
        </div>
    </section>
    <!-- End Contact Section -->
    <section id="contact">
        <div class="container">
            <div class="section-title">
                @forelse($contact as $contacts)
                    <h2>{{$contacts->outlet_heading}}</h2>
                @empty
                    <h2>Our Outlets</h2>
                @endforelse
            </div>
            <div class="row contact-info">
                @forelse($contact_outlets as $c)
                <div class="col-md-4">
                    <div class="contact-address">
                        <i class="{{$c->contact_icons}}"></i>
                        <h3>{{$c->contact_name}}</h3>
                        <address>{{$c->contact_content}}</address>
                    </div>
                </div>
                @empty
                    <div class="col-md-4">
                        <div class="contact-address">
                            <i class="bx bxs-location-plus"></i>
                            <h3>Address</h3>
                            <address>TBD</address>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="contact-phone">
                            <i class="bx bxs-phone-incoming"></i>
                            <h3>Phone Number</h3>
                            <p><a href="tel:+155895548855">+977 98********</a></p>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="contact-email">
                            <i class="bx bxs-envelope"></i>
                            <h3>Email</h3>
                            <p><a href="mailto:info@example.com">email@email.com</a></p>
                        </div>
                    </div>
                @endforelse
            </div>
        </div>

        <div class="container mb-4">
            @forelse($contact as $c)
                <iframe src="{{$c->Outlet_Url}}" width="100%" height="380" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            @empty
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d883.2939839032448!2d85.38539162920827!3d27.680956698925208!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb1a68822544ad%3A0xd400223c4327286d!2sWaachunani%20tole!5e0!3m2!1sen!2snp!4v1591465323744!5m2!1sen!2snp" width="100%" height="380" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            @endforelse
        </div>

        <div class="container">
            <div class=row>

                <div class="col-lg-2">

                </div>

                <div class="col-lg-8">
                    <div class="form">
                        <form action="/outletqueries" method="post" role="form" class="php-email-form">
                            @csrf
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <input type="text" name="contact_name" class="form-control @error('contact_name') is-invalid @enderror" id="name" placeholder="Your Name"/>
                                    @error('contact_name')
                                    <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                            </span>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="email" class="form-control @error('contact_email') is-invalid @enderror" name="contact_email" id="email" placeholder="Your Email" />
                                    @error('contact_email')
                                    <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control @error('contact_subject') is-invalid @enderror" name="contact_subject" id="subject" placeholder="Subject" />
                                @error('contact_subject')
                                <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                            </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <textarea class="form-control @error('contact_message') is-invalid @enderror" name="contact_message" rows="5" data-rule="required" ></textarea>
                                @error('contact_message')
                                <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                            </span>
                                @enderror
                            </div>
                            <div class="text-center"><button type="submit">Send Message</button></div>
                        </form>
                    </div>
                </div>

                <div class="col-lg-2">

                </div>
            </div>
        </div>
    </section>

@endsection
