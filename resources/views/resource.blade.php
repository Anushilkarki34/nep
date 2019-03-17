@extends('layouts.layout')
@section('content')
<div class="container mt-4">

           @foreach($data as $d) <!--Section: Download-->
            <section class="my-5">

                <div class="card card-image" style="background-image: url(https://mdbootstrap.com/img/Photos/Others/gradient1.jpg);">
                    <div class="text-white text-center d-flex align-items-center py-5 px-4 my-5">
                        <div>
                            <h1 class="card-title pt-3 mb-5 font-bold">
                                <strong>Download our Free E-book</strong>
                            </h1>

                            <h4 class="my-5 h4">"The 50 best growth hacking tactics which will boost your sales"</h4>
                            <p class="mx-5 mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat fugiat, laboriosam, voluptatem,
                                optio vero odio nam sit officia accusamus minus error nisi architecto nulla ipsum dignissimos.
                                Odit sed qui, dolorum!.
                            </p>
                            <a href="#" class="btn btn-outline-white waves-effect">Download
                                <i class="fa fa-download ml-2"></i>
                            </a>
                        </div>
                    </div>
                </div>

            </section>
            @endforeach
            <!--Section: Download-->

        </div>
@endsection