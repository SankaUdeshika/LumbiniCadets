<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Smart Trade</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.png">

    <!-- CSS
        ============================================ -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/vendor/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/vendor/font-awesome.css') }}">
    <link rel="stylesheet" href="{{ asset('css/vendor/flaticon/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('css/vendor/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('css/vendor/slick-theme.css') }}">
    <link rel="stylesheet" href="{{ asset('css/vendor/jquery-ui.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/vendor/sal.css') }}">
    <link rel="stylesheet" href="{{ asset('css/vendor/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('css/vendor/base.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.min.css') }}">

</head>


<body>
    <div class="axil-signin-area">

        <!-- Start Header -->
        <div class="signin-header">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <a href="index.html" style="width: 50px; height: 50px;"><img src="{{ asset('images/LOGO/lumbini_logo.png') }}" alt="logo" style="width: 100px;height: auto;"></a>
                </div>
                <div class="col-md-6">
                    <div class="singin-header-btn">
                        <p>Already a member?</p>
                        <a href="sign-in.html" class="axil-btn btn-bg-secondary sign-up-btn">Sign In</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Header -->

        <div class="row">
            <div class="col-xl-4 col-lg-6">
                <div class="axil-signin-banner bg_image bg_image--10">
                    <h3 class="title">Old Lumbini Cadet Assocation SIGN UP </h3>
                </div>
            </div>
            <div class="col-lg-6 offset-xl-2">
                <div class="axil-signin-form-wrap">
                    <div class="axil-signin-form">
                        <h3 class="title">I'm New Here</h3>
                        <p class="b2 mb--10">Create a new OLCA account to  and manage your Activities with ease.</p>
                        <p class=" b2 text-danger" style="color: red" id="message"></p>
                        <form class="singin-form">
                            <div class="form-group">
                                <label>Email</label>
                                <input type="text" class="form-control" name="email" id="email" value="">
                            </div>
                            <div class="form-group">
                                <label>Name with Initials </label>
                                <input type="text" class="form-control" name="withinitialsName" id="withinitialsName" value="">
                            </div>
                            <div class="form-group">
                                <label>Full Name</label>
                                <textarea type="text" class="form-control" name="fullName" id="fullName" value=""></textarea>
                            </div>
                            <div class="form-group">
                                <label>Mobile</label>
                                <input type="text" class="form-control" name="mobile" id="mobile" value="">
                            </div>
                            <div class="form-group">
                                <label>Land Number</label>
                                <input type="text" class="form-control" name="tel" id="tel" value="">
                            </div>
                            <div class="form-group">
                                <label>Address</label>
                                <textarea type="text" class="form-control" name="address" id="address" cols="2" value=""></textarea>
                            </div>
                            <div class="form-group">
                                <label>Last Year of School?</label>
                                <input type="number" class="form-control" id="SchoolyearInput" name="SchoolyearInput" min="1900" max="3000" placeholder="YYYY">
                            </div>
                            <div class="form-group">
                                <label>Last Camping Date</label>
                                <input type="number" class="form-control" id="CadetyearInput" name="CadetyearInput" min="1900" max="3000" placeholder="YYYY">
                            </div>
                            <div class="form-group">
                                <label>Birth Day</label>
                                <input type="date" class="form-control" name="birthday" id="birthday" value="">
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" class="form-control" name="password" id="password" value="">
                            </div>
                            <div class="form-group">
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-6">
                                            <label for=""></label>
                                            <div class="form-control"></div>
                                        </div>
                                        <div class="col-6">
                                            <label for="image">Choose Profile Image </label>
                                            <input type="file" class="form-control text-center" style="align-self: center;" name="image" id="image" value="">
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="form-group">
                                <button type="button" onclick="signup();" class="axil-btn btn-bg-primary submit-btn">Create Account</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- JS
    ============================================ -->
    <!-- Modernizer JS -->
    <script src="{{ asset('js/vendor/modernizr.min.js') }}"></script>

    <!-- jQuery JS -->
    <script src="{{ asset('js/vendor/jquery.js') }}"></script>

    <!-- Bootstrap JS -->
    <script src="{{ asset('js/vendor/popper.min.js') }}"></script>
    <script src="{{ asset('js/vendor/bootstrap.min.js') }}"></script>

    <!-- Slick JS -->
    <script src="{{ asset('js/vendor/slick.min.js') }}"></script>

    <!-- js.cookie JS -->
    <script src="{{ asset('js/vendor/js.cookie.js') }}"></script>

    <!-- jQuery UI JS -->
    <!-- <script src="{{ asset('assets/js/vendor/jquery.style.switcher.js') }}"></script> -->
    <script src="{{ asset('js/vendor/jquery-ui.min.js') }}"></script>

    <!-- jQuery UI Touch Punch -->
    <script src="{{ asset('js/vendor/jquery.ui.touch-punch.min.js') }}"></script>

    <!-- jQuery Countdown -->
    <script src="{{ asset('js/vendor/jquery.countdown.min.js') }}"></script>

    <!-- Sal.js -->
    <script src="{{ asset('js/vendor/sal.js') }}"></script>

    <!-- Magnific Popup -->
    <script src="{{ asset('js/vendor/jquery.magnific-popup.min.js') }}"></script>

    <!-- ImagesLoaded -->
    <script src="{{ asset('js/vendor/imagesloaded.pkgd.min.js') }}"></script>

    <!-- Isotope -->
    <script src="{{ asset('js/vendor/isotope.pkgd.min.js') }}"></script>

    <!-- Counterup -->
    <script src="{{ asset('js/vendor/counterup.js') }}"></script>

    <!-- Waypoints -->
    <script src="{{ asset('js/vendor/waypoints.min.js') }}"></script>

    <!-- Main JS -->
    <script src="{{ asset('js/main.js') }}"></script>

    <!-- My Script -->
    <script src="{{ asset('js/signup.js') }}"></script>

</body>

</html>