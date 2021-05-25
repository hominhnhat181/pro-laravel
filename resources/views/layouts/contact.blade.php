@extends('layouts/master')
@section('title', 'contact')

@section('contact')

<section class="ftco-section bg-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="wrapper px-md-4">
                    <div class="row mb-5">
                        <div class="col-md-3">
                            <div class="dbox w-100 text-center">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="fa fa-map-marker"></span>
                        </div>
                        <div class="text">
                        <p><span>Address:</span> 198 West 21th Street, Suite 721 New York NY 10016</p>
                      </div>
                  </div>
                        </div>
                        <div class="col-md-3">
                            <div class="dbox w-100 text-center">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="fa fa-phone"></span>
                        </div>
                        <div class="text">
                        <p><span>Phone:</span> <a href="tel://1234567920">+ 1235 2355 98</a></p>
                      </div>
                  </div>
                        </div>
                        <div class="col-md-3">
                            <div class="dbox w-100 text-center">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="fa fa-paper-plane"></span>
                        </div>
                        <div class="text">
                        <p><span>Email:</span> <a href="mailto:info@yoursite.com">info@yoursite.com</a></p>
                      </div>
                  </div>
                        </div>
                        <div class="col-md-3">
                            <div class="dbox w-100 text-center">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="fa fa-globe"></span>
                        </div>
                        <div class="text">
                        <p><span>Website</span> <a href="#">yoursite.com</a></p>
                      </div>
                  </div>
                        </div>
                    </div>
                    <div class="row no-gutters">
                        <div class="col-md-7">
                            <div class="contact-wrap w-100 p-md-5 p-4">
                                <h3 class="mb-4">Contact Us</h3>
                                <form method="POST" id="contactForm" name="contactForm" class="contactForm">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="label" for="name">Full Name</label>
                                                <input type="text" class="form-control" name="name" id="name" placeholder="Name">
                                            </div>
                                        </div>
                                        <div class="col-md-6"> 
                                            <div class="form-group">
                                                <label class="label" for="email">Email Address</label>
                                                <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="label" for="subject">Subject</label>
                                                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="label" for="#">Message</label>
                                                <textarea name="message" class="form-control" id="message" cols="30" rows="4" placeholder="Message"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="submit" value="Send Message" class="btn btn-primary">
                                                <div class="submitting"></div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-5 order-md-first d-flex align-items-stretch">
                            <div id="map" class="map"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<style>
    .ftco-navbar-light .nav-item .nav-link{
         color: rgba(255, 255, 255, 0.5) !important;
    }
    .ftco-navbar-light .nav-item .nav-link:hover{
        color: #b7472a !important;
    }
    .ftco-navbar-light .nav-item .dropdown-menu .dropdown-item:hover{
        color: #b7472a !important;
    }
    .ftco-navbar-light #menu__contact .nav-link {
        color: #ffffff !important; 
    }
    .ftco-navbar-light #menu__contact .nav-link:hover {
        color: #b7472a !important;
    }
    .ftco-navbar-light.scrolled.awake .navbar-nav .nav-item .nav-link{
        color: #000000 !important;
    }
    .ftco-navbar-light.scrolled.awake .navbar-nav .nav-item .nav-link:hover{
        color: #b7472a !important;
    }
    .ftco-navbar-light.scrolled.awake .navbar-nav .nav-item .dropdown-menu .dropdown-item:hover{
        color: #b7472a !important;
    }
    .ftco-navbar-light.scrolled.awake .navbar-nav #menu__contact .nav-link{
        color: #b7472a !important;
    }
</style>
@endsection