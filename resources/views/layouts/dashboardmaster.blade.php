<!DOCTYPE html>
<html lang="en" data-bs-theme="light" data-menu-color="brand" data-topbar-color="light">


<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="utf-8" />
    <title>@yield('title') | Dashtrap - Responsive Bootstrap 5 Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('dashboard') }}/assets/images/logo-sm.png">

    <link href="{{ asset('dashboard') }}/assets/libs/morris.js/morris.css" rel="stylesheet" type="text/css" />

    <!-- App css -->
    <link href="{{ asset('dashboard') }}/assets/css/style.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="{{ asset('dashboard') }}/assets/css/icons.min.css" rel="stylesheet" type="text/css">
    <script src="{{ asset('dashboard') }}/assets/js/config.js"></script>

    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">


    {{-- custom css --}}

    <!-- third party css -->
    <link href="{{ asset('dashboard') }}/assets/libs/datatables.net-bs5/css/dataTables.bootstrap5.min.css"
        rel="stylesheet" type="text/css" />
    <link href="{{ asset('dashboard') }}/assets/libs/datatables.net-responsive-bs5/css/responsive.bootstrap5.min.css"
        rel="stylesheet" type="text/css" />
    <link href="{{ asset('dashboard') }}/assets/libs/datatables.net-buttons-bs5/css/buttons.bootstrap5.min.css"
        rel="stylesheet" type="text/css" />
    <link href="{{ asset('dashboard') }}/assets/libs/datatables.net-select-bs5/css/select.bootstrap5.min.css"
        rel="stylesheet" type="text/css" />
    <!-- third party css end -->


    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- Plugins css -->
    <link href="{{ asset('dashboard') }}/assets/libs/quill/quill.core.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('dashboard') }}/assets/libs/quill/quill.bubble.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('dashboard') }}/assets/libs/quill/quill.snow.css" rel="stylesheet" type="text/css" />

    <script src="{{ asset('dashboard') }}/assets/js/config.js"></script>



    @stack('css')

</head>


<body>

    <!-- Begin page -->
    <div class="layout-wrapper">

        <!-- ========== Left Sidebar ========== -->
        <div class="main-menu">
            <!-- Brand Logo -->
            <div class="logo-box">
                <!-- Brand Logo Light -->
                <a class='logo-light' href='{{ route('dashboard') }}'>
                    <img src="{{ asset('dashboard') }}/assets/images/logo-light.png" alt="logo" class="logo-lg"
                        height="28">
                    <img src="{{ asset('dashboard') }}/assets/images/logo-sm.png" alt="small logo" class="logo-sm"
                        height="28">
                </a>

                <!-- Brand Logo Dark -->
                <a class='logo-dark' href='{{ route('dashboard') }}'>
                    <img src="{{ asset('dashboard') }}/assets/images/logo-dark.png" alt="dark logo" class="logo-lg"
                        height="28">
                    <img src="{{ asset('dashboard') }}/assets/images/logo-sm.png" alt="small logo" class="logo-sm"
                        height="28">
                </a>
            </div>

            <!--- Menu -->
            <div data-simplebar>
                <ul class="app-menu">

                    <li class="menu-title">Menu</li>

                    <li class="menu-item">
                        <a class='menu-link waves-effect waves-light' href='{{ route('dashboard') }}'>
                            <span class="menu-icon"><i class="bx bx-home-smile"></i></span>
                            <span class="menu-text"> Dashboards </span>
                            <span class="badge bg-primary rounded ms-auto">01</span>
                        </a>
                    </li>



                    <li class="menu-item">
                        <a class='menu-link waves-effect waves-light' href="{{ route('home.profile') }}">
                            <span class="menu-icon"><i class="fa-regular fa-face-smile"></i></span>
                            <span class="menu-text"> Profile </span>
                        </a>
                    </li>



                </ul>
            </div>
        </div>



        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="page-content">

            <!-- ========== Topbar Start ========== -->
            <div class="navbar-custom mb-4">
                <div class="topbar">
                    <div class="topbar-menu d-flex align-items-center gap-lg-2 gap-1">

                        <!-- Brand Logo -->
                        <div class="logo-box">
                            <!-- Brand Logo Light -->
                            <a class='logo-light' href='{{ route('dashboard') }}'>
                                <img src="{{ asset('dashboard') }}/assets/images/logo-light.png" alt="logo"
                                    class="logo-lg" height="22">
                                <img src="{{ asset('dashboard') }}/assets/images/logo-sm.png" alt="small logo"
                                    class="logo-sm" height="22">
                            </a>

                            <!-- Brand Logo Dark -->
                            <a class='logo-dark' href='{{ route('dashboard') }}'>
                                <img src="{{ asset('dashboard') }}/assets/images/logo-dark.png" alt="dark logo"
                                    class="logo-lg" height="22">
                                <img src="{{ asset('dashboard') }}/assets/images/logo-sm.png" alt="small logo"
                                    class="logo-sm" height="22">
                            </a>
                        </div>

                        <!-- Sidebar Menu Toggle Button -->
                        <button class="button-toggle-menu">
                            <i class="mdi mdi-menu"></i>
                        </button>
                    </div>

                    <ul class="topbar-menu d-flex align-items-center gap-4">

                        <li class="nav-link" id="theme-mode">
                            <i class="bx bx-moon font-size-24"></i>
                        </li>

                        <li class="dropdown">
                            <a class="nav-link dropdown-toggle nav-user me-0 waves-effect waves-light"
                                data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false"
                                aria-expanded="false">
                                @if (auth()->user()->image == 'default.webp')
                                    <img src="{{ asset('dashboard/assets/images/users/avatar-4.jpg') }}"
                                        alt="user-image" class="rounded-circle">
                                @else
                                    <img src="{{ asset('uploads/profile') }}/{{ auth()->user()->image }}"
                                        alt="user-image" class="rounded-circle">
                                @endif
                                <span class="ms-1 d-none d-md-inline-block">
                                    {{ auth()->user()->name }} . <i class="mdi mdi-chevron-down"></i>
                                </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end profile-dropdown ">
                                <!-- item-->
                                <div class="dropdown-header noti-title">
                                    <h6 class="text-overflow m-0">Welcome {{ auth()->user()->name }} !</h6>
                                </div>



                                <!-- item-->
                                <form action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <button class='dropdown-item notify-item' type="submit">
                                        <i class="fe-log-out"></i>
                                        <span>Logout</span>
                                    </button>
                                </form>

                            </div>
                        </li>

                    </ul>
                </div>
            </div>
            <!-- ========== Topbar End ========== -->

            <div class="px-3">

                <!-- Start Content-->
                <div class="container-fluid">

                    @yield('content')

                </div> <!-- container -->

            </div> <!-- content -->

            <!-- Footer Start -->
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6">

                        </div>
                        <div class="col-md-6">
                            <div class="d-none d-md-flex gap-4 align-item-center justify-content-md-end">
                                <p class="mb-0">Design & Develop by <a href="https://anik-dev.musicarenabd.com/"
                                        target="_blank">Anik Mondal</a> </p>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- end Footer -->

        </div>

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->

    </div>
    <!-- END wrapper -->

    <!-- App js -->

    <script src="{{ asset('dashboard') }}/assets/js/vendor.min.js"></script>
    <script src="{{ asset('dashboard') }}/assets/js/app.js"></script>

    <!-- Knob charts js -->
    <script src="{{ asset('dashboard') }}/assets/libs/jquery-knob/jquery.knob.min.js"></script>

    <!-- Sparkline Js-->
    <script src="{{ asset('dashboard') }}/assets/libs/jquery-sparkline/jquery.sparkline.min.js"></script>

    <script src="{{ asset('dashboard') }}/assets/libs/morris.js/morris.min.js"></script>

    <script src="{{ asset('dashboard') }}/assets/libs/raphael/raphael.min.js"></script>

    <!-- Dashboard init-->
    <script src="{{ asset('dashboard') }}/assets/js/pages/dashboard.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>



    <!-- third party js -->
    <script src="{{ asset('dashboard') }}/assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="{{ asset('dashboard') }}/assets/libs/datatables.net-bs5/js/dataTables.bootstrap5.min.js"></script>
    <script src="{{ asset('dashboard') }}/assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="{{ asset('dashboard') }}/assets/libs/datatables.net-responsive-bs5/js/responsive.bootstrap5.min.js">
    </script>
    <script src="{{ asset('dashboard') }}/assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="{{ asset('dashboard') }}/assets/libs/datatables.net-buttons-bs5/js/buttons.bootstrap5.min.js"></script>
    <script src="{{ asset('dashboard') }}/assets/libs/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="{{ asset('dashboard') }}/assets/libs/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="{{ asset('dashboard') }}/assets/libs/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="{{ asset('dashboard') }}/assets/libs/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="{{ asset('dashboard') }}/assets/libs/datatables.net-select/js/dataTables.select.min.js"></script>
    <script src="{{ asset('dashboard') }}/assets/libs/pdfmake/build/pdfmake.min.js"></script>
    <script src="{{ asset('dashboard') }}/assets/libs/pdfmake/build/vfs_fonts.js"></script>
    <!-- third party js ends -->

    <!-- Datatables js -->
    <script src="{{ asset('dashboard') }}/assets/js/pages/datatables.js"></script>

    <!-- Plugins js -->
    <script src="{{ asset('dashboard') }}/assets/libs/quill/quill.min.js"></script>


    <!-- Demo js-->
    <script src="{{ asset('dashboard') }}/assets/js/pages/form-quilljs.js"></script>


    <!-- jQuery -->


    @yield('script')
</body>




</html>
