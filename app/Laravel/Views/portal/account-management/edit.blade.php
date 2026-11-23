@extends('portal._layouts.main')

@section('content')
<form action="" method="POST" class="container text-start">
    @csrf

    <h5 class="fw-bold mb-3 text-center">
        Create Your Account
    </h5>

    <div class="mb-3">
        <label for="email" class="form-label fw-semibold mb-2">
            Email Address
        </label>
        <input type="email"
            class="form-control"
            id="email"
            name="email"
            placeholder="Enter Email Address"
            value="{{ old('email', $record->email) }}">
            @if ($errors->first('email'))
                <div class="text-left">
                    <small class="text-danger">{{ $errors->first('email') }}</small>
                </div>
            @endif
    </div>

    <div class="mb-3 d-flex gap-4">
        <div>
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
            value="{{ old('first_name', $record->first_name) }}">
            @if ($errors->first('first_name'))
                <div class="text-left">
                    <small class="text-danger">{{ $errors->first('first_name') }}</small>
                </div>
            @endif
        </div>
        <div>
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
            value="{{ old('last_name', $record->last_name) }}">
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
            value="{{ old('username', $record->username) }}">
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

    <div class="d-grid mb-3">
        <button type="submit" class="submit-btn btn btn-primary">
            Update Account
        </button>
    </div>
</form>
@endsection

@section('page-styles')
<style>
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
    }
</script>
@endsection