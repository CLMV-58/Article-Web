@extends('web._layouts.main')

@section('content')
<main class="flex-fill">
    <div class="container text-center py-5">
        <div class="row align-items-center py-5 mb-5">
            <div class="col-12 col-lg-6 text-center text-lg-start mb-4 mb-lg-0">
                <h1 class="display-4 fw-bold mb-3 text-dark">
                    {{ strip_tags($contents->get('hero_heading')?->content ?? 'Welcome to folio!') }}
                </h1>
                <p class="lead text-secondary mb-3">
                    {!! $contents->get('hero_subheading')?->content ?? 'Your space to create, organize, and publish your ideas.' !!}
                </p>
                <a href="{{ route('web.listing') }}" class="btn btn-primary btn-lg">
                    {!! $contents->get('hero_button')?->content ?? 'View Articles Now' !!}
                </a>
            </div>
            <div class="col-12 col-lg-6 text-center">
                <img src="{{ 'assets/images/logo.png' }}" 
                class="img-fluid rounded-5 w-75" 
                style="max-width: 900px;"
                alt="folio Logo">
            </div>
        </div>
        <div class="py-5">
            <div class="text-center mb-5">
                <h2 class="fw-bold text-dark">
                    {{ strip_tags($contents->get('feat_heading')?->content ?? 'Everything You Need to Share Your Ideas') }}
                </h2>
                <p class="text-secondary">
                    {!! $contents->get('feat_subheading')?->content ?? 'Create, organize, and share your thoughts with Folio.' !!}
                </p>
            </div>
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col">
                    <div class="card h-100 text-center border-0 rounded-4 shadow-sm">
                        <div class="card-body p-4 h-100 bg-body-tertiary border rounded-4 shadow-sm overflow-hidden">
                            <h4 class="card-title fw-bold mb-3">
                                {{ strip_tags($contents->get('feat_c1heading')?->content ?? 'Create') }}
                            </h4>
                            <p class="card-text text-secondary">
                                {!! $contents->get('feat_c1body')?->content ?? 'Write your thoughts, express your ideas, and turn them into meaningful articles.' !!}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 text-center border-0 rounded-4 shadow-sm">
                        <div class="card-body p-4 h-100 bg-body-tertiary border shadow-sm rounded-4 overflow-hidden">
                            <h4 class="card-title fw-bold mb-3">
                                {{ strip_tags($contents->get('feat_c2heading')?->content ?? 'Organize') }}
                            </h4>
                            <p class="card-text text-secondary">
                                {!! $contents->get('feat_c2body')?->content ?? 'Keep your articles organized and manage your written content in one place.' !!}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 text-center border-0 rounded-4 shadow-sm">
                        <div class="card-body p-4 h-100 bg-body-tertiary border shadow-sm rounded-4 overflow-hidden">
                            <h4 class="card-title fw-bold mb-3">
                                {{ strip_tags($contents->get('feat_c3heading')?->content ?? 'Publish') }}
                            </h4>
                            <p class="card-text text-secondary">
                                {!! $contents->get('feat_c3body')?->content ?? 'Share your articles and make your ideas accessible to other readers.' !!}
                            </p>
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
    img {
        height: 320px;
        width: 320px;
    } 
</style>
@endsection