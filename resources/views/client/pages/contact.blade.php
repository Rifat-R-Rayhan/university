@extends('client.layouts.masterlayout')
@section('content')
    <!-- Start page content -->
    <div class="mb-4 mb-md-5">
        <h3 class="font-35 font-weight-bold fables-main-text-color mt-4 mb-4 text-center">Map</h3>
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d8679.377385836751!2d90.42580276540505!3d23.846012596373086!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c671012602eb%3A0x27761cc8da96b3b7!2sNorthern%20University%20Bangladesh%20(NUB)%2C%20Permanent%20Campus!5e0!3m2!1sen!2sbd!4v1695107525538!5m2!1sen!2sbd" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <div class="container">
        <div class="row overflow-hidden">
            <div class="col-12 col-md-4 text-center px-4 px-lg-5 my-4 my-lg-5 wow fadeInDown" data-wow-delay=".5s">
                <div class="fables-second-border-color border fables-contact-block-border fables-rounded px-2">
                    <span
                        class="fables-iconmap-icon fa-3x fables-second-text-color fables-contact-icon bg-white d-inline-block px-4"></span>
                    <h2 class="font-16 semi-font fables-main-text-color my-3">Address Information</h2>
                    <p class="font-14 fables-forth-text-color">
                        Kawla, Ashiyan City Rd, Dhaka 1230</p>
                </div>
            </div>
            <div class="col-12 col-md-4 text-center px-4 px-lg-5 my-4 my-lg-5 wow fadeInDown" data-wow-delay=".8s">
                <div class="fables-second-border-color border fables-contact-block-border fables-rounded px-2">
                    <span
                        class="fables-iconphone fa-3x fables-second-text-color fables-contact-icon bg-white d-inline-block px-4"></span>
                    <h2 class="font-16 semi-font fables-main-text-color my-3">Mail & Phone number</h2>
                    <p class="font-14 fables-forth-text-color text-truncate">info@nub.ac.bd</p>
                    <p class="font-14 fables-forth-text-color">+880 1610 158095</p>
                </div>
            </div>
            <div class="col-12 col-md-4 text-center px-4 px-lg-5 my-4 my-lg-5 wow fadeInDown" data-wow-delay="1.1s">
                <div class="fables-second-border-color border fables-contact-block-border fables-rounded px-2">
                    <span
                        class="fables-iconshare-icon fa-3x fables-second-text-color fables-contact-icon bg-white d-inline-block px-4"></span>
                    <h2 class="font-16 semi-font fables-main-text-color my-3">Stay In Touch</h2>
                    <ul class="nav fables-contact-social-links">
                        <li><a href="#" target="_blank"><i
                                    class="fab fa-facebook-f fables-forth-text-color fa-fw"></i></a></li>
                        <li><a href="#" target="_blank"><i
                                    class="fab fa-instagram fables-forth-text-color  fa-fw"></i></a></li>
                        <li><a href="#" target="_blank"><i
                                    class="fab fa-twitter fables-forth-text-color    fa-fw"></i></a></li>
                        <li><a href="#" target="_blank"><i
                                    class="fab fa-linkedin fables-forth-text-color   fa-fw"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row mt-0 mb-4 my-md-5 overflow-hidden">
            <div class="col-12 col-md-10 offset-md-1 col-lg-8 offset-lg-2">
                <h3 class="font-35 font-weight-bold fables-main-text-color mb-4 text-center">Contact Us</h3>
                <p class="fables-contact-text fables-forth-text-color text-center">It is a long established fact that a
                    reader will be distracted by the readable content of a page when looking at its layout. The point of
                    using Lorem Ipsum is that it has a more-or-less normal </p>
            </div>

        </div>
        <div class="row">
            <div class="col-12 wow fadeInLeft">
                <form class="fables-contact-form">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <input type="text" class="form-control p-3 fables-rounded" placeholder="First Name">
                        </div>
                        <div class="form-group col-md-6">
                            <input type="text" class="form-control p-3 fables-rounded" placeholder="Last Name">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <input type="email" class="form-control p-3 fables-rounded" placeholder="Email">
                        </div>
                        <div class="form-group col-md-6">
                            <input type="text" class="form-control p-3 fables-rounded" placeholder="Subject">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <textarea class="form-control p-3 fables-rounded" placeholder="Message" rows="4"></textarea>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-12 text-center">
                            <button type="submit"
                                class="btn fables-second-background-color 
                        text-white fables-btn-rounded px-7 py-2 font-20">Send</button>
                        </div>
                    </div>
                </form>


            </div>

        </div>
    </div>
    <!-- /End page content -->
@endsection
