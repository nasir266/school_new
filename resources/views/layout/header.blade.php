<!doctype html>
<html class="no-js" lang="">


<!-- Mirrored from www.radiustheme.com/demo/html/psdboss/akkhor/akkhor/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 23 Nov 2025 07:50:55 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('admin/img/favicon.png') }}">
    <!-- Normalize CSS -->
    <link rel="stylesheet" href="{{ asset('admin/css/normalize.css') }}">
    <!-- Main CSS -->
    <link rel="stylesheet" href="{{ asset('admin/css/main.css') }}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('admin/css/bootstrap.min.css') }}">
    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="{{ asset('admin/css/all.min.css') }}">
    <!-- Flaticon CSS -->
    <link rel="stylesheet" href="{{ asset('admin/fonts/flaticon.css') }}">
    <!-- Full Calender CSS -->
    <link rel="stylesheet" href="{{ asset('admin/css/fullcalendar.min.css') }}">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{ asset('admin/css/animate.min.css') }}">
    <!-- Select 2 CSS -->
    <link rel="stylesheet" href="{{ asset('admin/css/select2.min.css') }}">
    <!-- Date Picker CSS -->
    <link rel="stylesheet" href="{{ asset('admin/css/datepicker.min.css') }}">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('admin/style.css') }}">
    <!-- Modernize js -->
    <script src="{{ asset('admin/js/modernizr-3.6.0.min.js') }}"></script>


    <style>
        /* Fixed Header */
        .navbar.header-menu-one {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 1030;
            height: 70px; /* Adjust based on your header height */
        }

        /* Fixed Sidebar with independent scrolling */
        .sidebar-main {
            position: fixed;
            top: 70px; /* Below header */
            left: 0;
            bottom: 0;
            width: 260px; /* Adjust based on your sidebar width */
            z-index: 1020;
            overflow-y: auto; /* Enable scrolling for sidebar */
            /* overflow-x: hidden; Prevent horizontal scroll */
        }

        /* Ensure sidebar content can scroll independently */
        .sidebar-menu-content {
            height: 100%;
            overflow-y: auto;
        }

        /* Main content area */
        .dashboard-content-one {
            margin-left: 260px; /* Same as sidebar width */
            margin-top: 80px; /* Same as header height */
            min-height: calc(100vh - 80px);


        }

        /* Custom scrollbar for sidebar (optional) */
        .sidebar-main::-webkit-scrollbar {
            width: 6px;
        }

        .sidebar-main::-webkit-scrollbar-track {
            background: #042954;
        }

        .sidebar-main::-webkit-scrollbar-thumb {
            background: #042954;
            border-radius: 3px;
        }

        .sidebar-main::-webkit-scrollbar-thumb:hover {
            background: #042954;
        }

        /* Mobile responsive */
        @media (max-width: 768px) {
            .navbar.header-menu-one {
                position: static;
                height: auto;
            }

            .sidebar-main {
                position: static;
                width: 100%;
                height: auto;
                overflow-y: visible;
            }

            .dashboard-content-one {
                margin-left: 0;
                margin-top: 0;
            }
        }
    </style>


</head>

<body>
    <!-- Preloader Start Here -->
    <div id="preloader"></div>
    <!-- Preloader End Here -->
    <div id="wrapper" class="wrapper bg-ash">

       <!-- Header Menu Area Start Here -->
    <div class="navbar navbar-expand-md header-menu-one bg-light ">
            <div class="nav-bar-header-one">
                <div class="header-logo">
                    <a href="index.html">
                        <img src="{{ asset('admin/img/white_logo.png') }}" style="width:191px; height:50px;" alt="logo">
                    </a>
                </div>
                 <div class="toggle-button sidebar-toggle">
                    <button type="button" class="item-link">
                        <span class="btn-icon-wrap">
                            <span></span>
                            <span></span>
                            <span></span>
                        </span>
                    </button>
                </div>
            </div>
            <div class="d-md-none mobile-nav-bar">
               <button class="navbar-toggler pulse-animation" type="button" data-toggle="collapse" data-target="#mobile-navbar" aria-expanded="false">
                    <i class="far fa-arrow-alt-circle-down"></i>
                </button>
                <button type="button" class="navbar-toggler sidebar-toggle-mobile">
                    <i class="fas fa-bars"></i>
                </button>
            </div>
            <div class="header-main-menu collapse navbar-collapse" id="mobile-navbar">
                <ul class="navbar-nav">
                    <li class="navbar-item header-search-bar">
                        <div class="input-group stylish-input-group">
                            <span class="input-group-addon">
                                <button type="submit">
                                    <span class="flaticon-search" aria-hidden="true"></span>
                                </button>
                            </span>
                            <input type="text" class="form-control" placeholder="Find Something . . .">
                        </div>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="navbar-item dropdown header-admin">
                        <a class="navbar-nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                            aria-expanded="false">
                            <div class="admin-title">
                                <h5 class="item-title">{{ \Illuminate\Support\Str::limit(Auth::user()->name, 12, '...') }}</h5>
                                <span>Admin</span>
                            </div>
                            <div style="width: 40px; height: 40px; border-radius: 50%; overflow: hidden;">
                                <img  src="{{ asset('/storage/'.Auth::user()->image) }}" style="width: 100%;height: 100%; object-fit: cover;">
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <div class="item-header">
                                <h6 class="item-title">{{ Auth::user()->name }}</h6>
                            </div>
                            <div class="item-content">
                                <ul class="settings-list">
                                    <li><a href="#"><i class="flaticon-user"></i>My Profile</a></li>
                                    <li><a href="#"><i class="flaticon-list"></i>Task</a></li>
                                    <li><a href="#"><i class="flaticon-chat-comment-oval-speech-bubble-with-text-lines"></i>Message</a></li>
                                    <li><a href="#"><i class="flaticon-gear-loading"></i>Account Settings</a></li>
                                    <li><a href="{{ route('logout')}}"><i class="flaticon-turn-off"></i>Log Out</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="navbar-item dropdown header-message">
                        <a class="navbar-nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                            aria-expanded="false">
                            <i class="far fa-envelope"></i>
                            <div class="item-title d-md-none text-16 mg-l-10">Message</div>
                            <span>5</span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right">
                            <div class="item-header">
                                <h6 class="item-title">05 Message</h6>
                            </div>
                            <div class="item-content">
                                <div class="media">
                                    <div class="item-img bg-skyblue author-online">
                                        <img src="{{ asset('admin/img/figure/student11.png') }}" alt="img">
                                    </div>
                                    <div class="media-body space-sm">
                                        <div class="item-title">
                                            <a href="#">
                                                <span class="item-name">Maria Zaman</span>
                                                <span class="item-time">18:30</span>
                                            </a>
                                        </div>
                                        <p>What is the reason of buy this item.
                                        Is it usefull for me.....</p>
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="item-img bg-yellow author-online">
                                        <img src="{{ asset('admin/img/figure/student12.png') }}" alt="img">
                                    </div>
                                    <div class="media-body space-sm">
                                        <div class="item-title">
                                            <a href="#">
                                                <span class="item-name">Benny Roy</span>
                                                <span class="item-time">10:35</span>
                                            </a>
                                        </div>
                                        <p>What is the reason of buy this item.
                                        Is it usefull for me.....</p>
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="item-img bg-pink">
                                        <img src="{{ asset('admin/img/figure/student13.png') }}" alt="img">
                                    </div>
                                    <div class="media-body space-sm">
                                        <div class="item-title">
                                            <a href="#">
                                                <span class="item-name">Steven</span>
                                                <span class="item-time">02:35</span>
                                            </a>
                                        </div>
                                        <p>What is the reason of buy this item.
                                        Is it usefull for me.....</p>
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="item-img bg-violet-blue">
                                        <img src="{{ asset('admin/img/figure/student11.png') }}" alt="img">
                                    </div>
                                    <div class="media-body space-sm">
                                        <div class="item-title">
                                            <a href="#">
                                                <span class="item-name">Joshep Joe</span>
                                                <span class="item-time">12:35</span>
                                            </a>
                                        </div>
                                        <p>What is the reason of buy this item.
                                        Is it usefull for me.....</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="navbar-item dropdown header-notification">
                        <a class="navbar-nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                            aria-expanded="false">
                            <i class="far fa-bell"></i>
                            <div class="item-title d-md-none text-16 mg-l-10">Notification</div>
                            <span>8</span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right">
                            <div class="item-header">
                                <h6 class="item-title">03 Notifiacations</h6>
                            </div>
                            <div class="item-content">
                                <div class="media">
                                    <div class="item-icon bg-skyblue">
                                        <i class="fas fa-check"></i>
                                    </div>
                                    <div class="media-body space-sm">
                                        <div class="post-title">Complete Today Task</div>
                                        <span>1 Mins ago</span>
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="item-icon bg-orange">
                                        <i class="fas fa-calendar-alt"></i>
                                    </div>
                                    <div class="media-body space-sm">
                                        <div class="post-title">Director Metting</div>
                                        <span>20 Mins ago</span>
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="item-icon bg-violet-blue">
                                        <i class="fas fa-cogs"></i>
                                    </div>
                                    <div class="media-body space-sm">
                                        <div class="post-title">Update Password</div>
                                        <span>45 Mins ago</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                     <li class="navbar-item dropdown header-language">
                        <a class="navbar-nav-link dropdown-toggle" href="#" role="button"
                        data-toggle="dropdown" aria-expanded="false"><i class="fas fa-globe-americas"></i>EN</a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="#">English</a>
                            <a class="dropdown-item" href="#">Spanish</a>
                            <a class="dropdown-item" href="#">Franchis</a>
                            <a class="dropdown-item" href="#">Chiness</a>
                        </div>
                    </li>
                </ul>
            </div>
    </div>

                <!-- Header Menu Area End Here -->
        <div class="dashboard-page-one" >
            <!-- Sidebar Area Start Here -->
            <div class="sidebar-main sidebar-menu-one sidebar-expand-md sidebar-color" >
                <div class="mobile-sidebar-header d-md-none">
                    <div class="header-logo">
                        <a href="index.html"><img src="{{ asset('admin/img/logo1.png') }}" alt="logo"></a>
                    </div>
                </div>
                <div class="sidebar-menu-content">
                    <ul class="nav nav-sidebar-menu sidebar-toggle-view">
                    @if(Auth::user()->status == 2)
                        <li class="nav-item ">
                            <a href="{{ route('sAdmin') }}" class="nav-link"><i class="flaticon-dashboard"></i><span>Dashboard</span></a>
                        </li>
                        <li class="nav-item sidebar-nav-item">
                            <a href="#" class="nav-link"><i class="fas fa-school"></i><span>School</span></a>
                            <ul class="nav sub-group-menu">
                                <li class="nav-item">
                                    <a href="{{ route('school')}}" class="nav-link"><i class="fas fa-angle-right"></i>Add School</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('listSchool')}}" class="nav-link"><i class="fas fa-angle-right"></i>School List</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('activeSchool')}}" class="nav-link"><i class="fas fa-angle-right"></i>School Activation</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('activeSchoolList')}}" class="nav-link"><i class="fas fa-angle-right"></i>School Activation List</a>
                                </li>

                            </ul>
                        </li>
                        @endif
                        @if(Auth::user()->status == 11)
                        <li class="nav-item sidebar-nav-item">
                            <a href="#" class="nav-link"><i class="flaticon-dashboard"></i><span>Dashboard</span></a>
                            <ul class="nav sub-group-menu">
                                <li class="nav-item">
                                    <a href="{{ route('cIndex') }}" class="nav-link"><i class="fas fa-angle-right"></i>Admin</a>
                                </li>

                            </ul>
                        </li>
                            <li class="nav-item sidebar-nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-university"></i><span>Campus</span></a>
                                <ul class="nav sub-group-menu">
                                    <li class="nav-item">
                                        <a href="{{ route('addCampus') }}" class="nav-link"><i class="fas fa-angle-right"></i>Add Campus</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('campusList') }}" class="nav-link"><i class="fas fa-angle-right"></i>Campus List</a>
                                    </li>

                                </ul>
                            </li>
                        @endif
                    @if(Auth::user()->status == 12)
                        <li class="nav-item sidebar-nav-item">
                            <a href="#" class="nav-link"><i class="flaticon-dashboard"></i><span>Dashboard</span></a>
                            <ul class="nav sub-group-menu">
                                <li class="nav-item">
                                    <a href="{{ route('sindex') }}" class="nav-link"><i class="fas fa-angle-right"></i>Admin</a>
                                </li>

                            </ul>
                        </li>
                        <li class="nav-item sidebar-nav-item">
                            <a href="#" class="nav-link"><i class="flaticon-menu"></i><span>Basic Information</span></a>
                            <ul class="nav sub-group-menu">
                                <li class="nav-item">
                                    <a href="{{ route('session') }}" class="nav-link"><i class="fas fa-angle-right"></i>Session</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('class') }}" class="nav-link"><i class="fas fa-angle-right"></i>Class</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('section') }}" class="nav-link"><i class="fas fa-angle-right"></i>Section</a>
                                </li>

                            </ul>
                        </li>
                        <li class="nav-item sidebar-nav-item">
                            <a href="#" class="nav-link"><i class="fas fa-headset"></i><span>Reception</span></a>
                            <ul class="nav sub-group-menu">
                                <li class="nav-item">
                                    <a href="{{ route('ApplicationForm') }}" class="nav-link"><i class="fas fa-angle-right"></i>Application Form</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('list_ApplicationForm') }}" class="nav-link"><i class="fas fa-angle-right"></i>list_Application Form</a>
                                </li>

                            </ul>

                        </li>

                        <li class="nav-item sidebar-nav-item">
                            <a href="#" class="nav-link"><i class="fas fa-id-badge"></i><span>Cards</span></a>
                            <ul class="nav sub-group-menu">
                                <li class="nav-item ">
                                    <a href="{{ route('StudentCardByClass') }}" class="nav-link"><i class="fas fa-angle-right"></i>Student Card By Class</a>
                                </li>
                                <li class="nav-item ">
                                    <a href="{{ route('SingleStudentCard') }}" class="nav-link"><i class="fas fa-angle-right"></i>Single Student Card</a>
                                </li>
                                <li class="nav-item ">
                                    <a href="{{ route('AllStaffCard') }}" class="nav-link"><i class="fas fa-angle-right"></i>Staff Card Overall</a>
                                </li>
                                <li class="nav-item ">
                                    <a href="{{ route('SingleStaffCard') }}" class="nav-link"><i class="fas fa-angle-right"></i>Single Staff Card</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item sidebar-nav-item">
                            <a href="#" class="nav-link"><i class="fas fa-id-badge"></i><span>Cards</span></a>
                            <ul class="nav sub-group-menu">
                                <li class="nav-item ">
                                    <a href="{{ route('StudentCardByClass') }}" class="nav-link"><i class="fas fa-angle-right"></i>Student Card By Class</a>
                                </li>
                                <li class="nav-item ">
                                    <a href="{{ route('SingleStudentCard') }}" class="nav-link"><i class="fas fa-angle-right"></i>Single Student Card</a>
                                </li>
                                <li class="nav-item ">
                                    <a href="{{ route('AllStaffCard') }}" class="nav-link"><i class="fas fa-angle-right"></i>Staff Card Overall</a>
                                </li>
                                <li class="nav-item ">
                                    <a href="{{ route('SingleStaffCard') }}" class="nav-link"><i class="fas fa-angle-right"></i>Single Staff Card</a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item ">
                            <a href="{{ route('staff') }}" class="nav-link"><i class="fas fa-user-tie"></i> <span>Staff</span></a>
                        </li>
                        <li class="nav-item sidebar-nav-item">
                            <a href="#" class="nav-link"><i class="flaticon-open-book"></i><span>Subject</span></a>
                            <ul class="nav sub-group-menu">
                                <li class="nav-item ">
                                    <a href="{{ route('Subject') }}" class="nav-link"><i class="fas fa-angle-right"></i>Add Subject</a>
                                </li>
                                <li class="nav-item ">
                                    <a href="{{ route('allSubject') }}" class="nav-link"><i class="fas fa-angle-right"></i>Subject Lists</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item ">
                            <a href="{{ route('Incharge') }}" class="nav-link"><i class="fas fa-chalkboard-teacher"></i><span>Class Incharge</span></a>
                        </li>
                        </li>
                        <li class="nav-item sidebar-nav-item">
                                <a href="#" class="nav-link"><i class="fas fa-coins"></i><span>Fee</span></a>
                                <ul class="nav sub-group-menu">
                                    <li class="nav-item ">
                                        <a href="{{ route('Fee') }}" class="nav-link"><i class="fas fa-angle-right"></i>Add Fee Type</a>
                                    </li>
                                </ul>
                        </li>
                        <li class="nav-item ">
                            <a href="{{ route('Parents') }}" class="nav-link"><i class="flaticon-couple"></i> <span>Parents</span></a>
                        </li>
                        <li class="nav-item ">
                            <a href="{{ route('Teachers') }}" class="nav-link"><i class="fas fa-user-graduate"></i> <span>Teachers</span></a>
                        </li>
                        <li class="nav-item sidebar-nav-item">
                            <a href="#" class="nav-link"><i class="flaticon-classmates"></i><span>Students</span></a>
                            <ul class="nav sub-group-menu">
                                <li class="nav-item ">
                                    <a href="{{ route('Students') }}" class="nav-link"><i class="fas fa-angle-right"></i>Add Students</a>
                                </li>
                                <li class="nav-item ">
                                    <a href="{{ route('allStudents') }}" class="nav-link"><i class="fas fa-angle-right"></i>All Students</a>
                                </li>
                                <li class="nav-item ">
                                    <a href="{{ route('SelectClass') }}" class="nav-link"><i class="fas fa-angle-right"></i>List by Class</a>
                                </li>
                                <li class="nav-item ">
                                    <a href="{{ route('SelectSession') }}" class="nav-link"><i class="fas fa-angle-right"></i>List by Session</a>
                                </li>

                            </ul>
                        </li>
                        <li class="nav-item sidebar-nav-item">
                            <a href="#" class="nav-link"><i class="flaticon-money"></i><span>Students Fee</span></a>
                            <ul class="nav sub-group-menu">
                                <li class="nav-item ">
                                    <a href="{{ route('StudentsFee') }}" class="nav-link"><i class="fas fa-angle-right"></i>Add Students Fee</a>
                                </li>
                                <li class="nav-item ">
                                    <a href="{{ route('StudentsFeeList') }}" class="nav-link"><i class="fas fa-angle-right"></i>Students Fee List</a>
                                </li>
                                <li class="nav-item ">
                                    <a href="{{ route('PendingFeeByClass') }}" class="nav-link"><i class="fas fa-angle-right"></i>Pending List by Class</a>
                                </li>
                                <li class="nav-item ">
                                    <a href="{{ route('PendingFeeBySibling') }}" class="nav-link"><i class="fas fa-angle-right"></i>Pending List by sibling</a>
                                </li>

                            </ul>
                        </li>
                        <li class="nav-item sidebar-nav-item">
                            <a href="#" class="nav-link"><i class="fas fa-exclamation-circle"></i><span>Students Fine</span></a>
                            <ul class="nav sub-group-menu">
                                <li class="nav-item ">
                                    <a href="{{ route('addFine') }}" class="nav-link"><i class="fas fa-angle-right"></i>Add Fine</a>
                                </li>
                                <li class="nav-item ">
                                    <a href="{{ route('StudentsFine') }}" class="nav-link"><i class="fas fa-angle-right"></i>Pay Student Fine</a>
                                </li>
                                <li class="nav-item ">
                                    <a href="{{ route('FineListByClass') }}" class="nav-link"><i class="fas fa-angle-right"></i>Student List by Class</a>
                                </li>
                                <li class="nav-item ">
                                    <a href="{{ route('FineListBySession') }}" class="nav-link"><i class="fas fa-angle-right"></i>Student List by section</a>
                                </li>

                            </ul>
                        </li>
                        <li class="nav-item sidebar-nav-item">
                            <a href="#" class="nav-link"><i class="fas fa-wallet"></i><span>Staff Pay</span></a>
                            <ul class="nav sub-group-menu">
                                <li class="nav-item ">
                                    <a href="{{ route('AddStaffPay') }}" class="nav-link"><i class="fas fa-angle-right"></i>Add Staff Pay</a>
                                </li>
                                <li class="nav-item ">
                                    <a href="{{ route('StaffPayList') }}" class="nav-link"><i class="fas fa-angle-right"></i>Staff Pay List</a>
                                </li>
                                <li class="nav-item ">
                                    <a href="{{ route('SingleStaffList') }}" class="nav-link"><i class="fas fa-angle-right"></i>By Single Staff List</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item sidebar-nav-item">
                            <a href="#" class="nav-link"><i class="fas fa-chart-line"></i><span>School Expense</span></a>
                            <ul class="nav sub-group-menu">
                                <li class="nav-item ">
                                    <a href="{{ route('AddSchoolExpense') }}" class="nav-link"><i class="fas fa-angle-right"></i>Add School Expense</a>
                                </li>
                                <li class="nav-item ">
                                    <a href="{{ route('ExpenseList') }}" class="nav-link"><i class="fas fa-angle-right"></i>School Expense List</a>
                                </li>
                                <li class="nav-item ">
                                    <a href="{{ route('ExpenseByDate') }}" class="nav-link"><i class="fas fa-angle-right"></i>Expense List By Date</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item sidebar-nav-item">
                            <a href="#" class="nav-link"><i class="fas fa-poll"></i><span>Result Card</span></a>
                            <ul class="nav sub-group-menu">
                                <li class="nav-item ">
                                    <a href="{{ route('AddTerm') }}" class="nav-link"><i class="fas fa-angle-right"></i>Add Term</a>
                                </li>
                                <li class="nav-item ">
                                    <a href="{{ route('AddResultCard') }}" class="nav-link"><i class="fas fa-angle-right"></i>Add Result Card</a>
                                </li>
                                <li class="nav-item ">
                                    <a href="{{ route('ReasultBySingleSubject') }}" class="nav-link"><i class="fas fa-angle-right"></i>Result Card Single Subject</a>
                                </li>
                                <li class="nav-item ">
                                    <a href="{{ route('ReasultBySingleTerm') }}" class="nav-link"><i class="fas fa-angle-right"></i>Result Card By Single Term</a>
                                </li>
                                <li class="nav-item ">
                                    <a href="{{ route('ReasultByAllTerm') }}" class="nav-link"><i class="fas fa-angle-right"></i>Result Card By All Term</a>
                                </li>
                                <li class="nav-item ">
                                    <a href="{{ route('ReasultBySection') }}" class="nav-link"><i class="fas fa-angle-right"></i>Result Card By Section</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item sidebar-nav-item">
                            <a href="#" class="nav-link"><i class="flaticon-checklist"></i><span>Attendance</span></a>
                            <ul class="nav sub-group-menu">
                                <li class="nav-item ">
                                    <a href="{{ route('BarcodeAttendance') }}" class="nav-link"><i class="fas fa-angle-right"></i>Barcode Attendance</a>
                                </li>
                                <li class="nav-item ">
                                    <a href="{{ route('TeacherAttendance') }}" class="nav-link"><i class="fas fa-angle-right"></i>Teacher Attendance</a>
                                </li>
                                <li class="nav-item ">
                                    <a href="{{ route('StudentAttendance') }}" class="nav-link"><i class="fas fa-angle-right"></i>Students Attendance</a>
                                </li>
                                <li class="nav-item ">
                                    <a href="{{ route('AttendanceListBySection') }}" class="nav-link"><i class="fas fa-angle-right"></i>St. Attendance List By Section</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item sidebar-nav-item">
                            <a href="#" class="nav-link"><i class="flaticon-shopping-list"></i><span>Reports</span></a>
                            <ul class="nav sub-group-menu">
                                <li class="nav-item ">
                                    <a href="{{ route('TodayReport') }}" class="nav-link"><i class="fas fa-angle-right"></i>Today Report</a>
                                </li>
                                <li class="nav-item ">
                                    <a href="{{ route('ReportByDate') }}" class="nav-link"><i class="fas fa-angle-right"></i>Report By Date</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item sidebar-nav-item">
                            <a href="#" class="nav-link"><i class="fas fa-level-up-alt"></i><span>Promote Student</span></a>
                            <ul class="nav sub-group-menu">
                                <li class="nav-item ">
                                    <a href="{{ route('PromoteStudent') }}" class="nav-link"><i class="fas fa-angle-right"></i>Add Promote Student</a>
                                </li>
                            </ul>
                        </li>
                         @endif
                    </ul>
                </div>
            </div>

        <!-- Page Area Start Here -->


