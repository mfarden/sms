<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login | Student Mangement System </title>
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

<div class="container d-flex justify-content-center align-items-center" style="height: 100vh;">
    <div class="col-md-4">

        <div class="card shadow">
            <div class="card-header text-center bg-primary text-white">
                <h4>Login</h4>
            </div>

            <div class="card-body">

                @if(session('error'))
                    <div class="alert alert-danger">{{ session('error') }}</div>
                @endif

                <form action="" method="POST">
                    @csrf

                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" required>
                        @error('email')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" required>
                        @error('password')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary w-100">Login</button>

                    <div class="text-center mt-3">
                        <a href="{{ route('register') }}">Create New Account</a>
                    </div>

                </form>

            </div>
        </div>

    </div>
</div>



    <!-- Js Link  -->
    <script src="{{ asset('assets/assets/js/theme-fun.js')}}"></script>
    <script src="{{ asset('assets/assets/js/theme-lib.js')}}"></script>
</body>

</html>
