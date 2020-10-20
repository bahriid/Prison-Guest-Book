<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Welcome - Perizinan Pengunjung Penjara</title>
        <link rel="icon" type="image/x-icon" href="{{url('assets/images/favicon.ico')}}" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet"
            type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet"
            type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{url('assets/homepage/css/styles.css')}}" rel="stylesheet" />
    </head>

    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="#page-top"><img
                        src="{{url('assets/images/Group144.png')}}" alt="" style="height: 50%; width: 50%;" /></a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                    data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                    aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ml-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ml-auto">
                        @guest
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{ route('login') }}">Login</a>
                        </li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger"
                                href="{{ route('register') }}">Register</a></li>
                        @endguest
                        @auth
                        @if($user['role'] == 'ADMIN')
                        <li class="nav-item"><a class="nav-link js-scroll-trigger"
                                href="{{ route('home') }}">Dashboard</a></li>
                        @endif
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">Logout</a>

                            {{-- <a class="dropdown-item text-danger" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();"><i
                                    class="bx bx-power-off font-size-16 align-middle mr-1 text-danger"></i>
                                Logout</a> --}}

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
                        @endauth

                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container">
                <div class="masthead-subheading">Selamat datang !</div>
                <div class="masthead-heading text-uppercase">Perizinan Pengunjung Penjara

                </div>
                <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#pengajuan">Ajukan
                    Perizinan</a>
            </div>
        </header>
        <!-- Portfolio Grid-->
        <section class="page-section bg-light" id="pengajuan">
            @guest
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Pengajuan</h2>
                    <h3 class="section-subheading text-muted">Silahkan lengkapi form dibawah ...</h3>
                </div>
                {{-- <div class="row"> --}}
                <form action="{{ route('document.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="col-xl-12">
                        <div class="form-group row">
                            <label for="example-text-input" class="col-form-label">Nama Tahanan</label>
                            <select class="form-control" name="prisioners_id">
                                <option>Select</option>
                                @foreach ($prisioners as $prisioner)
                                <option value="{{$prisioner['id']}}">{{$prisioner['name']}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-xl-12">
                        <div class="form-group row">
                            <label for="example-text-input" class="col-form-label">Nama Anda</label>
                            <input class="form-control" type="text" name="name" value="{{ old('name') }}"
                                id="example-text-input">
                        </div>
                    </div>
                    <div class="col-xl-12">
                        <div class="form-group row">
                            <label for="example-text-input" class="col-form-label">Alamat</label>
                            <input class="form-control" type="text" name="address" value="{{ old('address') }}"
                                id="example-text-input">
                        </div>
                    </div>
                    <div class="col-xl-12">
                        <div class="form-group row">
                            <label for="example-text-input" class="col-form-label">Pekerjaan</label>
                            <input class="form-control" type="text" name="job" value="{{ old('job') }}"
                                id="example-text-input">
                        </div>
                    </div>
                    <div class="col-xl-12">
                        <div class="form-group row">
                            <label for="example-text-input" class="col-form-label">Tujuan</label>
                            <input class="form-control" type="text" name="purpose" value="{{ old('purpose') }}"
                                id="example-text-input">
                        </div>
                    </div>
                    <div class="col-xl-12">
                        <div class="form-group row">
                            <label for="example-text-input" class="col-form-label">hubungan dengan tahanan</label>
                            <input class="form-control" type="text" name="relationship"
                                value="{{ old('relationship') }}" id="example-text-input">
                        </div>
                    </div>
                    <div class="col-xl-12">
                        <div class="form-group row">
                            @guest
                            <a class="btn btn-primary btn-xl text-uppercase" href="{{ route('login') }}">Login</a>
                            @endguest
                        </div>
                    </div>

                </form>
                {{-- </div> --}}
            </div>
            @endguest
            @auth
            @if($user['role'] == 'ADMIN')
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Welcome Admin</h2>
                    <h3 class="section-subheading text-muted">Silahkan masuk dashboard pada menu yang telah disediakan
                        ...</h3>
                </div>
            </div>
            @else
            @if(!($document['user_id']))
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Pengajuan</h2>
                    <h3 class="section-subheading text-muted">Silahkan lengkapi form dibawah ...</h3>
                </div>
                {{-- <div class="row"> --}}
                <form action="{{ route('document.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="col-xl-12">
                        <div class="form-group row">
                            <label for="example-text-input" class="col-form-label">Nama Tahanan</label>
                            <select class="form-control" name="prisioners_id">
                                <option>Select</option>
                                @foreach ($prisioners as $prisioner)
                                <option value="{{$prisioner['id']}}">{{$prisioner['name']}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-xl-12">
                        <div class="form-group row">
                            <label for="example-text-input" class="col-form-label">Nama Anda</label>
                            <input class="form-control" type="text" name="name" value="{{ old('name') }}"
                                id="example-text-input">
                        </div>
                    </div>
                    <div class="col-xl-12">
                        <div class="form-group row">
                            <label for="example-text-input" class="col-form-label">Alamat</label>
                            <input class="form-control" type="text" name="address" value="{{ old('address') }}"
                                id="example-text-input">
                        </div>
                    </div>
                    <div class="col-xl-12">
                        <div class="form-group row">
                            <label for="example-text-input" class="col-form-label">Pekerjaan</label>
                            <input class="form-control" type="text" name="job" value="{{ old('job') }}"
                                id="example-text-input">
                        </div>
                    </div>
                    <div class="col-xl-12">
                        <div class="form-group row">
                            <label for="example-text-input" class="col-form-label">Tujuan</label>
                            <input class="form-control" type="text" name="purpose" value="{{ old('purpose') }}"
                                id="example-text-input">
                        </div>
                    </div>
                    <div class="col-xl-12">
                        <div class="form-group row">
                            <label for="example-text-input" class="col-form-label">hubungan dengan tahanan</label>
                            <input class="form-control" type="text" name="relationship"
                                value="{{ old('relationship') }}" id="example-text-input">
                        </div>
                    </div>
                    <div class="col-xl-12">
                        <div class="form-group row">
                            @auth
                            <button class="btn btn-primary btn-xl text-uppercase" id="sendMessageButton"
                                type="submit">Ajukan</button>
                            @endauth
                        </div>
                    </div>

                </form>
                {{-- </div> --}}
            </div>
            @else
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Halo, {{$user['name']}}</h2>
                    <h3 class="section-subheading text-muted">Status pengajuan anda adalah : {{$document['status']}}
                    </h3>
                </div>
            </div>
            @endif
            @endif
            @endauth
        </section>
        <!-- Contact-->
        <section class="page-section" id="contact">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Contact Us</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
                <form id="contactForm" name="sentMessage" novalidate="novalidate">
                    <div class="row align-items-stretch mb-5">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input class="form-control" id="name" type="text" placeholder="Your Name *"
                                    required="required" data-validation-required-message="Please enter your name." />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group">
                                <input class="form-control" id="email" type="email" placeholder="Your Email *"
                                    required="required"
                                    data-validation-required-message="Please enter your email address." />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group mb-md-0">
                                <input class="form-control" id="phone" type="tel" placeholder="Your Phone *"
                                    required="required"
                                    data-validation-required-message="Please enter your phone number." />
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-group-textarea mb-md-0">
                                <textarea class="form-control" id="message" placeholder="Your Message *"
                                    required="required"
                                    data-validation-required-message="Please enter a message."></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <div id="success"></div>
                        <button class="btn btn-primary btn-xl text-uppercase" id="sendMessageButton" type="submit">Send
                            Message</button>
                    </div>
                </form>
            </div>
        </section>
        <!-- Footer-->
        <footer class="footer py-4">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 text-lg-left">Copyright © Perizinan Pengunjung Penjara 2020</div>
                    <div class="col-lg-4 my-3 my-lg-0">
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                    <div class="col-lg-4 text-lg-right">
                        <a class="mr-3" href="#!">Privacy Policy</a>
                        <a href="#!">Terms of Use</a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Portfolio Modals-->
        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Contact form JS-->
        <script src="{{url('assets/homepage/assets/mail/jqBootstrapValidation.js')}}"></script>
        <script src="{{url('assets/homepage/assets/mail/contact_me.js')}}"></script>
        <!-- Core theme JS-->
        <script src="{{url('assets/homepage/js/scripts.js')}}"></script>
    </body>

</html>