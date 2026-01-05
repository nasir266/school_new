<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login In</title>
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
    <script src="{{ asset('admin/js/modernizr-3.6.0.min.js') }}"></script><link rel="shortcut icon" type="image/x-icon" href="{{ asset('admin/img/favicon.png') }}">
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
        body {
            background: linear-gradient(135deg, #042954, #06417d);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: "Poppins", sans-serif;
            color: #fff;
        }

        .signin-card {
            background: #ffffff;
            width: 100%;
            max-width: 420px;
            border-radius: 6px;
            box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.25);
            padding: 30px;
            color: #042954;
            padding-bottom : 40px;
        }

        .signin-card .form-control {
            border-radius: 10px;
            border: 1px solid #ccc;
            padding: 12px;
            font-size: 15px;
            height : 50px;
        }

        .btn-custom {
            background: #ffa701;
            color: #042954;
            font-weight: 600;
            padding: 12px;
            font-size: 16px;
            border-radius: 10px;
        }

        .btn-custom:hover {
            background: #ffb732;
            color: #042954;
        }

        .title {
            font-weight: 700;
            color: #042954;
        }

        .form-label {
            font-weight: 600;
        }

        .link-custom {
            color: #ffa701;
            text-decoration: none;
            font-weight: 600;
        }
        .link-custom:hover {
            color: #ffd28f;
        }

    </style>
</head>

<body>

    <div class="signin-card">
        <h2 class="text-center mb-4 title">Welcome to SMS</h2>

        <form action="{{ route('login')}}" method="post">
            @csrf
            @if(session()->has('notRegister'))
            <div class="alert icon-alart bg-pink2" role="alert">
                <i class="fas fa-times bg-pink3"></i>
                {{ session('notRegister')  }}
            </div>
            @endif
            @if(session()->has('notActivate'))
            <div class="alert icon-alart bg-yellow2" role="alert">
                <i class="fas fa-exclamation-triangle bg-yellow3"></i>
                {{ session('notActivate')  }}
            </div>
            @endif
            
            <div class="mb-3">
                <label class="form-label">Email Address</label>
                <input type="email" name="email" class="form-control" placeholder="Enter your email" required />
            </div>

            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" name="password" class="form-control" placeholder="Enter your password" required />
            </div>

            <div class="d-flex justify-content-between align-items-center mb-3">
                <div>
                    <input type="checkbox" id="remember" />
                    <label for="remember">Remember me</label>
                </div>
                <a href="#" class="link-custom">Forgot password?</a>
            </div>

            <button type="submit" class="btn btn-custom w-100">Login</button>

            <p class="text-center mt-4">
                Don't have an account?
                <a href="#" class="link-custom">Create one</a>
            </p>
        </form>
    </div>

    <!-- jquery-->
    <script src="{{ asset('admin/js/jquery-3.3.1.min.js') }}"></script>
    <!-- Plugins js -->
    <script src="{{ asset('admin/js/plugins.js') }}"></script>
    <!-- Popper js -->
    <script src="{{ asset('admin/js/popper.min.js') }}"></script>
    <!-- Bootstrap js -->
    <script src="{{ asset('admin/js/bootstrap.min.js') }}"></script>
    <!-- ========================== -->
    <!-- Counterup Js -->
    <script src="{{ asset('admin/js/jquery.counterup.min.js') }}"></script>
    <!-- Moment Js -->
    <script src="{{ asset('admin/js/moment.min.js') }}"></script>
    <!-- Waypoints Js -->
    <script src="{{ asset('admin/js/jquery.waypoints.min.js') }}"></script>
    <!-- Scroll Up Js -->
    <script src="{{ asset('admin/js/jquery.scrollUp.min.js') }}"></script>
    <!-- Select 2 Js -->
    <script src="{{ asset('admin/js/select2.min.js') }}"></script>
    <!-- Date Picker Js -->
    <script src="{{ asset('admin/js/datepicker.min.js') }}"></script>
    <!-- Full Calender Js -->
    <script src="{{ asset('admin/js/fullcalendar.min.js') }}"></script>
    <!-- Chart Js -->
    <script src="{{ asset('admin/js/Chart.min.js') }}"></script>
    <!-- Custom Js -->
    <script src="{{ asset('admin/js/main.js') }}"></script>


</body>

</html>
