@extends('portal._layouts.cms')

@section('content')
<main class="container px-3 px-md-4 pt-0 pb-4">
    <div class="row">
        <div class="col">
            <form action="{{ route('portal.cms.home.store') }}" method="POST">
                @csrf

                <!-- Hero Section/Welcome Banner -->
                <div class="card shadow-sm mb-4">
                    <div class="card-header d-flex justify-content-between">
                        <h1 class="h4 fw-bold mb-1">Hero Section</h1>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="hero_heading">Main Heading</label>
                            <div>
                                <textarea class="form-control editor" name="hero_heading" id="hero_heading">{{ old('hero_heading', $contents['hero_heading'] ?? '') }}</textarea>
                            </div>
                        </div> 
                        <div class="mb-3">
                            <label for="hero_subheading">Subheading</label>
                            <div>
                                <textarea class="form-control editor" name="hero_subheading" id="hero_subheading">{{ old('hero_subheading', $contents['hero_subheading'] ?? '') }}</textarea>
                            </div>
                        </div>
                        <div class="mb-1">
                            <label for="hero_button">Button Label</label>
                            <div>
                                <textarea class="form-control editor" name="hero_button" id="hero_button">{{ old('hero_button', $contents['hero_button'] ?? '') }}</textarea>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Features Section -->
                <div class="card shadow-sm mb-4">
                    <div class="card-header d-flex justify-content-between">
                        <h1 class="h4 fw-bold mb-1">Features Section</h1>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="feat_heading">Heading</label>
                            <div>
                                <textarea class="form-control editor" name="feat_heading" id="feat_heading">{{ old('feat_heading', $contents['feat_heading'] ?? '') }}</textarea>
                            </div>
                        </div> 
                        <div class="mb-3">
                            <label for="feat_subheading">Subheading</label>
                            <div>
                                <textarea class="form-control editor" name="feat_subheading" id="feat_subheading">{{ old('feat_subheading', $contents['feat_subheading'] ?? '') }}</textarea>
                            </div>
                        </div> 

                        <!-- Card 1 -->
                        <h1 class="h4 fw-bold mb-2">Card 1</h1>
                        <div class="mb-3">
                            <label for="feat_c1heading">Heading</label>
                            <div>
                                <textarea class="form-control editor" name="feat_c1heading" id="feat_c1heading">{{ old('feat_c1heading', $contents['feat_c1heading'] ?? '') }}</textarea>
                            </div>
                        </div> 
                        <div class="mb-3">
                            <label for="feat_c1body">Body</label>
                            <div>
                                <textarea class="form-control editor" name="feat_c1body" id="feat_c1body">{{ old('feat_c1body', $contents['feat_c1body'] ?? '') }}</textarea>
                            </div>
                        </div> 
                        
                        <!-- Card 2 -->
                        <h1 class="h4 fw-bold mb-2">Card 2</h1>
                        <div class="mb-3">
                            <label for="feat_c2heading">Heading</label>
                            <div>
                                <textarea class="form-control editor" name="feat_c2heading" id="feat_c2heading">{{ old('feat_c2heading', $contents['feat_c2heading'] ?? '') }}</textarea>
                            </div>
                        </div> 
                        <div class="mb-3">
                            <label for="feat_c2body">Body</label>
                            <div>
                                <textarea class="form-control editor" name="feat_c2body" id="feat_c2body">{{ old('feat_c2body', $contents['feat_c2body'] ?? '') }}</textarea>
                            </div>
                        </div> 
                        
                        <!-- Card 3 -->
                        <h1 class="h4 fw-bold mb-2">Card 3</h1>
                        <div class="mb-3">
                            <label for="feat_c3heading">Heading</label>
                            <div>
                                <textarea class="form-control editor" name="feat_c3heading" id="feat_c3heading">{{ old('feat_c3heading', $contents['feat_c3heading'] ?? '') }}</textarea>
                            </div>
                        </div> 
                        <div class="mb-3">
                            <label for="feat_c3body">Body</label>
                            <div>
                                <textarea class="form-control editor" name="feat_c3body" id="feat_c3body">{{ old('feat_c3body', $contents['feat_c3body'] ?? '') }}</textarea>
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