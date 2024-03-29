@extends('layouts.layout')

@section('content')
<h1>our offers</h1>
<div class="container mt-5">


<!--Section: Contact v.2-->
<section class="text-center">

    <!--Section heading-->
    <h2 class="mb-4 h1">We'll take care of your business</h2>
    <!--Section description-->
    <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit, error amet numquam iure provident voluptate
        esse quasi, veritatis totam voluptas nostrum quisquam eum porro a pariatur accusamus veniam. Quia, minima?</p>

    <!--Grid row-->
    <div class="row features-small pt-2">

        <!--Grid column-->
        <div class="col-lg-5 mb-r center-on-small-only">
            <img src="https://mdbootstrap.com/img/Mockups/Transparent/Small/ipad-portfolio2.png" alt="" class="img-fluid z-depth-0">
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-7 text-left">

            <!--Grid row-->
            <div class="row pb-3">
                <div class="col-2 col-md-1">
                    <i class="fa fa-code purple-text fa-2x"></i>
                </div>
                <div class="col-10">
                    <h5 class="feature-title">Websites</h5>
                    <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores nam, aperiam
                        minima assumenda deleniti hic.</p>
                </div>
            </div>
            <!--Grid row-->

            <!--Grid row-->
            <div class="row pb-3">
                <div class="col-2 col-md-1">
                    <i class="fa fa-image purple-text fa-2x"></i>
                </div>
                <div class="col-10">
                    <h5 class="feature-title">Graphics</h5>
                    <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores nam, aperiam
                        minima assumenda deleniti hic.</p>
                </div>
            </div>
            <!--Grid row-->

            <!--Grid row-->
            <div class="row pb-3">
                <div class="col-2 col-md-1">
                    <i class="fa fa-pie-chart purple-text fa-2x"></i>
                </div>
                <div class="col-10">
                    <h5 class="feature-title">Marketing</h5>
                    <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores nam, aperiam
                        minima assumenda deleniti hic.</p>
                </div>
            </div>
            <!--Grid row-->

            <!--Grid row-->
            <div class="row pb-3">
                <div class="col-2 col-md-1">
                    <i class="fa fa-map purple-text fa-2x"></i>
                </div>
                <div class="col-10">
                    <h5 class="feature-title">Strategy</h5>
                    <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores nam, aperiam
                        minima assumenda deleniti hic.</p>
                </div>
            </div>
            <!--Grid row-->

        </div>
        <!--Grid column-->

    </div>
    <!--Grid row-->

</section>
<!--Section: Features v.3-->

<hr class="my-5">


<!--Section: Contact v.2-->
<section class="text-center mb-5">

    <!--Section heading-->
    <h2 class="mb-4 h1">Contact us</h2>
    <!--Section description-->
    <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit, error amet numquam iure provident voluptate
        esse quasi, veritatis totam voluptas nostrum quisquam eum porro a pariatur accusamus veniam. Quia, minima?</p>

    <div class="row">

        <!--Grid column-->
        <div class="col-md-8 col-xl-9">
            <form>

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form">
                            <div class="md-form">
                                <input type="text" id="contact-name" class="form-control">
                                <label for="contact-name" class="">Your name</label>
                            </div>
                        </div>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form">
                            <div class="md-form">
                                <input type="text" id="contact-email" class="form-control">
                                <label for="contact-email" class="">Your email</label>
                            </div>
                        </div>
                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="md-form">
                            <input type="text" id="contact-Subject" class="form-control">
                            <label for="contact-Subject" class="">Subject</label>
                        </div>
                    </div>
                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-12">

                        <div class="md-form">
                            <textarea type="text" id="contact-message" class="md-textarea"></textarea>
                            <label for="contact-message">Your message</label>
                        </div>

                    </div>
                </div>
                <!--Grid row-->

            </form>

            <div class="center-on-small-only">
                <a class="btn btn-purple">Send</a>
            </div>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-md-4 col-xl-3">
            <ul class="list-unstyled text-center">
                <li>
                    <i class="fa fa-map-marker fa-2x mb-3"></i>
                    <p>San Francisco, CA 94126, USA</p>
                </li>

                <li>
                    <i class="fa fa-phone fa-2x mb-3"></i>
                    <p>+ 01 234 567 89</p>
                </li>

                <li>
                    <i class="fa fa-envelope fa-2x mb-3"></i>
                    <p>contact@mdbootstrap.com</p>
                </li>
            </ul>
        </div>
        <!--Grid column-->

    </div>

</section>
<!--Section: Contact v.2-->

</div>
@endsection