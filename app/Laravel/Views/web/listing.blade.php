@extends('web._layouts.main')

@section('content')
<main class="flex-fill d-flex align-items-center justify-content-center">
    <div class="container text-center py-5">
        <h1 class="display-4 fw-bold mb-3 text-dark">Articles</h1>
        <p class="lead text-secondary mb-4">
            Browse articles created by you or others.
        </p>
        
        <div class="d-flex flex-column flex-sm-row-reverse justify-content-between align-items-sm-center gap-3 mb-4">
            <div style="width: 350px; max-width: 100%;">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search key" aria-label="Search articles here" aria-describedby="button-addon2">
                    <button class="btn btn-outline-primary" type="button" id="button-addon2">
                        Search
                    </button>
                </div>
            </div>
        </div>
        
        <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 g-4">
            <div class="col">
                <div class="card h-100 bg-body-tertiary border shadow-sm rounded-4 overflow-hidden">
                    <img src="{{ asset('assets/images/a01.jpg') }}" class="card-img-top" alt="Article 1">
                    <div class="card-body p-4 d-flex flex-column">
                        <h5 class="card-title fw-bold mb-2">Article 1</h5>
                        <p class="small text-secondary mb-3">
                            By Author <span class="mx-1">|</span> November 13, 2026
                        </p>
                        <p class="card-text text-secondary mb-4">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</p>
                        <a href="{{ route('web.article1') }}" class="btn btn-primary mt-auto">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 bg-body-tertiary border shadow-sm rounded-4 overflow-hidden">
                    <img src="{{ asset('assets/images/a02.jpg') }}" class="card-img-top" alt="Article 2">
                    <div class="card-body p-4 d-flex flex-column">
                        <h5 class="card-title fw-bold mb-2">Article 2</h5>
                        <p class="small text-secondary mb-3">
                            By Author <span class="mx-1">|</span> November 13, 2026
                        </p>
                        <p class="card-text text-secondary mb-4">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</p>
                        <a href="{{ route('web.article2') }}" class="btn btn-primary mt-auto">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 bg-body-tertiary border shadow-sm rounded-4 overflow-hidden  ">
                    <img src="{{ asset('assets/images/a03.jpg') }}" class="card-img-top" alt="Article 3">
                    <div class="card-body p-4 d-flex flex-column">
                        <h5 class="card-title fw-bold mb-2">Article 3</h5>
                        <p class="small text-secondary mb-3">
                            By Author <span class="mx-1">|</span> November 13, 2026
                        </p>
                        <p class="card-text text-secondary mb-4">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</p>
                        <a href="{{ route('web.article3') }}" class="btn btn-primary mt-auto">Read More</a>
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
    img {
        aspect-ratio: 4/3;
        object-fit: cover;
    }
</style>
@endsection