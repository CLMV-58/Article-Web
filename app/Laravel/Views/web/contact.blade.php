@extends('web._layouts.main')

@section('content')
<main class="flex-fill d-flex align-items-center justify-content-center">
    <div class="container text-center py-5">
        <div class="col-md-8 mx-auto">
            <div class="row">
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
        </div>
    </div>
</main>
<footer class="text-center text-muted py-3 mt-auto">
    &copy; {{ date('Y') }} Folio. All rights reserved.
</footer>
@endsection