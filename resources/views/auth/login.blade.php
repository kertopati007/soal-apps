<html>

<head>
    @include('partials.head')
    <title>Login Page</title>
</head>

<body>
    @include('partials.loader')
    <div class="container">
        <div class="main-content d-flex flex-column p-0">
            <div class="m-auto m-1230">
                <div class="row align-items-center">
                    <div class="col-lg-6 d-none d-lg-block">
                        <img src="assets/images/logoBB.png" class="rounded-3" alt="login">
                    </div>
                    <div class="col-lg-6">
                        <div class="mw-480 ms-lg-auto">
                            <div class="d-inline-block mb-4">
                                <!-- <img src="assets/images/logo.svg" class="rounded-3 for-light-logo" alt="login"> -->
                                <!-- <img src="assets/images/white-logo.svg" class="rounded-3 for-dark-logo" alt="login"> -->
                            </div>
                            <h3 class="fs-28 mb-2">Login Page</h3>
                            @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif
                            <form action="{{ route('auth') }}" method="POST" class="form">
                                @csrf
                                <div class="form-group mb-4">
                                    <label class="label text-secondary">Username</label>
                                    <input type="username" name="username" class="form-control h-55" placeholder="Username">

                                </div>
                                <div class="form-group mb-4">
                                    <label class="label text-secondary">Password</label>
                                    <input type="password" name="password" class="form-control h-55" placeholder="Type password">

                                </div>
                                <!-- <div class="form-group mb-4">
                                    <a href="forget-password.html" class="text-decoration-none text-primary fw-semibold">Forgot Password?</a>
                                </div> -->
                                <div class="form-group mb-4">
                                    <button type="submit" class="btn btn-primary fw-medium py-2 px-3 w-100">
                                        <div class="d-flex align-items-center justify-content-center py-1">
                                            <i class="material-symbols-outlined text-white fs-20 me-2">login</i>
                                            <span>Login</span>
                                        </div>
                                    </button>
                                </div>
                                <!-- <div class="form-group">
                                    <p>Don’t have an account. <a href="register.html" class="fw-medium text-primary text-decoration-none">Register</a></p>
                                </div> -->
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('partials.script')
</body>

</html>