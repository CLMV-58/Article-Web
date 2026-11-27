@extends('portal._layouts.cms')

@section('content')
<main class="container px-3 px-md-4 pt-0 pb-4">
    <div class="row">
        <div class="col">
            <form action="{{ route('portal.cms.about.store') }}" method="POST">
                @csrf

                <!-- Card 1 -->
                <div class="card shadow-sm mb-4">
                    <div class="card-header d-flex justify-content-between">
                        <h1 class="h4 fw-bold mb-1">Card 1</h1>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="card1_header">Heading</label>
                            <div>
                                <textarea class="form-control editor" name="card1_header" id="card1_header">{{ old('card1_header', $contents['card1_header'] ?? '') }}</textarea>
                            </div>
                        </div> 
                        <div class="mb-1">
                            <label for="card1_body">Body</label>
                            <div>
                                <textarea class="form-control editor" name="card1_body" id="card1_body">{{ old('card1_body', $contents['card1_body'] ?? '') }}</textarea>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Card 2 -->
                <div class="card shadow-sm mb-4">
                    <div class="card-header d-flex justify-content-between">
                        <h1 class="h4 fw-bold mb-1">Card 2</h1>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="card2_header">Heading</label>
                            <div>
                                <textarea class="form-control editor" name="card2_header" id="card2_header">{{ old('card2_header', $contents['card2_header'] ?? '') }}</textarea>
                            </div>
                        </div> 
                        <div class="mb-1">
                            <label for="card2_body">Body</label>
                            <div>
                                <textarea class="form-control editor" name="card2_body" id="card2_body">{{ old('card2_body', $contents['card2_body'] ?? '') }}</textarea>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="card shadow-sm mb-4">
                    <div class="card-header d-flex justify-content-between">
                        <h1 class="h4 fw-bold mb-1">Card 3</h1>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="card3_header">Heading</label>
                            <div>
                                <textarea class="form-control editor" name="card3_header" id="card3_header">{{ old('card3_header', $contents['card3_header'] ?? '') }}</textarea>
                            </div>
                        </div> 
                        <div class="mb-1">
                            <label for="card3_body">Body</label>
                            <div>
                                <textarea class="form-control editor" name="card3_body" id="card3_body">{{ old('card3_body', $contents['card3_body'] ?? '') }}</textarea>
                            </div>
                        </div>
                    </div>
                </div>
                    
                <button type="submit" class="btn btn-primary">Save</button>
            </form>
        </div>
    </div>
</main>
@endsection

@section('page-scripts')
    <script src="{{ asset('assets/libs/ckeditor5/build/ckeditor.js') }}"></script>

    <script>
        const editorConfig = {
            toolbar: [
                'heading', '|',
                'bold', 'italic', 'underline', '|',
                'bulletedList', 'numberedList', 'link', '|',
                'fontColor', 'fontBackgroundColor', '|',
                'undo', 'redo'
            ],
            heading: {
                options: [
                    { model: 'paragraph', title: 'Paragraph', class: 'ck-heading_paragraph' },
                    { model: 'heading1', view: 'h1', title: 'Heading 1', class: 'ck-heading_heading1' },
                    { model: 'heading2', view: 'h2', title: 'Heading 2', class: 'ck-heading_heading2' },
                    { model: 'heading3', view: 'h3', title: 'Heading 3', class: 'ck-heading_heading3' }
                ]
            }
        };

        document.querySelectorAll('.editor').forEach((element) => {
            ClassicEditor
                .create(element, editorConfig)
                .catch(error => console.error(error));
        });
    </script>
@endsection