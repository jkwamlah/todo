<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nago</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="media/image/favicon.png"/>

    <!-- Plugin styles -->
    <link rel="stylesheet" href="vendors/bundle.css" type="text/css">

    <!-- quill -->
    <link href="vendors/quill/quill.snow.css" rel="stylesheet" type="text/css">

    <!-- Clockpicker -->
    <link rel="stylesheet" href="vendors/clockpicker/bootstrap-clockpicker.min.css" type="text/css">

    <!-- Datepicker -->
    <link rel="stylesheet" href="vendors/datepicker/daterangepicker.css" type="text/css">

    <!-- Select2 -->
    <link rel="stylesheet" href="vendors/select2/css/select2.min.css" type="text/css">

    <!-- Icon Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>

    <!-- App styles -->
    <link rel="stylesheet" href="css/app.min.css" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">

</head>

<body class="stretch-layout small-navigation">

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
        </div>

        <div class="header-body">
            <div class="header-body-left">
                <div class="page-title">
                    <h4>Todo List</h4>
                </div>
            </div>
            <div class="header-body-right">
                <ul class="navbar-nav">
                    <!-- begin::user menu -->
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link" title="User menu" data-sidebar-target="#user-menu">
                            <span class="mr-2 d-sm-inline d-none">Jonadab K</span>
                            <figure class="avatar avatar-sm">
                                <img src="media/image/user/man_avatar1.jpg"
                                     class="rounded-circle" alt="avatar">
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
                                        <i data-feather="mail" class="mr-2 width-15 height-15"></i> To do App
                                    </a>
                                </div>
                                <div class="list-group list-group-flush">
                                    <a href="#" class="list-group-item d-flex align-items-center">
                                        <span class="text-warning fa fa-circle mr-2"></span> Completed
                                        <span class="small ml-auto">5</span>
                                    </a>
                                    <a href="#" class="list-group-item d-flex align-items-center">
                                        <span class="text-success fa fa-circle mr-2"></span> Deleted
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
                                        <a href="#" class="btn btn-outline-light dropdown-toggle"
                                           data-toggle="dropdown">
                                            Filter
                                        </a>
                                        <div class="dropdown-menu mt-2">
                                            <a class="dropdown-item" href="#">Pending</a>
                                            <a class="dropdown-item" href="#">Completed</a>
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
                                        <input type="text" class="form-control" placeholder="Task search"
                                               aria-describedby="button-addon1">
                                        <div class="input-group-append">
                                            <button class="btn btn-outline-light" type="button" id="button-addon1">
                                                <i class="fa fa-search"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                                <div class="app-pager d-flex align-items-center">
                                    <div class="mr-3">1-8 of 20</div>
                                    <nav aria-label="Page navigation example">
                                        <ul class="pagination">
                                            <li class="page-item">
                                                <a class="page-link" href="#" aria-label="Previous">
                                                    <i class="fa fa-chevron-left"></i>
                                                </a>
                                            </li>
                                            <li class="page-item">
                                                <a class="page-link" href="#" aria-label="Next">
                                                    <i class="fa fa-chevron-right"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>

                    @yield('index')
                    @yield('edit')

</body>
    <!-- Plugin scripts -->
    <script src="vendors/bundle.js"></script>

    <!-- Tagsinput -->
    <script src="vendors/tagsinput/bootstrap-tagsinput.js"></script>
    <script src="js/examples/tagsinput.js') }}"></script>

    <!-- quill -->
    <script src="vendors/quill/quill.js"></script>

    <!-- Clockpicker -->
    <script src="vendors/clockpicker/bootstrap-clockpicker.min.js"></script>
    <script src="js/examples/clockpicker.js"></script>

    <!-- Select2 -->
    <script src="vendors/select2/js/select2.min.js"></script>
    <script src="js/examples/select2.js"></script>

    <!-- Datepicker -->
    <script src="vendors/datepicker/daterangepicker.js"></script>
    <script src="js/examples/datepicker.js"></script>

    <script>
        new Quill('.reply-email-quill-editor', {
            modules: {
                toolbar: ".reply-email-quill-toolbar"
            },
            placeholder: "Type something... ",
            theme: "snow"
        });

        $(function () {
            $(document).on('click', '.app-block .app-content .app-action .action-left input[type="checkbox"]', function () {
                $('.app-lists ul li input[type="checkbox"]').prop('checked', $(this).prop('checked'));
                if ($(this).prop('checked')) {
                    $('.app-lists ul li input[type="checkbox"]').closest('li').addClass('active');
                } else {
                    $('.app-lists ul li input[type="checkbox"]').closest('li').removeClass('active');
                }
            });

            $(document).on('click', '.app-lists ul li input[type="checkbox"]', function () {
                if ($(this).prop('checked')) {
                    $(this).closest('li').addClass('active');
                } else {
                    $(this).closest('li').removeClass('active');
                }
            });

            $(document).on('click', '.app-block .app-content .app-content-body .app-lists ul.list-group li.list-group-item', function (e) {
                if (!$(e.target).is('.custom-control, .custom-control *, a, a *')) {
                    $('.app-detail').addClass('show').one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend', function () {
                        $('.app-block .app-content .app-content-body .app-detail .app-detail-article').niceScroll().resize();
                    });
                }
            });

            $(document).on('click', 'a.app-detail-close-button', function () {
                $('.app-detail').removeClass('show');
                return false;
            });

            $(document).on('click', '.app-sidebar-menu-button', function () {
                $('.app-block .app-sidebar, .app-content-overlay').addClass('show');
                // $('.app-block .app-sidebar .app-sidebar-menu').niceScroll().resize();
                return false;
            });

            $(document).on('click', '.app-content-overlay', function () {
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
    <script src="js/app.min.js'"></script>

</html>
