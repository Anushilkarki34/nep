@extends('layouts.layout')

@section('content')
<div class="container mt-4">
<div class="divider-new mt-0 mb-4">
                <h2 class="h3-responsive">
                    <strong>Showcase</strong>
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
                            <img src="/storage/showcase/{{ $d->S_image }}" class="img-fluid" alt="">
                            <a href="{{ $d->S_link }}">
                                <div class="mask"></div>
                            </a>
                        </div>

                        <!-- Author & date -->
                        <p class="hp-post-data">
                            <span>Project for</span>
                            <a class="font-up teal-text" href="" target="_blank">{{ $d->S_name }}</a>
                            <span>- 24.05.2017</span>
                        </p>

                     
                    </div>
                    <!--Grid column-->
@endforeach

                   
                 
                    <!--Grid column-->

                </div>
                <!--Grid row-->

            </section>
</div>
@endsection