@extends('layouts.layout')
@section('content')

        <div class="container mt-4">

            <!--Section: Intro-->
            <section>

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-8 mb-4">

                        <!--Carousel Wrapper-->
                        <div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">
                            <!--Indicators-->
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-2" data-slide-to="1"></li>
                                <li data-target="#carousel-example-2" data-slide-to="2"></li>
                            </ol>
                            <!--/.Indicators-->
                            <!--Slides-->
                            <div class="carousel-inner" role="listbox">
                                <div class="carousel-item active">
                                    <div class="view hm-black-light">
                                        <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(142).jpg" alt="First slide">
                                        <div class="mask"></div>
                                    </div>
                                    <div class="carousel-caption">
                                        <h3 class="h3-responsive">Some long title</h3>
                                        <p>...and even longer description</p>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <!--Mask color-->
                                    <div class="view hm-black-strong">
                                        <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(132).jpg" alt="Second slide">
                                        <div class="mask"></div>
                                    </div>
                                    <div class="carousel-caption">
                                        <h3 class="h3-responsive">Some long title 2</h3>
                                        <p>...and even longer description 2</p>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <!--Mask color-->
                                    <div class="view hm-black-light">
                                        <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(136).jpg" alt="Third slide">
                                        <div class="mask"></div>
                                    </div>
                                    <div class="carousel-caption">
                                        <h3 class="h3-responsive">Some long title 3</h3>
                                        <p>...and even longer description 3</p>
                                    </div>
                                </div>
                            </div>
                            <!--/.Slides-->
                            <!--Controls-->
                            <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                            <!--/.Controls-->
                        </div>
                        <!--/.Carousel Wrapper-->


                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-4 mb-4">

                        <!--Card-->
                        <div class="card">

                            <!--Card image-->
                            <div class="view overlay hm-white-slight">
                                <img src="https://mdbootstrap.com/img/Photos/Slides/img%20(141).jpg" class="img-fluid" alt="">
                                <a href="offer.html">
                                    <div class="mask"></div>
                                </a>
                            </div>

                            <!--Card content-->
                            <div class="card-body text-center">
                                <!--Title-->
                                <h4 class="card-title">Read our offer</h4>
                                <!--Text-->
                                <p class="card-text">We'll take care of your business</p>
                                <a href="/product" class="btn btn-primary">Read our offer</a>
                            </div>

                        </div>
                        <!--/.Card-->

                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

            </section>
            <!--Section: Intro-->

            <div class="divider-new mt-0 mb-4">
                <h2 class="h3-responsive">
                    <strong>What's new?</strong>
                </h2>
            </div>

            <!--Section: Posts-->
            <section class="text-center">

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-lg-4 col-md-12 mb-4">

                        <!--Card image-->
                        <div class="view overlay hm-white-slight z-depth-1-half rounded">
                            <img src="https://mdbootstrap.com/img/Photos/Horizontal/City/6-col/img%20(3).jpg" class="img-fluid" alt="">
                            <a href="post-1.html">
                                <div class="mask"></div>
                            </a>
                        </div>

                        <!-- Author & date -->
                        <p class="hp-post-data">
                            <span>by</span>
                            <a class="font-up teal-text" href="" target="_blank">Michal Szymanski</a>
                            <span>- 24.05.2017</span>
                        </p>

                        <!-- Title -->
                        <a href="post-1.html" class="dark-grey-text">
                            <h4 class="mb-3 h4">How to improve your SEO</h4>
                        </a>

                        <!-- Excerpt -->
                        <p class="text-justify">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ex molestias, voluptate beatae perspiciatis
                            repudiandae nesciunt unde ratione praesentium harum, officiis similique ullam nostrum reprehenderit
                            quidem vero possimus nisi laboriosam quos.</p>

                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-lg-4 col-md-6 mb-4">

                        <!--Card image-->
                        <div class="view overlay hm-white-slight z-depth-1-half rounded">
                            <img src="https://mdbootstrap.com/img/Photos/Horizontal/City/6-col/img%20(1).jpg" class="img-fluid" alt="">
                            <a href="post-2.html">
                                <div class="mask"></div>
                            </a>
                        </div>

                        <!-- Author & date -->
                        <p class="hp-post-data">
                            <span>by</span>
                            <a class="font-up teal-text" href="" target="_blank">Michal Szymanski</a>
                            <span>- 24.05.2017</span>
                        </p>

                        <!-- Title -->
                        <a href="post-2.html" class="dark-grey-text">
                            <h4 class="mb-3 h4">Adwords for beginners</h4>
                        </a>

                        <!-- Excerpt -->
                        <p class="text-justify">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ex molestias, voluptate beatae perspiciatis
                            repudiandae nesciunt unde ratione praesentium harum, officiis similique ullam nostrum reprehenderit
                            quidem vero possimus nisi laboriosam quos.</p>

                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-lg-4 col-md-6 mb-4">

                        <!--Card image-->
                        <div class="view overlay hm-white-slight z-depth-1-half rounded">
                            <img src="https://mdbootstrap.com/img/Photos/Horizontal/City/6-col/img%20(4).jpg" class="img-fluid" alt="">
                            <a href="post-3.html">
                                <div class="mask"></div>
                            </a>
                        </div>

                        <!-- Author & date -->
                        <p class="hp-post-data">
                            <span>by</span>
                            <a class="font-up teal-text" href="" target="_blank">Michal Szymanski</a>
                            <span>- 24.05.2017</span>
                        </p>

                        <!-- Title -->
                        <a href="post-3.html" class="dark-grey-text">
                            <h4 class="mb-3 h4">Advanced email marketing</h4>
                        </a>

                        <!-- Excerpt -->
                        <p class="text-justify">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ex molestias, voluptate beatae perspiciatis
                            repudiandae nesciunt unde ratione praesentium harum, officiis similique ullam nostrum reprehenderit
                            quidem vero possimus nisi laboriosam quos.</p>

                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

            </section>
            <!--Section: Posts-->

        </div>
    
@endsection