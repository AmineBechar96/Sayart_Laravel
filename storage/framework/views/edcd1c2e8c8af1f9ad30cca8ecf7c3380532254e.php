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
    <title>Dashboard analytics - Vuexy - Bootstrap HTML admin template</title>
    <link rel="apple-touch-icon" href="../../../app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="../../../app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/charts/apexcharts.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/extensions/tether-theme-arrows.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/extensions/tether.min.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/extensions/shepherd-theme-default.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/colors.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/components.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/themes/dark-layout.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/themes/semi-dark-layout.css">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/core/menu/menu-types/horizontal-menu.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/core/colors/palette-gradient.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/pages/dashboard-analytics.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/pages/card-analytics.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/plugins/tour/tour.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="../../../assets/css/style.css">
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="horizontal-layout horizontal-menu 2-columns  navbar-floating footer-static  " data-open="hover"
    data-menu="horizontal-menu" data-col="2-columns">

    <!-- BEGIN: Header-->
    <nav class="header-navbar navbar-expand-lg navbar navbar-with-menu navbar-fixed navbar-shadow navbar-brand-center">
        <div class="navbar-header d-xl-block d-none">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item"><a class="navbar-brand"
                        href="../../../html/ltr/horizontal-menu-template/index.html">
                        <div class="brand-logo"></div>
                    </a></li>
            </ul>
        </div>
        <div class="navbar-wrapper">
            <div class="navbar-container content">
                <div class="navbar-collapse" id="navbar-mobile">
                    <div class="mr-auto float-left bookmark-wrapper d-flex align-items-center">
                        <ul class="nav navbar-nav">
                            <li class="nav-item mobile-menu d-xl-none mr-auto"><a
                                    class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i
                                        class="ficon feather icon-menu"></i></a></li>
                        </ul>
                        <ul class="nav navbar-nav bookmark-icons">
                            <li class="nav-item d-none d-lg-block"><a class="nav-link" href="app-todo.html"
                                    data-toggle="tooltip" data-placement="top" title="Todo"><i
                                        class="ficon feather icon-check-square"></i></a></li>
                            <li class="nav-item d-none d-lg-block"><a class="nav-link" href="app-chat.html"
                                    data-toggle="tooltip" data-placement="top" title="Chat"><i
                                        class="ficon feather icon-message-square"></i></a></li>
                            <li class="nav-item d-none d-lg-block"><a class="nav-link" href="app-email.html"
                                    data-toggle="tooltip" data-placement="top" title="Email"><i
                                        class="ficon feather icon-mail"></i></a></li>
                            <li class="nav-item d-none d-lg-block"><a class="nav-link" href="app-calender.html"
                                    data-toggle="tooltip" data-placement="top" title="Calendar"><i
                                        class="ficon feather icon-calendar"></i></a></li>
                        </ul>
                        <ul class="nav navbar-nav">
                            <li class="nav-item d-none d-lg-block"><a class="nav-link bookmark-star"><i
                                        class="ficon feather icon-star warning"></i></a>
                                <div class="bookmark-input search-input">
                                    <div class="bookmark-input-icon"><i class="feather icon-search primary"></i></div>
                                    <input class="form-control input" type="text" placeholder="Explore Vuexy..."
                                        tabindex="0" data-search="template-list">
                                    <ul class="search-list search-list-bookmark"></ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <ul class="nav navbar-nav float-right">
                        <li class="dropdown dropdown-language nav-item"><a class="dropdown-toggle nav-link"
                                id="dropdown-flag" href="#" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false"><i class="flag-icon flag-icon-us"></i><span
                                    class="selected-language">English</span></a>
                            <div class="dropdown-menu" aria-labelledby="dropdown-flag"><a class="dropdown-item" href="#"
                                    data-language="en"><i class="flag-icon flag-icon-us"></i> English</a><a
                                    class="dropdown-item" href="#" data-language="fr"><i
                                        class="flag-icon flag-icon-fr"></i> French</a><a class="dropdown-item" href="#"
                                    data-language="de"><i class="flag-icon flag-icon-de"></i> German</a><a
                                    class="dropdown-item" href="#" data-language="pt"><i
                                        class="flag-icon flag-icon-pt"></i> Portuguese</a></div>
                        </li>
                        <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-expand"><i
                                    class="ficon feather icon-maximize"></i></a></li>
                        <li class="nav-item nav-search"><a class="nav-link nav-link-search"><i
                                    class="ficon feather icon-search"></i></a>
                            <div class="search-input">
                                <div class="search-input-icon"><i class="feather icon-search primary"></i></div>
                                <input class="input" type="text" placeholder="Explore Vuexy..." tabindex="-1"
                                    data-search="template-list">
                                <div class="search-input-close"><i class="feather icon-x"></i></div>
                                <ul class="search-list search-list-main"></ul>
                            </div>
                        </li>
                        <li class="dropdown dropdown-notification nav-item"><a class="nav-link nav-link-label" href="#"
                                data-toggle="dropdown"><i class="ficon feather icon-bell"></i><span
                                    class="badge badge-pill badge-primary badge-up">5</span></a>
                            <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                                <li class="dropdown-menu-header">
                                    <div class="dropdown-header m-0 p-2">
                                        <h3 class="white">5 New</h3><span class="notification-title">App
                                            Notifications</span>
                                    </div>
                                </li>
                                <li class="scrollable-container media-list"><a class="d-flex justify-content-between"
                                        href="javascript:void(0)">
                                        <div class="media d-flex align-items-start">
                                            <div class="media-left"><i
                                                    class="feather icon-plus-square font-medium-5 primary"></i></div>
                                            <div class="media-body">
                                                <h6 class="primary media-heading">You have new order!</h6><small
                                                    class="notification-text"> Are your going to meet me
                                                    tonight?</small>
                                            </div><small>
                                                <time class="media-meta" datetime="2015-06-11T18:29:20+08:00">9 hours
                                                    ago</time></small>
                                        </div>
                                    </a><a class="d-flex justify-content-between" href="javascript:void(0)">
                                        <div class="media d-flex align-items-start">
                                            <div class="media-left"><i
                                                    class="feather icon-download-cloud font-medium-5 success"></i></div>
                                            <div class="media-body">
                                                <h6 class="success media-heading red darken-1">99% Server load</h6>
                                                <small class="notification-text">You got new order of goods.</small>
                                            </div><small>
                                                <time class="media-meta" datetime="2015-06-11T18:29:20+08:00">5 hour
                                                    ago</time></small>
                                        </div>
                                    </a><a class="d-flex justify-content-between" href="javascript:void(0)">
                                        <div class="media d-flex align-items-start">
                                            <div class="media-left"><i
                                                    class="feather icon-alert-triangle font-medium-5 danger"></i></div>
                                            <div class="media-body">
                                                <h6 class="danger media-heading yellow darken-3">Warning notifixation
                                                </h6><small class="notification-text">Server have 99% CPU usage.</small>
                                            </div><small>
                                                <time class="media-meta"
                                                    datetime="2015-06-11T18:29:20+08:00">Today</time></small>
                                        </div>
                                    </a><a class="d-flex justify-content-between" href="javascript:void(0)">
                                        <div class="media d-flex align-items-start">
                                            <div class="media-left"><i
                                                    class="feather icon-check-circle font-medium-5 info"></i></div>
                                            <div class="media-body">
                                                <h6 class="info media-heading">Complete the task</h6><small
                                                    class="notification-text">Cake sesame snaps cupcake</small>
                                            </div><small>
                                                <time class="media-meta" datetime="2015-06-11T18:29:20+08:00">Last
                                                    week</time></small>
                                        </div>
                                    </a><a class="d-flex justify-content-between" href="javascript:void(0)">
                                        <div class="media d-flex align-items-start">
                                            <div class="media-left"><i
                                                    class="feather icon-file font-medium-5 warning"></i></div>
                                            <div class="media-body">
                                                <h6 class="warning media-heading">Generate monthly report</h6><small
                                                    class="notification-text">Chocolate cake oat cake tiramisu
                                                    marzipan</small>
                                            </div><small>
                                                <time class="media-meta" datetime="2015-06-11T18:29:20+08:00">Last
                                                    month</time></small>
                                        </div>
                                    </a></li>
                                <li class="dropdown-menu-footer"><a class="dropdown-item p-1 text-center"
                                        href="javascript:void(0)">Read all notifications</a></li>
                            </ul>
                        </li>
                        <li class="dropdown dropdown-user nav-item"><a
                                class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                                <div class="user-nav d-sm-flex d-none"><span class="user-name text-bold-600">John
                                        Doe</span><span class="user-status">Available</span></div><span><img
                                        class="round" src="../../../app-assets/images/portrait/small/avatar-s-11.jpg"
                                        alt="avatar" height="40" width="40"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item"
                                    href="page-user-profile.html"><i class="feather icon-user"></i> Edit Profile</a><a
                                    class="dropdown-item" href="app-email.html"><i class="feather icon-mail"></i> My
                                    Inbox</a><a class="dropdown-item" href="app-todo.html"><i
                                        class="feather icon-check-square"></i> Task</a><a class="dropdown-item"
                                    href="app-chat.html"><i class="feather icon-message-square"></i> Chats</a>
                                <div class="dropdown-divider"></div><a class="dropdown-item" href="auth-login.html"><i
                                        class="feather icon-power"></i> Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <ul class="main-search-list-defaultlist d-none">
        <li class="d-flex align-items-center"><a class="pb-25" href="#">
                <h6 class="text-primary mb-0">Files</h6>
            </a></li>
        <li class="auto-suggestion d-flex align-items-center cursor-pointer"><a
                class="d-flex align-items-center justify-content-between w-100" href="#">
                <div class="d-flex">
                    <div class="mr-50"><img src="../../../app-assets/images/icons/xls.png" alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">Two new item submitted</p><small class="text-muted">Marketing
                            Manager</small>
                    </div>
                </div><small class="search-data-size mr-50 text-muted">&apos;17kb</small>
            </a></li>
        <li class="auto-suggestion d-flex align-items-center cursor-pointer"><a
                class="d-flex align-items-center justify-content-between w-100" href="#">
                <div class="d-flex">
                    <div class="mr-50"><img src="../../../app-assets/images/icons/jpg.png" alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">52 JPG file Generated</p><small class="text-muted">FontEnd
                            Developer</small>
                    </div>
                </div><small class="search-data-size mr-50 text-muted">&apos;11kb</small>
            </a></li>
        <li class="auto-suggestion d-flex align-items-center cursor-pointer"><a
                class="d-flex align-items-center justify-content-between w-100" href="#">
                <div class="d-flex">
                    <div class="mr-50"><img src="../../../app-assets/images/icons/pdf.png" alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">25 PDF File Uploaded</p><small class="text-muted">Digital
                            Marketing Manager</small>
                    </div>
                </div><small class="search-data-size mr-50 text-muted">&apos;150kb</small>
            </a></li>
        <li class="auto-suggestion d-flex align-items-center cursor-pointer"><a
                class="d-flex align-items-center justify-content-between w-100" href="#">
                <div class="d-flex">
                    <div class="mr-50"><img src="../../../app-assets/images/icons/doc.png" alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">Anna_Strong</p><small class="text-muted">Web Designer</small>
                    </div>
                </div><small class="search-data-size mr-50 text-muted">&apos;256kb</small>
            </a></li>
        <li class="d-flex align-items-center"><a class="pb-25" href="#">
                <h6 class="text-primary mb-0">Members</h6>
            </a></li>
        <li class="auto-suggestion d-flex align-items-center cursor-pointer"><a
                class="d-flex align-items-center justify-content-between py-50 w-100" href="#">
                <div class="d-flex align-items-center">
                    <div class="avatar mr-50"><img src="../../../app-assets/images/portrait/small/avatar-s-8.jpg"
                            alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">John Doe</p><small class="text-muted">UI designer</small>
                    </div>
                </div>
            </a></li>
        <li class="auto-suggestion d-flex align-items-center cursor-pointer"><a
                class="d-flex align-items-center justify-content-between py-50 w-100" href="#">
                <div class="d-flex align-items-center">
                    <div class="avatar mr-50"><img src="../../../app-assets/images/portrait/small/avatar-s-1.jpg"
                            alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">Michal Clark</p><small class="text-muted">FontEnd
                            Developer</small>
                    </div>
                </div>
            </a></li>
        <li class="auto-suggestion d-flex align-items-center cursor-pointer"><a
                class="d-flex align-items-center justify-content-between py-50 w-100" href="#">
                <div class="d-flex align-items-center">
                    <div class="avatar mr-50"><img src="../../../app-assets/images/portrait/small/avatar-s-14.jpg"
                            alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">Milena Gibson</p><small class="text-muted">Digital Marketing
                            Manager</small>
                    </div>
                </div>
            </a></li>
        <li class="auto-suggestion d-flex align-items-center cursor-pointer"><a
                class="d-flex align-items-center justify-content-between py-50 w-100" href="#">
                <div class="d-flex align-items-center">
                    <div class="avatar mr-50"><img src="../../../app-assets/images/portrait/small/avatar-s-6.jpg"
                            alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">Anna Strong</p><small class="text-muted">Web Designer</small>
                    </div>
                </div>
            </a></li>
    </ul>
    <ul class="main-search-list-defaultlist-other-list d-none">
        <li class="auto-suggestion d-flex align-items-center justify-content-between cursor-pointer"><a
                class="d-flex align-items-center justify-content-between w-100 py-50">
                <div class="d-flex justify-content-start"><span class="mr-75 feather icon-alert-circle"></span><span>No
                        results found.</span></div>
            </a></li>
    </ul>
    <!-- END: Header-->


    <!-- BEGIN: Main Menu-->
    <div class="horizontal-menu-wrapper">
        <div class="header-navbar navbar-expand-sm navbar navbar-horizontal floating-nav navbar-light navbar-without-dd-arrow navbar-shadow menu-border"
            role="navigation" data-menu="menu-wrapper">
            <div class="navbar-header">
                <ul class="nav navbar-nav flex-row">
                    <li class="nav-item mr-auto"><a class="navbar-brand"
                            href="../../../html/ltr/horizontal-menu-template/index.html">
                            <div class="brand-logo"></div>
                            <h2 class="brand-text mb-0">Vuexy</h2>
                        </a></li>
                    <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i
                                class="feather icon-x d-block d-xl-none font-medium-4 primary toggle-icon"></i><i
                                class="toggle-icon feather icon-disc font-medium-4 d-none d-xl-block collapse-toggle-icon primary"
                                data-ticon="icon-disc"></i></a></li>
                </ul>
            </div>
            <!-- Horizontal menu content-->
            <div class="navbar-container main-menu-content" data-menu="menu-container">
                <!-- include ../../../includes/mixins-->
                <ul class="nav navbar-nav" id="main-menu-navigation" data-menu="menu-navigation">
                    <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link"
                            href="index.html" data-toggle="dropdown"><i class="feather icon-home"></i><span
                                data-i18n="Dashboard">Dashboard</span></a>
                        <ul class="dropdown-menu">
                            <li class="active" data-menu=""><a class="dropdown-item" href="dashboard-analytics.html"
                                    data-toggle="dropdown" data-i18n="Analytics"><i
                                        class="feather icon-activity"></i>Analytics</a>
                            </li>
                            <li data-menu=""><a class="dropdown-item" href="dashboard-ecommerce.html"
                                    data-toggle="dropdown" data-i18n="eCommerce"><i
                                        class="feather icon-shopping-cart"></i>eCommerce</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link" href="#"
                            data-toggle="dropdown"><i class="feather icon-package"></i><span
                                data-i18n="Apps">Apps</span></a>
                        <ul class="dropdown-menu">
                            <li data-menu=""><a class="dropdown-item" href="app-email.html" data-toggle="dropdown"
                                    data-i18n="Email"><i class="feather icon-mail"></i>Email</a>
                            </li>
                            <li data-menu=""><a class="dropdown-item" href="app-chat.html" data-toggle="dropdown"
                                    data-i18n="Chat"><i class="feather icon-message-square"></i>Chat</a>
                            </li>
                            <li data-menu=""><a class="dropdown-item" href="app-todo.html" data-toggle="dropdown"
                                    data-i18n="Todo"><i class="feather icon-check-square"></i>Todo</a>
                            </li>
                            <li data-menu=""><a class="dropdown-item" href="app-calender.html" data-toggle="dropdown"
                                    data-i18n="Calender"><i class="feather icon-calendar"></i>Calender</a>
                            </li>
                            <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a
                                    class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown"
                                    data-i18n="Ecommerce"><i class="feather icon-shopping-cart"></i>Ecommerce</a>
                                <ul class="dropdown-menu">
                                    <li data-menu=""><a class="dropdown-item" href="app-ecommerce-shop.html"
                                            data-toggle="dropdown" data-i18n="Shop"><i
                                                class="feather icon-circle"></i>Shop</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="app-ecommerce-details.html"
                                            data-toggle="dropdown" data-i18n="Details"><i
                                                class="feather icon-circle"></i>Details</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="app-ecommerce-wishlist.html"
                                            data-toggle="dropdown" data-i18n="Wish List"><i
                                                class="feather icon-circle"></i>Wish List</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="app-ecommerce-checkout.html"
                                            data-toggle="dropdown" data-i18n="Checkout"><i
                                                class="feather icon-circle"></i>Checkout</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a
                                    class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown"
                                    data-i18n="User"><i class="feather icon-user"></i>User</a>
                                <ul class="dropdown-menu">
                                    <li data-menu=""><a class="dropdown-item" href="app-user-list.html"
                                            data-toggle="dropdown" data-i18n="List"><i
                                                class="feather icon-circle"></i>List</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="app-user-view.html"
                                            data-toggle="dropdown" data-i18n="View"><i
                                                class="feather icon-circle"></i>View</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="app-user-edit.html"
                                            data-toggle="dropdown" data-i18n="Edit"><i
                                                class="feather icon-circle"></i>Edit</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link" href="#"
                            data-toggle="dropdown"><i class="feather icon-layers"></i><span data-i18n="UI Elements">UI
                                Elements</span></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a
                                    class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown"
                                    data-i18n="Data List"><i class="feather icon-list"></i>Data List</a>
                                <ul class="dropdown-menu">
                                    <li data-menu=""><a class="dropdown-item" href="data-list-view.html"
                                            data-toggle="dropdown" data-i18n="List View"><i
                                                class="feather icon-circle"></i>List View</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="data-thumb-view.html"
                                            data-toggle="dropdown" data-i18n="Thumb View"><i
                                                class="feather icon-circle"></i>Thumb View</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a
                                    class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown"
                                    data-i18n="Content"><i class="feather icon-layout"></i>Content</a>
                                <ul class="dropdown-menu">
                                    <li data-menu=""><a class="dropdown-item" href="content-grid.html"
                                            data-toggle="dropdown" data-i18n="Grid"><i
                                                class="feather icon-circle"></i>Grid</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="content-typography.html"
                                            data-toggle="dropdown" data-i18n="Typography"><i
                                                class="feather icon-circle"></i>Typography</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="content-text-utilities.html"
                                            data-toggle="dropdown" data-i18n="Text Utilities"><i
                                                class="feather icon-circle"></i>Text Utilities</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="content-syntax-highlighter.html"
                                            data-toggle="dropdown" data-i18n="Syntax Highlighter"><i
                                                class="feather icon-circle"></i>Syntax Highlighter</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="content-helper-classes.html"
                                            data-toggle="dropdown" data-i18n="Helper Classes"><i
                                                class="feather icon-circle"></i>Helper Classes</a>
                                    </li>
                                </ul>
                            </li>
                            <li data-menu=""><a class="dropdown-item" href="colors.html" data-toggle="dropdown"
                                    data-i18n="Colors"><i class="feather icon-droplet"></i>Colors</a>
                            </li>
                            <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a
                                    class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown"
                                    data-i18n="Cards"><i class="feather icon-credit-card"></i>Cards</a>
                                <ul class="dropdown-menu">
                                    <li data-menu=""><a class="dropdown-item" href="card-basic.html"
                                            data-toggle="dropdown" data-i18n="Basic"><i
                                                class="feather icon-circle"></i>Basic</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="card-advance.html"
                                            data-toggle="dropdown" data-i18n="Advance"><i
                                                class="feather icon-circle"></i>Advance</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="card-statistics.html"
                                            data-toggle="dropdown" data-i18n="Statistics"><i
                                                class="feather icon-circle"></i>Statistics</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="card-analytics.html"
                                            data-toggle="dropdown" data-i18n="Analytics"><i
                                                class="feather icon-circle"></i>Analytics</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="card-actions.html"
                                            data-toggle="dropdown" data-i18n="Card Actions"><i
                                                class="feather icon-circle"></i>Card Actions</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a
                                    class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown"
                                    data-i18n="Icons"><i class="feather icon-eye"></i>Icons</a>
                                <ul class="dropdown-menu">
                                    <li data-menu=""><a class="dropdown-item" href="icons-feather.html"
                                            data-toggle="dropdown" data-i18n="Feather"><i
                                                class="feather icon-circle"></i>Feather</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="icons-font-awesome.html"
                                            data-toggle="dropdown" data-i18n="Font Awesome"><i
                                                class="feather icon-circle"></i>Font Awesome</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a
                                    class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown"
                                    data-i18n="Components"><i class="feather icon-briefcase"></i>Components</a>
                                <ul class="dropdown-menu">
                                    <li data-menu=""><a class="dropdown-item" href="component-alerts.html"
                                            data-toggle="dropdown" data-i18n="Alerts"><i
                                                class="feather icon-circle"></i>Alerts</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="component-buttons-basic.html"
                                            data-toggle="dropdown" data-i18n="Buttons"><i
                                                class="feather icon-circle"></i>Buttons</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="component-breadcrumbs.html"
                                            data-toggle="dropdown" data-i18n="Breadcrumbs"><i
                                                class="feather icon-circle"></i>Breadcrumbs</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="component-carousel.html"
                                            data-toggle="dropdown" data-i18n="Carousel"><i
                                                class="feather icon-circle"></i>Carousel</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="component-collapse.html"
                                            data-toggle="dropdown" data-i18n="Collapse"><i
                                                class="feather icon-circle"></i>Collapse</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="component-dropdowns.html"
                                            data-toggle="dropdown" data-i18n="Dropdowns"><i
                                                class="feather icon-circle"></i>Dropdowns</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="component-list-group.html"
                                            data-toggle="dropdown" data-i18n="List Group"><i
                                                class="feather icon-circle"></i>List Group</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="component-modals.html"
                                            data-toggle="dropdown" data-i18n="Modals"><i
                                                class="feather icon-circle"></i>Modals</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="component-pagination.html"
                                            data-toggle="dropdown" data-i18n="Pagination"><i
                                                class="feather icon-circle"></i>Pagination</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="component-navs-component.html"
                                            data-toggle="dropdown" data-i18n="Navs Component"><i
                                                class="feather icon-circle"></i>Navs Component</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="component-navbar.html"
                                            data-toggle="dropdown" data-i18n="Navbar"><i
                                                class="feather icon-circle"></i>Navbar</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="component-tabs-component.html"
                                            data-toggle="dropdown" data-i18n="Tabs Component"><i
                                                class="feather icon-circle"></i>Tabs Component</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="component-pills-component.html"
                                            data-toggle="dropdown" data-i18n="Pills Component"><i
                                                class="feather icon-circle"></i>Pills Component</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="component-tooltips.html"
                                            data-toggle="dropdown" data-i18n="Tooltips"><i
                                                class="feather icon-circle"></i>Tooltips</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="component-popovers.html"
                                            data-toggle="dropdown" data-i18n="Popovers"><i
                                                class="feather icon-circle"></i>Popovers</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="component-badges.html"
                                            data-toggle="dropdown" data-i18n="Badges"><i
                                                class="feather icon-circle"></i>Badges</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="component-pill-badges.html"
                                            data-toggle="dropdown" data-i18n="Pill Badges"><i
                                                class="feather icon-circle"></i>Pill Badges</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="component-progress.html"
                                            data-toggle="dropdown" data-i18n="Progress"><i
                                                class="feather icon-circle"></i>Progress</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="component-media-objects.html"
                                            data-toggle="dropdown" data-i18n=""><i class="feather icon-circle"></i>Media
                                            Objects</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="component-spinner.html"
                                            data-toggle="dropdown" data-i18n="Spinner"><i
                                                class="feather icon-circle"></i>Spinner</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="component-bs-toast.html"
                                            data-toggle="dropdown" data-i18n="Toasts"><i
                                                class="feather icon-circle"></i>Toasts</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a
                                    class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown"
                                    data-i18n="Extra Components"><i class="feather icon-box"></i>Extra Components</a>
                                <ul class="dropdown-menu">
                                    <li data-menu=""><a class="dropdown-item" href="ex-component-avatar.html"
                                            data-toggle="dropdown" data-i18n="Avatar"><i
                                                class="feather icon-circle"></i>Avatar</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="ex-component-chips.html"
                                            data-toggle="dropdown" data-i18n="Chips"><i
                                                class="feather icon-circle"></i>Chips</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="ex-component-divider.html"
                                            data-toggle="dropdown" data-i18n="Divider"><i
                                                class="feather icon-circle"></i>Divider</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a
                                    class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown"
                                    data-i18n="Extensions"><i class="feather icon-box"></i>Extensions</a>
                                <ul class="dropdown-menu">
                                    <li data-menu=""><a class="dropdown-item" href="ext-component-sweet-alerts.html"
                                            data-toggle="dropdown" data-i18n="Sweet Alert"><i
                                                class="feather icon-circle"></i>Sweet Alert</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="ext-component-toastr.html"
                                            data-toggle="dropdown" data-i18n="Toastr"><i
                                                class="feather icon-circle"></i>Toastr</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="ext-component-noui-slider.html"
                                            data-toggle="dropdown" data-i18n="NoUi Slider"><i
                                                class="feather icon-circle"></i>NoUi Slider</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="ext-component-file-uploader.html"
                                            data-toggle="dropdown" data-i18n="File Uploader"><i
                                                class="feather icon-circle"></i>File Uploader</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="ext-component-quill-editor.html"
                                            data-toggle="dropdown" data-i18n="Quill Editor"><i
                                                class="feather icon-circle"></i>Quill Editor</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="ext-component-drag-drop.html"
                                            data-toggle="dropdown" data-i18n="Drag &amp; Drop"><i
                                                class="feather icon-circle"></i>Drag &amp; Drop</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="ext-component-tour.html"
                                            data-toggle="dropdown" data-i18n="Tour"><i
                                                class="feather icon-circle"></i>Tour</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="ext-component-clipboard.html"
                                            data-toggle="dropdown" data-i18n="Clipboard"><i
                                                class="feather icon-circle"></i>Clipboard</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="ext-component-plyr.html"
                                            data-toggle="dropdown" data-i18n="Media Player"><i
                                                class="feather icon-circle"></i>Media Player</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="ext-component-context-menu.html"
                                            data-toggle="dropdown" data-i18n="Context Menu"><i
                                                class="feather icon-circle"></i>Context Menu</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="ext-component-swiper.html"
                                            data-toggle="dropdown" data-i18n="swiper"><i
                                                class="feather icon-smartphone"></i>swiper</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="ext-component-i18n.html"
                                            data-toggle="dropdown" data-i18n="l18n"><i
                                                class="feather icon-circle"></i>l18n</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link" href="#"
                            data-toggle="dropdown"><i class="feather icon-edit-2"></i><span
                                data-i18n="Forms &amp; Tables">Forms &amp; Tables</span></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a
                                    class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown"
                                    data-i18n="Form Elements"><i class="feather icon-copy"></i>Form Elements</a>
                                <ul class="dropdown-menu">
                                    <li data-menu=""><a class="dropdown-item" href="form-select.html"
                                            data-toggle="dropdown" data-i18n="Select"><i
                                                class="feather icon-circle"></i>Select</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="form-switch.html"
                                            data-toggle="dropdown" data-i18n="Switch"><i
                                                class="feather icon-circle"></i>Switch</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="form-checkbox.html"
                                            data-toggle="dropdown" data-i18n="Checkbox"><i
                                                class="feather icon-circle"></i>Checkbox</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="form-radio.html"
                                            data-toggle="dropdown" data-i18n="Radio"><i
                                                class="feather icon-circle"></i>Radio</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="form-inputs.html"
                                            data-toggle="dropdown" data-i18n="Input"><i
                                                class="feather icon-circle"></i>Input</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="form-input-groups.html"
                                            data-toggle="dropdown" data-i18n="Input Groups"><i
                                                class="feather icon-circle"></i>Input Groups</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="form-number-input.html"
                                            data-toggle="dropdown" data-i18n="Number Input"><i
                                                class="feather icon-circle"></i>Number Input</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="form-textarea.html"
                                            data-toggle="dropdown" data-i18n="Textarea"><i
                                                class="feather icon-circle"></i>Textarea</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="form-date-time-picker.html"
                                            data-toggle="dropdown" data-i18n="Date &amp; Time Picker"><i
                                                class="feather icon-circle"></i>Date &amp; Time Picker</a>
                                    </li>
                                </ul>
                            </li>
                            <li data-menu=""><a class="dropdown-item" href="form-layout.html" data-toggle="dropdown"
                                    data-i18n="Form Layout"><i class="feather icon-box"></i>Form Layout</a>
                            </li>
                            <li data-menu=""><a class="dropdown-item" href="form-wizard.html" data-toggle="dropdown"
                                    data-i18n="Form Wizard"><i class="feather icon-package"></i>Form Wizard</a>
                            </li>
                            <li data-menu=""><a class="dropdown-item" href="form-validation.html" data-toggle="dropdown"
                                    data-i18n="Form Validation"><i class="feather icon-check-circle"></i>Form
                                    Validation</a>
                            </li>
                            <li data-menu=""><a class="dropdown-item" href="table.html" data-toggle="dropdown"
                                    data-i18n="Table"><i class="feather icon-server"></i>Table</a>
                            </li>
                            <li data-menu=""><a class="dropdown-item" href="table-datatable.html" data-toggle="dropdown"
                                    data-i18n="Datatable"><i class="feather icon-grid"></i>Datatable</a>
                            </li>
                            <li data-menu=""><a class="dropdown-item" href="table-ag-grid.html" data-toggle="dropdown"
                                    data-i18n="agGrid Table"><i class="feather icon-grid"></i>agGrid Table</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link" href="#"
                            data-toggle="dropdown"><i class="feather icon-file"></i><span
                                data-i18n="Pages">Pages</span></a>
                        <ul class="dropdown-menu">
                            <li data-menu=""><a class="dropdown-item" href="page-user-profile.html"
                                    data-toggle="dropdown" data-i18n="Profile"><i
                                        class="feather icon-user"></i>Profile</a>
                            </li>
                            <li data-menu=""><a class="dropdown-item" href="page-account-settings.html"
                                    data-toggle="dropdown" data-i18n="Account Settings"><i
                                        class="feather icon-settings"></i>Account Settings</a>
                            </li>
                            <li data-menu=""><a class="dropdown-item" href="page-faq.html" data-toggle="dropdown"
                                    data-i18n="FAQ"><i class="feather icon-help-circle"></i>FAQ</a>
                            </li>
                            <li data-menu=""><a class="dropdown-item" href="page-knowledge-base.html"
                                    data-toggle="dropdown" data-i18n="Knowledge Base"><i
                                        class="feather icon-info"></i>Knowledge Base</a>
                            </li>
                            <li data-menu=""><a class="dropdown-item" href="page-search.html" data-toggle="dropdown"
                                    data-i18n="Search"><i class="feather icon-search"></i>Search</a>
                            </li>
                            <li data-menu=""><a class="dropdown-item" href="page-invoice.html" data-toggle="dropdown"
                                    data-i18n="Invoice"><i class="feather icon-file"></i>Invoice</a>
                            </li>
                            <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a
                                    class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown"
                                    data-i18n="Authentication"><i class="feather icon-unlock"></i>Authentication</a>
                                <ul class="dropdown-menu">
                                    <li data-menu=""><a class="dropdown-item" href="auth-login.html"
                                            data-toggle="dropdown" data-i18n="Login"><i
                                                class="feather icon-circle"></i>Login</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="auth-register.html"
                                            data-toggle="dropdown" data-i18n="Register"><i
                                                class="feather icon-circle"></i>Register</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="auth-forgot-password.html"
                                            data-toggle="dropdown" data-i18n="Forgot Password"><i
                                                class="feather icon-circle"></i>Forgot Password</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="auth-reset-password.html"
                                            data-toggle="dropdown" data-i18n="Reset Password"><i
                                                class="feather icon-circle"></i>Reset Password</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="auth-lock-screen.html"
                                            data-toggle="dropdown" data-i18n="Lock Screen"><i
                                                class="feather icon-circle"></i>Lock Screen</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a
                                    class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown"
                                    data-i18n="Miscellaneous"><i class="feather icon-file-text"></i>Miscellaneous</a>
                                <ul class="dropdown-menu">
                                    <li data-menu=""><a class="dropdown-item" href="page-coming-soon.html"
                                            data-toggle="dropdown" data-i18n="Coming Soon"><i
                                                class="feather icon-circle"></i>Coming Soon</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="error-404.html"
                                            data-toggle="dropdown" data-i18n="404"><i
                                                class="feather icon-circle"></i>Error 404</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="error-500.html"
                                            data-toggle="dropdown" data-i18n="500"><i
                                                class="feather icon-circle"></i>Error 500</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="page-not-authorized.html"
                                            data-toggle="dropdown" data-i18n="Not Authorized"><i
                                                class="feather icon-circle"></i>Not Authorized</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="page-maintenance.html"
                                            data-toggle="dropdown" data-i18n="Maintenance"><i
                                                class="feather icon-circle"></i>Maintenance</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link" href="#"
                            data-toggle="dropdown"><i class="feather icon-bar-chart-2"></i><span
                                data-i18n="Charts &amp; Maps">Charts &amp; Maps</span></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a
                                    class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown"
                                    data-i18n="Charts"><i class="feather icon-pie-chart"></i>Charts</a>
                                <ul class="dropdown-menu">
                                    <li data-menu=""><a class="dropdown-item" href="chart-apex.html"
                                            data-toggle="dropdown" data-i18n="Apex"><i
                                                class="feather icon-circle"></i>Apex</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="chart-chartjs.html"
                                            data-toggle="dropdown" data-i18n="Chartjs"><i
                                                class="feather icon-circle"></i>Chartjs</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="chart-echarts.html"
                                            data-toggle="dropdown" data-i18n="Echarts"><i
                                                class="feather icon-circle"></i>Echarts</a>
                                    </li>
                                </ul>
                            </li>
                            <li data-menu=""><a class="dropdown-item" href="maps-google.html" data-toggle="dropdown"
                                    data-i18n="Google Maps"><i class="feather icon-map"></i>Google Maps</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link" href="#"
                            data-toggle="dropdown"><i class="feather icon-more-horizontal"></i><span
                                data-i18n="Others">Others</span></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a
                                    class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown"
                                    data-i18n="Menu Levels"><i class="feather icon-menu"></i>Menu Levels</a>
                                <ul class="dropdown-menu">
                                    <li data-menu=""><a class="dropdown-item" href="#" data-toggle="dropdown"
                                            data-i18n="Second Level"><i class="feather icon-circle"></i>Second Level</a>
                                    </li>
                                    <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a
                                            class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown"
                                            data-i18n="Second Level"><i class="feather icon-circle"></i>Second Level</a>
                                        <ul class="dropdown-menu">
                                            <li data-menu=""><a class="dropdown-item" href="#" data-toggle="dropdown"
                                                    data-i18n="Third Level"><i class="feather icon-circle"></i>Third
                                                    Level</a>
                                            </li>
                                            <li data-menu=""><a class="dropdown-item" href="#" data-toggle="dropdown"
                                                    data-i18n="Third Level"><i class="feather icon-circle"></i>Third
                                                    Level</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="disabled" data-menu=""><a class="dropdown-item" href="" data-toggle="dropdown"
                                    data-i18n="Disabled Menu"><i class="feather icon-eye-off"></i>Disabled Menu</a>
                            </li>
                            <li data-menu=""><a class="dropdown-item"
                                    href="https://pixinvent.com/demo/vuexy-html-bootstrap-admin-template/documentation"
                                    data-toggle="dropdown" data-i18n="Documentation"><i
                                        class="feather icon-folder"></i>Documentation</a>
                            </li>
                            <li data-menu=""><a class="dropdown-item" href="https://pixinvent.ticksy.com/"
                                    data-toggle="dropdown" data-i18n="Raise Support"><i
                                        class="feather icon-life-buoy"></i>Raise Support</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- END: Main Menu-->

    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <!-- Dashboard Analytics Start -->
                <section id="dashboard-analytics">
                    <div class="row">
                        <div class="col-lg-6 col-md-12 col-sm-12">
                            <div class="card bg-analytics text-white">
                                <div class="card-content">
                                    <div class="card-body text-center">
                                        <img src="../../../app-assets/images/elements/decore-left.png" class="img-left"
                                            alt="
            card-img-left">
                                        <img src="../../../app-assets/images/elements/decore-right.png"
                                            class="img-right" alt="
            card-img-right">
                                        <div class="avatar avatar-xl bg-primary shadow mt-0">
                                            <div class="avatar-content">
                                                <i class="feather icon-award white font-large-1"></i>
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <h1 class="mb-2 text-white">Congratulations John,</h1>
                                            <p class="m-auto w-75">You have done <strong>57.6%</strong> more sales
                                                today. Check your new badge in your profile.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-12">
                            <div class="card">
                                <div class="card-header d-flex flex-column align-items-start pb-0">
                                    <div class="avatar bg-rgba-primary p-50 m-0">
                                        <div class="avatar-content">
                                            <i class="feather icon-users text-primary font-medium-5"></i>
                                        </div>
                                    </div>
                                    <h2 class="text-bold-700 mt-1 mb-25">92.6k</h2>
                                    <p class="mb-0">Subscribers Gained</p>
                                </div>
                                <div class="card-content">
                                    <div id="subscribe-gain-chart"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-12">
                            <div class="card">
                                <div class="card-header d-flex flex-column align-items-start pb-0">
                                    <div class="avatar bg-rgba-warning p-50 m-0">
                                        <div class="avatar-content">
                                            <i class="feather icon-package text-warning font-medium-5"></i>
                                        </div>
                                    </div>
                                    <h2 class="text-bold-700 mt-1 mb-25">97.5K</h2>
                                    <p class="mb-0">Orders Received</p>
                                </div>
                                <div class="card-content">
                                    <div id="orders-received-chart"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-12">
                            <div class="card">
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="row pb-50">
                                            <div
                                                class="col-lg-6 col-12 d-flex justify-content-between flex-column order-lg-1 order-2 mt-lg-0 mt-2">
                                                <div>
                                                    <h2 class="text-bold-700 mb-25">2.7K</h2>
                                                    <p class="text-bold-500 mb-75">Avg Sessions</p>
                                                    <h5 class="font-medium-2">
                                                        <span class="text-success">+5.2% </span>
                                                        <span>vs last 7 days</span>
                                                    </h5>
                                                </div>
                                                <a href="#" class="btn btn-primary shadow">View Details <i
                                                        class="feather icon-chevrons-right"></i></a>
                                            </div>
                                            <div
                                                class="col-lg-6 col-12 d-flex justify-content-between flex-column text-right order-lg-2 order-1">
                                                <div class="dropdown chart-dropdown">
                                                    <button class="btn btn-sm border-0 dropdown-toggle p-0"
                                                        type="button" id="dropdownItem5" data-toggle="dropdown"
                                                        aria-haspopup="true" aria-expanded="false">
                                                        Last 7 Days
                                                    </button>
                                                    <div class="dropdown-menu dropdown-menu-right"
                                                        aria-labelledby="dropdownItem5">
                                                        <a class="dropdown-item" href="#">Last 28 Days</a>
                                                        <a class="dropdown-item" href="#">Last Month</a>
                                                        <a class="dropdown-item" href="#">Last Year</a>
                                                    </div>
                                                </div>
                                                <div id="avg-session-chart"></div>
                                            </div>
                                        </div>
                                        <hr />
                                        <div class="row avg-sessions pt-50">
                                            <div class="col-6">
                                                <p class="mb-0">Goal: $100000</p>
                                                <div class="progress progress-bar-primary mt-25">
                                                    <div class="progress-bar" role="progressbar" aria-valuenow="50"
                                                        aria-valuemin="50" aria-valuemax="100" style="width:50%"></div>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <p class="mb-0">Users: 100K</p>
                                                <div class="progress progress-bar-warning mt-25">
                                                    <div class="progress-bar" role="progressbar" aria-valuenow="60"
                                                        aria-valuemin="60" aria-valuemax="100" style="width:60%"></div>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <p class="mb-0">Retention: 90%</p>
                                                <div class="progress progress-bar-danger mt-25">
                                                    <div class="progress-bar" role="progressbar" aria-valuenow="70"
                                                        aria-valuemin="70" aria-valuemax="100" style="width:70%"></div>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <p class="mb-0">Duration: 1yr</p>
                                                <div class="progress progress-bar-success mt-25">
                                                    <div class="progress-bar" role="progressbar" aria-valuenow="90"
                                                        aria-valuemin="90" aria-valuemax="100" style="width:90%"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="card">
                                <div class="card-header d-flex justify-content-between pb-0">
                                    <h4 class="card-title">Support Tracker</h4>
                                    <div class="dropdown chart-dropdown">
                                        <button class="btn btn-sm border-0 dropdown-toggle p-0" type="button"
                                            id="dropdownItem4" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            Last 7 Days
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownItem4">
                                            <a class="dropdown-item" href="#">Last 28 Days</a>
                                            <a class="dropdown-item" href="#">Last Month</a>
                                            <a class="dropdown-item" href="#">Last Year</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-content">
                                    <div class="card-body pt-0">
                                        <div class="row">
                                            <div class="col-sm-2 col-12 d-flex flex-column flex-wrap text-center">
                                                <h1 class="font-large-2 text-bold-700 mt-2 mb-0">163</h1>
                                                <small>Tickets</small>
                                            </div>
                                            <div class="col-sm-10 col-12 d-flex justify-content-center">
                                                <div id="support-tracker-chart"></div>
                                            </div>
                                        </div>
                                        <div class="chart-info d-flex justify-content-between">
                                            <div class="text-center">
                                                <p class="mb-50">New Tickets</p>
                                                <span class="font-large-1">29</span>
                                            </div>
                                            <div class="text-center">
                                                <p class="mb-50">Open Tickets</p>
                                                <span class="font-large-1">63</span>
                                            </div>
                                            <div class="text-center">
                                                <p class="mb-50">Response Time</p>
                                                <span class="font-large-1">1d</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row match-height">
                        <div class="col-lg-4 col-12">
                            <div class="card">
                                <div class="card-header d-flex justify-content-between pb-0">
                                    <h4>Product Orders</h4>
                                    <div class="dropdown chart-dropdown">
                                        <button class="btn btn-sm border-0 dropdown-toggle p-0" type="button"
                                            id="dropdownItem2" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            Last 7 Days
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownItem2">
                                            <a class="dropdown-item" href="#">Last 28 Days</a>
                                            <a class="dropdown-item" href="#">Last Month</a>
                                            <a class="dropdown-item" href="#">Last Year</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <div id="product-order-chart" class="mb-3"></div>
                                        <div class="chart-info d-flex justify-content-between mb-1">
                                            <div class="series-info d-flex align-items-center">
                                                <i class="fa fa-circle-o text-bold-700 text-primary"></i>
                                                <span class="text-bold-600 ml-50">Finished</span>
                                            </div>
                                            <div class="product-result">
                                                <span>23043</span>
                                            </div>
                                        </div>
                                        <div class="chart-info d-flex justify-content-between mb-1">
                                            <div class="series-info d-flex align-items-center">
                                                <i class="fa fa-circle-o text-bold-700 text-warning"></i>
                                                <span class="text-bold-600 ml-50">Pending</span>
                                            </div>
                                            <div class="product-result">
                                                <span>14658</span>
                                            </div>
                                        </div>
                                        <div class="chart-info d-flex justify-content-between mb-75">
                                            <div class="series-info d-flex align-items-center">
                                                <i class="fa fa-circle-o text-bold-700 text-danger"></i>
                                                <span class="text-bold-600 ml-50">Rejected</span>
                                            </div>
                                            <div class="product-result">
                                                <span>4758</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-12">
                            <div class="card">
                                <div class="card-header d-flex justify-content-between align-items-start">
                                    <div>
                                        <h4 class="card-title">Sales Stats</h4>
                                        <p class="text-muted mt-25 mb-0">Last 6 months</p>
                                    </div>
                                    <p class="mb-0"><i
                                            class="feather icon-more-vertical font-medium-3 text-muted cursor-pointer"></i>
                                    </p>
                                </div>
                                <div class="card-content">
                                    <div class="card-body px-0">
                                        <div id="sales-chart"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Activity Timeline</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <ul class="activity-timeline timeline-left list-unstyled">
                                            <li>
                                                <div class="timeline-icon bg-primary">
                                                    <i class="feather icon-plus font-medium-2 align-middle"></i>
                                                </div>
                                                <div class="timeline-info">
                                                    <p class="font-weight-bold mb-0">Client Meeting</p>
                                                    <span class="font-small-3">Bonbon macaroon jelly beans gummi bears
                                                        jelly lollipop apple</span>
                                                </div>
                                                <small class="text-muted">25 mins ago</small>
                                            </li>
                                            <li>
                                                <div class="timeline-icon bg-warning">
                                                    <i class="feather icon-alert-circle font-medium-2 align-middle"></i>
                                                </div>
                                                <div class="timeline-info">
                                                    <p class="font-weight-bold mb-0">Email Newsletter</p>
                                                    <span class="font-small-3">Cupcake gummi bears soufflé caramels
                                                        candy</span>
                                                </div>
                                                <small class="text-muted">15 days ago</small>
                                            </li>
                                            <li>
                                                <div class="timeline-icon bg-danger">
                                                    <i class="feather icon-check font-medium-2 align-middle"></i>
                                                </div>
                                                <div class="timeline-info">
                                                    <p class="font-weight-bold mb-0">Plan Webinar</p>
                                                    <span class="font-small-3">Candy ice cream cake. Halvah gummi
                                                        bears</span>
                                                </div>
                                                <small class="text-muted">20 days ago</small>
                                            </li>
                                            <li>
                                                <div class="timeline-icon bg-success">
                                                    <i class="feather icon-check font-medium-2 align-middle"></i>
                                                </div>
                                                <div class="timeline-info">
                                                    <p class="font-weight-bold mb-0">Launch Website</p>
                                                    <span class="font-small-3">Candy ice cream cake. </span>
                                                </div>
                                                <small class="text-muted">25 days ago</small>
                                            </li>
                                            <li>
                                                <div class="timeline-icon bg-primary">
                                                    <i class="feather icon-check font-medium-2 align-middle"></i>
                                                </div>
                                                <div class="timeline-info">
                                                    <p class="font-weight-bold mb-0">Marketing</p>
                                                    <span class="font-small-3">Candy ice cream. Halvah bears Cupcake
                                                        gummi bears.</span>
                                                </div>
                                                <small class="text-muted">28 days ago</small>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="mb-0">Dispatched Orders</h4>
                                </div>
                                <div class="card-content">
                                    <div class="table-responsive mt-1">
                                        <table class="table table-hover-animation mb-0">
                                            <thead>
                                                <tr>
                                                    <th>ORDER</th>
                                                    <th>STATUS</th>
                                                    <th>OPERATORS</th>
                                                    <th>LOCATION</th>
                                                    <th>DISTANCE</th>
                                                    <th>START DATE</th>
                                                    <th>EST DEL. DT</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>#879985</td>
                                                    <td><i
                                                            class="fa fa-circle font-small-3 text-success mr-50"></i>Moving
                                                    </td>
                                                    <td class="p-1">
                                                        <ul
                                                            class="list-unstyled users-list m-0  d-flex align-items-center">
                                                            <li data-toggle="tooltip" data-popup="tooltip-custom"
                                                                data-placement="bottom"
                                                                data-original-title="Vinnie Mostowy"
                                                                class="avatar pull-up">
                                                                <img class="media-object rounded-circle"
                                                                    src="../../../app-assets/images/portrait/small/avatar-s-5.jpg"
                                                                    alt="Avatar" height="30" width="30">
                                                            </li>
                                                            <li data-toggle="tooltip" data-popup="tooltip-custom"
                                                                data-placement="bottom"
                                                                data-original-title="Elicia Rieske"
                                                                class="avatar pull-up">
                                                                <img class="media-object rounded-circle"
                                                                    src="../../../app-assets/images/portrait/small/avatar-s-7.jpg"
                                                                    alt="Avatar" height="30" width="30">
                                                            </li>
                                                            <li data-toggle="tooltip" data-popup="tooltip-custom"
                                                                data-placement="bottom"
                                                                data-original-title="Julee Rossignol"
                                                                class="avatar pull-up">
                                                                <img class="media-object rounded-circle"
                                                                    src="../../../app-assets/images/portrait/small/avatar-s-10.jpg"
                                                                    alt="Avatar" height="30" width="30">
                                                            </li>
                                                            <li data-toggle="tooltip" data-popup="tooltip-custom"
                                                                data-placement="bottom"
                                                                data-original-title="Darcey Nooner"
                                                                class="avatar pull-up">
                                                                <img class="media-object rounded-circle"
                                                                    src="../../../app-assets/images/portrait/small/avatar-s-8.jpg"
                                                                    alt="Avatar" height="30" width="30">
                                                            </li>
                                                        </ul>
                                                    </td>
                                                    <td>Anniston, Alabama</td>
                                                    <td>
                                                        <span>130 km</span>
                                                        <div class="progress progress-bar-success mt-1 mb-0">
                                                            <div class="progress-bar" role="progressbar"
                                                                style="width: 80%" aria-valuenow="80" aria-valuemin="0"
                                                                aria-valuemax="100"></div>
                                                        </div>
                                                    </td>
                                                    <td>14:58 26/07/2018</td>
                                                    <td>28/07/2018</td>
                                                </tr>
                                                <tr>
                                                    <td>#156897</td>
                                                    <td><i
                                                            class="fa fa-circle font-small-3 text-warning mr-50"></i>Pending
                                                    </td>
                                                    <td class="p-1">
                                                        <ul
                                                            class="list-unstyled users-list m-0  d-flex align-items-center">
                                                            <li data-toggle="tooltip" data-popup="tooltip-custom"
                                                                data-placement="bottom"
                                                                data-original-title="Trina Lynes"
                                                                class="avatar pull-up">
                                                                <img class="media-object rounded-circle"
                                                                    src="../../../app-assets/images/portrait/small/avatar-s-1.jpg"
                                                                    alt="Avatar" height="30" width="30">
                                                            </li>
                                                            <li data-toggle="tooltip" data-popup="tooltip-custom"
                                                                data-placement="bottom"
                                                                data-original-title="Lilian Nenez"
                                                                class="avatar pull-up">
                                                                <img class="media-object rounded-circle"
                                                                    src="../../../app-assets/images/portrait/small/avatar-s-2.jpg"
                                                                    alt="Avatar" height="30" width="30">
                                                            </li>
                                                            <li data-toggle="tooltip" data-popup="tooltip-custom"
                                                                data-placement="bottom"
                                                                data-original-title="Alberto Glotzbach"
                                                                class="avatar pull-up">
                                                                <img class="media-object rounded-circle"
                                                                    src="../../../app-assets/images/portrait/small/avatar-s-3.jpg"
                                                                    alt="Avatar" height="30" width="30">
                                                            </li>
                                                        </ul>
                                                    </td>
                                                    <td>Cordova, Alaska</td>
                                                    <td>
                                                        <span>234 km</span>
                                                        <div class="progress progress-bar-warning mt-1 mb-0">
                                                            <div class="progress-bar" role="progressbar"
                                                                style="width: 60%" aria-valuenow="60" aria-valuemin="0"
                                                                aria-valuemax="100"></div>
                                                        </div>
                                                    </td>
                                                    <td>14:58 26/07/2018</td>
                                                    <td>28/07/2018</td>
                                                </tr>
                                                <tr>
                                                    <td>#568975</td>
                                                    <td><i
                                                            class="fa fa-circle font-small-3 text-success mr-50"></i>Moving
                                                    </td>
                                                    <td class="p-1">
                                                        <ul
                                                            class="list-unstyled users-list m-0  d-flex align-items-center">
                                                            <li data-toggle="tooltip" data-popup="tooltip-custom"
                                                                data-placement="bottom"
                                                                data-original-title="Lai Lewandowski"
                                                                class="avatar pull-up">
                                                                <img class="media-object rounded-circle"
                                                                    src="../../../app-assets/images/portrait/small/avatar-s-6.jpg"
                                                                    alt="Avatar" height="30" width="30">
                                                            </li>
                                                            <li data-toggle="tooltip" data-popup="tooltip-custom"
                                                                data-placement="bottom"
                                                                data-original-title="Elicia Rieske"
                                                                class="avatar pull-up">
                                                                <img class="media-object rounded-circle"
                                                                    src="../../../app-assets/images/portrait/small/avatar-s-7.jpg"
                                                                    alt="Avatar" height="30" width="30">
                                                            </li>
                                                            <li data-toggle="tooltip" data-popup="tooltip-custom"
                                                                data-placement="bottom"
                                                                data-original-title="Darcey Nooner"
                                                                class="avatar pull-up">
                                                                <img class="media-object rounded-circle"
                                                                    src="../../../app-assets/images/portrait/small/avatar-s-8.jpg"
                                                                    alt="Avatar" height="30" width="30">
                                                            </li>
                                                            <li data-toggle="tooltip" data-popup="tooltip-custom"
                                                                data-placement="bottom"
                                                                data-original-title="Julee Rossignol"
                                                                class="avatar pull-up">
                                                                <img class="media-object rounded-circle"
                                                                    src="../../../app-assets/images/portrait/small/avatar-s-10.jpg"
                                                                    alt="Avatar" height="30" width="30">
                                                            </li>
                                                            <li data-toggle="tooltip" data-popup="tooltip-custom"
                                                                data-placement="bottom"
                                                                data-original-title="Jeffrey Gerondale"
                                                                class="avatar pull-up">
                                                                <img class="media-object rounded-circle"
                                                                    src="../../../app-assets/images/portrait/small/avatar-s-9.jpg"
                                                                    alt="Avatar" height="30" width="30">
                                                            </li>
                                                        </ul>
                                                    </td>
                                                    <td>Florence, Alabama</td>
                                                    <td>
                                                        <span>168 km</span>
                                                        <div class="progress progress-bar-success mt-1 mb-0">
                                                            <div class="progress-bar" role="progressbar"
                                                                style="width: 70%" aria-valuenow="70" aria-valuemin="0"
                                                                aria-valuemax="100"></div>
                                                        </div>
                                                    </td>
                                                    <td>14:58 26/07/2018</td>
                                                    <td>28/07/2018</td>
                                                </tr>
                                                <tr>
                                                    <td>#245689</td>
                                                    <td><i
                                                            class="fa fa-circle font-small-3 text-danger mr-50"></i>Canceled
                                                    </td>
                                                    <td class="p-1">
                                                        <ul
                                                            class="list-unstyled users-list m-0  d-flex align-items-center">
                                                            <li data-toggle="tooltip" data-popup="tooltip-custom"
                                                                data-placement="bottom"
                                                                data-original-title="Vinnie Mostowy"
                                                                class="avatar pull-up">
                                                                <img class="media-object rounded-circle"
                                                                    src="../../../app-assets/images/portrait/small/avatar-s-5.jpg"
                                                                    alt="Avatar" height="30" width="30">
                                                            </li>
                                                            <li data-toggle="tooltip" data-popup="tooltip-custom"
                                                                data-placement="bottom"
                                                                data-original-title="Elicia Rieske"
                                                                class="avatar pull-up">
                                                                <img class="media-object rounded-circle"
                                                                    src="../../../app-assets/images/portrait/small/avatar-s-7.jpg"
                                                                    alt="Avatar" height="30" width="30">
                                                            </li>
                                                        </ul>
                                                    </td>
                                                    <td>Clifton, Arizona</td>
                                                    <td>
                                                        <span>125 km</span>
                                                        <div class="progress progress-bar-danger mt-1 mb-0">
                                                            <div class="progress-bar" role="progressbar"
                                                                style="width: 95%" aria-valuenow="95" aria-valuemin="0"
                                                                aria-valuemax="100"></div>
                                                        </div>
                                                    </td>
                                                    <td>14:58 26/07/2018</td>
                                                    <td>28/07/2018</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Dashboard Analytics end -->

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
    <script src="../../../app-assets/vendors/js/charts/apexcharts.min.js"></script>
    <script src="../../../app-assets/vendors/js/extensions/tether.min.js"></script>
    <script src="../../../app-assets/vendors/js/extensions/shepherd.min.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="../../../app-assets/js/core/app-menu.js"></script>
    <script src="../../../app-assets/js/core/app.js"></script>
    <script src="../../../app-assets/js/scripts/components.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="../../../app-assets/js/scripts/pages/dashboard-analytics.js"></script>
    <!-- END: Page JS-->

</body>
<!-- END: Body-->

</html><?php /**PATH C:\xampp\htdocs\dzautosql\resources\views/index.blade.php ENDPATH**/ ?>