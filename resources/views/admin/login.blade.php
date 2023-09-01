<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Responsive HTML Admin Dashboard Template based on Bootstrap 5">
    <meta name="author" content="NobleUI">
    <meta name="keywords"
          content="nobleui, bootstrap, bootstrap 5, bootstrap5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

    <title>Admin Login</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <!-- End fonts -->

    <link rel="stylesheet" href="{{asset('/assets/vendors/core/core.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/fonts/feather-font/css/iconfont.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/vendors/flag-icon-css/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/css/demo2/style.css')}}">
    <link rel="shortcut icon" href="{{asset('/assets/images/favicon.png')}}"/>
    <link rel="stylesheet" href="{{asset('resources/style/login.css')}}">

</head>
<body>
<div class="main-wrapper">
    <div class="page-wrapper full-page">
        <div class="page-content d-flex align-items-center justify-content-center">

            <div class="row w-100 mx-0 auth-page">
                <div class="col-md-8 col-xl-6 mx-auto">
                    <div class="card br-10">
                        <div class="row">
                            <div class="col-md-4 pe-md-0">
                                <div class="auth-side-wrapper br-r-10" style="background: url({{Storage::url('/backgroundImage/login.png')}});background-size: cover"></div>
                            </div>
                            <div class="col-md-8 ps-md-0">
                                <div class="auth-form-wrapper px-4 py-5">
                                    <a href="/"
                                       class="noble-ui-logo logo-light d-block mb-2">Reale<span>State</span></a>
                                    <h5 class="text-muted fw-normal mb-4">Welcome back! Log in to your account.</h5>
                                    <form class="forms-sample" action="{{  route('admin.login') }}" method="post">
                                        @csrf
                                        <div class="mb-3">
                                            <label for="userEmail" class="form-label">Email/UserName/Phone</label>
                                            <input type="text" class="form-control" id="userEmail" name="email" value="{{old('email')}}" placeholder="Email">
                                            <x-input-error :messages="$errors->get('login')" class="mt-2" class="er-red"/>
                                        </div>
                                        <div class="mb-3">
                                            <label for="userPassword" class="form-label">Password</label>
                                            <input type="password" name="password" class="form-control" id="userPassword"
                                                   autocomplete="current-password" placeholder="Password">
                                            <x-input-error :messages="$errors->get('password')" class="mt-2 er-red" />
                                        </div>
                                        <div class="form-check mb-3">
                                            <input type="checkbox" name="remember" class="form-check-input" id="authCheck">
                                            <label class="form-check-label" for="authCheck">
                                                Remember me
                                            </label>
                                        </div>
                                        <div>
                                            <button type="submit" class="btn btn-outline-primary me-2 mb-2 mb-md-0 text-white">
                                                Login
                                            </button>
                                        </div>
                                    </form>
                                    <a href="register.html" class="d-block mt-3 text-muted">Not an Admin? <span
                                            class="button-signup">Sign up</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<script src="{{asset('/assets/vendors/core/core.js')}}"></script>
<script src="{{asset('/assets/vendors/feather-icons/feather.min.js')}}"></script>
<script src="{{asset('/assets/js/template.js')}}"></script>
</body>
</html>
