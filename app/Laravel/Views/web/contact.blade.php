@extends('web._layouts.main')

@section('content')
<main class="flex-fill d-flex align-items-center justify-content-center">
    <div class="container text-center py-5">
        <div class="col-md-8 mx-auto">
            <div class="row mb-5 mt-4">
                <div class="col card bg-body-tertiary border shadow-sm rounded-4 overflow-hidden">
                    <h1 class="display-4 fw-bold mt-4 mb-4 text-dark">Contact Us</h1>
                    <form class="row">
                        <div class="col-12 mb-3">
                            <p class="lead text-secondary mb-2">Got a question or remark? Send us a message!</p>
                        </div>
                        <div class="col-6 mb-3">
                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Email" required>
                        </div>
                        <div class="col-6 mb-3">
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Name" required>
                        </div>
                        <div class="col-12 mb-4">
                            <textarea class="form-control" rows="8" placeholder="Message" required></textarea>
                        </div>
                        <div class="col-12 mb-3">
                            <button type="submit" href="#" class="btn btn-primary">
                                Send
                              </button>
                        </div>
                    </form>
                </div>
            </div>
            
            <div class="col-md-10 mx-auto">
                <div class="mb-4">
                    <h2 class="fw-bold text-dark">Get in Touch</h2>
                    <p class="text-secondary">
                        You can also reach us through the following contact details.
                    </p>
                </div>

                <div class="row row-cols-1 row-cols-lg-3 g-4">

                    {{-- Phone --}}
                    <div class="col">
                        <div class="card h-100 bg-body-tertiary border shadow-sm rounded-4">
                            <div class="card-body p-4">
                                <div class="mb-3">
                                    <i class="bi bi-telephone-fill fs-2 text-primary"></i>
                                </div>
                                <h5 class="fw-bold">Phone</h5>
                                <p class="text-secondary mb-0">
                                    {!! $contents->get('contact_number')?->content ?? '+63 912 345 6789' !!}
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card h-100 bg-body-tertiary border shadow-sm rounded-4">
                            <div class="card-body p-4">
                                <div class="mb-3">
                                    <i class="bi bi-envelope-fill fs-2 text-primary"></i>
                                </div>
                                <h5 class="fw-bold">Email</h5>
                                <p class="text-secondary mb-0">
                                    {!! $contents->get('contact_email')?->content ?? 'contact@folio.com' !!}
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card h-100 bg-body-tertiary border shadow-sm rounded-4">
                            <div class="card-body p-4">
                                <div class="mb-3">
                                    <i class="bi bi-geo-alt-fill fs-2 text-primary"></i>
                                </div>
                                <h5 class="fw-bold">Address</h5>
                                <p class="text-secondary mb-0">
                                    {!! $contents->get('contact_address')?->content ?? '5951 Broken Dreams Blvd, Los Angeles, TX 28478' !!}
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