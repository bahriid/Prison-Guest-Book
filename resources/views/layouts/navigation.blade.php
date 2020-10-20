<!DOCTYPE html>
<html lang="en">


    <head>

        <meta charset="utf-8" />
        <title>@yield('title') | Perizinan Pengunjung Penjara</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{url('assets/images/favicon.ico') }}">

        <!-- Bootstrap Css -->
        <link href="{{url('assets/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{url('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />

        @yield('css')
    </head>

    <body data-topbar="dark" data-layout="horizontal">

        <!-- Begin page -->
        <div id="layout-wrapper">

            <header id="page-topbar">
                <div class="navbar-header">
                    <div class="d-flex">
                        <!-- LOGO -->
                        <div class="navbar-brand-box">
                            <a href="{{ route('home') }}" class="logo logo-dark">
                                <span class="logo-sm">
                                    <img src="{{url('assets/images/Group144.png') }}" alt="" height="42">
                                </span>
                                <span class="logo-lg">
                                    <img src="{{url('assets/images/Group144.png') }}" alt="" height="37">
                                </span>
                            </a>

                            <a href="{{ route('home') }}" class="logo logo-light">
                                <span class="logo-sm">
                                    <img src="{{url('assets/images/Group144.png') }}" alt="" height="42">
                                </span>
                                <span class="logo-lg">
                                    <img src="{{url('assets/images/Group144.png') }}" alt="" height="39">
                                </span>
                            </a>
                        </div>

                        <button type="button"
                            class="btn btn-sm px-3 font-size-16 d-lg-none header-item waves-effect waves-light"
                            data-toggle="collapse" data-target="#topnav-menu-content">
                            <i class="fa fa-fw fa-bars"></i>
                        </button>
                    </div>

                    <div class="d-flex">
                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="rounded-circle header-profile-user"
                                    src="{{url('assets/images/users/avatar-1.jpg') }}" alt="Header Avatar">
                                <span class="d-none d-xl-inline-block ml-1">{{$user['name']}}</span>
                                <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <!-- item-->
                                <a class="dropdown-item text-danger" href="href=" {{ route('logout') }}" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();"><i
                                        class="bx bx-power-off font-size-16 align-middle mr-1 text-danger"></i>
                                    Logout</a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </header>

            <div class="topnav">
                <div class="container-fluid">
                    <nav class="navbar navbar-light navbar-expand-lg topnav-menu">

                        <div class="collapse navbar-collapse" id="topnav-menu-content">
                            <ul class="navbar-nav">

                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('home') }}" id="topnav-dashboard" role="button"
                                        aria-haspopup="true" aria-expanded="false">
                                        <i class="bx bx-home-circle mr-2"></i>Dashboard
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('prisioner.index') }}" id="topnav-dashboard"
                                        role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="bx bx-home-circle mr-2"></i>Tahanan
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('officer.index') }}" id="topnav-dashboard"
                                        role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="bx bx-home-circle mr-2"></i>Officer
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('officer.index') }}" id="topnav-dashboard"
                                        role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="bx bx-home-circle mr-2"></i>Officer
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </nav>
                </div>
            </div>

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    @yield('content')
                    <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6">
                                <script>
                                    document.write(new Date().getFullYear())
                                </script> © Mela.
                            </div>
                            <div class="col-sm-6">
                                <div class="text-sm-right d-none d-sm-block">
                                    Design & Develop by Mela
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- JAVASCRIPT -->
        <script src="{{url('assets/libs/jquery/jquery.min.js') }}"></script>
        <script src="{{url('assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{url('assets/libs/metismenu/metisMenu.min.js') }}"></script>
        <script src="{{url('assets/libs/simplebar/simplebar.min.js') }}"></script>
        <script src="{{url('assets/libs/node-waves/waves.min.js') }}"></script>
        @yield('js')
    </body>

</html>