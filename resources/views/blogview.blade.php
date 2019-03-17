@extends('layouts.layout')

@section('content')
<div class="container mt-4">

            <!--Section: Post-->
            <section>
@foreach($data as $d)

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-8 mb-4">

                        <!--Image-->
                        <div class="view overlay hm-white-slight z-depth-1-half rounded mb-3">
                            <img src="/storage/upload/{{ $d->B_image }}" class="img-fluid" alt="">
                            <a href="">
                                <div class="mask"></div>
                            </a>
                        </div>

                        <!-- Post data -->
                        <div class="d-flex justify-content-between">

                            <!-- Author & date -->
                            <p class="hp-post-data mt-4">
                                <span>by</span>
                                <a class="font-up teal-text" href="" target="_blank">Michal Szymanski</a>
                                <span>- 24.05.2017</span>
                            </p>

                            <div class="mt-2 d-none d-md-block">
                                <!-- Social & comments -->
                                <button type="button" class="btn btn-outline-indigo btn-md waves-effect">
                                    <i class="fa fa-facebook pr-2" aria-hidden="true"></i>
                                    <span class="badge red">
                                        <strong>22</strong>
                                    </span>
                                </button>
                                <button type="button" class="btn btn-outline-purple btn-md waves-effect">
                                    <i class="fa fa-comments pr-2" aria-hidden="true"></i>Comments
                                    <span class="badge red ml-2">
                                        <strong>3</strong>
                                    </span>
                                </button>
                            </div>

                        </div>
                        <!-- Post data -->

                        <!-- Post content -->
                        <div>

                            <!--Title-->
                            <h1 class="my-3 h4">{{ $d->B_title }}</h1>
                            <hr>

                            <!-- Text -->
                            <div class="text-justify">

                                <p>{{ $d->B_detail }}
                                </p>
                                <blockquote class="blockquote">
                                    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                                    <footer class="blockquote-footer">Someone famous in
                                        <cite title="Source Title">Source Title</cite>
                                    </footer>
                                </blockquote>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur nesciunt voluptatum,
                                    tenetur, aperiam, fugiat commodi velit illum accusamus rem quis rerum error excepturi.
                                    Architecto veritatis non ut debitis optio fugiat.</p>

                                <h5 class="my-2 h5">Heading</h5>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur nesciunt voluptatum,
                                    tenetur, aperiam, fugiat commodi velit illum accusamus rem quis rerum error excepturi.
                                    Architecto veritatis non ut debitis optio fugiat.</p>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur nesciunt voluptatum,
                                    tenetur, aperiam, fugiat commodi velit illum accusamus rem quis rerum error excepturi.
                                    Architecto veritatis non ut debitis optio fugiat.</p>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur nesciunt voluptatum,
                                    tenetur, aperiam, fugiat commodi velit illum accusamus rem quis rerum error excepturi.
                                    Architecto veritatis non ut debitis optio fugiat.</p>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur nesciunt voluptatum,
                                    tenetur, aperiam, fugiat commodi velit illum accusamus rem quis rerum error excepturi.
                                    Architecto veritatis non ut debitis optio fugiat.</p>

                            </div>

                        </div>
                        <!-- Post content -->

                        <!-- Social shares -->
                        <div class="text-center">
                            <hr class="my-4">
                            <h4 class="h4 mb-3">Do you want to share?</h4>

                            <button type="button" class="btn btn-indigo btn-sm">
                                <i class="fa fa-facebook mr-2"></i>Facebook</button>
                            <button type="button" class="btn btn-info btn-sm">
                                <i class="fa fa-twitter mr-2"></i>Twitter</button>
                            <button type="button" class="btn btn-danger btn-sm">
                                <i class="fa fa-google-plus mr-2"></i>Google +</button>
                            <hr class="my-4">
                        </div>
                        <!-- Social shares -->

                      
                        <!-- Author box -->

                        <!-- Comments -->
                        <h4 class="h4 mb-3 text-center my-5">
                            Comments
                            <span class="badge deep-purple ml-1">3</span>
                        </h4>
                        <ul class="list-unstyled list-comments">
                            <li class="media">
                               
                                <div class="media-body">
                                    <h5 class="mt-0 mb-1">
                                        <strong>Jane Doe</strong>
                                    </h5>
                                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in
                                    vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla.
                                    Donec lacinia congue felis in faucibus.
                                </div>
                            </li>
                        </ul>
                        <!-- Comments -->

                        <hr class="my-4">

                        <!-- Reply -->
                        <h4 class="h4 mb-3 text-center">Leave a reply</h4>

                        <!-- Form -->
                        <form method="post" action="/comment/<?php echo $d->B_id; ?>">
                           {{ csrf_field() }}
                            <!--Grid row-->
                            <div class="row">

                                <!--Grid column-->
                                <div class="col-md-6 mb-2">

                                    <!--Name-->
                                    <div class="md-form">
                                        <input type="text" id="inputName" class="form-control" name="name">
                                        <label for="inputName" class="">Your name</label>
                                    </div>

                                </div>
                                <!--Grid column-->

                                <!--Grid column-->
                                <div class="col-md-6 mb-2">

                                    <!--Name-->
                                    <div class="md-form">
                                        <input type="text" id="inputEmail" class="form-control" name="email">
                                        <label for="inputEmail" class="">Your email</label>
                                    </div>

                                </div>
                                <!--Grid column-->

                                <!--Grid column-->
                                <div class="col-md-12">

                                    <!--Textarea-->
                                    <div class="md-form">
                                        <textarea type="text" id="textareaReply" class="md-textarea" name="reply"></textarea>
                                        <label for="textareaReply">Your message</label>
                                    </div>

                                </div>
                                <!--Grid column-->

                            </div>
                            <!--Grid row-->

                            <div class="text-center">
                                <button type="submit" class="btn btn-outline-purple mt-0">Submit</button>
                            </div>

                        </form>
                        <!-- Form -->
                        <!-- Reply -->

                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-4 mt-2 mb-4">

                        <!-- CC post sidebar -->
                        <div id="post-sidebar">

                        </div>
                        <!-- CC post sidebar -->

                        <!-- Sidebar posts -->
                        <div class="sidebar-posts">

                            <h4 class="my-5 h4 text-center">Most popular</h4>
                            @foreach($dat as $u)
                            <a class="media" href="/blogview/{{ $u->B_id }}">
                          
                                <img class="d-flex mr-3 z-depth-1" src="/storage/upload/{{ $u->B_image }}" alt="Generic placeholder image">
                                <div class="media-body">
                                    <h5 class="mt-0">
                                        <strong>{{ $u->B_title }}</strong>
                                    </h5>
                                    
                                                                </div>
                            </a>

                            <hr>

                          
                           @endforeach
                        </div>
                        <!-- Sidebar posts -->
                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->
@endforeach

            </section>
            <!--Section: Post-->


        </div>

@endsection