@extends('portal._layouts.cms')

@section('content')
<main class="container px-3 px-md-4 pt-0 pb-4">
    <div class="row">
        <div class="col">
            <form action="{{ route('portal.cms.contact.store') }}" method="POST">
                @csrf

                <!-- Card 1 -->
                <div class="card shadow-sm mb-4">
                    <div class="card-header d-flex justify-content-between">
                        <h1 class="h4 fw-bold mb-1">Contacts</h1>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="contact_number">Phone</label>
                            <div>
                                <textarea class="form-control editor" name="contact_number" id="contact_number">{{ old('contact_number', $contents['contact_number'] ?? '') }}</textarea>
                            </div>
                        </div> 
                        <div class="mb-3">
                            <label for="contact_email">Email</label>
                            <div>
                                <textarea class="form-control editor" name="contact_email" id="contact_email">{{ old('contact_email', $contents['contact_email'] ?? '') }}</textarea>
                            </div>
                        </div> 
                        <div class="mb-1">
                            <label for="contact_address">Address</label>
                            <div>
                                <textarea class="form-control editor" name="contact_address" id="contact_address">{{ old('contact_address', $contents['contact_address'] ?? '') }}</textarea>
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