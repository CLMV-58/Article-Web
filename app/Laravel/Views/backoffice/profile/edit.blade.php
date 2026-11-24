@extends('backoffice._layouts.main')

@section('content')
@auth('admin')
<div class="container text-start px-3 px-md-4 pt-0 pb-4">
    <div class="row">
        <div class="col">
            <div class="card shadow-sm">
                <div class="card-body">
                    <form action="{{ route('backoffice.profile.update') }}" method="POST">
                        @csrf

                        <h5 class="fw-bold mb-3 text-center">
                            Edit Your Account
                        </h5>

                        <div class="mb-3">
                            <label for="email" class="form-label fw-semibold mb-2">
                                Email Address
                            </label>
                            <input
                                class="form-control"
                                id="email"
                                name="email"
                                placeholder="Enter Email Address"
                                value="{{ auth('admin')->user()->email }}">
                                @if ($errors->first('email'))
                                    <div class="text-left">
                                        <small class="text-danger">{{ $errors->first('email') }}</small>
                                    </div>
                                @endif
                        </div>

                        <div class="row mb-3">
                            <div class="col-12 col-md-6">
                                <label
                                for="first_name"
                                class="form-label fw-semibold mb-2">
                                    First Name
                                </label>

                                <input
                                type="first_name"
                                name="first_name"
                                id="first_name"
                                class="form-control"
                                placeholder="Enter First Name"
                                value="{{ auth('admin')->user()->first_name }}">
                                @if ($errors->first('first_name'))
                                    <div class="text-left">
                                        <small class="text-danger">{{ $errors->first('first_name') }}</small>
                                    </div>
                                @endif
                            </div>
                            <div class="col-12 col-md-6">
                                <label
                                for="last_name"
                                class="form-label fw-semibold mb-2">
                                    Last Name
                                </label>

                                <input
                                type="last_name"
                                name="last_name"
                                id="last_name"
                                class="form-control"
                                placeholder="Enter Last Name"
                                value="{{ auth('admin')->user()->last_name }}">
                                @if ($errors->first('last_name'))
                                    <div class="text-left">
                                        <small class="text-danger">{{ $errors->first('last_name') }}</small>
                                    </div>
                                @endif
                            </div>
                        </div>


                        <div class="mb-3">
                            <label for="username" class="form-label fw-semibold mb-2">
                                Username
                            </label>
                            <input type="text"
                                class="form-control"
                                id="username"
                                name="username"
                                placeholder="Enter Username"
                                value="{{ auth('admin')->user()->username }}">
                                @if ($errors->first('username'))
                                    <div class="text-left">
                                        <small class="text-danger">{{ $errors->first('username') }}</small>
                                    </div>
                                @endif
                        </div>

                        <div class="mb-2">
                            <label for="password" class="form-label fw-semibold mb-2">
                                Password
                            </label>
                            <input type="password"
                                class="form-control"
                                id="password"
                                name="password"
                                placeholder="Enter Password">
                                @if ($errors->first('password'))
                                    <div class="text-left">
                                        <small class="text-danger">{{ $errors->first('password') }}</small>
                                    </div>
                                @endif
                        </div>

                        <div class="mb-2">
                            <label for="password_confirmation" class="form-label fw-semibold mb-2">
                                Confirm Password
                            </label>
                            <input type="password"
                                class="form-control"
                                id="password_confirmation"
                                name="password_confirmation"
                                placeholder="Retype Password">
                                @if ($errors->first('password'))
                                    <div class="text-left">
                                        <small class="text-danger">{{ $errors->first('password') }}</small>
                                    </div>
                                @endif
                        </div>

                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <div class="form-check">
                                <input class="form-check-input"
                                    type="checkbox"
                                    id="showPassword"
                                    onclick="togglePassword()">
                                <label class="form-check-label" for="showPassword">
                                    Show Password
                                </label>
                            </div>
                        </div>

                        <div class="mb-1 d-flex justify-content-between">
                            <button type="submit" class="submit-btn btn btn-primary">
                                Update Account
                            </button>
                            <a href="{{ route('backoffice.profile.index') }}" class="btn">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endauth
@endsection

@section('page-styles')
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
        width: 133px;
        height: 133px;
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
@endsection

@section('page-scripts')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const submitBtn = document.querySelector('.submit-btn');
        const form = submitBtn.closest('form');

        form.addEventListener('submit', function(event) {
            event.preventDefault();

            Swal.fire({
                title: 'Are you sure?',
                text: "Do you want to update the account with the provided information?",
                icon: 'question',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes!'
            }).then((result) => {
                if (result.isConfirmed) {
                    form.submit();
                }
            });
        });
    });

    function togglePassword() {
        var x = document.getElementById("password");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }

        var y = document.getElementById("password_confirmation");
        if (y.type === "password") {
            y.type = "text";
        } else {
            y.type = "password";
        }
    }
</script>
@endsection