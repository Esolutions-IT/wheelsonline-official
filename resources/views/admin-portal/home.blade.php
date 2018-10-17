<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Star Admin Free Bootstrap Admin Dashboard Template</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{asset('public/css/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/css/vendor.bundle.base.css')}}">
    <link rel="stylesheet" href="{{asset('public/css/vendor.bundle.base.css')}}">
    <link rel="stylesheet" href="{{asset('public/css/main.css')}}">
    <link rel="stylesheet" href="{{asset('public/css/demo.css')}}">
    <link rel="stylesheet" href="{{asset('public/css/linearicons/icons.css')}}">
    <link rel="stylesheet" href="{{asset('public/css/font-awesome.min.css')}}">

    <link rel="stylesheet" href="{{asset('public/css/chartist-custom.css')}}">
    <link rel="stylesheet" href="{{asset('public/css/bootstrap.min.css')}}">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{asset('public/css/admin-portal.css')}}">
    <!-- endinject -->
    <link rel="shortcut icon" href="images/favicon.png" />

    <style>
        .panel{
            width:600px!important;
        }
    </style>
</head>

<body>
<div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
            <a class="navbar-brand brand-logo" href="index.html">
                <img src="{{asset('public/images/logo-wheelsonline.PNG')}}" alt="logo" style="width:200px; height:55px;"/>
            </a>
            <a class="navbar-brand brand-logo-mini" href="index.html">
                <img src="images/logo-mini.svg" alt="logo" />
            </a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-center">
            <ul class="navbar-nav navbar-nav-left header-links d-none d-md-flex">
                <li class="nav-item">
                    <a href="#" class="nav-link">Schedule
                        <span class="badge badge-primary ml-1">New</span>
                    </a>
                </li>
                <li class="nav-item active">
                    <a href="#" class="nav-link">
                        <i class="mdi mdi-elevation-rise"></i>Reports</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="mdi mdi-bookmark-plus-outline"></i>Score</a>
                </li>
            </ul>
            <ul class="navbar-nav navbar-nav-right">
                <li class="nav-item dropdown">
                    <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                        <i class="mdi mdi-file-document-box"></i>
                        <span class="count">7</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
                        <div class="dropdown-item">
                            <p class="mb-0 font-weight-normal float-left">You have 7 unread mails
                            </p>
                            <span class="badge badge-info badge-pill float-right">View all</span>
                        </div>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                                <img src="images/faces/face4.jpg" alt="image" class="profile-pic">
                            </div>
                            <div class="preview-item-content flex-grow">
                                <h6 class="preview-subject ellipsis font-weight-medium text-dark">David Grey
                                    <span class="float-right font-weight-light small-text">1 Minutes ago</span>
                                </h6>
                                <p class="font-weight-light small-text">
                                    The meeting is cancelled
                                </p>
                            </div>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                                <img src="images/faces/face2.jpg" alt="image" class="profile-pic">
                            </div>
                            <div class="preview-item-content flex-grow">
                                <h6 class="preview-subject ellipsis font-weight-medium text-dark">Tim Cook
                                    <span class="float-right font-weight-light small-text">15 Minutes ago</span>
                                </h6>
                                <p class="font-weight-light small-text">
                                    New product launch
                                </p>
                            </div>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                                <img src="images/faces/face3.jpg" alt="image" class="profile-pic">
                            </div>
                            <div class="preview-item-content flex-grow">
                                <h6 class="preview-subject ellipsis font-weight-medium text-dark"> Johnson
                                    <span class="float-right font-weight-light small-text">18 Minutes ago</span>
                                </h6>
                                <p class="font-weight-light small-text">
                                    Upcoming board meeting
                                </p>
                            </div>
                        </a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
                        <i class="mdi mdi-bell"></i>
                        <span class="count">4</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
                        <a class="dropdown-item">
                            <p class="mb-0 font-weight-normal float-left">You have 4 new notifications
                            </p>
                            <span class="badge badge-pill badge-warning float-right">View all</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                                <div class="preview-icon bg-success">
                                    <i class="mdi mdi-alert-circle-outline mx-0"></i>
                                </div>
                            </div>
                            <div class="preview-item-content">
                                <h6 class="preview-subject font-weight-medium text-dark">Application Error</h6>
                                <p class="font-weight-light small-text">
                                    Just now
                                </p>
                            </div>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                                <div class="preview-icon bg-warning">
                                    <i class="mdi mdi-comment-text-outline mx-0"></i>
                                </div>
                            </div>
                            <div class="preview-item-content">
                                <h6 class="preview-subject font-weight-medium text-dark">Settings</h6>
                                <p class="font-weight-light small-text">
                                    Private message
                                </p>
                            </div>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                                <div class="preview-icon bg-info">
                                    <i class="mdi mdi-email-outline mx-0"></i>
                                </div>
                            </div>
                            <div class="preview-item-content">
                                <h6 class="preview-subject font-weight-medium text-dark">New user registration</h6>
                                <p class="font-weight-light small-text">
                                    2 days ago
                                </p>
                            </div>
                        </a>
                    </div>
                </li>
                <li class="nav-item dropdown d-none d-xl-inline-block">
                    <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                        <span class="profile-text">Hello, {{auth()->user()->name}}!</span>
                        <img class="img-xs rounded-circle" src="{{asset('public/images/face1.jpg')}}" alt="Profile image">
                    </a>
                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                        <a class="dropdown-item p-0">
                            <div class="d-flex border-bottom">
                                <div class="py-3 px-4 d-flex align-items-center justify-content-center">
                                    <i class="mdi mdi-bookmark-plus-outline mr-0 text-gray"></i>
                                </div>
                                <div class="py-3 px-4 d-flex align-items-center justify-content-center border-left border-right">
                                    <i class="mdi mdi-account-outline mr-0 text-gray"></i>
                                </div>
                                <div class="py-3 px-4 d-flex align-items-center justify-content-center">
                                    <i class="mdi mdi-alarm-check mr-0 text-gray"></i>
                                </div>
                            </div>
                        </a>
                        <a class="dropdown-item mt-2">
                            Manage Accounts
                        </a>
                        <a class="dropdown-item">
                            Change Password
                        </a>
                        <a class="dropdown-item">
                            Check Inbox
                        </a>
                        <a class="dropdown-item">
                            Sign Out
                        </a>
                    </div>
                </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
                <span class="mdi mdi-menu"></span>
            </button>
        </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
            <ul class="nav">
                <li class="nav-item nav-profile">
                    <div class="nav-link">
                        <div class="user-wrapper">
                            <div class="profile-image">
                                <img src="{{asset('public/images/face1.jpg')}}" alt="profile image">
                            </div>
                            <div class="text-wrapper">
                                <p class="profile-name">{{auth()->user()->name}}</p>
                                <div>
                                    <small class="designation text-muted">Manager</small>
                                    <span class="status-indicator online"></span>
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-success btn-block">New Product
                            <i class="mdi mdi-plus"></i>
                        </button>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.html">
                        <i class="menu-icon mdi mdi-television"></i>
                        <span class="menu-title">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                        <i class="menu-icon mdi mdi-content-copy"></i>
                        <span class="menu-title">Catalogus</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="ui-basic">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item">
                                <a class="nav-link" href="pages/ui-features/buttons.html">Categorie</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="pages/ui-features/typography.html">Fabrikanten</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="pages/ui-features/typography.html">Producten</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="pages/ui-features/typography.html">Attributen</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#verkopen">
                        <i class="menu-icon mdi mdi-chart-line"></i>
                        <span class="menu-title">Verkopen</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="verkopen">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item">
                                <a class="nav-link" href="pages/ui-features/buttons.html">Orders</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="pages/ui-features/typography.html">Verzendingen</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="pages/ui-features/typography.html">Retour Verzoeken</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="pages/ui-features/typography.html">Huidige Winkelwagens</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="pages/ui-features/typography.html">Huidige Verlanglijsten</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="pages/ui-features/typography.html">Bestsellers</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="pages/ui-features/typography.html">Producten nooit besteld</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#klanten">
                        <i class="menu-icon mdi mdi-backup-restore"></i>
                        <span class="menu-title">Klanten</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="klanten">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item">
                                <a class="nav-link" href="pages/ui-features/buttons.html">Klanten</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="pages/ui-features/typography.html">Klant Rollen</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="pages/ui-features/typography.html">Klanten Online</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="pages/ui-features/typography.html">Klant Rapporten</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="pages/ui-features/typography.html">Verkopers</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#textbeheer">
                        <i class="menu-icon mdi mdi-text-shadow"></i>
                        <span class="menu-title">Text Beheer</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="textbeheer">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item">
                                <a class="nav-link" href="pages/ui-features/buttons.html">Onderwerpen</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="pages/ui-features/typography.html">Bericht Sjabloon</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#help">
                        <i class="menu-icon mdi mdi-help"></i>
                        <span class="menu-title">Help</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="help">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item">
                                <a class="nav-link" href="pages/ui-features/buttons.html">Help Onderwerpen</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="pages/ui-features/typography.html">Winkel Forums</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="pages/ui-features/typography.html">Primaire Support Services</a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </nav>
        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="row purchace-popup">
                    <div class="col-12">
              <span class="d-block d-md-flex align-items-center">
                <p>Welkom op uw dashboard {{auth()->user()->name}}</p>
                <a class="btn ml-auto download-button d-none d-md-block" href="https://github.com/BootstrapDash/StarAdmin-Free-Bootstrap-Admin-Template" target="_blank">Orders bekijken</a>
                <a class="btn purchase-button mt-4 mt-md-0" href="https://www.bootstrapdash.com/product/star-admin-pro/" target="_blank">Terug naar Home</a>
                <i class="mdi mdi-close popup-dismiss d-none d-md-block"></i>
              </span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
                        <div class="card card-statistics">
                            <div class="card-body">
                                <div class="clearfix">
                                    <div class="float-left">
                                        <i class="mdi mdi-cube text-danger icon-lg"></i>
                                    </div>
                                    <div class="float-right">
                                        <p class="mb-0 text-right">Users</p>
                                        <div class="fluid-container">
                                            <h3 class="font-weight-medium text-right mb-0">{{$count}}</h3>
                                        </div>
                                    </div>
                                </div>
                                <p class="text-muted mt-3 mb-0">
                                    <i class="mdi mdi-alert-octagon mr-1" aria-hidden="true"></i> Aantal Users
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
                        <div class="card card-statistics">
                            <div class="card-body">
                                <div class="clearfix">
                                    <div class="float-left">
                                        <i class="mdi mdi-receipt text-warning icon-lg"></i>
                                    </div>
                                    <div class="float-right">
                                        <p class="mb-0 text-right">Orders</p>
                                        <div class="fluid-container">
                                            <h3 class="font-weight-medium text-right mb-0">3455</h3>
                                        </div>
                                    </div>
                                </div>
                                <p class="text-muted mt-3 mb-0">
                                    <i class="mdi mdi-alert-octagon mr-1" aria-hidden="true"></i> Aantal Orders
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
                        <div class="card card-statistics">
                            <div class="card-body">
                                <div class="clearfix">
                                    <div class="float-left">
                                        <i class="mdi mdi-poll-box text-success icon-lg"></i>
                                    </div>
                                    <div class="float-right">
                                        <p class="mb-0 text-right">Producten</p>
                                        <div class="fluid-container">
                                            <h3 class="font-weight-medium text-right mb-0">{{$count_products}}</h3>
                                        </div>
                                    </div>
                                </div>
                                <p class="text-muted mt-3 mb-0">
                                    <i class="mdi mdi-alert-octagon mr-1" aria-hidden="true"></i> Aantal Producten
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
                        <div class="card card-statistics">
                            <div class="card-body">
                                <div class="clearfix">
                                    <div class="float-left">
                                        <i class="mdi mdi-account-location text-info icon-lg"></i>
                                    </div>
                                    <div class="float-right">
                                        <p class="mb-0 text-right">Werknemers</p>
                                        <div class="fluid-container">
                                            <h3 class="font-weight-medium text-right mb-0">246</h3>
                                        </div>
                                    </div>
                                </div>
                                <p class="text-muted mt-3 mb-0">
                                    <i class="mdi mdi-alert-octagon mr-1" aria-hidden="true"></i> Aantal Werknemers
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-7 grid-margin stretch-card" style="height:200px;">
                        <!--weather card-->
                        <div class="card card-weather">
                            <div class="card-body">
                                <div class="weather-date-location">
                                    <h3><div id="day"></div></h3>
                                    <p class="text-gray">
                                        <span class="weather-date"><div id="maand"></div></span>
                                    </p>
                                </div>
                                {{--<div class="weather-data d-flex">--}}
                                    {{--<div class="mr-auto">--}}
                                        {{--<h4 class="display-3">21--}}
                                            {{--<span class="symbol">&deg;</span>C</h4>--}}
                                        {{--<p>--}}
                                            {{--Mostly Cloudy--}}
                                        {{--</p>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            </div>
                            <script>
                                var d = new Date();
                                var days = ["Zondag", "Maandag", "Dinsdag", "Woensdag", "Donderdag", "Vrijdag", "Zaterdag"];
                                document.getElementById("day").innerHTML = days[d.getDay()];

                                var months = ["Januari", "Februari", "Maart", "April", "Mei", "Juni", "Juli", "Augustus", "September", "Oktober", "November", "December"];
                                document.getElementById("maand").innerHTML = months[d.getMonth()]+ ", " + d.getFullYear() + " Nederland";

                            </script>
                            <div class="card-body p-0" style="margin-top:-70px;">
                                <div class="d-flex weakly-weather">
                                    <div class="weakly-weather-item">
                                        <p class="mb-0">
                                            Sun
                                        </p>
                                        <i class="mdi mdi-weather-cloudy"></i>
                                        <p class="mb-0">
                                            30°
                                        </p>
                                    </div>
                                    <div class="weakly-weather-item">
                                        <p class="mb-1">
                                            Mon
                                        </p>
                                        <i class="mdi mdi-weather-hail"></i>
                                        <p class="mb-0">
                                            31°
                                        </p>
                                    </div>
                                    <div class="weakly-weather-item">
                                        <p class="mb-1">
                                            Tue
                                        </p>
                                        <i class="mdi mdi-weather-partlycloudy"></i>
                                        <p class="mb-0">
                                            28°
                                        </p>
                                    </div>
                                    <div class="weakly-weather-item">
                                        <p class="mb-1">
                                            Wed
                                        </p>
                                        <i class="mdi mdi-weather-pouring"></i>
                                        <p class="mb-0">
                                            30°
                                        </p>
                                    </div>
                                    <div class="weakly-weather-item">
                                        <p class="mb-1">
                                            Thu
                                        </p>
                                        <i class="mdi mdi-weather-pouring"></i>
                                        <p class="mb-0">
                                            29°
                                        </p>
                                    </div>
                                    <div class="weakly-weather-item">
                                        <p class="mb-1">
                                            Fri
                                        </p>
                                        <i class="mdi mdi-weather-snowy-rainy"></i>
                                        <p class="mb-0">
                                            31°
                                        </p>
                                    </div>
                                    <div class="weakly-weather-item">
                                        <p class="mb-1">
                                            Sat
                                        </p>
                                        <i class="mdi mdi-weather-snowy"></i>
                                        <p class="mb-0">
                                            32°
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--weather card ends-->
                    </div>
                        <div class="col-lg-5 grid-margin stretch-card">
                            <div class="panel">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Recent aangemaakte Users</h3>
                                    <div class="right">
                                        <button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
                                        <button type="button" class="btn-remove"><i class="lnr lnr-cross"></i></button>
                                    </div>
                                </div>
                                <div class="panel-body no-padding" id="panel_body">
                                    <table class="table table-striped">
                                        <thead>
                                        <tr>
                                            <th>User ID</th>
                                            <th>Volledige Naam</th>
                                            <th>Telefoon</th>
                                            <th>Email</th>
                                            {{--<th>Status</th>--}}
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($week as $weeks)
                                        <tr>
                                            <td><a href="#">{{$weeks->id}}</a></td>
                                            <td>{{$weeks->name}}</td>
                                            <td>{{$weeks->telefoon}}</td>
                                            <td>{{$weeks->email}}</td>
                                            {{--<td><span class="label label-success">COMPLETED</span></td>--}}
                                        </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <div class="panel-footer">
                                    <div class="row">
                                        <div class="col-md-6"><span class="panel-note"><i class="fa fa-clock-o"></i> Laatste 7 dagen</span></div>
                                        <div class="col-md-6 text-right"><a href="#" class="btn btn-primary">Bekijk alle users</a></div>
                                    </div>
                                </div>
                            </div>
                            <!-- END RECENT PURCHASES -->
                        </div>
                    </div>

                <div class="row">
                    <div class="col-md-12 grid-margin">
                        <div class="card">
                            <div class="card-body">
                                <div class="row d-none d-sm-flex mb-4">
                                    <div class="col-4">
                                        <h5 class="text-primary">Unique Visitors</h5>
                                        <p>34657</p>
                                    </div>
                                    <div class="col-4">
                                        <h5 class="text-primary">Bounce Rate</h5>
                                        <p>45673</p>
                                    </div>
                                    <div class="col-4">
                                        <h5 class="text-primary">Active session</h5>
                                        <p>45673</p>
                                    </div>
                                </div>
                                <div class="chart-container">
                                    <canvas id="dashboard-area-chart" height="80"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 grid-margin">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Orders</h4>
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                        <tr>
                                            <th>
                                                #
                                            </th>
                                            <th>
                                                First name
                                            </th>
                                            <th>
                                                Progress
                                            </th>
                                            <th>
                                                Amount
                                            </th>
                                            <th>
                                                Sales
                                            </th>
                                            <th>
                                                Deadline
                                            </th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td class="font-weight-medium">
                                                1
                                            </td>
                                            <td>
                                                Herman Beck
                                            </td>
                                            <td>
                                                <div class="progress">
                                                    <div class="progress-bar bg-success progress-bar-striped" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0"
                                                         aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>
                                                $ 77.99
                                            </td>
                                            <td class="text-danger"> 53.64%
                                                <i class="mdi mdi-arrow-down"></i>
                                            </td>
                                            <td>
                                                May 15, 2015
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="font-weight-medium">
                                                2
                                            </td>
                                            <td>
                                                Messsy Adam
                                            </td>
                                            <td>
                                                <div class="progress">
                                                    <div class="progress-bar bg-danger progress-bar-striped" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0"
                                                         aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>
                                                $245.30
                                            </td>
                                            <td class="text-success"> 24.56%
                                                <i class="mdi mdi-arrow-up"></i>
                                            </td>
                                            <td>
                                                July 1, 2015
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="font-weight-medium">
                                                3
                                            </td>
                                            <td>
                                                John Richards
                                            </td>
                                            <td>
                                                <div class="progress">
                                                    <div class="progress-bar bg-warning progress-bar-striped" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0"
                                                         aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>
                                                $138.00
                                            </td>
                                            <td class="text-danger"> 28.76%
                                                <i class="mdi mdi-arrow-down"></i>
                                            </td>
                                            <td>
                                                Apr 12, 2015
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="font-weight-medium">
                                                4
                                            </td>
                                            <td>
                                                Peter Meggik
                                            </td>
                                            <td>
                                                <div class="progress">
                                                    <div class="progress-bar bg-primary progress-bar-striped" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0"
                                                         aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>
                                                $ 77.99
                                            </td>
                                            <td class="text-danger"> 53.45%
                                                <i class="mdi mdi-arrow-down"></i>
                                            </td>
                                            <td>
                                                May 15, 2015
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="font-weight-medium">
                                                5
                                            </td>
                                            <td>
                                                Edward
                                            </td>
                                            <td>
                                                <div class="progress">
                                                    <div class="progress-bar bg-danger progress-bar-striped" role="progressbar" style="width: 35%" aria-valuenow="35" aria-valuemin="0"
                                                         aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>
                                                $ 160.25
                                            </td>
                                            <td class="text-success"> 18.32%
                                                <i class="mdi mdi-arrow-up"></i>
                                            </td>
                                            <td>
                                                May 03, 2015
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="font-weight-medium">
                                                6
                                            </td>
                                            <td>
                                                Henry Tom
                                            </td>
                                            <td>
                                                <div class="progress">
                                                    <div class="progress-bar bg-warning progress-bar-striped" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0"
                                                         aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>
                                                $ 150.00
                                            </td>
                                            <td class="text-danger"> 24.67%
                                                <i class="mdi mdi-arrow-down"></i>
                                            </td>
                                            <td>
                                                June 16, 2015
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 grid-margin">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title mb-4">Manage Tickets</h5>
                                <div class="fluid-container">
                                    <div class="row ticket-card mt-3 pb-2 border-bottom pb-3 mb-3">
                                        <div class="col-md-1">
                                            <img class="img-sm rounded-circle mb-4 mb-md-0" src="images/faces/face1.jpg" alt="profile image">
                                        </div>
                                        <div class="ticket-details col-md-9">
                                            <div class="d-flex">
                                                <p class="text-dark font-weight-semibold mr-2 mb-0 no-wrap">James :</p>
                                                <p class="text-primary mr-1 mb-0">[#23047]</p>
                                                <p class="mb-0 ellipsis">Donec rutrum congue leo eget malesuada.</p>
                                            </div>
                                            <p class="text-gray ellipsis mb-2">Donec rutrum congue leo eget malesuada. Quisque velit nisi, pretium ut lacinia in, elementum id enim
                                                vivamus.
                                            </p>
                                            <div class="row text-gray d-md-flex d-none">
                                                <div class="col-4 d-flex">
                                                    <small class="mb-0 mr-2 text-muted text-muted">Last responded :</small>
                                                    <small class="Last-responded mr-2 mb-0 text-muted text-muted">3 hours ago</small>
                                                </div>
                                                <div class="col-4 d-flex">
                                                    <small class="mb-0 mr-2 text-muted text-muted">Due in :</small>
                                                    <small class="Last-responded mr-2 mb-0 text-muted text-muted">2 Days</small>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ticket-actions col-md-2">
                                            <div class="btn-group dropdown">
                                                <button type="button" class="btn btn-success dropdown-toggle btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Manage
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#">
                                                        <i class="fa fa-reply fa-fw"></i>Quick reply</a>
                                                    <a class="dropdown-item" href="#">
                                                        <i class="fa fa-history fa-fw"></i>Another action</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="#">
                                                        <i class="fa fa-check text-success fa-fw"></i>Resolve Issue</a>
                                                    <a class="dropdown-item" href="#">
                                                        <i class="fa fa-times text-danger fa-fw"></i>Close Issue</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row ticket-card mt-3 pb-2 border-bottom pb-3 mb-3">
                                        <div class="col-md-1">
                                            <img class="img-sm rounded-circle mb-4 mb-md-0" src="images/faces/face2.jpg" alt="profile image">
                                        </div>
                                        <div class="ticket-details col-md-9">
                                            <div class="d-flex">
                                                <p class="text-dark font-weight-semibold mr-2 mb-0 no-wrap">Stella :</p>
                                                <p class="text-primary mr-1 mb-0">[#23135]</p>
                                                <p class="mb-0 ellipsis">Curabitur aliquet quam id dui posuere blandit.</p>
                                            </div>
                                            <p class="text-gray ellipsis mb-2">Pellentesque in ipsum id orci porta dapibus. Sed porttitor lectus nibh. Curabitur non nulla sit amet
                                                nisl.
                                            </p>
                                            <div class="row text-gray d-md-flex d-none">
                                                <div class="col-4 d-flex">
                                                    <small class="mb-0 mr-2 text-muted">Last responded :</small>
                                                    <small class="Last-responded mr-2 mb-0 text-muted">3 hours ago</small>
                                                </div>
                                                <div class="col-4 d-flex">
                                                    <small class="mb-0 mr-2 text-muted">Due in :</small>
                                                    <small class="Last-responded mr-2 mb-0 text-muted">2 Days</small>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ticket-actions col-md-2">
                                            <div class="btn-group dropdown">
                                                <button type="button" class="btn btn-success dropdown-toggle btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Manage
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#">
                                                        <i class="fa fa-reply fa-fw"></i>Quick reply</a>
                                                    <a class="dropdown-item" href="#">
                                                        <i class="fa fa-history fa-fw"></i>Another action</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="#">
                                                        <i class="fa fa-check text-success fa-fw"></i>Resolve Issue</a>
                                                    <a class="dropdown-item" href="#">
                                                        <i class="fa fa-times text-danger fa-fw"></i>Close Issue</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row ticket-card mt-3">
                                        <div class="col-md-1">
                                            <img class="img-sm rounded-circle mb-4 mb-md-0" src="images/faces/face3.jpg" alt="profile image">
                                        </div>
                                        <div class="ticket-details col-md-9">
                                            <div class="d-flex">
                                                <p class="text-dark font-weight-semibold mr-2 mb-0 no-wrap">John Doe :</p>
                                                <p class="text-primary mr-1 mb-0">[#23246]</p>
                                                <p class="mb-0 ellipsis">Mauris blandit aliquet elit, eget tincidunt nibh pulvinar.</p>
                                            </div>
                                            <p class="text-gray ellipsis mb-2">Nulla quis lorem ut libero malesuada feugiat. Proin eget tortor risus. Lorem ipsum dolor sit amet.</p>
                                            <div class="row text-gray d-md-flex d-none">
                                                <div class="col-4 d-flex">
                                                    <small class="mb-0 mr-2 text-muted">Last responded :</small>
                                                    <small class="Last-responded mr-2 mb-0 text-muted">3 hours ago</small>
                                                </div>
                                                <div class="col-4 d-flex">
                                                    <small class="mb-0 mr-2 text-muted">Due in :</small>
                                                    <small class="Last-responded mr-2 mb-0 text-muted">2 Days</small>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ticket-actions col-md-2">
                                            <div class="btn-group dropdown">
                                                <button type="button" class="btn btn-success dropdown-toggle btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Manage
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#">
                                                        <i class="fa fa-reply fa-fw"></i>Quick reply</a>
                                                    <a class="dropdown-item" href="#">
                                                        <i class="fa fa-history fa-fw"></i>Another action</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="#">
                                                        <i class="fa fa-check text-success fa-fw"></i>Resolve Issue</a>
                                                    <a class="dropdown-item" href="#">
                                                        <i class="fa fa-times text-danger fa-fw"></i>Close Issue</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- content-wrapper ends -->
            <!-- partial:partials/_footer.html -->
            <footer class="footer">
                <div class="container-fluid clearfix">
            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2018
              <a href="http://www.bootstrapdash.com/" target="_blank">Bootstrapdash</a>. All rights reserved.</span>
                    <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with
              <i class="mdi mdi-heart text-danger"></i>
            </span>
                </div>
            </footer>
            <!-- partial -->
        </div>
        <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->

<!-- plugins:js -->
<script src="{{asset('public/js/vendor.bundle.base.js')}}"></script>
<script src="{{asset('public/js/vendor.bundle.addons.js')}}"></script>
<!-- endinject -->
<!-- Plugin js for this page-->
<!-- End plugin js for this page-->
<!-- inject:js -->
<script src="{{asset('public/js/off-canvas.js')}}"></script>
<script src="{{asset('public/js/misc.js')}}"></script><!-- endinject -->
<!-- Custom js for this page-->
<script src="{{asset('public/js/dashboard.js')}}"></script>
<!-- End custom js for this page-->

<!-- Javascript -->
<script src="{{asset('public/js/jquery.min.js')}}"></script>
<script src="{{asset('public/js/bootstrap.min.js')}}"></script>
<script src="{{asset('public/js/jquery.slimscroll.min.js')}}"></script>
<script src="{{asset('public/js/jquery.easypiechart.min.js')}}"></script>
<script src="{{asset('public/js/chartist.min.js')}}"></script>
{{--<script src="{{asset('public/js/klorofil-common.js')}}"></script>--}}

<script>
    $(document).ready(function() {

        /*-----------------------------------/
        /*	TOP NAVIGATION AND LAYOUT
        /*----------------------------------*/

        $('.btn-toggle-fullwidth').click(function() {
            if(!$('body').hasClass('layout-fullwidth')) {
                $('body').addClass('layout-fullwidth');

            } else {
                $('body').removeClass('layout-fullwidth');
                $('body').removeClass('layout-default'); // also remove default behaviour if set
            }

            $(this).find('.lnr').toggleClass('lnr-arrow-left-circle lnr-arrow-right-circle');

            if($(window).innerWidth() < 1025) {
                if(!$('body').hasClass('offcanvas-active')) {
                    $('body').addClass('offcanvas-active');
                } else {
                    $('body').removeClass('offcanvas-active');
                }
            }
        });

        $(window).load(function() {
            if($(window).innerWidth() < 1025) {
                $('.btn-toggle-fullwidth').find('.icon-arrows')
                    .removeClass('icon-arrows-move-left')
                    .addClass('icon-arrows-move-right');
            }

            // adjust right sidebar top position
            $('.right-sidebar').css('top', $('.navbar').innerHeight());

            // if page has content-menu, set top padding of main-content
            if($('.has-content-menu').length > 0) {
                $('.navbar + .main-content').css('padding-top', $('.navbar').innerHeight());
            }

            // for shorter main content
            if($('.main').height() < $('#sidebar-nav').height()) {
                $('.main').css('min-height', $('#sidebar-nav').height());
            }
        });


        /*-----------------------------------/
        /*	SIDEBAR NAVIGATION
        /*----------------------------------*/

        $('.sidebar a[data-toggle="collapse"]').click(function() {
            if($(this).hasClass('collapsed')) {
                $(this).addClass('active');
            } else {
                $(this).removeClass('active');
            }
        });

        if( $('.sidebar-scroll').length > 0 ) {
            $('.sidebar-scroll').slimScroll({
                height: '95%',
                wheelStep: 2,
            });
        }


        /*-----------------------------------/
        /*	PANEL FUNCTIONS
        /*----------------------------------*/

        // panel remove
        $('.panel .btn-remove').click(function(e){

            e.preventDefault();
            $(this).parents('.panel').fadeOut(300, function(){
                $(this).remove();
            });
        });

        // panel collapse/expand
        var affectedElement = $('.panel-body');

        $('.panel .btn-toggle-collapse').clickToggle(
            function(e) {
                e.preventDefault();

                // if has scroll
                if( $(this).parents('.panel').find('.slimScrollDiv').length > 0 ) {
                    affectedElement = $('.slimScrollDiv');
                }

                $( ".panel-body" ).slideUp( "slow", function() {
                    $('.panel').css('width', '600px');
                });

                $(this).find('i.lnr-chevron-up').toggleClass('lnr-chevron-down');
            },
            function(e) {
                e.preventDefault();

                // if has scroll
                if( $(this).parents('.panel').find('.slimScrollDiv').length > 0 ) {
                    affectedElement = $('.slimScrollDiv');
                }

                $( ".panel-body" ).slideDown( "slow", function(){
                    $('.panel').css('width', '600px');
                });
                $(this).find('i.lnr-chevron-up').toggleClass('lnr-chevron-down');
            }
        );


        /*-----------------------------------/
        /*	PANEL SCROLLING
        /*----------------------------------*/

        if( $('.panel-scrolling').length > 0) {
            $('.panel-scrolling .panel-body').slimScroll({
                height: '430px',
                wheelStep: 2,
            });
        }

        if( $('#panel-scrolling-demo').length > 0) {
            $('#panel-scrolling-demo .panel-body').slimScroll({
                height: '175px',
                wheelStep: 2,
            });
        }

        /*-----------------------------------/
        /*	TODO LIST
        /*----------------------------------*/

        $('.todo-list input').change( function() {
            if( $(this).prop('checked') ) {
                $(this).parents('li').addClass('completed');
            }else {
                $(this).parents('li').removeClass('completed');
            }
        });


        /*-----------------------------------/
        /* TOASTR NOTIFICATION
        /*----------------------------------*/

        if($('#toastr-demo').length > 0) {
            toastr.options.timeOut = "false";
            toastr.options.closeButton = true;
            toastr['info']('Hi there, this is notification demo with HTML support. So, you can add HTML elements like <a href="#">this link</a>');

            $('.btn-toastr').on('click', function() {
                $context = $(this).data('context');
                $message = $(this).data('message');
                $position = $(this).data('position');

                if($context == '') {
                    $context = 'info';
                }

                if($position == '') {
                    $positionClass = 'toast-left-top';
                } else {
                    $positionClass = 'toast-' + $position;
                }

                toastr.remove();
                toastr[$context]($message, '' , { positionClass: $positionClass });
            });

            $('#toastr-callback1').on('click', function() {
                $message = $(this).data('message');

                toastr.options = {
                    "timeOut": "300",
                    "onShown": function() { alert('onShown callback'); },
                    "onHidden": function() { alert('onHidden callback'); }
                }

                toastr['info']($message);
            });

            $('#toastr-callback2').on('click', function() {
                $message = $(this).data('message');

                toastr.options = {
                    "timeOut": "10000",
                    "onclick": function() { alert('onclick callback'); },
                }

                toastr['info']($message);

            });

            $('#toastr-callback3').on('click', function() {
                $message = $(this).data('message');

                toastr.options = {
                    "timeOut": "10000",
                    "closeButton": true,
                    "onCloseClick": function() { alert('onCloseClick callback'); }
                }

                toastr['info']($message);
            });
        }
    });

    // toggle function
    $.fn.clickToggle = function( f1, f2 ) {
        return this.each( function() {
            var clicked = false;
            $(this).bind('click', function() {
                if(clicked) {
                    clicked = false;
                    return f2.apply(this, arguments);
                }

                clicked = true;
                return f1.apply(this, arguments);
            });
        });

    }
</script>
</body>

</html>