@extends('web._layouts.main')

@section('content')
<main class="flex-fill d-flex align-items-center justify-content-center">
    <div class="container text-center py-5">
        <h1 class="display-4 fw-bold text-dark mb-5">
            About Us
        </h1>
        <div class="row mb-5">
            <div class="col-12">
                <div class="card bg-body-tertiary border shadow-sm rounded-4 overflow-hidden">
                    <div class="row g-0 align-items-stretch">
                        <div class="col-12 col-lg-5">
                            <img src="{{ asset('assets/images/abt1.png') }}" 
                            class="img-fluid w-100 h-100 about-image" 
                            alt="Our Mission">
                        </div>   
                        <div class="col-12 col-lg-7">
                            <div class="card border-0 p-4 p-lg-5 h-100">
                                <h2 class="display-6 fw-bold text-dark mb-4">
                                    Mission
                                </h2>
                                <p class="lead text-secondary lh-lg mb-0">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row mb-5">
            <div class="col-12">
                <div class="card bg-body-tertiary border shadow-sm rounded-4 overflow-hidden">
                    <div class="row g-0 align-items-stretch">
                        <div class="col-12 col-lg-5 order-lg-2">
                            <img src="{{ asset('assets/images/abt2.png') }}" 
                            class="img-fluid w-100 h-100 about-image" 
                            alt="Our Vision">
                        </div>   
                        <div class="col-12 col-lg-7 order-lg-1">
                            <div class="card border-0 p-4 p-lg-5 h-100">
                                <h2 class="display-6 fw-bold text-dark mb-4">
                                    Vision
                                </h2>
                                <p class="lead text-secondary lh-lg mb-0">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mb-5">
            <div class="col-12">
                <div class="card bg-body-tertiary border shadow-sm rounded-4 overflow-hidden">
                    <div class="row g-0 align-items-stretch">
                        <div class="col-12 col-lg-5">
                            <img src="{{ asset('assets/images/abt3.png') }}" 
                            class="img-fluid w-100 h-100 about-image" 
                            alt="Our Values">
                        </div>   
                        <div class="col-12 col-lg-7">
                            <div class="card border-0 p-4 p-lg-5 h-100">
                                <h2 class="display-6 fw-bold text-dark mb-4">
                                    Values
                                </h2>
                                <p class="lead text-secondary lh-lg mb-0">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<footer class="text-center text-muted py-3 mt-auto">
    &copy; {{ date('Y') }} Folio. All rights reserved.
</footer>
@endsection

@section('page-styles')
    <style>
        .about-image {
            object-fit: cover;
            min-height: 300px
        }
    </style>
@endsection