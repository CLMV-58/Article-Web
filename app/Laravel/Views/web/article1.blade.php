@extends('web._layouts.main')

@section('content')
<main class="flex-fill">
    <div class="container py-5">
        <div class="mx-auto" style="max-width: 1100px;">
            <a href="{{ route('web.listing') }}" class="btn btn-primary mt-auto">
                Go back
            </a>
            <div class="text-center mb-4">
                <h1 class="display-4 fw-bold text-dark mb-4">
                    Article 1
                </h1>
                <div class="d-flex justify-content-center align-items-center gap-3 flex-wrap">
                    <p class="text-secondary mb-0">
                        By Author
                    </p>
                    <span class="text-secondary">|</span>
                    <p class="text-secondary mb-0">
                        November 13, 2026
                    </p>
                </div>
            </div>

            <div class="mb-5">
                <img src="{{ asset('assets/images/a01.jpg') }}" 
                class="img-fluid w-100 rounded-4"
                alt="Article Image">
            </div>

            <article class="mx-auto text-start text-dark">
                <p class="lead text-secondary fw-normal lh-lg mb-4">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed facilisis ornare dignissim. Aenean ante ex, rhoncus a tellus ut, malesuada scelerisque felis. Etiam tellus mi, elementum tempus enim in, convallis dignissim ante. Maecenas vitae velit id felis euismod porttitor. Cras augue augue, vehicula id sagittis eu, molestie ut odio. In eget lacinia purus. Nullam nibh leo, sodales eu condimentum sed, tempus sed purus. Integer nec dictum elit. Pellentesque semper, ex in finibus vehicula, magna purus finibus elit, ut commodo lectus velit tincidunt quam. Nam et ante finibus, consectetur est ut, tempor dui. Suspendisse dictum a mi non molestie. Etiam ultrices interdum velit, a maximus libero ultrices vitae. Ut vel sodales neque, sed commodo augue. Phasellus id dapibus urna, consequat varius nisl. Duis nec orci vel nunc semper sollicitudin pellentesque at sapien. Nunc tempor magna vel volutpat commodo.
                    <br><br>
                    Aenean sit amet varius leo, nec maximus dui. Integer vitae faucibus neque. Nunc luctus tincidunt massa, a elementum est tincidunt vel. Suspendisse metus est, varius ultrices sem ut, lobortis fringilla turpis. Etiam ac mauris ullamcorper, commodo arcu a, porta sapien. Ut blandit tortor tempor dui iaculis condimentum. Integer id suscipit nisi.
                    <br><br>
                    Nunc ut odio eu tellus consectetur venenatis vehicula non erat. Donec eget laoreet ex, porta viverra elit. Aenean id lacinia mi. Curabitur non suscipit erat. Nunc nec tellus eget elit semper venenatis. Aliquam id nibh sed eros interdum luctus. Donec nec sem commodo nibh facilisis rutrum. Suspendisse in purus neque. Proin mi massa, pretium luctus nibh consectetur, convallis tincidunt magna. Nunc sed malesuada neque. Mauris nibh augue, congue ac sollicitudin at, pellentesque placerat tortor. Nulla laoreet gravida libero vel egestas.
                </p>
            </article>
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
            aspect-ratio: 16/9;
            object-fit: cover;
        }
        article {
            max-width: 850px;
        }
    </style>
@endsection