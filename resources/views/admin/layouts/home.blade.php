<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="/css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="/css/style.css" rel="stylesheet">

    <link rel="stylesheet" media="screen" href="https://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.1.1/dropzone.css">
    <link rel="stylesheet" href="{{asset('css/admin.css')}}">
    <link rel="stylesheet" href="{{asset('css/parsley.css')}}">
    <style>
    #foot{
       
        width:100%;
    }
    </style>
</head>
<body>
   <header>
  <!--Navbar -->
<!--Navbar -->
<nav class="mb-1 navbar navbar-expand-lg navbar-dark orange lighten-1">
  <a class="navbar-brand" href="#">Nepbee</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-555"
    aria-controls="navbarSupportedContent-555" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (!Auth::guard('admin')->check())
                            <li><a href="{{ URL::to('admin') }}">Login</a></li>
                            <li><a href="{{ URL::to('admin/register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::guard('admin')->user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('admin.logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
</nav>
</header>
<main>
<div class="row">
       
            {{-- Side Navigation --}}
<div class="col-md-2">
    <div class="sidebar content-box" style="display: block;">
        <ul class="nav">
            <!-- Main menu -->
            <li class="current"><a href="/admin/home"><i class="glyphicon glyphicon-home"></i>
                    Dashboard</a></li>
         
            <li class="submenu">
                <a href="#">
                    <i class="glyphicon glyphicon-list"></i> Our showcase
                    <span class="caret pull-right"></span>
                </a>
                <!-- Sub menu -->
                <ul>
                    <li><a href="/admin/showcase/add">Add project</a></li>
                    <li><a href="/admin/showcase">view projects</a></li>
                    
                </ul>
            </li>
            <li class="submenu">
                <a href="#">
                    <i class="glyphicon glyphicon-list"></i> Orders
                    <span class="caret pull-right"></span>
                </a>
                <!-- Sub menu -->
                <ul>
                    
                    <li><a href="/admin/order">All Orders</a></li>
                </ul>
            </li>
            <li class="submenu">
            <a href="#">
                    <i class="glyphicon glyphicon-list"></i> Blogs
                    <span class="caret pull-right"></span>
                </a>
                <ul>
                    <li><a href="/admin/blog/add">add blogs</a></li>
                  
                    <li><a href="/admin/blog">view blogs</a></li>
                </ul>
            </li>
            <li class="submenu">
                <a href="#">
                    <i class="glyphicon glyphicon-list"></i> Notice
                    <span class="caret pull-right"></span>
                </a>
                <!-- Sub menu -->
                <ul>
                    <li><a href="/admin/notice/add">add notice</a></li>
                    <li><a href="/admin/notice">All notice</a></li>
                  
                </ul>
            </li>
            <li class="submenu">
                <a href="#">
                    <i class="glyphicon glyphicon-list"></i> Costumer support
                    <span class="caret pull-right"></span>
                </a>
                <!-- Sub menu -->
                <ul>
                    <li><a href="/admin/support">Costumer enquiry</a></li>
                    
                    
                </ul>
            </li>
       
          
          
        <li class="submenu">
            <a href="#">
                    <i class="glyphicon glyphicon-list"></i> Message
                    <span class="caret pull-right"></span>
                </a>
                <ul>
                    <li><a href="/admin/message">view message</a></li>
                  
                    <li><a href="/admin/message/add">send messages</a></li>
                </ul>
            </li>
       
        <li class="submenu">
            <a href="#">
                    <i class="glyphicon glyphicon-list"></i> Complains
                    <span class="caret pull-right"></span>
                </a>
                <ul>
                    <li><a href="/admin/complain">view complains</a></li>
                </ul>
            </li>
            <li class="submenu">
                <a href="#">
                    <i class="glyphicon glyphicon-list"></i> Review
                    <span class="caret pull-right"></span>
                </a>
                <!-- Sub menu -->
                <ul>
                    <li><a href="/admin/review">All reviews</a></li>
                   
                </ul>
            </li>
            
        </ul>
        </ul> </ul>  </ul>
    </div>
</div> 
<div class="col-md-6">
<div class="container" id="1">
@yield('content')
<br><br><br>
</div>

    </div><!-- ADMIN SIDE NAV-->
        <!--/Display area after sidenav-->
    </div>
<!--/.Navbar -->
<!--/.Navbar -->
<!--/.Navbar -->




   </main>
  <!-- Copyright -->

<footer id="foot" class="page-footer font-small orange">

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2018 Copyright:
    <a href="https://mdbootstrap.com/education/bootstrap/"> MDBootstrap.com</a>
  </div>
  <!-- Copyright -->

</footer>

<!--Footer-->

       
    </div>

    <!-- Scripts -->
    <script type="text/javascript" src="/js/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="/js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="/js/mdb.min.js"></script>

    <script>
  // SideNav Button Initialization
  $(".button-collapse").sideNav();
  // SideNav Scrollbar Initialization
  var sideNavScrollbar = document.querySelector('.custom-scrollbar');
  Ps.initialize(sideNavScrollbar);
</script>

<script src="https://code.jquery.com/jquery.js"></script>
<script src="{{asset('js/parsley.min.js')}}"></script>
<script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<script>
    $(document).ready(function () {
        $(".submenu > a").click(function (e) {
            e.preventDefault();
            var $li = $(this).parent("li");
            var $ul = $(this).next("ul");

            if ($li.hasClass("open")) {
                $ul.slideUp(350);
                $li.removeClass("open");
            } else {
                $(".nav > li > ul").slideUp(350);
                $(".nav > li").removeClass("open");
                $ul.slideDown(350);
                $li.addClass("open");
            }
        });
    });
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.1.1/dropzone.js"></script>
</body>
</html>
