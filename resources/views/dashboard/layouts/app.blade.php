<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>@yield('title') | Student Mangement System </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Summernote link -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote-lite.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote-lite.min.js"></script>
    <!-- Box Icon Link  -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!-- Favicon Link -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <!-- Css Link  -->
    <link rel="stylesheet" href="{{ asset('assets/style.css')}}">
</head>

<body class="">

    <!-- #sidebar  -->
    <aside class="sidebar">
        <div class="logo-bx">
            <a href="" class="d-flex align-items-center justify-content-center font-26  gap-10 ">
                <i class='bx bx-code-alt'></i>
                <div class="logo">
                    SMS
                </div>
            </a>
        </div>
        <div class="menu-bx d-flex align-items-center flex-column justify-content-between">
            <ul class="side-menu list-unstyled">
                <li class="active"><a href="#"><i class='bx bxs-dashboard'></i>Dashboard</a></li>
                <li><a href="#"><i class='bx bx-store-alt'></i>Student</a></li>
                <li><a href="#"><i class='bx bx-analyse'></i>Exams</a></li>
                <li><a href="#"><i class='bx bx-group'></i>Users</a></li>
                <li><a href="#"><i class='bx bx-cog'></i>Settings</a></li>
            </ul>
            <ul class="side-menu list-unstyled">
                <li>
                    <a href="#" class="logout">
                        <i class='bx bx-log-out-circle'></i>
                        Logout
                    </a>
                </li>
            </ul>
        </div>
    </aside>
    <!-- #sidebar  -->
    <!-- #main section -->
    <main class="content-bx">
        <!-- Header start -->
        <header class="header bg-white pt-10 pb-10">
            <div class="container-fluid">
                <div class="row align-items-center ">
                    <div class="col-6">
                        <div class="header-left-bx">
                            <div class="menu-icon icon-bx --br-100">
                                <i class='bx bx-menu'></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="right-header-bx d-flex align-items-center justify-content-end gap-10">
                            <div class="notification-icon icon-bx --br-100">
                                <i class='bx bx-bell'></i>
                            </div>
                            <!-- <button id="darkToggle" class="dark-mode-icon icon-bx --br-100">
                                <i class='bx bx-moon' id="darkIcon"></i>
                            </button> -->
                            <div class="profile-bx pos-relative d-flex align-items-center">
                                <div class="user-info-bx d-flex align-items-center gap-2">
                                    <img src="{{asset('assets/assets/images/user.png')}}" class="br-100" width="40" alt="">
                                    <span>M.Fardeen </span>
                                    <i class='bx bx-chevron-down'></i>
                                </div>
                                <div class="profile-dropdown-bx list-unstyled">
                                    <li class="dd-item"><a href="#!">Profile</a></li>
                                    <li class="dd-item"><a href="#!"> Setting</a></li>
                                    <li class="dd-item"><a href="#!"> Logout</a>
                                    </li>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Header End -->
        <!-- content-bx -->
        <section class="pt-80 pb-80 ">
            <div class="container-fluid">
                @yield('content')
            </div>
        </section>
        <!-- content-bx -->
        <!-- Footer Start  -->
        <footer class="footer bg-white pt-20 pb-20  ">
            <div class="container-fluid">
                <div class="copy-right-bx text-center ">
                    <p class="mb-0"> © Copyright
                        <script>
                        document.write(new Date().getFullYear())
                        </script> Design & Develop By SMS
                    </p>
                </div>
            </div>
        </footer>
        <!-- footer End -->
    </main>
    <!-- #main section -->





    <!-- Js Link  -->
    <script src="{{ asset('assets/assets/js/theme-fun.js')}}"></script>
    <script src="{{ asset('assets/assets/js/theme-lib.js')}}"></script>

    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</body>

</html>