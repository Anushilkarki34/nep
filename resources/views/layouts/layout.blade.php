<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Material Design Bootstrap</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="/css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="/css/style.css" rel="stylesheet">

    <!-- Place BrandFlow script here -->
    <div id="bf-script"></div>
    <!-- Place BrandFlow script here -->
<style>
#header{
    top : 0;
    margin :20px;
    padding :20px;
    display: block;
}
</style>
</head>

<body>

<header id="header">
   <!--Navbar-->
   <nav class="navbar navbar-expand-lg navbar-dark yellow darken-4 fixed-top">
            <div class="container">
                <!-- Navbar brand -->
                <a class="navbar-brand" href="/">NEPBEE</a>

                <!-- Collapse button -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Collapsible content -->
                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <!-- Links -->
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="/">Home page</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/blog">BLOG</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/client">Showcase</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/resource">Resources</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/service">Service</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/store">Contact</a>
                        </li>
                            </ul>
                    <!-- Links -->

                    <!-- Icons -->
                    <ul class="navbar-nav ml-auto nav-flex-icons">
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="fa fa-twitter"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="fa fa-google-plus"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <i class="fa fa-facebook"></i>
                                </a>
                            </li>
                    </ul>
                </div>
                <!-- Collapsible content -->
            </div>
        </nav>
        <!--/.Navbar-->
</header>
<main>
@yield('content')
</main>
<footer id="footer" class="page-footer yellow darken-4 mt-0 pt-0">
<!--Footer Links-->
<div class="container">

    <!-- Footer links -->
    <div class="row text-center text-md-left pb-3">

        <!--First column-->
        <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
            <h6 class="title my-4 font-bold">About me</h6>
            <p>Here you can use rows and columns here to organize your footer content. Lorem ipsum dolor sit amet, consectetur
                adipisicing elit.</p>
        </div>
        <!--/.First column-->

        <hr class="w-100 clearfix d-md-none">

        <!--Second column-->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
            <h6 class="title my-4 font-bold">Category</h6>
            <p>
                <a href="#!">Lifestyle</a>
            </p>
            <p>
                <a href="#!">Travel</a>
            </p>
            <p>
                <a href="#!">Work</a>
            </p>
            <p>
                <a href="#!">Fashion</a>
            </p>
        </div>
        <!--/.Second column-->

        <hr class="w-100 clearfix d-md-none">

        <!--Third column-->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
            <h6 class="title my-4 font-bold">Useful links</h6>
            <p>
                <a href="#!">Collaboriation</a>
            </p>
            <p>
                <a href="#!">Media about me</a>
            </p>
            <p>
                <a href="#!">Newsletter</a>
            </p>
            <p>
                <a href="#!">Help</a>
            </p>
        </div>
        <!--/.Third column-->

        <hr class="w-100 clearfix d-md-none">

        <!--Fourth column-->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
            <h6 class="title my-4 font-bold">Contact</h6>
            <p>
                <i class="fa fa-home mr-3"></i> New York, NY 10012, US</p>
            <p>
                <i class="fa fa-envelope mr-3"></i> info@example.com</p>
            <p>
                <i class="fa fa-phone mr-3"></i> + 01 234 567 88</p>
            <p>
                <i class="fa fa-print mr-3"></i> + 01 234 567 89</p>
        </div>
        <!--/.Fourth column-->

    </div>
    <!-- Footer links -->

    <hr>

    <div class="row py-3 d-flex align-items-center">

        <!--Grid column-->
        <div class="col-md-8 col-lg-9">

            <!--Copyright-->
            <p class="text-center text-md-left grey-text">© 2017 Copyright:
                <a href="https://www.MDBootstrap.com">
                    <strong> MDBootstrap.com</strong>
                </a>
            </p>
            <!--/.Copyright-->

        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-md-4 col-lg-3 ml-lg-0">

            <!--Social buttons-->
            <div class="social-section text-center text-md-left">
                <ul>
                    <li>
                        <a class="mr-xl-4">
                            <i class="fa fa-facebook"></i>
                        </a>
                    </li>
                    <li>
                        <a class="mr-xl-4">
                            <i class="fa fa-twitter"></i>
                        </a>
                    </li>
                    <li>
                        <a class="mr-xl-4">
                            <i class="fa fa-google-plus"></i>
                        </a>
                    </li>
                    <li>
                        <a class="mr-xl-4">
                            <i class="fa fa-linkedin"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <!--/.Social buttons-->

        </div>
        <!--Grid column-->

    </div>

</div>
</footer>
<script type="text/javascript" src="../js/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="/js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="/js/mdb.min.js"></script>

    <!--Google Maps-->
<script src="https://maps.google.com/maps/api/js"></script>
<!-- Google Maps settings -->
<script>
  // Regular map
  function regular_map() {
    var var_location = new google.maps.LatLng(40.725118, -73.997699);

    var var_mapoptions = {
      center: var_location,
      zoom: 14
    };

    var var_map = new google.maps.Map(document.getElementById("map-container"),
      var_mapoptions);

    var var_marker = new google.maps.Marker({
      position: var_location,
      map: var_map,
      title: "Kathmandu"
    });
  }

  // Initialize maps
  google.maps.event.addDomListener(window, 'load', regular_map);
</script>
</body>

</html>