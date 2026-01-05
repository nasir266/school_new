<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Register</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('admin/img/favicon.png') }}">
    <link rel="stylesheet" href="{{ asset('admin/css/normalize.css') }}">
    <!-- Main CSS -->
    <link rel="stylesheet" href="{{ asset('admin/css/main.css') }}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('admin/css/bootstrap.min.css') }}">


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
            border-radius: 18px;
            box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.25);
            padding: 30px;
            color: #042954;
        }

        .signin-card .form-control {
            border-radius: 10px;
            border: 1px solid #ccc;
            padding: 12px;
            font-size: 15px;
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
        <h2 class="text-center mb-4 title">Register SMS</h2>

        <form action="{{ route('register')}}" method="post">
            @csrf
            <div class="mb-3">
                <label class="form-label">Name:</label>
                <input type="text" name="name" class="form-control" placeholder="Enter your name" required />
            </div>
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

            <button type="submit" class="btn btn-custom w-100">Register</button>

            <p class="text-center mt-4">
                Don't have an account?
                <a href="#" class="link-custom">Create one</a>
            </p>
        </form>
    </div>

</body>

</html>
