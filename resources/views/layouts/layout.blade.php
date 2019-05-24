<!doctype html>
<html lang="en">
  <head>
    <title>Teta &mdash; Tempat Bercerita</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300, 400,700" rel="stylesheet">
    <link rel="Shortcut Icon" href="{{asset('images\shortcut.png')}}">
    <link rel="stylesheet" href="{{asset('css\bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css\animate.css')}}">
    <link rel="stylesheet" href="{{asset('css\owl.carousel.min.css')}}">

    <link rel="stylesheet" href="{{asset('fonts/ionicons/css/ionicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('fonts/fontawesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('fonts/flaticon/font/flaticon.css')}}">

    <!-- Theme Style -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
  </head>
  <body>



    <header role="banner">
      <div class="top-bar">
        <div class="container">
          <div class="row">
            <div class="col-9 social">
              <a href="{{asset('main')}}"><img src="{{asset('images\shortcut.png')}}" alt="" width="35px" height="35px"></a>
            </div>
          </div>
        </div>
      </div>

      <div class="container logo-wrap">
        <div class="row pt-5">
          <div class="col-12 text-center">
            <a class="absolute-toggle d-block d-md-none" data-toggle="collapse" href="#navbarMenu" role="button" aria-expanded="false" aria-controls="navbarMenu"><span class="burger-lines"></span></a>
            <h1 class="site-logo"><a href="{{asset('main')}}"><img src="{{asset('images\Teta.png')}}" alt="" width="40%" height="40%"></a></h1>
          </div>
        </div>
      </div>

      <nav class="navbar navbar-expand-md  navbar-light bg-light">
        <div class="container">


          <div class="collapse navbar-collapse" id="navbarMenu">
            <ul class="navbar-nav mx-auto">
              <li class="nav-item">
                <a class="nav-link active" href="{{route('main')}}">Home</a>
              </li>

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="category.html" id="dropdown05" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Categories</a>
                <div class="dropdown-menu" aria-labelledby="dropdown05">
                  <a class="dropdown-item" href="{{route('tempat wisata')}}">Tempat Wisata</a>
                  <a class="dropdown-item" href="{{route('tempat tinggal sementara')}}">Tempat Tinggal Sementara</a>
                  <a class="dropdown-item" href="{{route('cafe')}}">Cafe</a>
                  <a class="dropdown-item" href="{{route('restaurant')}}">Restaurant</a>
                  <a class="dropdown-item" href="{{route('mall')}}">Mall</a>
                </div>

              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('register_place')}}">Register A Place</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('contact')}}">Contact</a>
              </li>
            </ul>

          </div>
        </div
      </nav>
    </header>
    <!-- END header -->

    @yield('content')

          <!-- END main-content -->

          <div class="col-md-12 col-lg-4 sidebar">

            <!-- END sidebar-box -->
            <div class="sidebar-box">
              <h3 class="heading">Time</h3>
              <div id="watch">
              </div>
            </div>
            <!-- END sidebar-box -->

          </div>
          <!-- END sidebar -->

        </div>
      </div>
    </section>

    <footer class="site-footer">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-4">
            <h3>Tempat Bercerita</h3>
            <p>
              <img src="{{asset('images\Teta.png')}}" alt="Image placeholder" class="img-fluid">
            </p>

            <p>TeTa atau Tempat Bercerita merupakan Website yang menyediakan daftar tempat di Balikpapan, deskripsi serta informasi lainnya mengenai tempat tersebut dengan jelas secara real time atau up to date.</p>
          </div>
          <div class="col-md-6 ml-auto">
            <div class="row">
              <div class="col-md-7">
                <div class="post-entry-sidebar">
                </div>
              </div>
              <div class="col-md-1"></div>

              <div class="col-md-4">

                <div class="mb-5">
                  <h3>Quick Links</h3>
                  <ul class="list-unstyled">
                    <li><a href="{{route('contact')}}">About Us</a></li>
                    <li><a href="{{route('tempat wisata')}}">Tempat Wisata</a></li>
                    <li><a href="{{route('tempat tinggal sementara')}}">Tempat Tinggal Sementara</a></li>
                    <li><a href="{{route('cafe')}}">Cafe</a></li>
                    <li><a href="{{route('restaurant')}}">Restaurant</a></li>
                    <li><a href="{{route('mall')}}">Mall</a></li>
                  </ul>
                </div>

                <div class="mb-5">
                  <h3>Links</h3>
                  <ul class="list-unstyled footer-social">
                    <li><a href="https://www.twitter.com/"><span class="fa fa-twitter"></span> Twitter</a></li>
                    <li><a href="https://www.facebook.com/"><span class="fa fa-facebook"></span> Facebook</a></li>
                    <li><a href="https://www.instagram.com/"><span class="fa fa-instagram"></span> Instagram</a></li>
                    <li><a href="https://www.google.com/"><span class="fa fa-google"></span> Google</a></li>
                    <li><a href="https://www.youtube.com/"><span class="fa fa-youtube-play"></span> Youtube</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | </i> by <i>Teta</i>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
          </div>
        </div>
      </div>
    </footer>
    <!-- END footer -->

    <!-- loader -->
    <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#f4b214"/></svg></div>

    <script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
    <script src="{{asset('js/jquery-migrate-3.0.0.js')}}"></script>
    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('js/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('js/jquery.stellar.min.js')}}"></script>


    <script src="{{asset('js/main.js')}}"></script>
    <script type="text/javascript">
        $(document).ready(function(){
        function clock() {
          var now = new Date();
          var secs = ('0' + now.getSeconds()).slice(-2);
          var mins = ('0' + now.getMinutes()).slice(-2);
          var hr = now.getHours();
          var Time = hr + ":" + mins + ":" + secs;
          document.getElementById("watch").innerHTML = Time;
          requestAnimationFrame(clock);
        }

        requestAnimationFrame(clock);
    });
    </script>
  </body>
</html>
