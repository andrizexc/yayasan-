@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/contact.css') }}">
@endsection

@section('content')
<section id="breadcrumb" class="breadcrumb-area  jarallax" style="background-image: url({{asset('img/37.jpg')}});">
    <div class="bg-img-crumb">
        <div class="container  h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <h2 class="page-title">Kontak</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Kontak</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="contact--us-area ">
    <div class="container">
        <div class="row">
            <!-- Contact Us Thumb -->
            <div class="col-12 col-lg-6">
                <div class="contact-us-thumb mb-100">
                    <img src="{{asset('img/contact.jpg')}}" alt="">
                </div>
            </div>

            <!-- Contact Form -->
            <div class="col-12 col-lg-6">
                <div class="contact_from_area mb-100 clearfix">
                    <!-- Contact Heading -->
                    <div class="contact-heading">
                        <h4>Contact us</h4>
                        <p>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut
                            et voluptates repudiandae</p>
                    </div>
                    <div class="contact_form">
                        <form action="mail.php" method="post">
                            <div class="contact_input_area">
                                <div class="row">
                                    <!-- Form Group -->
                                    <div class="col-12 col-lg-6">
                                        <div class="form-group">
                                            <input type="text" class="formbpi" name="name" id="name"
                                                placeholder="Your Name" required>
                                        </div>
                                    </div>
                                    <!-- Form Group -->
                                    <div class="col-12 col-lg-6">
                                        <div class="form-group">
                                            <input type="text" class="formbpi" name="name" id="name-2"
                                                placeholder="Last Name" required>
                                        </div>
                                    </div>
                                    <!-- Form Group -->
                                    <div class="col-12 col-lg-6">
                                        <div class="form-group">
                                            <input type="email" class="formbpi" name="email" id="email"
                                                placeholder="E-mail" required>
                                        </div>
                                    </div>
                                    <!-- Form Group -->
                                    <div class="col-12 col-lg-6">
                                        <div class="form-group">
                                            <input type="text" class="formbpi" name="subject" id="subject"
                                                placeholder="Your Number">
                                        </div>
                                    </div>
                                    <!-- Form Group -->
                                    <div class="col-12">
                                        <div class="form-group">
                                            <textarea name="message" class="form-control formbpi" id="message" cols="30"
                                                rows="6" placeholder="Message" required></textarea>
                                        </div>
                                    </div>
                                    <!-- Button -->
                                    <div class="col-12">
                                        <button type="submit" class="btn bpi-btn">Send Message <i
                                                class="zmdi zmdi-long-arrow-right"></i></button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Contact Us Area End -->

<!-- Map Area -->
<div class="map-area">
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15842.885716199702!2d107.619331!3d-6.923866!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x84871994f0af8dc1!2sYayasan%20BPI%20Bandung!5e0!3m2!1sid!2sid!4v1570024239589!5m2!1sid!2sid"
        width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
</div>

<!-- Contact Info Area -->
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="contact--info-area">
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="single-contact--info text-center">
                            <center>
                                <div class="contact-info-icon">
                                    <i class="fas fa-map-marker-alt icon-contact"></i>
                                </div>
                                <h5>Jl. Burangrang No.8, Burangrang, Kec. Lengkong, Kota Bandung, Jawa Barat 40262</h5>
                            </center>
                        </div>
                    </div>
                    <!-- Single Contact Info -->
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="single-contact--info text-center">
                            <center>
                                <!-- Contact Info Icon -->
                                <div class="contact-info-icon">
                                    <i class="fas fa-phone icon-contact"></i>
                                </div>
                                <h5> (022) 7301739</h5>
                            </center>
                        </div>
                    </div>
                    <!-- Single Contact Info -->
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="single-contact--info text-center">
                            <center>
                                <!-- Contact Info Icon -->
                                <div class="contact-info-icon">
                                    <i class="fas fa-envelope icon-contact"></i>
                                </div>
                                <h5>yayasanbpi08@gmail.com</h5>
                            </center>
                        </div>
                    </div>
                    <!-- Single Contact Info -->
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="single-contact--info text-center">
                            <center>
                                <!-- Contact Info Icon -->
                                <div class="contact-info-icon">
                                    <i class="fas fa-globe icon-contact"></i>
                                </div>
                                <h5>bpiedu.id</h5>
                            </center>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection