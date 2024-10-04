<?php
session_start();
require "../public/Connection/connection.php";

if (isset($_SESSION["user"])) {
    $user_session = $_SESSION["user"];
?>
    <!doctype html>
    <html class="no-js" lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>OLCA</title>
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


    <body class="sticky-header" onload="LoadFeatures();">
        <!--[if lte IE 9]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->
        <a href="#top" class="back-to-top" id="backto-top"><i class="fal fa-arrow-up"></i></a>
        <!-- Start Header -->


        <main class="main-wrapper">
            <!-- Start Breadcrumb Area  -->
            <div class="axil-breadcrumb-area pb--20">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-12 col-md-12">
                            <div class="inner">
                                <ul class="axil-breadcrumb">
                                    <li class="axil-breadcrumb-item"><a href="index.html">Home</a></li>
                                    <li class="separator"></li>
                                    <li class="axil-breadcrumb-item active" aria-current="page">My Account</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Breadcrumb Area  -->

            <!-- Start My Account Area  -->
            <div class="axil-dashboard-area mt--30 mb--50">
                <div class="container">
                    <div class="axil-dashboard-warp">
                        <div class="axil-dashboard-author">
                            <div class="media">
                                <div class="thumbnail">
                                    <?php
                                    if ($user_session["imagepath"] != "") {
                                    ?>
                                        <img src="<?php echo ($user_session["imagepath"]) ?>" alt="Hello Annie">
                                    <?php
                                    } else {
                                    ?>
                                        <span style="color: gray;">No Profile Photo</span>
                                    <?php
                                    }
                                    ?>
                                </div>
                                <div class="media-body">
                                    <h5 class="title mb-0"><?php echo ($user_session["full_name"]) ?></h5>
                                    <span class="joining-date">OLCA Member Since Sep <?php echo ($user_session["school_last_cadet_year"]) ?></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-3 col-md-4">
                                <aside class="axil-dashboard-aside">
                                    <nav class="axil-dashboard-nav">
                                        <div class="nav nav-tabs" role="tablist">
                                            <a class="nav-item nav-link active" data-bs-toggle="tab" href="#nav-account" role="tab" aria-selected="false"><i class="fas fa-user"></i>Password Change</a>
                                            <a class="nav-item nav-link" data-bs-toggle="tab" href="#nav-add-product" role="tab" aria-selected="true"><i class="fas fa-mobile-alt"></i>Account Details</a>
                                            <?php
                                            if ($user_session["user_role_role_id"] == "1") {
                                            ?>
                                                <a class="nav-item nav-link" data-bs-toggle="tab" href="#nav-product-listing" role="tab" aria-selected="false"><i class="fas fa-list"></i>OLCA Members</a>
                                                <a class="nav-item nav-link" data-bs-toggle="tab" href="#nav-orders" role="tab" aria-selected="false"><i class="fas fa-shopping-basket"></i>payment history</a>
                                            <?php
                                            }
                                            ?>
                                            <a class="nav-item nav-link" data-bs-toggle="tab" href="#nav-address" role="tab" aria-selected="false"><i class="fas fa-home"></i>Make Payments</a>
                                            <a class="nav-item nav-link" href="#"><i class="fal fa-sign-out"></i>Logout</a>
                                        </div>
                                    </nav>
                                </aside>
                            </div>
                            <div class="col-xl-9 col-md-8">
                                <div class="tab-content">

                                    <div class="tab-pane fade" id="nav-add-product" role="tabpanel">
                                        <div class="axil-dashboard-overview">
                                            <div class="welcome-text">Manage Your Account</div>

                                            <form class="account-details-form">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label>Name with Initals</label>
                                                            <input type="text" class="form-control" id="namewithInitials" value="<?php echo ($user_session["with_initials_nae"]) ?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label>Full Name</label>
                                                            <textarea cols="1" id="fullname" rows="2"><?php echo ($user_session["full_name"]) ?></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label>Mobile</label>
                                                            <input type="text" class="form-control" id="mobile" value="<?php echo ($user_session["Mobile"]) ?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label>Land Number</label>
                                                            <input type="text" class="form-control" id="tel" value="<?php echo ($user_session["tel"]) ?>">
                                                        </div>
                                                    </div>






                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label>Last Year of School?</label>
                                                            <input type="number" class="form-control" id="SchoolyearInput" name="SchoolyearInput" min="1900" max="3000" placeholder="YYYY" value="<?php echo ($user_session["school_out_year"]) ?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <div class="form-group">
                                                                <label>Last Camping Date</label>
                                                                <input type="number" class="form-control" id="CadetyearInput" name="CadetyearInput" min="1900" max="3000" placeholder="YYYY" value="<?php echo ($user_session["school_last_cadet_year"]) ?>">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label>Birth Day</label>
                                                            <input type="date" class="form-control" name="birthday" id="birthday" value="<?php echo ($user_session["birthday"]) ?>">
                                                        </div>
                                                    </div>

                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label>Address</label>
                                                            <textarea cols="1" id="address" rows="2"><?php echo ($user_session["address"]) ?></textarea>
                                                        </div>
                                                    </div>





                                                    <div class="col-lg-12">
                                                        <label>Image 1</label>
                                                        <input class="form-control b2" type="file" accept="image/*" id="image">
                                                    </div>



                                                    <div class="col-12">
                                                        <div class="form-group mb--0 mt--30 d-grid">
                                                            <input type="button" onclick="updateProfile();" class="axil-btn" value="Update Profile Infomations">
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>

                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="nav-orders" role="tabpanel">
                                        <div class="axil-dashboard-order">
                                            <div class="table-responsive">
                                                <div class="addrss-header d-flex align-items-center justify-content-between">
                                                    <h4 class="title mb-0">Payment History</h4>
                                                    <a href="#" class="address-edit"><i class="far fa-edit"></i></a>
                                                </div>
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">payment ID</th>
                                                            <th scope="col"> Email</th>
                                                            <th scope="col"> Name</th>
                                                            <th scope="col">Amount</th>
                                                            <th scope="col">Date</th>
                                                            <th scope="col">Time</th>
                                                            <th scope="col">Description</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                        $payment_rs =  Database::search("SELECT * FROM `payments` INNER JOIN `user` ON `user`.`email` = `payments`.`user_email` ");
                                                        $payment_num = $payment_rs->num_rows;
                                                        for ($x = 0; $x < $payment_num; $x++) {
                                                            $payment_data = $payment_rs->fetch_assoc();
                                                        ?>
                                                            <tr>
                                                                <td><?php echo ($payment_data["payment_id"]) ?></td>
                                                                <th scope="row"><?php echo ($payment_data["email"]) ?></th>
                                                                <td><?php echo ($payment_data["with_initials_nae"]) ?></td>
                                                                <td><?php echo ($payment_data["amount"]) ?></td>
                                                                <td><?php echo ($payment_data["payment_date"]) ?></td>
                                                                <td><?php echo ($payment_data["payment_time"]) ?></td>
                                                                <td><?php echo ($payment_data["Descriptions"]) ?></td>
                                                            </tr>
                                                        <?php
                                                        }
                                                        ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="nav-product-listing" role="tabpanel">
                                        <div class="axil-dashboard-order">
                                            <div class="table-responsive">
                                                <div class="addrss-header d-flex align-items-center justify-content-between">
                                                    <h4 class="title mb-0">Members List</h4>
                                                    <a href="#" class="address-edit"><i class="far fa-edit"></i></a>
                                                </div>
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">Email</th>
                                                            <th scope="col">Name</th>
                                                            <th scope="col">Address</th>
                                                            <th scope="col">Mobile</th>
                                                            <th scope="col">Land Number</th>
                                                            <th scope="col">BirthDay</th>
                                                            <th scope="col">School Outing</th>
                                                            <th scope="col">Last Camp</th>
                                                            <th scope="col"> Status</th>
                                                            <th scope="col">Actions</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                        $user_rs =  Database::search("SELECT * FROM `user` INNER JOIN `user_status` ON `user_status`.`user_status_id` = `user`.`user_status_user_status_id` ");
                                                        $user_num = $user_rs->num_rows;
                                                        for ($x = 0; $x < $user_num; $x++) {
                                                            $user_data = $user_rs->fetch_assoc();
                                                        ?>
                                                            <tr>
                                                                <th scope="row"><?php echo ($user_data["email"]) ?></th>
                                                                <td><?php echo ($user_data["with_initials_nae"]) ?></td>
                                                                <td><?php echo ($user_data["address"]) ?></td>
                                                                <td><?php echo ($user_data["Mobile"]) ?></td>
                                                                <td><?php echo ($user_data["tel"]) ?></td>
                                                                <td><?php echo ($user_data["birthday"]) ?></td>
                                                                <td><?php echo ($user_data["school_out_year"]) ?></td>
                                                                <td><?php echo ($user_data["school_last_cadet_year"]) ?></td>
                                                                <td><?php echo ($user_data["user_status"]) ?></td>
                                                                <?php
                                                                if ($user_data["user_status_user_status_id"]  == 1) {
                                                                ?>
                                                                    <td><a href="#" class="axil-btn view-btn">DeActivate</a></td>
                                                                <?php
                                                                } else  if ($user_data["user_status_user_status_id"]  == 2) {
                                                                ?>
                                                                    <td><a href="#" class="axil-btn view-btn">Activate</a></td>
                                                                <?php
                                                                } else  if ($user_data["user_status_user_status_id"]  == 3) {
                                                                ?>
                                                                    <td><a href="#" class="axil-btn view-btn text-danger">Activate</a></td>
                                                                <?php
                                                                }
                                                                ?>
                                                            </tr>
                                                        <?php
                                                        }
                                                        ?>

                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="nav-address" role="tabpanel">
                                        <div class="axil-dashboard-address">
                                            <div class="row row--30">
                                                <div class="col-lg-12">
                                                    <div class="address-info mb--40">
                                                        <div class="addrss-header d-flex align-items-center justify-content-between">
                                                            <h4 class="title mb-0">Membeship Buying and Payments</h4>
                                                            <a href="#" class="address-edit"><i class="far fa-edit"></i></a>
                                                        </div>
                                                        <ul class="address-details">
                                                            <li>Name: <?php echo ($user_session["with_initials_nae"]) ?></li>
                                                            <li>Email: <?php echo ($user_session["email"]) ?></li>
                                                            <li>Phone: <?php echo ($user_session["Mobile"]) ?></li>
                                                            <li>Telephone: <?php echo ($user_session["Mobile"]) ?></li>

                                                        </ul>

                                                        <div class="col-12">
                                                            <div class="row">

                                                                <div class="col-lg-6">
                                                                    <div class="form-group">
                                                                        <label>Amount</label>
                                                                        <input type="text" class="form-control" id="PaymentAmount" value="" placeholder="">
                                                                    </div>
                                                                </div>

                                                                <div class="col-12">
                                                                    <div class="form-group">
                                                                        <label>Description</label>
                                                                        <textarea cols="1" id="description" rows="2" placeholder="Ex:- for Membership , "></textarea>
                                                                    </div>
                                                                </div>

                                                                <div class="col-12">
                                                                    <div class="form-group mb--0 mt--30 d-grid">
                                                                        <input type="button" onclick="makePayment();" class="axil-btn" value="Make Payment">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>


                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade show active" id="nav-account" role="tabpanel">
                                        <div class="col-lg-9">
                                            <div class="axil-dashboard-account">
                                                <form class="account-details-form">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <h5 class="title">Password Change</h5>
                                                            <div class="form-group">
                                                                <label>Current Password</label>
                                                                <input type="password" class="form-control" value="123456789">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>New Password</label>
                                                                <input type="password" class="form-control">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Confirm New Password</label>
                                                                <input type="password" class="form-control">
                                                            </div>
                                                            <div class="form-group mb--0 d-grid">
                                                                <input type="submit" class="axil-btn" value="Save Changes">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End My Account Area  -->

        </main>


        

        <!-- Header Search Modal End -->
        <div class="header-search-modal" id="header-search-modal">
            <button class="card-close sidebar-close"><i class="fas fa-times"></i></button>
            <div class="header-search-wrap">
                <div class="card-header">
                    <form action="#">
                        <div class="input-group">
                            <input type="search" class="form-control" name="prod-search" id="prod-search" placeholder="Search">
                            <button type="submit" class="axil-btn btn-bg-primary"><i class="far fa-search"></i></button>
                        </div>
                    </form>
                </div>
                <div class="card-body">
                    <div class="search-result-header">
                        <h6 class="title">1 Result Found</h6>
                        <a href="#" class="view-all">View All</a>
                    </div>
                    <div class="psearch-results">
                        <div class="axil-product-list">
                            <div class="thumbnail">
                                <a href="#">
                                    <img src="./assets/images/product/product-03.png" alt="Product Image-1">
                                </a>
                            </div>
                            <div class="product-content">

                                <h6 class="product-title"><a href="#">Product Title-1</a></h6>
                                <div class="product-price-variant">
                                    <span class="price current-price">Rs. 0.00</span>
                                </div>
                                <div class="product-cart">
                                    <a href="#" class="cart-btn"><i class="fal fa-shopping-cart"></i></a>
                                    <a href="#" class="cart-btn"><i class="fal fa-heart"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header Search Modal End -->



        <div class="cart-dropdown" id="cart-dropdown">
            <div class="cart-content-wrap">
                <div class="cart-header">
                    <h2 class="header-title">Cart Review</h2>
                    <button class="cart-close sidebar-close"><i class="fas fa-times"></i></button>
                </div>
                <div class="cart-body">
                    <ul class="cart-item-list">
                        <li class="cart-item">
                            <div class="item-img">
                                <a href="#"><img src="assets/images/product/product-01.png" alt="Product Image-1"></a>
                                <button class="close-btn"><i class="fas fa-times"></i></button>
                            </div>
                            <div class="item-content">
                                <h3 class="item-title"><a href="#">Product Title-1</a></h3>
                                <div class="item-price"><span class="currency-symbol">Rs. </span>0.00</div>
                                <div class="pro-qty item-quantity">
                                    <input type="number" class="quantity-input" value="1">
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="cart-footer">
                    <h3 class="cart-subtotal">
                        <span class="subtotal-title">Subtotal:</span>
                        <span class="subtotal-amount">Rs. 0.00</span>
                    </h3>
                    <div class="group-btn">
                        <a href="#" class="axil-btn btn-bg-primary viewcart-btn">View Cart</a>
                        <a href="#" class="axil-btn btn-bg-secondary checkout-btn">Checkout</a>
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
        <!-- myaccount -->
        <script src="{{ asset('js/my-account.js') }}"></script>


    </body>

    </html>
<?php
} else {
    header("Location: signin"); // Use header redirection in PHP
    exit; // Always exit after a header redirect
}
