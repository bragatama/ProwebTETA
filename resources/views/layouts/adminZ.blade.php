<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <title>Admin Dasboard</title>

  <!-- GOOGLE FONTS -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500|Poppins:400,500,600,700|Roboto:400,500" rel="stylesheet"/>
  <link href="https://cdn.materialdesignicons.com/3.0.39/css/materialdesignicons.min.css" rel="stylesheet" />

  <!-- PLUGINS CSS STYLE -->
  <link href="{{asset('/assets/plugins/toaster/toastr.min.css')}}" rel="stylesheet" />
  <link href="{{asset('/assets/plugins/nprogress/nprogress.css')}}" rel="stylesheet" />
  <link href="{{asset('/assets/plugins/flag-icons/css/flag-icon.min.css')}}" rel="stylesheet"/>
  <link href="{{asset('/assets/plugins/jvectormap/jquery-jvectormap-2.0.3.css')}}" rel="stylesheet" />
  <link href="{{asset('/assets/plugins/ladda/ladda.min.css')}}" rel="stylesheet" />
  <link href="{{asset('/assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet" />
  <link href="{{asset('/assets/plugins/daterangepicker/daterangepicker.css')}}" rel="stylesheet" />

  <!-- SLEEK CSS -->
  <link id="sleek-css" rel="stylesheet" href="{{asset('/assets/css/sleek.css')}}" />



  <!-- FAVICON -->
  <link href="{{asset('/assets/img/favicon.png')}}" rel="shortcut icon" />

  <!--
    HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries
  -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <script src="{{asset('/assets/plugins/nprogress/nprogress.js')}}"></script>
</head>


  <body class="sidebar-fixed sidebar-dark header-light header-fixed" id="body">
    <script>
      NProgress.configure({ showSpinner: false });
      NProgress.start();
    </script>

    <div class="mobile-sticky-body-overlay"></div>

    <div class="wrapper">

              <!--
          ====================================
          ——— LEFT SIDEBAR WITH FOOTER
          =====================================
        -->
        <aside class="left-sidebar bg-sidebar">
          <div id="sidebar" class="sidebar sidebar-with-footer">
            <!-- Aplication Brand -->
            <div class="app-brand">
              <a href="{{ route('home')}}">
                <svg
                  class="brand-icon"
                  xmlns="http://www.w3.org/2000/svg"
                  preserveAspectRatio="xMidYMid"
                  width="30"
                  height="33"
                  viewBox="0 0 30 33"
                >
                  <g fill="none" fill-rule="evenodd">
                    <path
                      class="logo-fill-blue"
                      fill="#7DBCFF"
                      d="M0 4v25l8 4V0zM22 4v25l8 4V0z"
                    />
                    <path class="logo-fill-white" fill="#FFF" d="M11 4v25l8 4V0z" />
                  </g>
                </svg>
                <span class="brand-name">Admin Dashboard</span>
              </a>
            </div>
            <!-- begin sidebar scrollbar -->
            <div class="sidebar-scrollbar">

              <!-- sidebar menu -->
              <ul class="nav sidebar-inner" id="sidebar-menu">



                  <li  class="has-sub active" >
                    <a class="sidenav-item-link" href="{{ route('Unverified.admin_unverified.index')}}">
                      <i class="mdi mdi-view-dashboard-outline"></i>
                      <span class="nav-text">Unverified Place(s)</span> <b class="caret"></b>
                    </a>

                  </li>





                  <li  class="has-sub" >
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#ui-elements"
                      aria-expanded="false" aria-controls="ui-elements">
                      <i class="mdi mdi-folder-multiple-outline"></i>
                      <span class="nav-text">Registered Places</span> <b class="caret"></b>
                    </a>
                    <ul  class="collapse"  id="ui-elements"
                      data-parent="#sidebar-menu">
                      <div class="sub-menu">

                        <li class="section-title">
                            Categories
                        </li>

                        <li >
                            <a class="sidenav-item-link" href="{{ route('Verified.admin_all.index')}}">
                              <span class="nav-text">All</span>

                            </a>
                          </li>

                        <li >
                            <a class="sidenav-item-link" href="{{ route('admin_tempatwisata')}}">
                              <span class="nav-text">Tempat Wisata</span>

                            </a>
                          </li>

                          <li >
                            <a class="sidenav-item-link" href="{{route('admin_tempattinggalsementara')}}">
                              <span class="nav-text">Tempat Tinggal Sementara</span>

                            </a>
                          </li>

                          <li >
                            <a class="sidenav-item-link" href="{{route('admin_cafe')}}">
                              <span class="nav-text">Cafe</span>

                            </a>
                          </li>

                          <li >
                            <a class="sidenav-item-link" href="{{route('admin_restaurant')}}">
                              <span class="nav-text">Restaurant</span>

                            </a>
                          </li>

                          <li >
                            <a class="sidenav-item-link" href="{{route('admin_mall')}}">
                              <span class="nav-text">Mall</span>

                            </a>
                          </li>





                      </div>
                    </ul>
                  </li>






            </div>
          </div>
        </aside>



      <div class="page-wrapper">
                  <!-- Header -->
          <header class="main-header " id="header">
            <nav class="navbar navbar-static-top navbar-expand-lg">
              <!-- Sidebar toggle button -->
              <button id="sidebar-toggler" class="sidebar-toggle">
                <span class="sr-only">Toggle navigation</span>
              </button>
              <!-- search form -->


              <div class="navbar-right ">
                <ul class="nav navbar-nav">

                  <!-- User Account -->
                  <li class="dropdown user-menu">
                    <button href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                      <img src="{{asset('assets/img/user/u6.jpg')}}" class="user-image" alt="User Image" />
                      <span class="d-none d-lg-inline-block">{{ Auth::user()->name }}</span>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-right">
                      <!-- User image -->
                      <li class="dropdown-header">
                        <img src="{{asset('/assets/img/user/u6.jpg')}}" class="img-circle" alt="User Image" />
                        <div class="d-inline-block">
                            {{ Auth::user()->name }}<small class="pt-1">{{ Auth::user()->email }}</small>
                        </div>
                      </li>

                      <li class="dropdown-footer">
                        <a href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                      </li>
                    </ul>
                  </li>
                  <div class="navbar-right ">
                        <ul class="nav navbar-nav">
                          <!-- Github Link Button -->
                          <li class="github-link mr-3">
                            <a class="btn btn-outline-secondary btn-sm" href="{{route('main')}}" target="_blank">
                              <span class="d-none d-md-inline-block mr-2">Home</span>
                              <i class="mdi mdi-github-circle"></i>
                            </a>
                          </li>
                </ul>
              </div>
            </nav>


          </header>

          @yield('content')

                  <footer class="footer mt-auto">
            <div class="copyright bg-white">
              <p>
                &copy; <span id="copy-year">2019</span> Copyright Sleek Dashboard Bootstrap Template by
                <a
                  class="text-primary"
                  href="http://www.iamabdus.com/"
                  target="_blank"
                  >Abdus</a
                >.
              </p>
            </div>
            <script>
                var d = new Date();
                var year = d.getFullYear();
                document.getElementById("copy-year").innerHTML = year;
            </script>
          </footer>

      </div>
    </div>


<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDCn8TFXGg17HAUcNpkwtxxyT9Io9B_NcM" defer></script>
<script src="{{asset('/assets/plugins/jquery/jquery.min.js')}}"></script>
<script src="{{asset('/assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('/assets/plugins/toaster/toastr.min.js')}}"></script>
<script src="{{asset('/assets/plugins/slimscrollbar/jquery.slimscroll.min.js')}}"></script>
<script src="{{asset('/assets/plugins/charts/Chart.min.js')}}"></script>
<script src="{{asset('/assets/plugins/ladda/spin.min.js')}}"></script>
<script src="{{asset('/assets/plugins/ladda/ladda.min.js')}}"></script>
<script src="{{asset('/assets/plugins/jquery-mask-input/jquery.mask.min.js')}}"></script>
<script src="{{asset('/assets/plugins/select2/js/select2.min.js')}}"></script>
<script src="{{asset('/assets/plugins/jvectormap/jquery-jvectormap-2.0.3.min.js')}}"></script>
<script src="{{asset('/assets/plugins/jvectormap/jquery-jvectormap-world-mill.js')}}"></script>
<script src="{{asset('/assets/plugins/daterangepicker/moment.min.js')}}"></script>
<script src="{{asset('/assets/plugins/daterangepicker/daterangepicker.js')}}"></script>
<script src="{{asset('/assets/plugins/jekyll-search.min.js')}}"></script>
<script src="{{asset('/assets/js/sleek.js')}}"></script>
<script src="{{asset('/assets/js/chart.js')}}"></script>
<script src="{{asset('/assets/js/date-range.js')}}"></script>
<script src="{{asset('/assets/js/map.j')}}s"></script>
<script src="{{asset('/assets/js/custom.js')}}"></script>




  </body>
</html>
