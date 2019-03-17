
  @extends('layouts.layout')
@section('content')
    <h1 class="site-heading text-center text-white d-none d-lg-block">
      <span class="site-heading-lower">Contact</span>
    </h1>

    <!-- Navigation -->
  

    <section class="page-section cta">
      <div class="container">
        <div class="row">
          <div class="col-xl-9 mx-auto">
            <div class="cta-inner text-center rounded">
              <h2 class="section-heading mb-5">
                <span class="section-heading-upper">Come On In</span>
                <span class="section-heading-lower">We're Open</span>
              </h2>
              <ul class="list-unstyled list-hours mb-5 text-left mx-auto">
                <li class="list-unstyled-item list-hours-item d-flex">
                  Sunday
                  <span class="ml-auto">Closed</span>
                </li>
                <li class="list-unstyled-item list-hours-item d-flex">
                  Monday
                  <span class="ml-auto">7:00 AM to 8:00 PM</span>
                </li>
                <li class="list-unstyled-item list-hours-item d-flex">
                  Tuesday
                  <span class="ml-auto">7:00 AM to 8:00 PM</span>
                </li>
                <li class="list-unstyled-item list-hours-item d-flex">
                  Wednesday
                  <span class="ml-auto">7:00 AM to 8:00 PM</span>
                </li>
                <li class="list-unstyled-item list-hours-item d-flex">
                  Thursday
                  <span class="ml-auto">7:00 AM to 8:00 PM</span>
                </li>
                <li class="list-unstyled-item list-hours-item d-flex">
                  Friday
                  <span class="ml-auto">7:00 AM to 8:00 PM</span>
                </li>
                <li class="list-unstyled-item list-hours-item d-flex">
                  Saturday
                  <span class="ml-auto">9:00 AM to 5:00 PM</span>
                </li>
              </ul>
              <p class="address mb-5">
                <em>
                  <strong>dhobidhara-31</strong>
                  <br>
                  putalisadak,kathmandu
                </em>
              </p>
              <p class="mb-0">
                <small>
                  <em>Call Anytime</em>
                </small>
                <br>
                01-4422003
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

   
<div id="map-container" class="z-depth-1-half map-container mb-5" style="height: 400px;"></div>

@endsection