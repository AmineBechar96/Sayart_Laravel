<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description"
        content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords"
        content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Shop - Vuexy - Bootstrap HTML admin template</title>
    <link rel="apple-touch-icon" href="../../../app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="../../../app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/extensions/nouislider.min.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/ui/prism.min.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/forms/select/select2.min.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/colors.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/components.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/themes/dark-layout.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/themes/semi-dark-layout.css">

    <!-- BEGIN: Page CSS  -->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/core/menu/menu-types/horizontal-menu.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/core/colors/palette-gradient.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/plugins/extensions/noui-slider.min.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/pages/app-ecommerce-shop.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="../../../assets/css/style.css">
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body
    class="horizontal-layout horizontal-menu content-detached-left-sidebar ecommerce-application navbar-floating footer-static  "
    data-open="hover" data-menu="horizontal-menu" data-col="content-detached-left-sidebar">

    <!-- BEGIN: Header-->
    <?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!-- END: Header-->


    <!-- BEGIN: Main Menu-->
    <?php echo $__env->make('layouts.horizontal-menu-features', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- END: Main Menu-->




    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">

            <div class="content-detached content-right">
                <div class="content-body">
                    <!-- Ecommerce Content Section Starts -->
                    <section id="ecommerce-header">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="ecommerce-header-items">
                                    <div class="result-toggler">
                                        <button class="navbar-toggler shop-sidebar-toggler" type="button"
                                            data-toggle="collapse">
                                            <span class="navbar-toggler-icon d-block d-lg-none"><i
                                                    class="feather icon-menu"></i></span>
                                        </button>
                                        <div class="search-results">
                                            16285 results found
                                        </div>
                                    </div>
                                    <div class="view-options">

                                        <div class="btn-group" style="margin-right:10px;">
                                            <button type="button" class="btn btn-success dropdown-toggle"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Options
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#">Separated link</a>

                                            </div>
                                        </div>
                                        <div class="view-btn-option">
                                            <button class="btn btn-white view-btn grid-view-btn active">
                                                <i class="feather icon-grid"></i>
                                            </button>
                                            <button class="btn btn-white list-view-btn view-btn">
                                                <i class="feather icon-list"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Ecommerce Content Section Starts -->
                    <!-- background Overlay when sidebar is shown  starts-->
                    <div class="shop-content-overlay"></div>
                    <!-- background Overlay when sidebar is shown  ends-->

                    <!-- Ecommerce Search Bar Starts -->
                    <section id="ecommerce-searchbar">
                        <div class="row mt-1">
                            <div class="col-sm-12">
                                <fieldset class="form-group position-relative">
                                    <input type="text" class="form-control search-product" id="iconLeft5"
                                        placeholder="Search here">
                                    <div class="form-control-position">
                                        <i class="feather icon-search"></i>
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                    </section>
                    <!-- Ecommerce Search Bar Ends -->

                    <!-- Ecommerce Products Starts -->
                    <section id="ecommerce-products" class="grid-view">
                        <div class="card ecommerce-card">
                            <div class="card-content" id="prod1">
                                <div class="item-img text-center">
                                    <a href="app-ecommerce-details.html">
                                        <img class="img-fluid" src="../../../app-assets/images/pages/eCommerce/11.jpg"
                                            alt="img-placeholder"></a>
                                </div>
                                <div class="card-body">
                                    <div class="item-wrapper">
                                        <div class="item-rating">
                                            <div class="badge badge-primary badge-md">
                                                <span>4</span>
                                                <i class="feather icon-star"></i>
                                            </div>
                                        </div>
                                        <div>
                                            <h6 class="item-price">
                                                $39.99
                                            </h6>
                                        </div>
                                    </div>
                                    <div class="item-name">
                                        <a href="app-ecommerce-details.html">Amazon
                                            - Fire TV Stick with
                                            Alexa Voice Remote -
                                            Black</a>
                                        <p class="item-company">
                                            By
                                            <span class="company-name">Google</span>
                                        </p>
                                    </div>
                                    <div>
                                        <p class="item-description">
                                            Enjoy smart access
                                            to
                                            videos, games and
                                            apps
                                            with this Amazon
                                            Fire TV
                                            stick. Its Alexa
                                            voice
                                            remote lets you
                                            deliver hands-free
                                            commands when you
                                            want
                                            to watch television
                                            or
                                            engage with other
                                            applications. With a
                                            quad-core processor,
                                            1GB
                                            internal memory and
                                            8GB
                                            of storage, this
                                            portable Amazon Fire
                                            TV
                                            stick works fast
                                            for buffer-free
                                            streaming.
                                        </p>
                                    </div>
                                </div>
                                <div class="item-options text-center">
                                    <div class="item-wrapper">
                                        <div class="item-rating">
                                            <div class="badge badge-primary badge-md">
                                                <span>4</span>
                                                <i class="feather icon-star"></i>
                                            </div>
                                        </div>
                                        <div class="item-cost">
                                            <h6 class="item-price">
                                                $39.99
                                            </h6>
                                        </div>
                                    </div>
                                    <div class="wishlist">
                                        <i class="fa fa-heart-o"></i>
                                        <span>Wishlist</span>
                                    </div>
                                    <div class="cart">
                                        <i class="feather icon-shopping-cart"></i>
                                        <span class="add-to-cart">Add
                                            to cart</span> <a href="app-ecommerce-checkout.html"
                                            class="view-in-cart d-none">View
                                            In Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card ecommerce-card">
                            <div class="card-content">
                                <div class="item-img text-center">
                                    <a href="app-ecommerce-details.html">
                                        <img class="img-fluid" src="../../../app-assets/images/pages/eCommerce/22.jpg"
                                            alt="img-placeholder">
                                    </a>
                                </div>
                                <div class="card-body">
                                    <div class="item-wrapper">
                                        <div class="item-rating">
                                            <div class="badge badge-primary badge-md">
                                                <span>4</span>
                                                <i class="feather icon-star"></i>
                                            </div>
                                        </div>
                                        <div>
                                            <h6 class="item-price">
                                                $35.00
                                            </h6>
                                        </div>
                                    </div>
                                    <div class="item-name">
                                        <a href="app-ecommerce-details.html">Google
                                            - Chromecast -
                                            Black</a>
                                        <p class="item-company">
                                            By
                                            <span class="company-name">Amazon</span>
                                        </p>
                                    </div>
                                    <div>
                                        <p class="item-description">
                                            Google Chromecast:
                                            Enjoy
                                            a world of
                                            entertainment
                                            with Google
                                            Chromecast.
                                            Just connect to your
                                            HDTV's HDMI
                                            interface and your
                                            home
                                            Wi-Fi network to get
                                            started. You can
                                            stream
                                            your favorite apps
                                            from
                                            your compatible
                                            phone, tablet or
                                            laptop,
                                            plus use your phone
                                            as a
                                            remote to search,
                                            play
                                            and pause content.
                                        </p>
                                    </div>
                                </div>
                                <div class="item-options text-center">
                                    <div class="item-wrapper">
                                        <div class="item-rating">
                                            <div class="badge badge-primary badge-md">
                                                <span>4</span>
                                                <i class="feather icon-star"></i>
                                            </div>
                                        </div>
                                        <div class="item-cost">
                                            <h6 class="item-price">
                                                $35.00
                                            </h6>
                                        </div>
                                    </div>
                                    <div class="wishlist">
                                        <i class="fa fa-heart-o mr-25"></i>
                                        Wishlist
                                    </div>
                                    <div class="cart">
                                        <i class="feather icon-shopping-cart mr-25"></i>
                                        <span class="add-to-cart">Add
                                            to cart</span> <a href="app-ecommerce-checkout.html"
                                            class="view-in-cart d-none">View
                                            In Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card ecommerce-card">
                            <div class="card-content">
                                <div class="item-img text-center">
                                    <a href="app-ecommerce-details.html"><img class="img-fluid"
                                            src="../../../app-assets/images/pages/eCommerce/33.jpg"
                                            alt="img-placeholder"></a>
                                </div>
                                <div class="card-body">
                                    <div class="item-wrapper">
                                        <div class="item-rating">
                                            <div class="badge badge-primary badge-md">
                                                <span>4</span>
                                                <i class="feather icon-star"></i>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="item-cost">
                                                <h6 class="item-price">
                                                    $499.99
                                                </h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item-name">
                                        <a href="app-ecommerce-details.html">Dell
                                            - Inspiron 15.6"
                                            Touch-Screen Laptop
                                            -
                                            Black</a>
                                        <p class="item-company">
                                            By
                                            <span class="company-name">Dell</span>
                                        </p>
                                    </div>
                                    <div>
                                        <p class="item-description">
                                            Dell Inspiron
                                            Laptop:
                                            Get speed and
                                            performance from
                                            this
                                            15.6-inch Dell
                                            Inspiron
                                            laptop. Supported by
                                            an
                                            Intel Core i5-5200U
                                            processor and 6GB of
                                            DDR3L RAM, this slim
                                            touch screen laptop
                                            lets
                                            you run multiple
                                            applications without
                                            lag. The 1TB hard
                                            drive
                                            in this Dell
                                            Inspiron
                                            laptop lets you
                                            store
                                            multiple music,
                                            video and document
                                            files.
                                        </p>
                                    </div>
                                </div>
                                <div class="item-options text-center">
                                    <div class="item-wrapper">
                                        <div class="item-rating">
                                            <div class="badge badge-primary badge-md">
                                                <span>4</span>
                                                <i class="feather icon-star"></i>
                                            </div>
                                        </div>
                                        <div class="item-cost">
                                            <h6 class="item-price">
                                                $499.99
                                            </h6>
                                            <p class="shipping">
                                                <i class="feather icon-shopping-cart"></i>
                                                Free Shipping
                                            </p>
                                        </div>
                                    </div>
                                    <div class="wishlist">
                                        <i class="fa fa-heart-o mr-25"></i>
                                        Wishlist
                                    </div>
                                    <div class="cart">
                                        <i class="feather icon-shopping-cart mr-25"></i>
                                        <span class="add-to-cart">Add
                                            to cart</span> <a href="app-ecommerce-checkout.html"
                                            class="view-in-cart d-none">View
                                            In Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card ecommerce-card">
                            <div class="card-content">
                                <div class="item-img text-center">
                                    <a href="app-ecommerce-details.html">
                                        <img class="img-fluid" src="../../../app-assets/images/pages/eCommerce/44.jpg"
                                            alt="img-placeholder"></a>
                                </div>
                                <div class="card-body">
                                    <div class="item-wrapper">
                                        <div class="item-rating">
                                            <div class="badge badge-primary badge-md">
                                                <span>4</span>
                                                <i class="feather icon-star"></i>
                                            </div>
                                        </div>
                                        <div class="item-cost">
                                            <h6 class="item-price">
                                                $49.99
                                            </h6>
                                        </div>
                                    </div>
                                    <div class="item-name">
                                        <a href="app-ecommerce-details.html">Amazon
                                            - Echo Dot</a>
                                        <p class="item-company">
                                            By
                                            <span class="company-name">Amazon</span>
                                        </p>
                                    </div>
                                    <div>
                                        <p class="item-description">
                                            Echo Dot is the
                                            latest
                                            addition to Amazon's
                                            voice-controlled
                                            devices.
                                            Deliver your
                                            favorite
                                            playlist anywhere in
                                            your home with the
                                            Amazon Echo Dot
                                            voice-controlled
                                            device.
                                            Control most
                                            electric
                                            devices through
                                            voice
                                            activation, or
                                            schedule
                                            a ride with Uber and
                                            order a pizza. The
                                            Amazon Echo Dot
                                            voice-controlled
                                            device
                                            turns any home into
                                            a
                                            smart home with the
                                            Alexa app on a
                                            smartphone
                                            or tablet.
                                        </p>
                                    </div>
                                </div>
                                <div class="item-options text-center">
                                    <div class="item-wrapper">
                                        <div class="item-rating">
                                            <div class="badge badge-primary badge-md">
                                                <span>4</span>
                                                <i class="feather icon-star"></i>
                                            </div>
                                        </div>
                                        <div class="item-cost">
                                            <h6 class="item-price">
                                                $49.99
                                            </h6>
                                        </div>
                                    </div>
                                    <div class="wishlist">
                                        <i class="fa fa-heart-o mr-25"></i>
                                        Wishlist
                                    </div>
                                    <div class="cart">
                                        <i class="feather icon-shopping-cart mr-25"></i>
                                        <span class="add-to-cart">Add
                                            to cart</span> <a href="app-ecommerce-checkout.html"
                                            class="view-in-cart d-none">View
                                            In Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card ecommerce-card">
                            <div class="card-content">
                                <div class="item-img text-center">
                                    <a href="app-ecommerce-details.html">
                                        <img class="img-fluid" src="../../../app-assets/images/pages/eCommerce/55.jpg"
                                            alt="img-placeholder">
                                    </a>
                                </div>
                                <div class="card-body">
                                    <div class="item-wrapper">
                                        <div class="item-rating">
                                            <div class="badge badge-primary badge-md">
                                                <span>4</span>
                                                <i class="feather icon-star"></i>
                                            </div>
                                        </div>
                                        <div class="item-cost">
                                            <h6 class="item-price">
                                                $999.99
                                            </h6>
                                        </div>
                                    </div>
                                    <div class="item-name">
                                        <a href="app-ecommerce-details.html">
                                            Apple - MacBook Air??
                                            (Latest Model) -
                                            13.3"
                                            Display - Silver
                                        </a>
                                        <p class="item-company">
                                            By
                                            <span class="company-name">Apple</span>
                                        </p>
                                    </div>
                                    <div>
                                        <p class="item-description">
                                            MacBook Air is a
                                            thin,
                                            lightweight laptop
                                            from
                                            Apple.
                                            MacBook Air features
                                            up
                                            to 8GB of memory, a
                                            fifth-generation
                                            Intel
                                            Core processor,
                                            Thunderbolt 2, great
                                            built-in apps, and
                                            all-day battery
                                            life.1
                                            Its thin, light, and
                                            durable enough to
                                            take
                                            everywhere you
                                            go-and
                                            powerful enough to
                                            do
                                            everything once you
                                            get
                                            there, better.
                                        </p>
                                    </div>
                                </div>
                                <div class="item-options text-center">
                                    <div class="item-wrapper">
                                        <div class="item-rating">
                                            <div class="badge badge-primary badge-md">
                                                <span>4</span>
                                                <i class="feather icon-star"></i>
                                            </div>
                                        </div>
                                        <div class="item-cost">
                                            <h6 class="item-price">
                                                $999.99
                                            </h6>
                                        </div>
                                    </div>
                                    <div class="wishlist">
                                        <i class="fa fa-heart-o mr-25"></i>
                                        Wishlist
                                    </div>
                                    <div class="cart">
                                        <i class="feather icon-shopping-cart mr-25"></i>
                                        <span class="add-to-cart">Add
                                            to cart</span> <a href="app-ecommerce-checkout.html"
                                            class="view-in-cart d-none">View
                                            In Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card ecommerce-card">
                            <div class="card-content">
                                <div class="item-img text-center">
                                    <a href="app-ecommerce-details.html">
                                        <img class="img-fluid" src="../../../app-assets/images/pages/eCommerce/66.jpg"
                                            alt="img-placeholder">
                                    </a>
                                </div>
                                <div class="card-body">
                                    <div class="item-wrapper">
                                        <div class="item-rating">
                                            <div class="badge badge-primary badge-md">
                                                <span>4</span>
                                                <i class="feather icon-star"></i>
                                            </div>
                                        </div>
                                        <div class="item-cost">
                                            <h6 class="item-price">
                                                $429.99
                                            </h6>
                                        </div>
                                    </div>
                                    <div class="item-name">
                                        <a href="app-ecommerce-details.html">
                                            Sharp - 50" Class
                                            (49.5"
                                            Diag.) - LED - 1080p
                                            -
                                            Black
                                        </a>
                                        <p class="item-company">
                                            By
                                            <span class="company-name">Sharp</span>
                                        </p>
                                    </div>
                                    <div>
                                        <p class="item-description">
                                            Only at Best Buy
                                            Sharp
                                            LC-50LB481U LED Roku
                                            TV:
                                            Get a TV that enjoys
                                            full Internet
                                            connectivity with
                                            this
                                            Sharp 49.5-inch
                                            smart
                                            TV. Full HD
                                            resolutions
                                            give you plenty of
                                            detail whether
                                            you're
                                            streaming content
                                            from the Internet
                                            using
                                            the integrated Roku
                                            player or watching
                                            via
                                            cable.
                                        </p>
                                    </div>
                                </div>
                                <div class="item-options text-center">
                                    <div class="item-wrapper">
                                        <div class="item-rating">
                                            <div class="badge badge-primary badge-md">
                                                <span>4</span>
                                                <i class="feather icon-star"></i>
                                            </div>
                                        </div>
                                        <div class="item-cost">
                                            <h6 class="item-price">
                                                $429.99
                                            </h6>
                                            <p class="shipping">
                                                <i class="feather icon-shopping-cart"></i>
                                                Free Shipping
                                            </p>
                                        </div>
                                    </div>
                                    <div class="wishlist">
                                        <i class="fa fa-heart-o mr-25"></i>
                                        Wishlist
                                    </div>
                                    <div class="cart">
                                        <i class="feather icon-shopping-cart mr-25"></i>
                                        <span class="add-to-cart">Add
                                            to cart</span> <a href="app-ecommerce-checkout.html"
                                            class="view-in-cart d-none">View
                                            In Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card ecommerce-card">
                            <div class="card-content">
                                <div class="item-img text-center">
                                    <a href="app-ecommerce-details.html">
                                        <img class="img-fluid" src="../../../app-assets/images/pages/eCommerce/77.jpg"
                                            alt="img-placeholder">
                                    </a>
                                </div>
                                <div class="card-body">
                                    <div class="item-wrapper">
                                        <div class="item-rating">
                                            <div class="badge badge-primary badge-md">
                                                <span>4</span>
                                                <i class="feather icon-star"></i>
                                            </div>
                                        </div>
                                        <div class="item-cost">
                                            <h6 class="item-price">
                                                $129
                                            </h6>
                                        </div>
                                    </div>
                                    <div class="item-name">
                                        <a href="app-ecommerce-details.html">
                                            Google - Google Home
                                            -
                                            White/Slate fabric
                                        </a>
                                        <p class="item-company">
                                            By
                                            <span class="company-name">Google</span>
                                        </p>
                                    </div>
                                    <div>
                                        <p class="item-description">
                                            Simplify your
                                            everyday
                                            life with the Google
                                            Home, a
                                            voice-activated
                                            speaker powered by
                                            the
                                            Google Assistant.
                                            Use voice commands
                                            to
                                            enjoy music, get
                                            answers
                                            from Google and
                                            manage
                                            everyday tasks.
                                            Google
                                            Home is
                                            compatible with
                                            Android
                                            and iOS operating
                                            systems, and can
                                            control
                                            compatible smart
                                            devices
                                            such as
                                            Chromecast or Nest.
                                        </p>
                                    </div>
                                </div>
                                <div class="item-options text-center">
                                    <div class="item-wrapper">
                                        <div class="item-rating">
                                            <div class="badge badge-primary badge-md">
                                                <span>4</span>
                                                <i class="feather icon-star"></i>
                                            </div>
                                        </div>
                                        <div class="item-cost">
                                            <h6 class="item-price">
                                                $129
                                            </h6>
                                            <p class="shipping">
                                                <i class="feather icon-shopping-cart"></i>
                                                Free Shipping
                                            </p>
                                        </div>
                                    </div>
                                    <div class="wishlist">
                                        <i class="fa fa-heart-o mr-25"></i>
                                        Wishlist
                                    </div>
                                    <div class="cart">
                                        <i class="feather icon-shopping-cart mr-25"></i>
                                        <span class="add-to-cart">Add
                                            to cart</span> <a href="app-ecommerce-checkout.html"
                                            class="view-in-cart d-none">View
                                            In Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card ecommerce-card">
                            <div class="card-content">
                                <div class="item-img text-center">
                                    <a href="app-ecommerce-details.html">
                                        <img class="img-fluid" src="../../../app-assets/images/pages/eCommerce/88.jpg"
                                            alt="img-placeholder">
                                    </a>
                                </div>
                                <div class="card-body">
                                    <div class="item-wrapper">
                                        <div class="item-rating">
                                            <div class="badge badge-primary badge-md">
                                                <span>4</span>
                                                <i class="feather icon-star"></i>
                                            </div>
                                        </div>
                                        <div class="item-cost">
                                            <h6 class="item-price">
                                                $29.99
                                            </h6>
                                        </div>
                                    </div>
                                    <div class="item-name">
                                        <a href="app-ecommerce-details.html">
                                            Apple - EarPods???
                                            with
                                            Remote and Mic -
                                            White
                                        </a>
                                        <p class="item-company">
                                            By
                                            <span class="company-name">Apple</span>
                                        </p>
                                    </div>
                                    <div>
                                        <p class="item-description">
                                            Apple EarPods are
                                            white
                                            in-ear headphones
                                            included with music
                                            players and
                                            smartphones
                                            designed and
                                            marketed
                                            by Apple Inc. They
                                            are
                                            designed to fit the
                                            ear
                                            while retaining a
                                            new
                                            design pushed by
                                            Apple
                                            alongside the
                                            iPod and iPod Touch
                                            products, with which
                                            they were sold
                                            together.
                                        </p>
                                    </div>
                                </div>
                                <div class="item-options text-center">
                                    <div class="item-wrapper">
                                        <div class="item-rating">
                                            <div class="badge badge-primary badge-md">
                                                <span>4</span>
                                                <i class="feather icon-star"></i>
                                            </div>
                                        </div>
                                        <div class="item-cost">
                                            <h6 class="item-price">
                                                $29.99
                                            </h6>
                                        </div>
                                    </div>
                                    <div class="wishlist">
                                        <i class="fa fa-heart-o mr-25"></i>
                                        Wishlist
                                    </div>
                                    <div class="cart">
                                        <i class="feather icon-shopping-cart mr-25"></i>
                                        <span class="add-to-cart">Add
                                            to cart</span> <a href="app-ecommerce-checkout.html"
                                            class="view-in-cart d-none">View
                                            In Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card ecommerce-card">
                            <div class="card-content">
                                <div class="item-img text-center">
                                    <a href="app-ecommerce-details.html">
                                        <img class="img-fluid" src="../../../app-assets/images/pages/eCommerce/99.jpg"
                                            alt="img-placeholder">
                                    </a>
                                </div>
                                <div class="card-body">
                                    <div class="item-wrapper">
                                        <div class="item-rating">
                                            <div class="badge badge-primary badge-md">
                                                <span>4</span>
                                                <i class="feather icon-star"></i>
                                            </div>
                                        </div>
                                        <div class="item-cost">
                                            <h6 class="item-price">
                                                $14.99
                                            </h6>
                                        </div>
                                    </div>
                                    <div class="item-name">
                                        <a href="app-ecommerce-details.html">
                                            Philips - hue A19
                                            Smart
                                            LED Light Bulb -
                                            White
                                            Only
                                        </a>
                                        <p class="item-company">
                                            By
                                            <span class="company-name">Philips</span>
                                        </p>
                                    </div>
                                    <div>
                                        <p class="item-description">
                                            Philips hue A19
                                            Smart
                                            LED Light Bulb: Get
                                            lighting that's as
                                            smart
                                            as you are. You can
                                            easily dim this
                                            light
                                            bulb and set timers
                                            and
                                            alarms using your
                                            smartphone or
                                            tablet.
                                            Plus, LED technology
                                            offers lasting
                                            illumination while
                                            using
                                            minimal energy.Get
                                            lighting that's as
                                            smart
                                            as you are.
                                        </p>
                                    </div>
                                </div>
                                <div class="item-options text-center">
                                    <div class="item-wrapper">
                                        <div class="item-rating">
                                            <div class="badge badge-primary badge-md">
                                                <span>4</span>
                                                <i class="feather icon-star"></i>
                                            </div>
                                        </div>
                                        <div class="item-cost">
                                            <h6 class="item-price">
                                                $14.99
                                            </h6>
                                        </div>
                                    </div>
                                    <div class="wishlist">
                                        <i class="fa fa-heart-o mr-25"></i>
                                        Wishlist
                                    </div>
                                    <div class="cart">
                                        <i class="feather icon-shopping-cart mr-25"></i>
                                        <span class="add-to-cart">Add
                                            to cart</span> <a href="app-ecommerce-checkout.html"
                                            class="view-in-cart d-none">View
                                            In Cart</a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Ecommerce Products Ends -->


                    <!-- Ecommerce Pagination Starts -->
                    <section id="ecommerce-pagination">
                        <div class="row">
                            <div class="col-sm-12">
                                <nav aria-label="Page navigation example">
                                    <ul class="pagination justify-content-center mt-2">
                                        <li class="page-item prev-item"><a class="page-link" href="#"></a></li>
                                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item" aria-current="page"><a class="page-link" href="#">4</a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">5</a></li>
                                        <li class="page-item"><a class="page-link" href="#">6</a></li>
                                        <li class="page-item"><a class="page-link" href="#">7</a></li>
                                        <li class="page-item next-item"><a class="page-link" href="#"></a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </section>
                    <!-- Ecommerce Pagination Ends -->

                </div>
            </div>
            <div class="sidebar-detached sidebar-left">
                <div class="sidebar">
                    <!-- Ecommerce Sidebar Starts -->
                    <div class="sidebar-shop" id="ecommerce-sidebar-toggler">

                        <div class="row">
                            <div class="col-sm-12">
                                <h6 class="filter-heading d-none d-lg-block">Filters</h6>
                            </div>
                        </div>
                        <span class="sidebar-close-icon d-block d-md-none">
                            <i class="feather icon-x"></i>
                        </span>
                        <div class="card">
                            <div class="card-body">


                                <!-- /Price Slider -->
                                <div class="price-slider">
                                    <div class="price-slider-title mt-1">
                                        <h6 class="filter-title mb-0">Slider</h6>
                                    </div>
                                    <div class="price-slider">
                                        <div class="price_slider_amount mb-2">
                                        </div>
                                        <div class="form-group">
                                            <div class="slider-sm my-1 range-slider" id="price-slider"></div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Price Range -->
                                <hr>
                                <!-- Categories Starts -->
                                <div id="product-categories">
                                    <div class="product-category-title">
                                        <h6 class="filter-title mb-1">Categories</h6>
                                    </div>
                                    <ul class="list-unstyled categories-list">
                                        <li>
                                            <span class="vs-radio-con vs-radio-primary py-25">
                                                <input type="radio" name="category-filter" value="false" checked>
                                                <span class="vs-radio">
                                                    <span class="vs-radio--border"></span>
                                                    <span class="vs-radio--circle"></span>
                                                </span>
                                                <span class="ml-50">Appliances</span>
                                            </span>
                                        </li>
                                        <li>
                                            <span class="vs-radio-con vs-radio-primary py-25">
                                                <input type="radio" name="category-filter" value="false">
                                                <span class="vs-radio">
                                                    <span class="vs-radio--border"></span>
                                                    <span class="vs-radio--circle"></span>
                                                </span>
                                                <span class="ml-50"> Audio</span>
                                            </span>
                                        </li>
                                        <li>
                                            <span class="vs-radio-con vs-radio-primary py-25">
                                                <input type="radio" name="category-filter" value="false">
                                                <span class="vs-radio">
                                                    <span class="vs-radio--border"></span>
                                                    <span class="vs-radio--circle"></span>
                                                </span>
                                                <span class="ml-50">Cameras & Camcorders</span>
                                            </span>
                                        </li>
                                        <li>
                                            <span class="vs-radio-con vs-radio-primary py-25">
                                                <input type="radio" name="category-filter" value="false">
                                                <span class="vs-radio">
                                                    <span class="vs-radio--border"></span>
                                                    <span class="vs-radio--circle"></span>
                                                </span>
                                                <span class="ml-50">Car Electronics & GPS</span>
                                            </span>
                                        </li>
                                        <li>
                                            <span class="vs-radio-con vs-radio-primary py-25">
                                                <input type="radio" name="category-filter" value="false">
                                                <span class="vs-radio">
                                                    <span class="vs-radio--border"></span>
                                                    <span class="vs-radio--circle"></span>
                                                </span>
                                                <span class="ml-50">Cell Phones</span>
                                            </span>
                                        </li>
                                        <li>
                                            <span class="vs-radio-con vs-radio-primary py-25">
                                                <input type="radio" name="category-filter" value="false">
                                                <span class="vs-radio">
                                                    <span class="vs-radio--border"></span>
                                                    <span class="vs-radio--circle"></span>
                                                </span>
                                                <span class="ml-50">Computers & Tablets</span>
                                            </span>
                                        </li>
                                        <li>
                                            <span class="vs-radio-con vs-radio-primary py-25">
                                                <input type="radio" name="category-filter" value="false">
                                                <span class="vs-radio">
                                                    <span class="vs-radio--border"></span>
                                                    <span class="vs-radio--circle"></span>
                                                </span>
                                                <span class="ml-50"> Health, Fitness & Beauty</span>
                                            </span>
                                        </li>
                                        <li>
                                            <span class="vs-radio-con vs-radio-primary py-25">
                                                <input type="radio" name="category-filter" value="false">
                                                <span class="vs-radio">
                                                    <span class="vs-radio--border"></span>
                                                    <span class="vs-radio--circle"></span>
                                                </span>
                                                <span class="ml-50">Office & School Supplies</span>
                                            </span>
                                        </li>
                                        <li>
                                            <span class="vs-radio-con vs-radio-primary py-25">
                                                <input type="radio" name="category-filter" value="false">
                                                <span class="vs-radio">
                                                    <span class="vs-radio--border"></span>
                                                    <span class="vs-radio--circle"></span>
                                                </span>
                                                <span class="ml-50">TV & Home Theater</span>
                                            </span>
                                        </li>
                                        <li>
                                            <span class="vs-radio-con vs-radio-primary py-25">
                                                <input type="radio" name="category-filter" value="false">
                                                <span class="vs-radio">
                                                    <span class="vs-radio--border"></span>
                                                    <span class="vs-radio--circle"></span>
                                                </span>
                                                <span class="ml-50">Video Games
                                                </span>
                                            </span>
                                        </li>

                                    </ul>
                                </div>
                                <!-- Categories Ends -->
                                <hr>
                                <!-- Brands -->
                                <div class="brands">
                                    <div class="brand-title mt-1 pb-1">
                                        <h6 class="filter-title mb-0">Brands</h6>
                                    </div>
                                    <div class="brand-list" id="brands">
                                        <ul class="list-unstyled">
                                            <li class="d-flex justify-content-between align-items-center py-25">
                                                <span class="vs-checkbox-con vs-checkbox-primary">
                                                    <input type="checkbox" value="false">
                                                    <span class="vs-checkbox">
                                                        <span class="vs-checkbox--check">
                                                            <i class="vs-icon feather icon-check"></i>
                                                        </span>
                                                    </span>
                                                    <span class="">Insignia???</span>
                                                </span>
                                                <span>746</span>
                                            </li>
                                            <li class="d-flex justify-content-between align-items-center py-25">
                                                <span class="vs-checkbox-con vs-checkbox-primary">
                                                    <input type="checkbox" value="false">
                                                    <span class="vs-checkbox">
                                                        <span class="vs-checkbox--check">
                                                            <i class="vs-icon feather icon-check"></i>
                                                        </span>
                                                    </span>
                                                    <span class="">
                                                        Samsung
                                                    </span>
                                                </span>
                                                <span>633</span>
                                            </li>
                                            <li class="d-flex justify-content-between align-items-center py-25">
                                                <span class="vs-checkbox-con vs-checkbox-primary">
                                                    <input type="checkbox" value="false">
                                                    <span class="vs-checkbox">
                                                        <span class="vs-checkbox--check">
                                                            <i class="vs-icon feather icon-check"></i>
                                                        </span>
                                                    </span>
                                                    <span class="">
                                                        Metra
                                                    </span>
                                                </span>
                                                <span>591</span>
                                            </li>
                                            <li class="d-flex justify-content-between align-items-center py-25">
                                                <span class="vs-checkbox-con vs-checkbox-primary">
                                                    <input type="checkbox" value="false">
                                                    <span class="vs-checkbox">
                                                        <span class="vs-checkbox--check">
                                                            <i class="vs-icon feather icon-check"></i>
                                                        </span>
                                                    </span>
                                                    <span class="">HP</span>
                                                </span>
                                                <span>530</span>
                                            </li>
                                            <li class="d-flex justify-content-between align-items-center py-25">
                                                <span class="vs-checkbox-con vs-checkbox-primary">
                                                    <input type="checkbox" value="false">
                                                    <span class="vs-checkbox">
                                                        <span class="vs-checkbox--check">
                                                            <i class="vs-icon feather icon-check"></i>
                                                        </span>
                                                    </span>
                                                    <span class="">Apple</span>
                                                </span>
                                                <span>442</span>
                                            </li>
                                            <li class="d-flex justify-content-between align-items-center py-25">
                                                <span class="vs-checkbox-con vs-checkbox-primary">
                                                    <input type="checkbox" value="false">
                                                    <span class="vs-checkbox">
                                                        <span class="vs-checkbox--check">
                                                            <i class="vs-icon feather icon-check"></i>
                                                        </span>
                                                    </span>
                                                    <span class="">GE</span>
                                                </span>
                                                <span>394</span>
                                            </li>
                                            <li class="d-flex justify-content-between align-items-center py-25">
                                                <span class="vs-checkbox-con vs-checkbox-primary">
                                                    <input type="checkbox" value="false">
                                                    <span class="vs-checkbox">
                                                        <span class="vs-checkbox--check">
                                                            <i class="vs-icon feather icon-check"></i>
                                                        </span>
                                                    </span>
                                                    <span class="">Sony</span>
                                                </span>
                                                <span>350</span>
                                            </li>
                                            <li class="d-flex justify-content-between align-items-center py-25">
                                                <span class="vs-checkbox-con vs-checkbox-primary">
                                                    <input type="checkbox" value="false">
                                                    <span class="vs-checkbox">
                                                        <span class="vs-checkbox--check">
                                                            <i class="vs-icon feather icon-check"></i>
                                                        </span>
                                                    </span>
                                                    <span class="">Incipio</span>
                                                </span>
                                                <span>320</span>
                                            </li>
                                            <li class="d-flex justify-content-between align-items-center py-25">
                                                <span class="vs-checkbox-con vs-checkbox-primary">
                                                    <input type="checkbox" value="false">
                                                    <span class="vs-checkbox">
                                                        <span class="vs-checkbox--check">
                                                            <i class="vs-icon feather icon-check"></i>
                                                        </span>
                                                    </span>
                                                    <span class="">KitchenAid</span>
                                                </span>
                                                <span>318</span>
                                            </li>
                                            <li class="d-flex justify-content-between align-items-center py-25">
                                                <span class="vs-checkbox-con vs-checkbox-primary">
                                                    <input type="checkbox" value="false">
                                                    <span class="vs-checkbox">
                                                        <span class="vs-checkbox--check">
                                                            <i class="vs-icon feather icon-check"></i>
                                                        </span>
                                                    </span>
                                                    <span class="">Whirlpool</span>
                                                </span>
                                                <span>298</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- /Brand -->
                                <hr>
                                <!-- Rating section starts -->
                                <div id="ratings">
                                    <div class="ratings-title mt-1 pb-75">
                                        <h6 class="filter-title mb-0">Ratings</h6>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <ul class="unstyled-list list-inline ratings-list mb-0">
                                            <li class="ratings-list-item"><i class="feather icon-star text-warning"></i>
                                            </li>
                                            <li class="ratings-list-item"><i class="feather icon-star text-warning"></i>
                                            </li>
                                            <li class="ratings-list-item"><i class="feather icon-star text-warning"></i>
                                            </li>
                                            <li class="ratings-list-item"><i class="feather icon-star text-warning"></i>
                                            </li>
                                            <li class="ratings-list-item"><i class="feather icon-star text-light"></i>
                                            </li>
                                            <li>& up</li>
                                        </ul>
                                        <div class="stars-received">(160)</div>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <ul class="unstyled-list list-inline ratings-list mb-0">
                                            <li class="ratings-list-item"><i class="feather icon-star text-warning"></i>
                                            </li>
                                            <li class="ratings-list-item"><i class="feather icon-star text-warning"></i>
                                            </li>
                                            <li class="ratings-list-item"><i class="feather icon-star text-warning"></i>
                                            </li>
                                            <li class="ratings-list-item"><i class="feather icon-star text-light"></i>
                                            </li>
                                            <li class="ratings-list-item"><i class="feather icon-star text-light"></i>
                                            </li>
                                            <li>& up</li>
                                        </ul>
                                        <div class="stars-received">(176)</div>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <ul class="unstyled-list list-inline ratings-list mb-0">
                                            <li class="ratings-list-item"><i class="feather icon-star text-warning"></i>
                                            </li>
                                            <li class="ratings-list-item"><i class="feather icon-star text-warning"></i>
                                            </li>
                                            <li class="ratings-list-item"><i class="feather icon-star text-light"></i>
                                            </li>
                                            <li class="ratings-list-item"><i class="feather icon-star text-light"></i>
                                            </li>
                                            <li class="ratings-list-item"><i class="feather icon-star text-light"></i>
                                            </li>
                                            <li>& up</li>
                                        </ul>
                                        <div class="stars-received">(291)</div>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <ul class="unstyled-list list-inline ratings-list mb-0 ">
                                            <li class="ratings-list-item"><i class="feather icon-star text-warning"></i>
                                            </li>
                                            <li class="ratings-list-item"><i class="feather icon-star text-light"></i>
                                            </li>
                                            <li class="ratings-list-item"><i class="feather icon-star text-light"></i>
                                            </li>
                                            <li class="ratings-list-item"><i class="feather icon-star text-light"></i>
                                            </li>
                                            <li class="ratings-list-item"><i class="feather icon-star text-light"></i>
                                            </li>
                                            <li>& up</li>
                                        </ul>
                                        <div class="stars-received">(190)</div>
                                    </div>
                                </div>
                                <!-- Rating section Ends -->
                                <hr>
                                <!-- Clear Filters Starts -->
                                <div id="clear-filters">
                                    <button class="btn btn-block btn-primary">CLEAR ALL FILTERS</button>
                                </div>
                                <!-- Clear Filters Ends -->

                            </div>
                        </div>
                    </div>
                    <!-- Ecommerce Sidebar Ends -->

                </div>
            </div>
        </div>
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    <footer class="footer footer-static footer-light navbar-shadow">
        <p class="clearfix blue-grey lighten-2 mb-0"><span
                class="float-md-left d-block d-md-inline-block mt-25">COPYRIGHT &copy; 2019<a
                    class="text-bold-800 grey darken-2" href="https://1.envato.market/pixinvent_portfolio"
                    target="_blank">Pixinvent,</a>All rights Reserved</span><span
                class="float-md-right d-none d-md-block">Hand-crafted & Made with<i
                    class="feather icon-heart pink"></i></span>
            <button class="btn btn-primary btn-icon scroll-top" type="button"><i
                    class="feather icon-arrow-up"></i></button>
        </p>
    </footer>
    <!-- END: Footer-->


    <!-- BEGIN: Vendor JS-->
    <script src="../../../app-assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="../../../app-assets/vendors/js/ui/jquery.sticky.js"></script>
    <script src="../../../app-assets/vendors/js/ui/prism.min.js"></script>
    <script src="../../../app-assets/vendors/js/extensions/wNumb.js"></script>
    <script src="../../../app-assets/vendors/js/extensions/nouislider.min.js"></script>
    <script src="../../../app-assets/vendors/js/forms/select/select2.full.min.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="../../../app-assets/js/core/app-menu.js"></script>
    <script src="../../../app-assets/js/core/app.js"></script>
    <script src="../../../app-assets/js/scripts/components.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="../../../app-assets/js/scripts/pages/app-ecommerce-shop.js"></script>
    <!-- END: Page JS-->

</body>
<!-- END: Body-->

</html><?php /**PATH C:\xampp\htdocs\dzautosql\resources\views/transport-vehicules.blade.php ENDPATH**/ ?>