<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>MyHao</title>

    <!-- Bootstrap -->
    <link href="https://fonts.googleapis.com/css?family=Libre+Franklin:100,200,300,400,500,700" rel="stylesheet">

    <link href="/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="/lib/animate.css" rel="stylesheet">
    <link href="/lib/selectric/selectric.css" rel="stylesheet">
    <link href="/lib/swiper/css/swiper.min.css" rel="stylesheet">
    <link href="/lib/aos/aos.css" rel="stylesheet">
    <link href="/lib/Magnific-Popup/magnific-popup.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">

    <script src="/lib/jquery-3.2.1.min.js"></script>
    <script src="/lib/popper.min.js"></script>
    <script src="/lib/bootstrap/js/bootstrap.min.js"></script>
    <script src="/lib/selectric/jquery.selectric.js"></script>
    <script src="/lib/swiper/js/swiper.min.js"></script>
    <script src="/lib/tinymce/tinymce.min.js"></script>
    <script src="/lib/aos/aos.js"></script>
    <script src="/lib/Magnific-Popup/jquery.magnific-popup.min.js"></script>
    <script src="/lib/sticky-sidebar/ResizeSensor.min.js"></script>
    <script src="/lib/sticky-sidebar/theia-sticky-sidebar.min.js"></script>
    <script src="/lib/sidr/jquery.sidr.min.js"></script>
    <script src="/lib/lib.js"></script>

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div id="main">
    <nav class="navbar navbar-expand-lg navbar-dark" id="menu">
        <div class="container">
            <a class="navbar-brand" href="/"><span class="icon-uilove icon-uilove-realestate"></span></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu-content" aria-controls="menu-content" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="menu-content">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/" role="button"  aria-expanded="false">
                            Home <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/properties" role="button" aria-haspopup="true" aria-expanded="false">
                            Listings
                        </a>
                    </li>


                </ul>

                <ul class="navbar-nav ml-auto">

                    @if (auth()->guest())
                    <li class="nav-item dropdown user-account">
                        <a class="nav-link dropdown-toggle" href="=#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="user-image" style="background-image:url('http://uilove.in/realestate/listo/preview/ img/demo/profile3.jpg');"></span> Join
                        </a>
                        <div class="dropdown-menu">
                            <a href="/join" class="dropdown-item">Property Seeker</a>
                            <a href="/join?role=Property Manager" class="dropdown-item">Developer</a>
                            <a href="/join?role=Finance Institution" class="dropdown-item">Finance Institution</a>
                        </div>
                    </li>
                    @else
                            <li><a href="{{ url("logout") }}">logout</a></li>
                        @endif

                    <li class="nav-item"><a class="nav-link nav-btn" href="#"><span><i class="fa fa-plus" aria-hidden="true"></i> Add listing</span></a></li>
                </ul>

            </div>
        </div>
    </nav>

    @yield('content')

<button class="btn btn-primary btn-circle" id="to-top"><i class="fa fa-angle-up"></i></button>
<footer id="footer" class="bg-light footer-light">
    <div class="container container-1000">
        <div class="footer-credits d-lg-flex justify-content-lg-between align-items-center">
            <div><strong>Dennis Chebon</strong></div>

            <div>© 2020 Myhao. All Rights Reserved</div>
        </div>
    </div>
</footer>
</div>
</body>
</html>
