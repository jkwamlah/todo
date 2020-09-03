<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nago - Admin & Dashboard HTML Template</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/media/image/favicon.png') }}" />

    <!-- Plugin styles -->
    <link rel="stylesheet" href="{{ asset('assets/vendors/bundle.css') }}" type="text/css">

    <!-- quill -->
    <link href="{{ asset('assets/vendors/quill/quill.snow.css') }}" rel="stylesheet" type="text/css">

    <!-- Clockpicker -->
    <link rel="stylesheet" href="{{ asset('assets/vendors/clockpicker/bootstrap-clockpicker.min.css') }}" type="text/css">

    <!-- Datepicker -->
    <link rel="stylesheet" href="{{ asset('assets/vendors/datepicker/daterangepicker.css') }}" type="text/css">

    <!-- Select2 -->
    <link rel="stylesheet" href="{{ asset('assets/vendors/select2/css/select2.min.css') }}" type="text/css">

    <!-- App styles -->
    <link rel="stylesheet" href="{{ asset('assets/assets/css/app.min.css') }}" type="text/css">
</head>

<body class="stretch-layout small-navigation">

<!-- begin::preloader-->
<div class="preloader">
    <div class="preloader-icon"></div>
</div>
<!-- end::preloader -->

<!-- BEGIN: Sidebar Group -->
<div class="sidebar-group">

    <!-- BEGIN: User Menu -->
    <div class="sidebar" id="user-menu">
        <div class="py-4 text-center" data-backround-image="{{ asset('assets/assets/media/image/image1.jpg') }}">
            <figure class="avatar avatar-lg mb-3 border-0">
                <img src="{{ asset('assets/media/image/user/women_avatar1.jpg') }}" class="rounded-circle" alt="image">
            </figure>
            <h5 class="d-flex align-items-center justify-content-center">Roxana Roussell</h5>
            <div>
                Balance: <strong>$500</strong>
            </div>
        </div>
        <div class="card mb-0 card-body shadow-none">
            <div class="mb-4">
                <div class="list-group list-group-flush">
                    <a href="profile.html" class="list-group-item p-l-r-0">Profile</a>
                    <a href="#" class="list-group-item p-l-r-0 d-flex">Followers</a>
                    <a href="mail.html" class="list-group-item p-l-r-0 d-flex">
                        Inbox <span class="badge badge-danger ml-auto">2</span>
                    </a>
                    <a href="#" class="list-group-item p-l-r-0">Billing</a>
                    <a href="#" class="list-group-item p-l-r-0" data-sidebar-target="#settings">Settings</a>
                    <a href="login.html" class="list-group-item p-l-r-0 text-danger" data-sidebar-target="#settings">Sign Out!</a>
                </div>
            </div>
            <div class="mb-4">
                <h6 class="d-flex justify-content-between">
                    Completed Tasks
                    <span class="float-right">%68</span>
                </h6>
                <div class="progress" style="height:5px;">
                    <div class="progress-bar bg-secondary" role="progressbar" style="width: 68%;" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
            <div class="mb-4">
                <h6 class="d-flex justify-content-between">
                    Storage
                    <span>%25</span>
                </h6>
                <div class="progress" style="height: 5px;">
                    <div class="progress-bar bg-info" role="progressbar" style="width: 40%;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
            <div class="mb-4">
                <h6>About</h6>
                <p class="text-muted mb-0">I love reading, traveling and discovering new things. You need to be happy in life.
                </p>
            </div>
            <div class="mb-4">
                <h6>City</h6>
                <p class="text-muted mb-0">Germany / Berlin</p>
            </div>
            <div class="mb-4">
                <h6>Social Links</h6>
                <ul class="list-inline">
                    <li class="list-inline-item">
                        <a href="#" class="btn btn-sm btn-floating btn-facebook">
                            <i class="fa fa-facebook"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#" class="btn btn-sm btn-floating btn-twitter">
                            <i class="fa fa-twitter"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#" class="btn btn-sm btn-floating btn-dribbble">
                            <i class="fa fa-dribbble"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#" class="btn btn-sm btn-floating btn-whatsapp">
                            <i class="fa fa-whatsapp"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#" class="btn btn-sm btn-floating btn-linkedin">
                            <i class="fa fa-linkedin"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- END: User Menu -->

    <!-- BEGIN: Settings -->
    <div class="sidebar" id="settings">
        <div class="card">
            <div class="card-body">
                <h6 class="card-title">Settings</h6>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item pl-0 pr-0">
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="customSwitch1" checked>
                            <label class="custom-control-label" for="customSwitch1">Allow notifications.</label>
                        </div>
                    </li>
                    <li class="list-group-item pl-0 pr-0">
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="customSwitch2">
                            <label class="custom-control-label" for="customSwitch2">Hide user requests</label>
                        </div>
                    </li>
                    <li class="list-group-item pl-0 pr-0">
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="customSwitch3" checked>
                            <label class="custom-control-label" for="customSwitch3">Speed up demands</label>
                        </div>
                    </li>
                    <li class="list-group-item pl-0 pr-0">
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="customSwitch4" checked>
                            <label class="custom-control-label" for="customSwitch4">Hide menus</label>
                        </div>
                    </li>
                    <li class="list-group-item pl-0 pr-0">
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="customSwitch5">
                            <label class="custom-control-label" for="customSwitch5">Remember next visits</label>
                        </div>
                    </li>
                    <li class="list-group-item pl-0 pr-0">
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="customSwitch6">
                            <label class="custom-control-label" for="customSwitch6">Enable report
                                generation.</label>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- END: Settings -->

</div>
<!-- END: Sidebar Group -->

<!-- begin::main -->
<div class="layout-wrapper">

    <!-- begin::header -->
    <div class="header d-print-none">

        <div class="header-left">
            <div class="navigation-toggler">
                <a href="#" data-action="navigation-toggler">
                    <i data-feather="menu"></i>
                </a>
            </div>
            <div class="header-logo">
                <a href=index.html>
                    <img class="logo" src="{{ asset('assets/media/image/logo.png') }}" alt="logo">
                    <img class="logo-light" src="{{ asset('assets/media/image/logo-light.png') }}" alt="light logo">
                </a>
            </div>
        </div>

        <div class="header-body">
            <div class="header-body-left">
                <div class="page-title">
                    <h4>Todo List</h4>
                </div>
            </div>
            <div class="header-body-right">
                <ul class="navbar-nav">

                    <li class="nav-item">
                        <a href="#" title="Language" class="nav-link" data-toggle="dropdown">
                            <img width="18" src="{{ asset('assets/media/image/flags/262-united-kingdom.png') }}" alt="flag" class="mr-2 rounded" title="United Kingdom"> EN
                        </a>
                        <div class="dropdown-menu">
                            <a href="#" class="dropdown-item">
                                <img width="18" src="{{ asset('assets/media/image/flags/003-tanzania.png') }}" class="mr-2 rounded" alt="flag"> Tanzania
                            </a>
                            <a href="#" class="dropdown-item">
                                <img width="18" src="{{ asset('assets/media/image/flags/261-china.png') }}" class="mr-2 rounded" alt="flag"> China
                            </a>
                            <a href="#" class="dropdown-item">
                                <img width="18" src="{{ asset('assets/media/image/flags/013-tunisia.png') }}" class="mr-2 rounded" alt="flag"> Tunisia
                            </a>
                            <a href="#" class="dropdown-item">
                                <img width="18" src="{{ asset('assets/media/image/flags/044-spain.png') }}" class="mr-2 rounded" alt="flag"> Spain
                            </a>
                        </div>
                    </li>

                    <!-- begin::header fullscreen -->
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link" title="Fullscreen" data-toggle="fullscreen">
                            <i class="maximize" data-feather="maximize"></i>
                            <i class="minimize" data-feather="minimize"></i>
                        </a>
                    </li>
                    <!-- end::header fullscreen -->

                    <!-- begin::header search -->
                    <li class="nav-item">
                        <a href="#" class="nav-link" title="Search" data-toggle="dropdown">
                            <i data-feather="search"></i>
                        </a>
                        <div class="dropdown-menu p-2 dropdown-menu-right">
                            <form>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search">
                                    <div class="input-group-prepend">
                                        <button class="btn" type="button">
                                            <i data-feather="search"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </li>
                    <!-- end::header search -->

                    <!-- begin::apps -->
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link" title="Apps" data-toggle="dropdown">
                            <i data-feather="box"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-big">
                            <div class="bg-dark p-4 text-center d-flex justify-content-between">
                                <h5 class="mb-0">Apps</h5>
                            </div>
                            <div class="p-3">
                                <div class="row row-xs">
                                    <div class="col-6">
                                        <a href="chat.html">
                                            <div class="border-radius-1 text-center mb-3">
                                                <figure class="avatar avatar-lg border-0">
                                                        <span class="avatar-title bg-primary text-white rounded-circle">
                                                    <i class="width-30 height-30" data-feather="message-circle"></i>
                                                </span>
                                                </figure>
                                                <div class="mt-2">Chat</div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-6">
                                        <a href="mail.html">
                                            <div class="border-radius-1 text-center mb-3">
                                                <figure class="avatar avatar-lg border-0">
                                                        <span class="avatar-title bg-secondary text-white rounded-circle">
                                                    <i class="width-30 height-30" data-feather="mail"></i>
                                                </span>
                                                </figure>
                                                <div class="mt-2">Mail</div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-6">
                                        <a href="todo-list.html">
                                            <div class="border-radius-1 text-center">
                                                <figure class="avatar avatar-lg border-0">
                                                        <span class="avatar-title bg-info text-white rounded-circle">
                                                    <i class="width-30 height-30" data-feather="check-circle"></i>
                                                </span>
                                                </figure>
                                                <div class="mt-2">Todo List</div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-6">
                                        <a href="file-manager.html">
                                            <div class="border-radius-1 text-center">
                                                <figure class="avatar avatar-lg border-0">
                                                        <span class="avatar-title bg-warning text-white rounded-circle">
                                                    <i class="width-30 height-30" data-feather="file"></i>
                                                </span>
                                                </figure>
                                                <div class="mt-2">File Manager</div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <!-- end::apps -->

                    <!-- begin::header messages dropdown -->
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link nav-link-notify" title="Chats" data-toggle="dropdown">
                            <i data-feather="message-circle"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-big">
                            <div class="bg-dark p-4 text-center d-flex justify-content-between align-items-center">
                                <h5 class="mb-0">Chats</h5>
                                <small class="opacity-7">2 unread chats</small>
                            </div>
                            <div>
                                <ul class="list-group list-group-flush">
                                    <li>
                                        <a href="#" class="list-group-item d-flex align-items-center hide-show-toggler">
                                            <div>
                                                <figure class="avatar mr-2">
                                                    <img src="{{ asset('assets/media/image/user/man_avatar1.jpg') }}" class="rounded-circle" alt="user">
                                                </figure>
                                            </div>
                                            <div class="flex-grow-1">
                                                <p class="mb-0 line-height-20 d-flex justify-content-between">
                                                    Herbie Pallatina
                                                    <i title="Mark as read" data-toggle="tooltip" class="hide-show-toggler-item fa fa-circle-o font-size-11"></i>
                                                </p>
                                                <div class="small text-muted">
                                                    <span class="mr-2">02:30 PM</span>
                                                    <span>Have you madimage</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="list-group-item d-flex align-items-center hide-show-toggler">
                                            <div>
                                                <figure class="avatar mr-2">
                                                    <img src="{{ asset('assets/media/image/user/women_avatar5.jpg') }}" class="rounded-circle" alt="user">
                                                </figure>
                                            </div>
                                            <div class="flex-grow-1">
                                                <p class="mb-0 line-height-20 d-flex justify-content-between">
                                                    Andrei Miners
                                                    <i title="Mark as read" data-toggle="tooltip" class="hide-show-toggler-item fa fa-circle-o font-size-11"></i>
                                                </p>
                                                <div class="small text-muted">
                                                    <span class="mr-2">08:36 PM</span>
                                                    <span>I have a meetinimage</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="text-divider small pb-2 pl-3 pt-3">
                                        <span>Old chats</span>
                                    </li>
                                    <li>
                                        <a href="#" class="list-group-item d-flex align-items-center hide-show-toggler">
                                            <div>
                                                <figure class="avatar mr-2">
                                                    <img src="{{ asset('assets/media/image/user/man_avatar3.jpg') }}" class="rounded-circle" alt="user">
                                                </figure>
                                            </div>
                                            <div class="flex-grow-1">
                                                <p class="mb-0 line-height-20 d-flex justify-content-between">
                                                    Kevin added
                                                    <i title="Mark as unread" data-toggle="tooltip" class="hide-show-toggler-item fa fa-check font-size-11"></i>
                                                </p>
                                                <div class="small text-muted">
                                                    <span class="mr-2">11:09 PM</span>
                                                    <span>Have you madimage</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="list-group-item d-flex align-items-center hide-show-toggler">
                                            <div>
                                                <figure class="avatar mr-2">
                                                    <img src="{{ asset('assets/media/image/user/man_avatar2.jpg') }}" class="rounded-circle" alt="user">
                                                </figure>
                                            </div>
                                            <div class="flex-grow-1">
                                                <p class="mb-0 line-height-20 d-flex justify-content-between">
                                                    Eugenio Carnelley
                                                    <i title="Mark as unread" data-toggle="tooltip" class="hide-show-toggler-item fa fa-check font-size-11"></i>
                                                </p>
                                                <div class="small text-muted">
                                                    <span class="mr-2">Yesterday</span>
                                                    <span>I have a meetinimage</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="list-group-item d-flex align-items-center hide-show-toggler">
                                            <div>
                                                <figure class="avatar mr-2">
                                                    <img src="{{ asset('assets/media/image/user/women_avatar1.jpg') }}" class="rounded-circle" alt="user">
                                                </figure>
                                            </div>
                                            <div class="flex-grow-1">
                                                <p class="mb-0 line-height-20 d-flex justify-content-between">
                                                    Neely Ferdinand
                                                    <i title="Mark as unread" data-toggle="tooltip" class="hide-show-toggler-item fa fa-check font-size-11"></i>
                                                </p>
                                                <div class="small text-muted">
                                                    <span class="mr-2">Yesterday</span>
                                                    <span>I have a meetinimage</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="p-2 text-right border-top">
                                <ul class="list-inline small">
                                    <li class="list-inline-item mb-0">
                                        <a href="#">Mark All Read</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <!-- end::header messages dropdown -->

                    <!-- begin::header notification dropdown -->
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link nav-link-notify" title="Notifications" data-toggle="dropdown">
                            <i data-feather="bell"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-big">
                            <div class="bg-dark p-4 text-center d-flex justify-content-between align-items-center">
                                <h5 class="mb-0">Notifications</h5>
                                <small class="opacity-7">1 unread notifications</small>
                            </div>
                            <div>
                                <ul class="list-group list-group-flush">
                                    <li>
                                        <a href="#" class="list-group-item d-flex align-items-center hide-show-toggler">
                                            <div>
                                                <figure class="avatar mr-2">
                                                        <span class="avatar-title bg-success-bright text-success rounded-circle">
                                                    <i class="ti-user"></i>
                                                </span>
                                                </figure>
                                            </div>
                                            <div class="flex-grow-1">
                                                <p class="mb-0 line-height-20 d-flex justify-content-between">
                                                    New customer registered
                                                    <i title="Mark as read" data-toggle="tooltip" class="hide-show-toggler-item fa fa-circle-o font-size-11"></i>
                                                </p>
                                                <span class="text-muted small">20 min ago</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="text-divider small pb-2 pl-3 pt-3">
                                        <span>Old notifications</span>
                                    </li>
                                    <li>
                                        <a href="#" class="list-group-item d-flex align-items-center hide-show-toggler">
                                            <div>
                                                <figure class="avatar mr-2">
                                                        <span class="avatar-title bg-warning-bright text-warning rounded-circle">
                                                    <i class="ti-package"></i>
                                                </span>
                                                </figure>
                                            </div>
                                            <div class="flex-grow-1">
                                                <p class="mb-0 line-height-20 d-flex justify-content-between">
                                                    New Order Recieved
                                                    <i title="Mark as unread" data-toggle="tooltip" class="hide-show-toggler-item fa fa-check font-size-11"></i>
                                                </p>
                                                <span class="text-muted small">45 sec ago</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="list-group-item d-flex align-items-center hide-show-toggler">
                                            <div>
                                                <figure class="avatar mr-2">
                                                        <span class="avatar-title bg-danger-bright text-danger rounded-circle">
                                                    <i class="ti-server"></i>
                                                </span>
                                                </figure>
                                            </div>
                                            <div class="flex-grow-1">
                                                <p class="mb-0 line-height-20 d-flex justify-content-between">
                                                    Server Limit Reached!
                                                    <i title="Mark as unread" data-toggle="tooltip" class="hide-show-toggler-item fa fa-check font-size-11"></i>
                                                </p>
                                                <span class="text-muted small">55 sec ago</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="list-group-item d-flex align-items-center hide-show-toggler">
                                            <div>
                                                <figure class="avatar mr-2">
                                                        <span class="avatar-title bg-info-bright text-info rounded-circle">
                                                    <i class="ti-layers"></i>
                                                </span>
                                                </figure>
                                            </div>
                                            <div class="flex-grow-1">
                                                <p class="mb-0 line-height-20 d-flex align-items-center justify-content-between">
                                                    Apps are ready for update
                                                    <i title="Mark as unread" data-toggle="tooltip" class="hide-show-toggler-item fa fa-check font-size-11"></i>
                                                </p>
                                                <span class="text-muted small">Yesterday</span>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="p-2 text-right border-top">
                                <ul class="list-inline small">
                                    <li class="list-inline-item mb-0">
                                        <a href="#">Mark All Read</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <!-- end::header notification dropdown -->

                    <!-- BEGIN: Cart -->
                    <li class="nav-item">
                        <a href="#" title="Cart" class="nav-link" data-toggle="dropdown">
                            <i data-feather="shopping-bag"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-big">
                            <div class="bg-dark p-4 text-center d-flex justify-content-between align-items-center">
                                <h5 class="mb-0">Cart</h5>
                                <small class="opacity-7">3 products</small>
                            </div>
                            <div>
                                <div class="list-group list-group-flush">
                                    <a href="#" class="p-3 list-group-item d-flex">
                                        <div>
                                            <figure class="avatar mr-3">
                                                <img src="{{ asset('assets/media/image/products/product6.png') }}" alt="Canon 4000D 18-55 MM">
                                            </figure>
                                        </div>
                                        <div class="flex-grow-1">
                                            <p class="mb-0 line-height-20 d-flex justify-content-between">
                                                Canon 4000D 18-55 MM
                                                <i title="Close" data-toggle="tooltip" class="hide-show-toggler-item ti-close"></i>
                                            </p>
                                            <span class="text-muted small">1 X $1,200</span>
                                        </div>
                                    </a>
                                    <a href="#" class="p-3 list-group-item d-flex">
                                        <div>
                                            <figure class="avatar mr-3">
                                                <img src="{{ asset('assets/media/image/products/product3.png') }}" alt="pineapple">
                                            </figure>
                                        </div>
                                        <div class="flex-grow-1">
                                            <p class="mb-0 line-height-20 d-flex justify-content-between">
                                                Snopy SN-BT96 Pretty
                                                <i title="Close" data-toggle="tooltip" class="hide-show-toggler-item ti-close"></i>
                                            </p>
                                            <span class="text-muted small">1 X $250</span>
                                        </div>
                                    </a>
                                    <a href="#" class="p-3 list-group-item d-flex">
                                        <div>
                                            <figure class="avatar mr-3">
                                                <img src="{{ asset('assets/media/image/products/product7.png') }}" class="rounded" alt="pineapple">
                                            </figure>
                                        </div>
                                        <div class="flex-grow-1">
                                            <p class="mb-0 line-height-20 d-flex justify-content-between">
                                                Lenovo Tab E10 TB-X104F 32GB
                                                <i title="Close" data-toggle="tooltip" class="hide-show-toggler-item ti-close"></i>
                                            </p>
                                            <span class="text-muted small">2 X $100</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="p-3 border-top text-right">
                                <p class="d-flex justify-content-between align-items-center mb-2">
                                    <span>Sub Total</span>
                                    <span>$1,650</span>
                                </p>
                                <p class="d-flex justify-content-between align-items-center mb-2">
                                    <span>Taxes</span>
                                    <span>$15</span>
                                </p>
                                <p class="d-flex justify-content-between align-items-center mb-2 font-weight-bold">
                                    <span>Total</span>
                                    <span>$1,675</span>
                                </p>
                                <button class="btn btn-primary btn-block mt-2">
                                    Order and Payment <i class="ti-arrow-right ml-2"></i>
                                </button>
                            </div>
                        </div>
                    </li>
                    <!-- END: Cart -->

                    <!-- begin::settings -->
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link" title="Settings" data-sidebar-target="#settings">
                            <i data-feather="settings"></i>
                        </a>
                    </li>
                    <!-- end::settings -->

                    <!-- begin::user menu -->
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link" title="User menu" data-sidebar-target="#user-menu">
                            <span class="mr-2 d-sm-inline d-none">Roxana Roussell</span>
                            <figure class="avatar avatar-sm">
                                <img src="{{ asset('assets/media/image/user/women_avatar1.jpg') }}" class="rounded-circle" alt="avatar">
                            </figure>
                        </a>
                    </li>
                    <!-- end::user menu -->

                </ul>

                <!-- begin::mobile header toggler -->
                <ul class="navbar-nav d-flex align-items-center">
                    <li class="nav-item header-toggler">
                        <a href="#" class="nav-link">
                            <i data-feather="arrow-down"></i>
                        </a>
                    </li>
                </ul>
                <!-- end::mobile header toggler -->
            </div>
        </div>

    </div>
    <!-- end::header -->

    <div class="content-wrapper">
        <div class="content-body">

            <div class="content">


                <div class="row app-block">
                    <div class="col-md-3 app-sidebar">
                        <div class="card">
                            <div class="card-body">
                                <button class="btn btn-secondary btn-block" data-toggle="modal" data-target="#newTaskModal">
                                    New Task
                                </button>
                            </div>
                            <div class="app-sidebar-menu">
                                <div class="list-group list-group-flush">
                                    <a href="#" class="list-group-item active d-flex align-items-center">
                                        <i data-feather="mail" class="mr-2 width-15 height-15"></i> All
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <i data-feather="send" class="mr-2 width-15 height-15"></i> My Task
                                    </a>
                                </div>
                                <div class="card-body">
                                    <h6 class="mb-0">Tags</h6>
                                </div>
                                <div class="list-group list-group-flush">
                                    <a href="#" class="list-group-item d-flex align-items-center">
                                        <span class="text-warning fa fa-circle mr-2"></span> Theme Support
                                        <span class="small ml-auto">5</span>
                                    </a>
                                    <a href="#" class="list-group-item d-flex align-items-center">
                                        <span class="text-success fa fa-circle mr-2"></span> Freelance
                                    </a>
                                    <a href="#" class="list-group-item d-flex align-items-center">
                                        <span class="text-danger fa fa-circle mr-2"></span> Social
                                    </a>
                                    <a href="#" class="list-group-item d-flex align-items-center">
                                        <span class="text-info fa fa-circle mr-2"></span> Friends
                                    </a>
                                    <a href="#" class="list-group-item d-flex align-items-center">
                                        <span class="text-secondary fa fa-circle mr-2"></span> Coding
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9 app-content">
                        <div class="app-content-overlay"></div>
                        <div class="app-action">
                            <div class="action-left">
                                <ul class="list-inline">
                                    <li class="list-inline-item mb-0">
                                        <a href="#" class="btn btn-outline-light dropdown-toggle" data-toggle="dropdown">
                                            Filter
                                        </a>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Favourites</a>
                                            <a class="dropdown-item" href="#">Done</a>
                                            <a class="dropdown-item" href="#">Deleted</a>
                                        </div>
                                    </li>
                                    <li class="list-inline-item mb-0">
                                        <a href="#" class="btn btn-outline-light dropdown-toggle" data-toggle="dropdown">
                                            Sort
                                        </a>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Ascending</a>
                                            <a class="dropdown-item" href="#">Descending</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="action-right">
                                <form class="d-flex mr-3">
                                    <a href="#" class="app-sidebar-menu-button btn btn-outline-light">
                                        <i data-feather="menu" class="width-15 height-15"></i>
                                    </a>
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Task search" aria-describedby="button-addon1">
                                        <div class="input-group-append">
                                            <button class="btn btn-outline-light" type="button" id="button-addon1">
                                                <i class="ti-search"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                                <div class="app-pager d-flex align-items-center">
                                    <div class="mr-3">1-50 of 253</div>
                                    <nav aria-label="Page navigation example">
                                        <ul class="pagination">
                                            <li class="page-item">
                                                <a class="page-link" href="#" aria-label="Previous">
                                                    <i data-feather="chevron-left" class="width-15 height-15"></i>
                                                </a>
                                            </li>
                                            <li class="page-item">
                                                <a class="page-link" href="#" aria-label="Next">
                                                    <i data-feather="chevron-right" class="width-15 height-15"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                        <div class="card card-body app-content-body">
                            <div class="app-lists">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item task-list active">
                                        <div class="mr-3">
                                            <a href="#" class="app-sortable-handle">
                                                <i data-feather="move" class="width-15 height-15"></i>
                                            </a>
                                        </div>
                                        <div>
                                            <div class="custom-control custom-checkbox custom-checkbox-success mr-2">
                                                <input type="checkbox" class="custom-control-input" id="customCheck1" checked>
                                                <label class="custom-control-label" for="customCheck1"></label>
                                            </div>
                                        </div>
                                        <div>
                                            <a href="#" class="add-star mr-3" title="Add stars">
                                                <i class="fa fa-star-o font-size-16"></i>
                                            </a>
                                        </div>
                                        <div class="flex-grow-1 min-width-0">
                                            <div class="mb-1 d-flex align-items-center justify-content-between">
                                                <div class="app-list-title text-truncate">How To Protect Your Computer Very Useful Tips
                                                </div>
                                                <div class="pl-3 d-flex align-items-center">
                                                    <div class="mr-3 d-sm-inline d-none">
                                                        <div class="badge badge-danger">Social</div>
                                                    </div>
                                                    <div class="mr-3 d-sm-inline d-none">
                                                        <div class="avatar-group">
                                                            <figure class="avatar avatar-sm" title="Lisle Essam" data-toggle="tooltip">
                                                                <img src="../../assets/media/image/user/women_avatar2.jpg" class="rounded-circle" alt="image">
                                                            </figure>
                                                            <figure class="avatar avatar-sm" title="Baxie Roseblade" data-toggle="tooltip">
                                                                <img src="../../assets/media/image/user/man_avatar5.jpg" class="rounded-circle" alt="image">
                                                            </figure>
                                                            <figure class="avatar avatar-sm" title="Mella Mixter" data-toggle="tooltip">
                                                                <img src="../../assets/media/image/user/women_avatar1.jpg" class="rounded-circle" alt="image">
                                                            </figure>
                                                            <figure class="avatar avatar-sm" title="Jo Hugill" data-toggle="tooltip">
                                                                <img src="../../assets/media/image/user/man_avatar1.jpg" class="rounded-circle" alt="image">
                                                            </figure>
                                                            <figure class="avatar avatar-sm" title="Cullie Philcott" data-toggle="tooltip">
                                                                <img src="../../assets/media/image/user/women_avatar5.jpg" class="rounded-circle" alt="image">
                                                            </figure>
                                                        </div>
                                                    </div>
                                                    <a href="#" title="Delete" data-toggle="tooltip">
                                                        <i data-feather="trash-2" class="width-15 height-15"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item task-list active">
                                        <div class="mr-3">
                                            <a href="#" class="app-sortable-handle">
                                                <i data-feather="move" class="width-15 height-15"></i>
                                            </a>
                                        </div>
                                        <div>
                                            <div class="custom-control custom-checkbox custom-checkbox-success mr-2">
                                                <input type="checkbox" class="custom-control-input" id="customCheck2" checked>
                                                <label class="custom-control-label" for="customCheck2"></label>
                                            </div>
                                        </div>
                                        <div>
                                            <a href="#" class="add-star mr-3" title="Add stars">
                                                <i class="fa fa-star font-size-16 text-warning"></i>
                                            </a>
                                        </div>
                                        <div class="flex-grow-1 min-width-0">
                                            <div class="mb-1 d-flex align-items-center justify-content-between">
                                                <div class="app-list-title text-truncate">How Hypnosis Can Help You
                                                </div>
                                                <div class="pl-3 d-flex align-items-center">
                                                    <div class="mr-3 d-sm-inline d-none">
                                                        <div class="badge badge-warning">Theme Support</div>
                                                    </div>
                                                    <div class="mr-3 d-sm-inline d-none">
                                                        <div class="avatar-group">
                                                            <figure class="avatar avatar-sm" title="Baxie Roseblade" data-toggle="tooltip">
                                                                <img src="../../assets/media/image/user/man_avatar5.jpg" class="rounded-circle" alt="image">
                                                            </figure>
                                                            <figure class="avatar avatar-sm" title="Mella Mixter" data-toggle="tooltip">
                                                                <img src="../../assets/media/image/user/women_avatar1.jpg" class="rounded-circle" alt="image">
                                                            </figure>
                                                            <figure class="avatar avatar-sm" title="Jo Hugill" data-toggle="tooltip">
                                                                <img src="../../assets/media/image/user/man_avatar1.jpg" class="rounded-circle" alt="image">
                                                            </figure>
                                                            <figure class="avatar avatar-sm" title="Cullie Philcott" data-toggle="tooltip">
                                                                <img src="../../assets/media/image/user/women_avatar5.jpg" class="rounded-circle" alt="image">
                                                            </figure>
                                                        </div>
                                                    </div>
                                                    <a href="#" title="Delete" data-toggle="tooltip">
                                                        <i data-feather="trash-2" class="width-15 height-15"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item task-list">
                                        <div class="mr-3">
                                            <a href="#" class="app-sortable-handle">
                                                <i data-feather="move" class="width-15 height-15"></i>
                                            </a>
                                        </div>
                                        <div>
                                            <div class="custom-control custom-checkbox custom-checkbox-success mr-2">
                                                <input type="checkbox" class="custom-control-input" id="customCheck3">
                                                <label class="custom-control-label" for="customCheck3"></label>
                                            </div>
                                        </div>
                                        <div>
                                            <a href="#" class="add-star mr-3" title="Add stars">
                                                <i class="fa fa-star font-size-16 text-warning"></i>
                                            </a>
                                        </div>
                                        <div class="flex-grow-1 min-width-0">
                                            <div class="mb-1 d-flex align-items-center justify-content-between">
                                                <div class="app-list-title text-truncate">Dealing With Technical Support 10 Useful Tips
                                                </div>
                                                <div class="pl-3 d-flex align-items-center">
                                                    <div class="mr-3 d-sm-inline d-none">
                                                        <div class="badge badge-info">Friends</div>
                                                    </div>
                                                    <div class="mr-3 d-sm-inline d-none">
                                                        <div class="avatar-group">
                                                            <div class="avatar avatar-sm" title="Polly Everist" data-toggle="tooltip">
                                                                <span class="avatar-title bg-primary rounded-circle">P</span>
                                                            </div>
                                                            <div class="avatar avatar-sm" title="Godwin Adanez" data-toggle="tooltip">
                                                                <span class="avatar-title bg-success rounded-circle">G</span>
                                                            </div>
                                                            <figure class="avatar avatar-sm" title="Lisle Essam" data-toggle="tooltip">
                                                                <img src="../../assets/media/image/user/women_avatar2.jpg" class="rounded-circle" alt="image">
                                                            </figure>
                                                            <figure class="avatar avatar-sm" title="Baxie Roseblade" data-toggle="tooltip">
                                                                <img src="../../assets/media/image/user/man_avatar5.jpg" class="rounded-circle" alt="image">
                                                            </figure>
                                                            <figure class="avatar avatar-sm" title="Mella Mixter" data-toggle="tooltip">
                                                                <img src="../../assets/media/image/user/women_avatar1.jpg" class="rounded-circle" alt="image">
                                                            </figure>
                                                            <figure class="avatar avatar-sm" title="Jo Hugill" data-toggle="tooltip">
                                                                <img src="../../assets/media/image/user/man_avatar1.jpg" class="rounded-circle" alt="image">
                                                            </figure>
                                                            <figure class="avatar avatar-sm" title="Cullie Philcott" data-toggle="tooltip">
                                                                <img src="../../assets/media/image/user/women_avatar5.jpg" class="rounded-circle" alt="image">
                                                            </figure>
                                                        </div>
                                                    </div>
                                                    <a href="#" title="Delete" data-toggle="tooltip">
                                                        <i data-feather="trash-2" class="width-15 height-15"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item task-list active">
                                        <div class="mr-3">
                                            <a href="#" class="app-sortable-handle">
                                                <i data-feather="move" class="width-15 height-15"></i>
                                            </a>
                                        </div>
                                        <div>
                                            <div class="custom-control custom-checkbox custom-checkbox-success mr-2">
                                                <input type="checkbox" class="custom-control-input" id="customCheck4" checked>
                                                <label class="custom-control-label" for="customCheck4"></label>
                                            </div>
                                        </div>
                                        <div>
                                            <a href="#" class="add-star mr-3" title="Add stars">
                                                <i class="fa fa-star-o font-size-16"></i>
                                            </a>
                                        </div>
                                        <div class="flex-grow-1 min-width-0">
                                            <div class="mb-1 d-flex align-items-center justify-content-between">
                                                <div class="app-list-title text-truncate">Get The Boot A Birds Eye Look Into Mcse Boot Camps
                                                </div>
                                                <div class="pl-3 d-flex align-items-center">
                                                    <div class="mr-3 d-sm-inline d-none">
                                                        <div class="badge badge-warning">Social</div>
                                                    </div>
                                                    <div class="mr-3 d-sm-inline d-none">
                                                        <div class="avatar-group">
                                                            <div class="avatar avatar-sm" title="Godwin Adanez" data-toggle="tooltip">
                                                                <span class="avatar-title bg-success rounded-circle">G</span>
                                                            </div>
                                                            <figure class="avatar avatar-sm" title="Lisle Essam" data-toggle="tooltip">
                                                                <img src="../../assets/media/image/user/women_avatar2.jpg" class="rounded-circle" alt="image">
                                                            </figure>
                                                        </div>
                                                    </div>
                                                    <a href="#" title="Delete" data-toggle="tooltip">
                                                        <i data-feather="trash-2" class="width-15 height-15"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item task-list">
                                        <div class="mr-3">
                                            <a href="#" class="app-sortable-handle">
                                                <i data-feather="move" class="width-15 height-15"></i>
                                            </a>
                                        </div>
                                        <div>
                                            <div class="custom-control custom-checkbox custom-checkbox-success mr-2">
                                                <input type="checkbox" class="custom-control-input" id="customCheck5">
                                                <label class="custom-control-label" for="customCheck5"></label>
                                            </div>
                                        </div>
                                        <div>
                                            <a href="#" class="add-star mr-3" title="Add stars">
                                                <i class="fa fa-star-o font-size-16"></i>
                                            </a>
                                        </div>
                                        <div class="flex-grow-1 min-width-0">
                                            <div class="mb-1 d-flex align-items-center justify-content-between">
                                                <div class="app-list-title text-truncate">Buying Used Electronic Test Equipment.
                                                </div>
                                                <div class="pl-3 d-flex align-items-center">
                                                    <div class="mr-3 d-sm-inline d-none">
                                                        <div class="badge badge-success">Freelance</div>
                                                    </div>
                                                    <div class="mr-3 d-sm-inline d-none">
                                                        <div class="avatar-group">
                                                            <div class="avatar avatar-sm" title="Polly Everist" data-toggle="tooltip">
                                                                <span class="avatar-title bg-primary rounded-circle">P</span>
                                                            </div>
                                                            <div class="avatar avatar-sm" title="Godwin Adanez" data-toggle="tooltip">
                                                                <span class="avatar-title bg-success rounded-circle">G</span>
                                                            </div>
                                                            <figure class="avatar avatar-sm" title="Lisle Essam" data-toggle="tooltip">
                                                                <img src="../../assets/media/image/user/women_avatar2.jpg" class="rounded-circle" alt="image">
                                                            </figure>
                                                            <figure class="avatar avatar-sm" title="Baxie Roseblade" data-toggle="tooltip">
                                                                <img src="../../assets/media/image/user/man_avatar5.jpg" class="rounded-circle" alt="image">
                                                            </figure>
                                                            <figure class="avatar avatar-sm" title="Mella Mixter" data-toggle="tooltip">
                                                                <img src="../../assets/media/image/user/women_avatar1.jpg" class="rounded-circle" alt="image">
                                                            </figure>
                                                        </div>
                                                    </div>
                                                    <a href="#" title="Delete" data-toggle="tooltip">
                                                        <i data-feather="trash-2" class="width-15 height-15"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item task-list">
                                        <div class="mr-3">
                                            <a href="#" class="app-sortable-handle">
                                                <i data-feather="move" class="width-15 height-15"></i>
                                            </a>
                                        </div>
                                        <div>
                                            <div class="custom-control custom-checkbox custom-checkbox-success mr-2">
                                                <input type="checkbox" class="custom-control-input" id="customCheck6">
                                                <label class="custom-control-label" for="customCheck6"></label>
                                            </div>
                                        </div>
                                        <div>
                                            <a href="#" class="add-star mr-3" title="Add stars">
                                                <i class="fa fa-star-o font-size-16"></i>
                                            </a>
                                        </div>
                                        <div class="flex-grow-1 min-width-0">
                                            <div class="mb-1 d-flex align-items-center justify-content-between">
                                                <div class="app-list-title text-truncate">Fix Responsiveness
                                                </div>
                                                <div class="pl-3 d-flex align-items-center">
                                                    <div class="mr-3 d-sm-inline d-none">
                                                        <div class="badge badge-warning">Theme Support</div>
                                                    </div>
                                                    <div class="mr-3 d-sm-inline d-none">
                                                        <div class="avatar-group">
                                                            <div class="avatar avatar-sm" title="Godwin Adanez" data-toggle="tooltip">
                                                                <span class="avatar-title bg-warning rounded-circle">G</span>
                                                            </div>
                                                            <div class="avatar avatar-sm" title="Polly Everist" data-toggle="tooltip">
                                                                <span class="avatar-title bg-info rounded-circle">P</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <a href="#" title="Delete" data-toggle="tooltip">
                                                        <i data-feather="trash-2" class="width-15 height-15"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item task-list">
                                        <div class="mr-3">
                                            <a href="#" class="app-sortable-handle">
                                                <i data-feather="move" class="width-15 height-15"></i>
                                            </a>
                                        </div>
                                        <div>
                                            <div class="custom-control custom-checkbox custom-checkbox-success mr-2">
                                                <input type="checkbox" class="custom-control-input" id="customCheck7">
                                                <label class="custom-control-label" for="customCheck7"></label>
                                            </div>
                                        </div>
                                        <div>
                                            <a href="#" class="add-star mr-3" title="Add stars">
                                                <i class="fa fa-star font-size-16 text-warning"></i>
                                            </a>
                                        </div>
                                        <div class="flex-grow-1 min-width-0">
                                            <div class="mb-1 d-flex align-items-center justify-content-between">
                                                <div class="app-list-title text-truncate">
                                                    Hypnotherapy For Motivation Getting The Drive Back
                                                </div>
                                                <div class="pl-3 d-flex align-items-center">
                                                    <div class="mr-3 d-sm-inline d-none">
                                                        <div class="badge badge-secondary">Coding</div>
                                                    </div>
                                                    <div class="mr-3 d-sm-inline d-none">
                                                        <div class="avatar-group">
                                                            <figure class="avatar avatar-sm" title="Baxie Roseblade" data-toggle="tooltip">
                                                                <img src="../../assets/media/image/user/man_avatar5.jpg" class="rounded-circle" alt="image">
                                                            </figure>
                                                        </div>
                                                    </div>
                                                    <a href="#" title="Delete" data-toggle="tooltip">
                                                        <i data-feather="trash-2" class="width-15 height-15"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item task-list">
                                        <div class="mr-3">
                                            <a href="#" class="app-sortable-handle">
                                                <i data-feather="move" class="width-15 height-15"></i>
                                            </a>
                                        </div>
                                        <div>
                                            <div class="custom-control custom-checkbox custom-checkbox-success mr-2">
                                                <input type="checkbox" class="custom-control-input" id="customCheck8">
                                                <label class="custom-control-label" for="customCheck8"></label>
                                            </div>
                                        </div>
                                        <div>
                                            <a href="#" class="add-star mr-3" title="Add stars">
                                                <i class="fa fa-star-o font-size-16"></i>
                                            </a>
                                        </div>
                                        <div class="flex-grow-1 min-width-0">
                                            <div class="mb-1 d-flex align-items-center justify-content-between">
                                                <div class="app-list-title text-truncate">Are You Struggling In Life
                                                </div>
                                                <div class="pl-3 d-flex align-items-center">
                                                    <div class="mr-3 d-sm-inline d-none">
                                                        <div class="badge badge-warning">Theme Support</div>
                                                    </div>
                                                    <div class="mr-3">
                                                        <div class="avatar-group">
                                                            <div class="avatar avatar-sm" title="Polly Everist" data-toggle="tooltip">
                                                                <span class="avatar-title bg-primary rounded-circle">P</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <a href="#" title="Delete" data-toggle="tooltip">
                                                        <i data-feather="trash-2" class="width-15 height-15"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item task-list">
                                        <div class="mr-3">
                                            <a href="#" class="app-sortable-handle">
                                                <i data-feather="move" class="width-15 height-15"></i>
                                            </a>
                                        </div>
                                        <div>
                                            <div class="custom-control custom-checkbox custom-checkbox-success mr-2">
                                                <input type="checkbox" class="custom-control-input" id="customCheck9">
                                                <label class="custom-control-label" for="customCheck9"></label>
                                            </div>
                                        </div>
                                        <div>
                                            <a href="#" class="add-star mr-3" title="Add stars">
                                                <i class="fa fa-star-o font-size-16"></i>
                                            </a>
                                        </div>
                                        <div class="flex-grow-1 min-width-0">
                                            <div class="mb-1 d-flex align-items-center justify-content-between">
                                                <div class="app-list-title text-truncate">Believing Is The Absence Of Doubt
                                                </div>
                                                <div class="pl-3 d-flex align-items-center">
                                                    <div class="mr-3 d-sm-inline d-none">
                                                        <div class="badge badge-success">Freelance</div>
                                                    </div>
                                                    <div class="mr-3 d-sm-inline d-none">
                                                        <div class="avatar-group">
                                                            <figure class="avatar avatar-sm" title="Lisle Essam" data-toggle="tooltip">
                                                                <img src="../../assets/media/image/user/women_avatar2.jpg" class="rounded-circle" alt="image">
                                                            </figure>
                                                            <figure class="avatar avatar-sm" title="Baxie Roseblade" data-toggle="tooltip">
                                                                <img src="../../assets/media/image/user/man_avatar5.jpg" class="rounded-circle" alt="image">
                                                            </figure>
                                                            <figure class="avatar avatar-sm" title="Mella Mixter" data-toggle="tooltip">
                                                                <img src="../../assets/media/image/user/women_avatar1.jpg" class="rounded-circle" alt="image">
                                                            </figure>
                                                        </div>
                                                    </div>
                                                    <a href="#" title="Delete" data-toggle="tooltip">
                                                        <i data-feather="trash-2" class="width-15 height-15"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item task-list">
                                        <div class="mr-3">
                                            <a href="#" class="app-sortable-handle">
                                                <i data-feather="move" class="width-15 height-15"></i>
                                            </a>
                                        </div>
                                        <div>
                                            <div class="custom-control custom-checkbox custom-checkbox-success mr-2">
                                                <input type="checkbox" class="custom-control-input" id="customCheck10">
                                                <label class="custom-control-label" for="customCheck10"></label>
                                            </div>
                                        </div>
                                        <div>
                                            <a href="#" class="add-star mr-3" title="Add stars">
                                                <i class="fa fa-star-o font-size-16"></i>
                                            </a>
                                        </div>
                                        <div class="flex-grow-1 min-width-0">
                                            <div class="mb-1 d-flex align-items-center justify-content-between">
                                                <div class="app-list-title text-truncate">Success Steps For Your Personal Or Business Life
                                                </div>
                                                <div class="pl-3 d-flex align-items-center">
                                                    <div class="mr-3 d-sm-inline d-none">
                                                        <div class="badge badge-danger">Social</div>
                                                    </div>
                                                    <div class="mr-3 d-sm-inline d-none">
                                                        <div class="avatar-group">
                                                            <figure class="avatar avatar-sm" title="Mella Mixter" data-toggle="tooltip">
                                                                <img src="../../assets/media/image/user/women_avatar1.jpg" class="rounded-circle" alt="image">
                                                            </figure>
                                                            <div class="avatar avatar-sm" title="Polly Everist" data-toggle="tooltip">
                                                                <span class="avatar-title bg-primary rounded-circle">P</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <a href="#" title="Delete" data-toggle="tooltip">
                                                        <i data-feather="trash-2" class="width-15 height-15"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item task-list">
                                        <div class="mr-3">
                                            <a href="#" class="app-sortable-handle">
                                                <i data-feather="move" class="width-15 height-15"></i>
                                            </a>
                                        </div>
                                        <div>
                                            <div class="custom-control custom-checkbox custom-checkbox-success mr-2">
                                                <input type="checkbox" class="custom-control-input" id="customCheck11">
                                                <label class="custom-control-label" for="customCheck11"></label>
                                            </div>
                                        </div>
                                        <div>
                                            <a href="#" class="add-star mr-3" title="Add stars">
                                                <i class="fa fa-star-o font-size-16"></i>
                                            </a>
                                        </div>
                                        <div class="flex-grow-1 min-width-0">
                                            <div class="mb-1 d-flex align-items-center justify-content-between">
                                                <div class="app-list-title text-truncate">Don't Let The Outtakes Take You Out
                                                </div>
                                                <div class="pl-3 d-flex align-items-center">
                                                    <div class="mr-3 d-sm-inline d-none">
                                                        <div class="badge badge-warning">Theme Support</div>
                                                    </div>
                                                    <div class="mr-3">
                                                        <div class="avatar-group">
                                                            <div class="avatar avatar-sm" title="Godwin Adanez" data-toggle="tooltip">
                                                                <span class="avatar-title bg-success rounded-circle">G</span>
                                                            </div>
                                                            <figure class="avatar avatar-sm" title="Lisle Essam" data-toggle="tooltip">
                                                                <img src="../../assets/media/image/user/women_avatar2.jpg" class="rounded-circle" alt="image">
                                                            </figure>
                                                        </div>
                                                    </div>
                                                    <a href="#" title="Delete" data-toggle="tooltip">
                                                        <i data-feather="trash-2" class="width-15 height-15"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item task-list">
                                        <div class="mr-3">
                                            <a href="#" class="app-sortable-handle">
                                                <i data-feather="move" class="width-15 height-15"></i>
                                            </a>
                                        </div>
                                        <div>
                                            <div class="custom-control custom-checkbox custom-checkbox-success mr-2">
                                                <input type="checkbox" class="custom-control-input" id="customCheck12">
                                                <label class="custom-control-label" for="customCheck12"></label>
                                            </div>
                                        </div>
                                        <div>
                                            <a href="#" class="add-star mr-3" title="Add stars">
                                                <i class="fa fa-star-o font-size-16"></i>
                                            </a>
                                        </div>
                                        <div class="flex-grow-1 min-width-0">
                                            <div class="mb-1 d-flex align-items-center justify-content-between">
                                                <div class="app-list-title text-truncate">It is a good idea to think of your PC as an office.
                                                </div>
                                                <div class="pl-3 d-flex align-items-center">
                                                    <div class="mr-3 d-sm-inline d-none">
                                                        <div class="badge badge-warning">Theme Support</div>
                                                    </div>
                                                    <div class="mr-3 d-sm-inline d-none">
                                                        <div class="avatar-group">
                                                            <div class="avatar avatar-sm" title="Godwin Adanez" data-toggle="tooltip">
                                                                <span class="avatar-title bg-success rounded-circle">G</span>
                                                            </div>
                                                            <figure class="avatar avatar-sm" title="Lisle Essam" data-toggle="tooltip">
                                                                <img src="../../assets/media/image/user/women_avatar2.jpg" class="rounded-circle" alt="image">
                                                            </figure>
                                                            <figure class="avatar avatar-sm" title="Baxie Roseblade" data-toggle="tooltip">
                                                                <img src="../../assets/media/image/user/man_avatar5.jpg" class="rounded-circle" alt="image">
                                                            </figure>
                                                            <figure class="avatar avatar-sm" title="Mella Mixter" data-toggle="tooltip">
                                                                <img src="../../assets/media/image/user/women_avatar1.jpg" class="rounded-circle" alt="image">
                                                            </figure>
                                                            <div class="avatar avatar-sm" title="Polly Everist" data-toggle="tooltip">
                                                                <span class="avatar-title bg-primary rounded-circle">P</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <a href="#" title="Delete" data-toggle="tooltip">
                                                        <i data-feather="trash-2" class="width-15 height-15"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <!-- end::app-lists -->

                            <!-- begin:app-detail -->
                            <div class="card app-detail">
                                <div class="card-header">
                                    <div class="app-detail-action-left">
                                        <a class="app-detail-close-button" href="#">
                                            <i data-feather="arrow-left" class="mr-3"></i>
                                        </a>
                                        <h5 class="mb-0">Draw design and presentation for customers. </h5>
                                    </div>
                                    <div class="app-detail-action-right">
                                        <div>
                                            <a href="#" class="btn btn-success" data-toggle="tooltip" title="2:44 AM">
                                                <i data-feather="check" class="mr-2"></i> Completed
                                            </a>
                                            <span data-toggle="modal" data-target="#editTaskModal">
                                        <a href="#" class="btn btn-outline-light ml-2" title="Edit Task"
                                           data-toggle="tooltip">
                                            <i data-feather="edit-3"></i>
                                        </a>
                                    </span>
                                            <a href="#" class="btn btn-outline-light ml-2" data-toggle="tooltip" title="Delete Task">
                                                <i data-feather="trash"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="app-detail-article">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center p-l-r-0 m-b-20">
                                            <div class="d-flex align-items-center">
                                                <div class="avatar-group">
                                                    <div class="avatar avatar-sm" title="Polly Everist" data-toggle="tooltip">
                                                        <span class="avatar-title bg-primary rounded-circle">P</span>
                                                    </div>
                                                    <div class="avatar avatar-sm" title="Godwin Adanez" data-toggle="tooltip">
                                                        <span class="avatar-title bg-success rounded-circle">G</span>
                                                    </div>
                                                    <figure class="avatar avatar-sm" title="Lisle Essam" data-toggle="tooltip">
                                                        <img src="../../assets/media/image/user/women_avatar2.jpg" class="rounded-circle" alt="image">
                                                    </figure>
                                                    <figure class="avatar avatar-sm" title="Baxie Roseblade" data-toggle="tooltip">
                                                        <img src="../../assets/media/image/user/man_avatar5.jpg" class="rounded-circle" alt="image">
                                                    </figure>
                                                    <figure class="avatar avatar-sm" title="Mella Mixter" data-toggle="tooltip">
                                                        <img src="../../assets/media/image/user/women_avatar1.jpg" class="rounded-circle" alt="image">
                                                    </figure>
                                                </div>
                                            </div>
                                            <div class="ml-auto">
                                                <span class="badge bg-warning badge-pill mr-2">Theme Support</span>
                                                <a href="#" data-toggle="tooltip" title="Files" class="mr-2">
                                                    <i class="fa fa-paperclip"></i>
                                                </a>
                                                <a href="#" class="mr-2">
                                                    <i class="fa fa-star font-size-16 text-warning"></i>
                                                </a>
                                                <span class="text-muted">4:14 AM</span>
                                            </div>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur corporis incidunt labore modi numquam omnis pariatur possimus suscipit vitae voluptas?
                                        </p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi aperiam asperiores error esse fugiat fugit laboriosam necessitatibus officia, placeat, quam quis reprehenderit similique soluta suscipit tempore!
                                            Consequuntur eligendi hic in libero nostrum rem ut? At itaque laboriosam natus provident reprehenderit.</p>
                                    </div>
                                    <hr class="m-0">
                                    <div class="card-body">
                                        <h6 class="mb-3 font-size-11 text-uppercase">Files</h6>
                                        <ul class="list-unstyled mb-0">
                                            <li class="small">
                                                <a href="#">
                                                    <i data-feather="paperclip" class="mr-1 width-15 height-15"></i> uikit-design.psd
                                                </a>
                                            </li>
                                            <li class="small">
                                                <a href="#">
                                                    <i data-feather="paperclip" class="mr-1 width-15 height-15"></i> uikit-design.sketch
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <hr class="m-0">
                                    <div class="card-body">
                                        <h6 class="mb-3 font-size-11 text-uppercase">Comment</h6>
                                        <div class="reply-email-quill-editor mb-3"></div>
                                        <div class="d-flex justify-content-between">
                                            <div class="reply-email-quill-toolbar">
                                                    <span class="ql-formats mr-0">
                                          <button class="ql-bold"></button>
                                          <button class="ql-italic"></button>
                                          <button class="ql-underline"></button>
                                          <button class="ql-link"></button>
                                          <button class="ql-image"></button>
                                        </span>
                                            </div>
                                            <button class="btn btn-primary">
                                                <i data-feather="send" class="mr-2"></i>
                                                Send
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="newTaskModal" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">New Task</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <i class="ti-close"></i>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form autocomplete="off">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Task title</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Tags</label>
                                        <div class="col-sm-9">
                                            <select class="js-example-basic-single" multiple>
                                                <option value="Theme Support">Theme Support</option>
                                                <option value="Freelance">Freelance</option>
                                                <option selected value="Social">Social</option>
                                                <option selected value="Friends">Friends</option>
                                                <option value="Coding">Coding</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row row-sm">
                                        <label class="col-sm-3 col-form-label">Deadline</label>
                                        <div class="col-sm-5">
                                            <input type="text" class="form-control create-event-datepicker" placeholder="Date">
                                        </div>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control create-event-demo" placeholder="Time">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Participate</label>
                                        <div class="col-sm-9">
                                            <div class="avatar-group">
                                                <figure class="avatar avatar-sm">
                                                    <img src="../../assets/media/image/user/women_avatar3.jpg" class="rounded-circle" alt="image">
                                                </figure>
                                                <figure class="avatar avatar-sm">
                                                    <span class="avatar-title bg-danger rounded-circle">S</span>
                                                </figure>
                                                <figure class="avatar avatar-sm">
                                                    <img src="../../assets/media/image/user/women_avatar5.jpg" class="rounded-circle" alt="image">
                                                </figure>
                                            </div>
                                            <button type="button" class="btn btn-outline-light btn-sm btn-floating" title="Add User" data-toggle="dropdown">
                                                <i class="ti-plus"></i>
                                            </button>
                                            <div class="dropdown-menu p-0">
                                                <div class="p-3">
                                                    <h6 class="text-uppercase font-size-11 mb-3">Add User</h6>
                                                    <div class="input-group input-group-sm">
                                                        <input type="text" class="form-control" placeholder="Search User" aria-describedby="button-addon2">
                                                        <div class="input-group-append">
                                                            <button class="btn btn-outline-light" type="button" id="button-addon2">
                                                                <i class="ti-search"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <ul class="list-group list-group-flush mt-2">
                                                        <li class="list-group-item d-flex align-items-center pl-0 pr-0">
                                                            <div class="mr-2">
                                                                <figure class="avatar avatar-sm">
                                                                    <span class="avatar-title bg-primary rounded-circle">V</span>
                                                                </figure>
                                                            </div>
                                                            <div>
                                                                <h6 class="mb-0">Valentine Maton</h6>
                                                            </div>
                                                            <div class="dropdown ml-auto">
                                                                <a href="#" data-toggle="dropdown" class="btn btn-outline-light btn-sm" aria-haspopup="true" aria-expanded="false">
                                                                    <i data-feather="plus"></i>
                                                                </a>
                                                            </div>
                                                        </li>
                                                        <li class="list-group-item d-flex align-items-center pl-0 pr-0">
                                                            <div class="mr-2">
                                                                <figure class="avatar avatar-sm">
                                                                    <img src="../../assets/media/image/user/women_avatar3.jpg" class="rounded-circle" alt="image">
                                                                </figure>
                                                            </div>
                                                            <div>
                                                                <h6 class="mb-0">Valentine Maton</h6>
                                                            </div>
                                                            <div class="dropdown ml-auto">
                                                                <a href="#" data-toggle="dropdown" class="btn btn-outline-light btn-sm" aria-haspopup="true" aria-expanded="false">
                                                                    <i data-feather="plus"></i>
                                                                </a>
                                                            </div>
                                                        </li>
                                                        <li class="list-group-item d-flex align-items-center pl-0 pr-0">
                                                            <div class="mr-2">
                                                                <figure class="avatar avatar-sm">
                                                                    <img src="../../assets/media/image/user/women_avatar2.jpg" class="rounded-circle" alt="image">
                                                                </figure>
                                                            </div>
                                                            <div>
                                                                <h6 class="mb-0">Valentine Maton</h6>
                                                            </div>
                                                            <div class="dropdown ml-auto">
                                                                <a href="#" data-toggle="dropdown" class="btn btn-outline-light btn-sm ml-3" aria-haspopup="true" aria-expanded="false">
                                                                    <i data-feather="plus"></i>
                                                                </a>
                                                            </div>
                                                        </li>
                                                        <li class="list-group-item d-flex align-items-center pl-0 pr-0">
                                                            <div class="mr-2">
                                                                <figure class="avatar avatar-sm">
                                                                    <img src="../../assets/media/image/user/man_avatar2.jpg" class="rounded-circle" alt="image">
                                                                </figure>
                                                            </div>
                                                            <div>
                                                                <h6 class="mb-0">Valentine Maton</h6>
                                                            </div>
                                                            <div class="dropdown ml-auto">
                                                                <a href="#" data-toggle="dropdown" class="btn btn-outline-light btn-sm ml-3" aria-haspopup="true" aria-expanded="false">
                                                                    <i data-feather="plus"></i>
                                                                </a>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Description</label>
                                        <div class="col-sm-9">
                                            <textarea class="form-control" rows="6"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3"></label>
                                        <div class="col-sm-9">
                                            <button type="submit" class="btn btn-primary">Create</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="editTaskModal" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Edit Task</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <i class="ti-close"></i>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form autocomplete="off">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Task title</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" placeholder="Title" value="Draw design and presentation for customers.">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Tags</label>
                                        <div class="col-sm-9">
                                            <select class="js-example-basic-single" multiple>
                                                <option selected value="Theme Support">Theme Support</option>
                                                <option value="Freelance">Freelance</option>
                                                <option value="Social">Social</option>
                                                <option value="Friends">Friends</option>
                                                <option value="Coding">Coding</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row row-sm">
                                        <label class="col-sm-3 col-form-label">Deadline</label>
                                        <div class="col-sm-5">
                                            <input type="text" class="form-control create-event-datepicker" placeholder="Date" value="10/31/2019">
                                        </div>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control create-event-demo" value="11:57" placeholder="Time">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Participate</label>
                                        <div class="col-sm-9">
                                            <div class="avatar-group">
                                                <figure class="avatar avatar-sm">
                                                    <img src="../../assets/media/image/user/women_avatar3.jpg" class="rounded-circle" alt="image">
                                                </figure>
                                                <figure class="avatar avatar-sm">
                                                    <span class="avatar-title bg-danger rounded-circle">S</span>
                                                </figure>
                                                <figure class="avatar avatar-sm">
                                                    <img src="../../assets/media/image/user/women_avatar5.jpg" class="rounded-circle" alt="image">
                                                </figure>
                                            </div>
                                            <button type="button" class="btn btn-outline-light btn-sm btn-floating" title="Add User" data-toggle="dropdown">
                                                <i class="ti-plus"></i>
                                            </button>
                                            <div class="dropdown-menu p-0">
                                                <div class="p-3">
                                                    <h6 class="text-uppercase font-size-11 mb-3">Add User</h6>
                                                    <div class="input-group input-group-sm">
                                                        <input type="text" class="form-control" placeholder="Search User" aria-describedby="button-addon3">
                                                        <div class="input-group-append">
                                                            <button class="btn btn-outline-light" type="button" id="button-addon3">
                                                                <i class="ti-search"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <ul class="list-group list-group-flush mt-2">
                                                        <li class="list-group-item d-flex align-items-center pl-0 pr-0">
                                                            <div class="mr-2">
                                                                <figure class="avatar avatar-sm">
                                                                    <span class="avatar-title bg-primary rounded-circle">V</span>
                                                                </figure>
                                                            </div>
                                                            <div>
                                                                <h6 class="mb-0">Valentine Maton</h6>
                                                            </div>
                                                            <div class="dropdown ml-auto">
                                                                <a href="#" data-toggle="dropdown" class="btn btn-outline-light btn-sm" aria-haspopup="true" aria-expanded="false">
                                                                    <i data-feather="plus"></i>
                                                                </a>
                                                            </div>
                                                        </li>
                                                        <li class="list-group-item d-flex align-items-center pl-0 pr-0">
                                                            <div class="mr-2">
                                                                <figure class="avatar avatar-sm">
                                                                    <img src="../../assets/media/image/user/women_avatar3.jpg" class="rounded-circle" alt="image">
                                                                </figure>
                                                            </div>
                                                            <div>
                                                                <h6 class="mb-0">Valentine Maton</h6>
                                                            </div>
                                                            <div class="dropdown ml-auto">
                                                                <a href="#" data-toggle="dropdown" class="btn btn-outline-light btn-sm" aria-haspopup="true" aria-expanded="false">
                                                                    <i data-feather="plus"></i>
                                                                </a>
                                                            </div>
                                                        </li>
                                                        <li class="list-group-item d-flex align-items-center pl-0 pr-0">
                                                            <div class="mr-2">
                                                                <figure class="avatar avatar-sm">
                                                                    <img src="../../assets/media/image/user/women_avatar2.jpg" class="rounded-circle" alt="image">
                                                                </figure>
                                                            </div>
                                                            <div>
                                                                <h6 class="mb-0">Valentine Maton</h6>
                                                            </div>
                                                            <div class="dropdown ml-auto">
                                                                <a href="#" data-toggle="dropdown" class="btn btn-outline-light btn-sm ml-3" aria-haspopup="true" aria-expanded="false">
                                                                    <i data-feather="plus"></i>
                                                                </a>
                                                            </div>
                                                        </li>
                                                        <li class="list-group-item d-flex align-items-center pl-0 pr-0">
                                                            <div class="mr-2">
                                                                <figure class="avatar avatar-sm">
                                                                    <img src="../../assets/media/image/user/man_avatar2.jpg" class="rounded-circle" alt="image">
                                                                </figure>
                                                            </div>
                                                            <div>
                                                                <h6 class="mb-0">Valentine Maton</h6>
                                                            </div>
                                                            <div class="dropdown ml-auto">
                                                                <a href="#" data-toggle="dropdown" class="btn btn-outline-light btn-sm ml-3" aria-haspopup="true" aria-expanded="false">
                                                                    <i data-feather="plus"></i>
                                                                </a>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Description</label>
                                        <div class="col-sm-9">
                                            <textarea class="form-control" rows="6">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur corporis incidunt labore modi numquam omnis pariatur possimus suscipit vitae voluptas?</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3"></label>
                                        <div class="col-sm-9">
                                            <button type="submit" class="btn btn-success">
                                                <i data-feather="check" class="mr-2"></i>
                                                Save
                                            </button>
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
<!-- end::main -->

<!-- Plugin scripts -->
<script src="{{ asset('assets/vendors/bundle.js') }}"></script>


<!-- Tagsinput -->
<script src="{{ asset('assets/vendors/tagsinput/bootstrap-tagsinput.js') }}"></script>
<script src="{{ asset('assets/js/examples/tagsinput.js') }}"></script>

<!-- quill -->
<script src="{{ asset('assets/vendors/quill/quill.js') }}"></script>

<!-- Clockpicker -->
<script src="{{ asset('assets/vendors/clockpicker/bootstrap-clockpicker.min.js') }}"></script>
<script src="{{ asset('assets/js/examples/clockpicker.js') }}"></script>

<!-- Select2 -->
<script src="../../vendors/select2/js/select2.min.js"></script>
<script src="../../assets/js/examples/select2.js"></script>

<!-- Datepicker -->
<script src="../../vendors/datepicker/daterangepicker.js"></script>
<script src="../../assets/js/examples/datepicker.js"></script>

<script>
    new Quill('.reply-email-quill-editor', {
        modules: {
            toolbar: ".reply-email-quill-toolbar"
        },
        placeholder: "Type something... ",
        theme: "snow"
    });

    $(function() {
        $(document).on('click', '.app-block .app-content .app-action .action-left input[type="checkbox"]', function() {
            $('.app-lists ul li input[type="checkbox"]').prop('checked', $(this).prop('checked'));
            if ($(this).prop('checked')) {
                $('.app-lists ul li input[type="checkbox"]').closest('li').addClass('active');
            } else {
                $('.app-lists ul li input[type="checkbox"]').closest('li').removeClass('active');
            }
        });

        $(document).on('click', '.app-lists ul li input[type="checkbox"]', function() {
            if ($(this).prop('checked')) {
                $(this).closest('li').addClass('active');
            } else {
                $(this).closest('li').removeClass('active');
            }
        });

        $(document).on('click', '.app-block .app-content .app-content-body .app-lists ul.list-group li.list-group-item', function(e) {
            if (!$(e.target).is('.custom-control, .custom-control *, a, a *')) {
                $('.app-detail').addClass('show').one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend', function() {
                    $('.app-block .app-content .app-content-body .app-detail .app-detail-article').niceScroll().resize();
                });
            }
        });

        $(document).on('click', 'a.app-detail-close-button', function() {
            $('.app-detail').removeClass('show');
            return false;
        });

        $(document).on('click', '.app-sidebar-menu-button', function() {
            $('.app-block .app-sidebar, .app-content-overlay').addClass('show');
            // $('.app-block .app-sidebar .app-sidebar-menu').niceScroll().resize();
            return false;
        });

        $(document).on('click', '.app-content-overlay', function() {
            $('.app-block .app-sidebar, .app-content-overlay').removeClass('show');
            return false;
        });

        $('.app-block .app-content .app-content-body .app-lists ul').sortable({
            axis: "y",
            cursor: "move",
            handle: '.app-sortable-handle'
        }).disableSelection();
    });
</script>


<!-- App scripts -->
<script src="{{ asset('assets/js/app.min.js') }}"></script>

</body>
</html>
