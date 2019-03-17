@extends('layouts.layout')
@section('content')
<div class="container mt-4">
<div class="divider-new mt-0 mb-4">
                <h2 class="h3-responsive">
                    <strong>Blog's</strong>
                </h2>
            </div>


            <!--Section: Posts-->
            <section class="text-center">

                <!--Grid row-->
                <div class="row">
                @foreach($data as $d)

                    <!--Grid column-->
                    <div class="col-lg-4 col-md-12 mb-4">


                        <!--Card image-->
                        <div class="view overlay hm-white-slight z-depth-1-half rounded">
                            <img src="/storage/upload/{{ $d->B_image }}" class="img-fluid" alt="">
                            <a href="/blogview/{{ $d->B_id }}">
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
                            <h4 class="mb-3 h4">{{ $d->B_title }}</h4>
                        </a>

                        <!-- Excerpt -->
                       

                    </div>
                    <!--Grid column-->
@endforeach

                   
                 
                    <!--Grid column-->

                </div>
                <!--Grid row-->

            </section>
</div>
@endsection