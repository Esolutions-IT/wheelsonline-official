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

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{asset('public/css/admin-portal.css')}}">
    <!-- endinject -->
    <link rel="shortcut icon" href="images/favicon.png" />

    <style>
        /*.panel{*/
            /*width:600px!important;*/
        /*}*/
        .sidebar .nav .nav{
            background-color:white;
        }
        .users {cursor: pointer;}
        .orders {cursor: pointer;}
        .rollen {cursor: pointer;}
        .onorders {cursor: pointer;}
        .best {cursor: pointer;}
        .cat {cursor: pointer;}
        .nieuw {cursor: pointer;}

        .pagination{
            margin:0px 0;
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
                        <span class="count">{{$count}}</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
                        <a class="dropdown-item">
                            <p class="mb-0 font-weight-normal float-left">Notificaties
                            </p>
                            <span class="badge badge-pill badge-warning float-right">Bekijken</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        @foreach($week as $users)
                        <a class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                                <div class="preview-icon bg-info">
                                    <i class="mdi mdi-email-outline mx-0"></i>
                                </div>
                            </div>
                            <div class="preview-item-content">
                                <h6 class="preview-subject font-weight-medium text-dark">Nieuwe User Registratie</h6>
                                <p class="font-weight-light small-text">
                                    {{$users->name}}
                                </p>
                            </div>
                        </a>
                        @endforeach
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
                    <a class="nav-link" href="{{route('admin-portal')}}">
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
                                <a class="nav-link" href="{{URL::to('/admin-portal/categorie')}}">Categorie</a>
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
                                <a class="nav-link" href="{{url('/admin-portal/users')}}">Klanten</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{url('/admin-portal/rollen')}}">Klant Rollen</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{url('/admin-portal/online')}}">Klanten Online</a>
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
                <a class="btn purchase-button mt-4 mt-md-0" href="{{route('landing')}}">Terug naar Home</a>
                  {{--target="_blank"--}}
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
                                            <h3 class="font-weight-medium text-right mb-0">{{$count_orders}}</h3>
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
                                            <h3 class="font-weight-medium text-right mb-0">{{$count_werknemers}}</h3>
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
                    <div class="col-lg-7 grid-margin stretch-card" style="height:200px;">
                        <!--weather card-->
                        <div class="card card-weather">
                            <div class="card-body" id="card_buttons2">
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

                                var months = ["januari", "februari", "maart", "april", "mei", "juni", "juli", "augustus", "september", "oktober", "november", "december"];
                                document.getElementById("maand").innerHTML = d.getDate() + " " + months [d.getMonth()]+ " " + d.getFullYear() + ", " + d.getHours() + ":" + d.getMinutes();

                            </script>
                            <div class="card-body p-0" style="margin-top:-70px;" id="card_buttons">
                                <div class="d-flex weakly-weather">
                                    <div class="weakly-weather-item users" id="users_click">
                                        <i class="fas fa-users" style="font-size:40px;"></i>
                                        <p class="mb-1" style="font-size:10px; margin-top:5px;">Users</p>
                                    </div>
                                    <div class="weakly-weather-item orders" id="card3">
                                        <i class="fas fa-check" style="font-size:40px;"></i>
                                        <p class="mb-1" style="font-size:10px; margin-top:5px;">Orders</p>
                                    </div>
                                    <div class="weakly-weather-item orders" id="card4">
                                        <i class="far fa-times-circle" style="font-size:40px;"></i>
                                        <p class="mb-1" style="font-size:9px; margin-top:5px;">Onafgeronde orders</p>
                                    </div>
                                    <div class="weakly-weather-item rollen" id="card2">
                                        <i class="fas fa-award" style="font-size:40px;"></i>
                                        <p class="mb-1" style="font-size:10px; margin-top:5px;">Rollen</p>
                                    </div>
                                    <div class="weakly-weather-item cat" id="card6">
                                        <i class="fas fa-archive" style="font-size:40px;"></i>
                                        <p class="mb-1" style="font-size:10px; margin-top:5px;">Categorieën</p>
                                    </div>
                                    <div class="weakly-weather-item nieuw" id="card7">
                                        <i class="fas fa-book" style="font-size:40px;"></i>
                                        <p class="mb-1" style="font-size:9px; margin-top:5px;">Nieuwste Producten</p>
                                    </div>
                                    <div class="weakly-weather-item best" id="card5">
                                        <i class="fas fa-cart-arrow-down" style="font-size:40px;"></i>
                                        <p class="mb-1" style="font-size:10px; margin-top:5px;">Bestsellers</p>
                                    </div>
                                </div>
                            </div>
                            <i class="fas fa-arrow-right" id="arrow-rightt" style="font-size:30px; display: none; cursor: pointer; z-index: 99999;"></i>
                            <p id="text_onderdeel" style="text-align: center; margin-top:30px; display:block;">Klik hierboven op een onderdeel om erheen te gaan!</p>
                        </div>
                        <!--weather card ends-->
                    </div>
                        <div class="col-md-5 grid-margin stretch-card">
                            <div class="panel" id="panel2">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Recent aangemaakte Users</h3>
                                    <div class="right">
                                        <button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
                                        <button type="button" class="btn-remove"><i class="lnr lnr-cross"></i></button>

                                    </div>
                                </div>
                                <div class="panel-body no-padding" id="panel_body2">
                                    <table class="table table-striped">
                                        <thead>
                                        <tr>
                                            <th>User ID</th>
                                            <th>Volledige Naam</th>
                                            <th>Telefoon</th>
                                            <th>Email</th>
                                            <th style="display:none;" id="users_straat">Acties</th>
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
                                            <td id="users_straat2" style="display: none"><i class="fas fa-pen" style="padding-right: 10px;"></i> <i class="far fa-trash-alt" style="padding-right: 10px;"></i> <i class="fas fa-arrow-right"></i></td>
                                            {{--<td><span class="label label-success">COMPLETED</span></td>--}}
                                        </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <div class="panel-footer">
                                    <div class="row">
                                        <?php echo $week->render(); ?>
                                        <div class="col-md-6 text-right"><a href="#" class="btn btn-primary">Bekijk alle users</a></div>
                                    </div>
                                </div>
                            </div>
                            <!-- END RECENT PURCHASES -->
                        </div>
                    <div class="col-lg-7 grid-margin stretch-card">
                        <div class="panel" id="panel" style="width:100%!important;">
                            <div class="panel-heading orders_panel" id="orders">
                                <h3 class="panel-title">Orders</h3>
                                <div class="right">
                                    <button type="button" class="btn-toggle-collapse2"><i class="lnr lnr-chevron-up"></i></button>
                                    <button type="button" class="btn-remove"><i class="lnr lnr-cross"></i></button>
                                </div>
                            </div>
                            <div class="panel-body no-padding" id="panel_body">
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                        <tr>
                                            <th>
                                                Order ID
                                            </th>

                                            <th>
                                                Klant
                                            </th>

                                            <th>
                                                Order Status

                                            </th>
                                            <th>
                                                Betaal status
                                            </th>
                                            <th>
                                                Verzendstatus
                                            </th>
                                            <th>
                                                Aangemaakt op
                                            </th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($orders as $order)
                                            <tr>
                                                <td class="font-weight-medium">
                                                    {{$order->order_id}}
                                                </td>
                                                <td>
                                                    {{$order->klant}}
                                                </td>
                                                <td>
                                                   {{$order->order_status}}
                                                </td>
                                                <td>
                                                    {{$order->betaal_status}}
                                                </td>
                                                @if($order->verzend_status == 'Nog niet verzonden')
                                                    <td class="text-primary">
                                                        {{$order->verzend_status}}
                                                    </td>
                                                @elseif($order->verzend_status == 'Verzonden')
                                                    <td class="text-warning">
                                                        {{$order->verzend_status}}
                                                    </td>
                                                @elseif($order->verzend_status == 'Afgeleverd')
                                                    <td class="text-success">
                                                        {{$order->verzend_status}}
                                                    </td>
                                                @endif
                                                <td>
                                                    {{$order->created_at}}
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="panel-footer">
                                <div class="row">
                                    <?php echo $orders->render(); ?>
                                    <div class="col-md-6 text-right"><a href="#" class="btn btn-primary">Bekijk alle Orders</a></div>
                                </div>
                            </div>
                        </div>
                        <!-- END RECENT PURCHASES -->
                    </div>

                    <div class="col-lg-5 grid-margin stretch-card">
                        <div class="panel" id="panel5" style="width:100%!important;">
                            <div class="panel-heading orders_panel" id="orders">
                                <h3 class="panel-title">Onafgeronde Orders</h3>
                                <div class="right">
                                    <button type="button" class="btn-toggle-collapse5"><i class="lnr lnr-chevron-up"></i></button>
                                    <button type="button" class="btn-remove"><i class="lnr lnr-cross"></i></button>
                                </div>
                            </div>
                            <div class="panel-body no-padding" id="panel_body5">
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                        <tr>
                                            <th>
                                                Order ID
                                            </th>

                                            <th>
                                                Klant
                                            </th>

                                            <th>
                                                Aangemaakt op

                                            </th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($orders as $order)
                                            <tr>
                                                <td class="font-weight-medium">
                                                    {{$order->order_id}}
                                                </td>
                                                <td>
                                                    {{$order->klant}}
                                                </td>
                                                <td>
                                                    {{$order->created_at}}
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="panel-footer">
                                <div class="row">
                                    <?php echo $orders->render(); ?>
                                    <div class="col-md-6 text-right"><a href="#" class="btn btn-primary">Bekijk alle Orders</a></div>
                                </div>
                            </div>
                        </div>
                        <!-- END RECENT PURCHASES -->
                    </div>

                    <div class="col-lg-6 grid-margin stretch-card">
                        <div class="panel" id="panel3" style="width:100%!important;">
                            <div class="panel-heading" id="rollen">
                                <h3 class="panel-title">Gebruikers Rollen</h3>
                                <div class="right">
                                    <button type="button" class="btn-toggle-collapse3"><i class="lnr lnr-chevron-up"></i></button>
                                    <button type="button" class="btn-remove"><i class="lnr lnr-cross"></i></button>
                                </div>
                            </div>
                            <div class="panel-body no-padding" id="panel_body3">
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                        <tr>
                                            <th>
                                                Rol ID
                                            </th>

                                            <th>
                                                Rol naam
                                            </th>

                                            <th>
                                                Actief
                                            </th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($rols as $rollen)
                                            <tr>
                                                <td class="font-weight-medium">
                                                    {{$rollen->rol_id}}
                                                </td>
                                                <td>
                                                    {{$rollen->rol_naam}}
                                                </td>
                                                <td>
                                                    {{$rollen->actief}}
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="panel-footer">
                                <div class="row">

                                </div>
                            </div>
                        </div>
                        <!-- END RECENT PURCHASES -->
                    </div>
                    <div class="col-lg-6 grid-margin stretch-card">
                        <div class="panel catt" id="panel4" style="width:100%!important;">
                            <div class="panel-heading">
                                <h3 class="panel-title">Categorieën</h3>
                                <div class="right">
                                    <button type="button" class="btn-toggle-collapse4"><i class="lnr lnr-chevron-up"></i></button>
                                    <button type="button" class="btn-remove"><i class="lnr lnr-cross"></i></button>
                                </div>
                            </div>
                            <div class="panel-body no-padding" id="panel_body4">
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                        <tr>
                                            <th>
                                                Categorie ID
                                            </th>

                                            <th>
                                                Categorie naam
                                            </th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($category_producten as $cat)
                                            <tr>
                                                <td class="font-weight-medium">
                                                    {{$cat->category_id}}
                                                </td>
                                                <td>
                                                    {{$cat->category_name}}
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="panel-footer">
                                <div class="row">
                                    <?php echo $category_producten->render(); ?>
                                </div>
                            </div>
                        </div>
                        <!-- END RECENT PURCHASES -->
                    </div>

                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="panel np" id="panel6" style="width:100%!important;">
                        <div class="panel-heading">
                            <h3 class="panel-title">Nieuwste Producten</h3>
                            <div class="right">
                                <button type="button" class="btn-toggle-collapse6"><i class="lnr lnr-chevron-up"></i></button>
                                <button type="button" class="btn-remove"><i class="lnr lnr-cross"></i></button>
                            </div>
                        </div>
                        <div class="panel-body no-padding" id="panel_body6">
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th>
                                            Product ID
                                        </th>

                                        <th>
                                            Product naam
                                        </th>
                                        <th>
                                            Prijs
                                        </th>
                                        <th>
                                            Status
                                        </th>
                                        <th>
                                            Categorie
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($producten as $products)
                                        <tr>
                                            <td class="font-weight-medium">
                                                {{$products->product_id}}
                                            </td>
                                            <td>
                                                {{$products->product_name}}
                                            </td>
                                            <td>
                                                {{$products->prijs}}
                                            </td>
                                            @if($products->status == 'Op voorraad')
                                                <td style="color:#00ce68;">
                                                    {{$products->status}}
                                                </td>
                                            @endif
                                            <td>
                                                {{$products->icoontjes}}
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="panel-footer">
                            <div class="row">
                                <?php echo $producten->render();?>
                                <div class="col-md-6 text-right"><a href="#" class="btn btn-primary">Bekijk alle Producten</a></div>
                            </div>
                        </div>
                    </div>
                    <!-- END RECENT PURCHASES -->
                </div>

                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="panel np" id="panel7" style="width:100%!important;">
                        <div class="panel-heading">
                            <h3 class="panel-title">Bestsellers</h3>
                            <div class="right">
                                <button type="button" class="btn-toggle-collapse7"><i class="lnr lnr-chevron-up"></i></button>
                                <button type="button" class="btn-remove"><i class="lnr lnr-cross"></i></button>
                            </div>
                        </div>
                        <div class="panel-body no-padding" id="panel_body7">
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th>
                                            Product ID
                                        </th>

                                        <th>
                                            Product naam
                                        </th>
                                        <th>
                                            Prijs
                                        </th>
                                        <th>
                                            Status
                                        </th>
                                        <th>
                                            Categorie
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($producten as $products)
                                        <tr>
                                            <td class="font-weight-medium">
                                                {{$products->product_id}}
                                            </td>
                                            <td>
                                                {{$products->product_name}}
                                            </td>
                                            <td>
                                                {{$products->prijs}}
                                            </td>
                                            @if($products->status == 'Op voorraad')
                                            <td style="color:#00ce68;">
                                                {{$products->status}}
                                            </td>
                                            @endif
                                            <td>
                                                {{$products->icoontjes}}
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="panel-footer">
                            <div class="row">
                                <?php echo $producten->render();?>
                                <div class="col-md-6 text-right"><a href="#" class="btn btn-primary">Bekijk alle Bestsellers</a></div>
                            </div>
                        </div>
                    </div>
                    <!-- END RECENT PURCHASES -->
                </div>

                </div>

            </div>
            <!-- content-wrapper ends -->
            <!-- partial:partials/_footer.html -->
            <footer class="footer">
                <div class="container-fluid clearfix">
            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2018
              <a href="http://www.bootstrapdash.com/" target="_blank">wheelsonline</a>. All rights reserved.</span>
                    <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">made by Esolutions-IT
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

        $('#panel2 .btn-toggle-collapse').clickToggle(
            function(e) {
                e.preventDefault();

                // if has scroll
                if( $(this).parents('.panel').find('.slimScrollDiv').length > 0 ) {
                    affectedElement = $('.slimScrollDiv');
                }

                $( "#panel_body2" ).slideUp( "slow", function() {
                    $('#panel2').css('width', '600px');
                });

                $(this).find('i.lnr-chevron-up').toggleClass('lnr-chevron-down');
            },
            function(e) {
                e.preventDefault();

                // if has scroll
                if( $(this).parents('.panel').find('.slimScrollDiv').length > 0 ) {
                    affectedElement = $('.slimScrollDiv');
                }

                $( "#panel_body2" ).slideDown( "slow", function(){
                    $('#panel2').css('width', '600px');
                });
                $(this).find('i.lnr-chevron-up').toggleClass('lnr-chevron-down');
            }
        );

        $('#panel .btn-toggle-collapse2').clickToggle(
            function(e) {
                e.preventDefault();

                // if has scroll
                if( $(this).parents('#panel').find('.slimScrollDiv').length > 0 ) {
                    affectedElement = $('.slimScrollDiv');
                }

                $( "#panel_body" ).slideUp( "slow", function() {
                    $('#panel').css('width', '100%');
                });

                $(this).find('i.lnr-chevron-up').toggleClass('lnr-chevron-down');
            },
            function(e) {
                e.preventDefault();

                // if has scroll
                if( $(this).parents('#panel').find('.slimScrollDiv').length > 0 ) {
                    affectedElement = $('.slimScrollDiv');
                }

                $( "#panel_body" ).slideDown( "slow", function(){
                    $('#panel').css('width', '100%');
                });
                $(this).find('i.lnr-chevron-up').toggleClass('lnr-chevron-down');
            }
        );

        $('#panel3 .btn-toggle-collapse3').clickToggle(
            function(e) {
                e.preventDefault();

                // if has scroll
                if( $(this).parents('.panel').find('.slimScrollDiv').length > 0 ) {
                    affectedElement = $('.slimScrollDiv');
                }

                $( "#panel_body3" ).slideUp( "slow", function() {
                    $('#panel3').css('width', '600px');
                });

                $(this).find('i.lnr-chevron-up').toggleClass('lnr-chevron-down');
            },
            function(e) {
                e.preventDefault();

                // if has scroll
                if( $(this).parents('.panel').find('.slimScrollDiv').length > 0 ) {
                    affectedElement = $('.slimScrollDiv');
                }

                $( "#panel_body3" ).slideDown( "slow", function(){
                    $('#panel3').css('width', '600px');
                });
                $(this).find('i.lnr-chevron-up').toggleClass('lnr-chevron-down');
            }
        );

        $('#panel4 .btn-toggle-collapse4').clickToggle(
            function(e) {
                e.preventDefault();

                // if has scroll
                if( $(this).parents('.panel').find('.slimScrollDiv').length > 0 ) {
                    affectedElement = $('.slimScrollDiv');
                }

                $( "#panel_body4" ).slideUp( "slow", function() {
                    $('#panel4').css('width', '100%');
                });

                $(this).find('i.lnr-chevron-up').toggleClass('lnr-chevron-down');
            },
            function(e) {
                e.preventDefault();

                // if has scroll
                if( $(this).parents('.panel').find('.slimScrollDiv').length > 0 ) {
                    affectedElement = $('.slimScrollDiv');
                }

                $( "#panel_body4" ).slideDown( "slow", function(){
                    $('#panel4').css('width', '100%');
                });
                $(this).find('i.lnr-chevron-up').toggleClass('lnr-chevron-down');
            }
        );

        $('#panel5 .btn-toggle-collapse5').clickToggle(
            function(e) {
                e.preventDefault();

                // if has scroll
                if( $(this).parents('.panel').find('.slimScrollDiv').length > 0 ) {
                    affectedElement = $('.slimScrollDiv');
                }

                $( "#panel_body5" ).slideUp( "slow", function() {
                    $('#panel5').css('width', '100%');
                });

                $(this).find('i.lnr-chevron-up').toggleClass('lnr-chevron-down');
            },
            function(e) {
                e.preventDefault();

                // if has scroll
                if( $(this).parents('.panel').find('.slimScrollDiv').length > 0 ) {
                    affectedElement = $('.slimScrollDiv');
                }

                $( "#panel_body5" ).slideDown( "slow", function(){
                    $('#panel5').css('width', '100%');
                });
                $(this).find('i.lnr-chevron-up').toggleClass('lnr-chevron-down');
            }
        );

        $('#panel6 .btn-toggle-collapse6').clickToggle(
            function(e) {
                e.preventDefault();

                // if has scroll
                if( $(this).parents('.panel').find('.slimScrollDiv').length > 0 ) {
                    affectedElement = $('.slimScrollDiv');
                }

                $( "#panel_body6" ).slideUp( "slow", function() {
                    $('#panel6').css('width', '100%');
                });

                $(this).find('i.lnr-chevron-up').toggleClass('lnr-chevron-down');
            },
            function(e) {
                e.preventDefault();

                // if has scroll
                if( $(this).parents('.panel').find('.slimScrollDiv').length > 0 ) {
                    affectedElement = $('.slimScrollDiv');
                }

                $( "#panel_body6" ).slideDown( "slow", function(){
                    $('#panel6').css('width', '100%');
                });
                $(this).find('i.lnr-chevron-up').toggleClass('lnr-chevron-down');
            }
        );

        $('#panel7 .btn-toggle-collapse7').clickToggle(
            function(e) {
                e.preventDefault();

                // if has scroll
                if( $(this).parents('.panel').find('.slimScrollDiv').length > 0 ) {
                    affectedElement = $('.slimScrollDiv');
                }

                $( "#panel_body7" ).slideUp( "slow", function() {
                    $('#panel7').css('width', '100%');
                });

                $(this).find('i.lnr-chevron-up').toggleClass('lnr-chevron-down');
            },
            function(e) {
                e.preventDefault();

                // if has scroll
                if( $(this).parents('.panel').find('.slimScrollDiv').length > 0 ) {
                    affectedElement = $('.slimScrollDiv');
                }

                $( "#panel_body7" ).slideDown( "slow", function(){
                    $('#panel7').css('width', '100%');
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

    $('#users_click').clickToggle(
        function(e) {
            e.preventDefault();

            // if has scroll
            if( $(this).parents('#card_buttons').find('.slimScrollDiv').length > 0 ) {
                affectedElement = $('.slimScrollDiv');
            }

            $( "#card_buttons" ).animate({'width': '83px'},function () {
               document.getElementById('card2').style.display = 'none';
                document.getElementById('card3').style.display = 'none';
                document.getElementById('card4').style.display = 'none';
                document.getElementById('card5').style.display = 'none';
                document.getElementById('card6').style.display = 'none';
                document.getElementById('card7').style.display = 'none';

                document.getElementById('users_straat').style.display = 'block';
                document.getElementById('users_straat2').style.display = 'block';
                document.getElementById('arrow-rightt').style.display = 'block';
                document.getElementById('text_onderdeel').style.display = 'none';

            });
            $( "#card_buttons2" ).animate({'width': '280px'});

            $( "#panel2" ).animate({'margin-left': '-460px', 'width': '1000px'});


        });

    $('#arrow-rightt').clickToggle(
        function(e) {
            e.preventDefault();

            // if has scroll
            if( $(this).parents('#card_buttons').find('.slimScrollDiv').length > 0 ) {
                affectedElement = $('.slimScrollDiv');
            }

            $( "#card_buttons" ).animate({'width': '100%'},function () {
                document.getElementById('card2').style.display = 'block';
                document.getElementById('card3').style.display = 'block';
                document.getElementById('card4').style.display = 'block';
                document.getElementById('card5').style.display = 'block';
                document.getElementById('card6').style.display = 'block';
                document.getElementById('card7').style.display = 'block';

                document.getElementById('users_straat').style.display = 'none';
                document.getElementById('users_straat2').style.display = 'none';
                document.getElementById('arrow-rightt').style.display = 'none';
                document.getElementById('text_onderdeel').style.display = 'block';

            });
            $( "#card_buttons2" ).animate({'width': '100%'});

            $( "#panel2" ).animate({'margin-left': '', 'width': '100%'});


        });

    $(".orders").click(function() {
        $('html,body').animate({
                scrollTop: $(".orders_panel").offset().top},
            'slow');
    });
    $(".rollen").click(function() {
        $('html,body').animate({
                scrollTop: $("#rollen").offset().top},
            'slow');
    });

    $(".cat").click(function() {
        $('html,body').animate({
                scrollTop: $(".catt").offset().top},
            'slow');
    });
    $(".nieuw").click(function() {
        $('html,body').animate({
                scrollTop: $(".np").offset().top},
            'slow');
    });
</script>
</body>

</html>