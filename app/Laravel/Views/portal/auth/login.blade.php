<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $page_title ?? 'Default Title' }}</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
    .login-banner {
        flex: 0 0 64%;
        min-height: 100vh;
        background: url('{{ asset('assets/images/loginbg.png') }}');
        background-size: cover;
        background-position: center;
    }
    .login-panel {
        flex: 1;
        min-width: 0;
        min-height: 100vh;
        background-color: #e0d9d3;
    }
    .login-content {
        max-width: 355px;
    }
    .login-logo {
        width: 120px;
        height: 120px;
        object-fit: contain;
    }
    .login-panel .form-label {
        margin-bottom: 5px;
    }
    .login-panel a:hover {
        text-decoration: underline;
    }
    .login-panel .form-control {
        padding: 9px 14px;
        border: none;
    }
    .login-panel a {
        color: #82776c;
        text-decoration: none;
    }
    .login-panel a:hover {
        text-decoration: underline;
    }
    .active {
        font-weight: 700;
        color: #312920 !important;
        background-color: #918574 !important;
    }
    :root {
        --bs-primary: #524639 !important;
        --bs-primary-rgb: 82, 70, 57;
        --bs-secondary: #918574 !important;
        --bs-secondary-rgb: 145, 133, 116;
        --bs-tertiary: #E0D9D3 !important;
        --bs-tertiary-rgb: 224, 217, 211;
        --bs-body-color: #171614;
    }
    /* body {
        background-color: #ebe4df;
    } */
    .bg-body-secondary {
        background-color: #918574 !important;
    }
    .bg-body-tertiary {
        background-color: #E0D9D3 !important;
    }
    .btn-primary {
        background-color: #524639 !important;
    }
    .btn-outline-primary {
        --bs-btn-color: #312920;
        --bs-btn-border-color: #312920;
        --bs-btn-hover-bg: #312920;
        --bs-btn-hover-border-color: #312920;
        --bs-btn-hover-color: #ffffff;
    }
    @media (max-width: 991.98px) {
        .login-banner {
            flex: none;
            min-height: 20vh;
            background-position: center;
        }
        .login-banner h1 {
            font-size: 2rem;
        }
        .login-panel {
            flex: 1;
            min-height: 65vh;
            padding: 40px 0;
        }
    }
</style>
</head>
<body>
    <main class="min-vh-100 w-100 d-flex flex-column flex-lg-row m-0 p-0">
        <section class="login-banner d-flex align-items-center">
            <div class="px-4 px-md-5">
                <h1 class="display-5 fw-bold text-light">
                    Welcome<br>
                    to Folio's user portal
                </h1>
            </div>
        </section>

        <section class="login-panel d-flex justify-content-center align-items-center">
            <div class="login-content w-100 px-4">
                <div class="text-center mb-5">
                    <img src="{{ asset('assets/images/logo.png') }}" 
                    alt="Folio Logo" 
                    class="login-logo rounded-4">
                </div>

                <div class="text-center mb-4">
                    <small>
                        Don't have an account?
                        <a href="{{ route('portal.auth.register') }}">
                            Create one
                        </a>
                    </small>
                </div>

                <form action="" method="post" class="text-start">
                    @csrf
                    @if(session()->has('notification-status'))
                    <div class="alert alert-{{in_array(session()->get('notification-status'),['failed','error','danger']) ? 'danger' : session()->get('notification-status')}}" role="alert">
                    {{session()->get('notification-msg')}}

                    </div>
                    @endif

                    <div class="mb-3">
                        <label
                        for="email"
                        class="form-label fw-semibold mb-2">
                            Email
                        </label>
                        <input
                        type="email"
                        name="email"
                        id="email"
                        class="form-control"
                        placeholder="Enter Email">
                    </div>

                    <div class="mb-3">
                        <label
                        for="password"
                        class="form-label fw-semibold mb-2">
                            Password
                        </label>
                            <input
                            type="password"
                            class="form-control"
                            id="password"
                            name="password"
                            placeholder="Enter Password">
                    </div>

                    <div class="d-flex justify-content-between align-items-center mb-5">
                        <div class="form-check">
                            <input
                            class="form-check-input"
                            type="checkbox"
                            id="showPassword"
                            onclick="togglePassword()">
                            <label
                            class="form-check-label"
                            for="showPassword">
                                Show Password
                            </label>
                        </div>

                        <a href="#" class="small">
                            Forgot Password?
                        </a>
                    </div>

                    <div class="text-end">
                        <button type="submit" class="btn btn-primary px-3">
                            Sign In
                        </button>
                    </div>
                </form>
            </div>
        </section>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"crossorigin="anonymous"></script>

    <script>
        function togglePassword() {
            var x = document.getElementById("password");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }
    </script>
</body>
</html>