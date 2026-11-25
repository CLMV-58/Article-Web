@extends('portal._layouts.cms')

@section('content')
<main>
    <form action="" method="POST">
        @csrf
        <label for="title1">Title 1</label>
        <input class="form-control" name="title1" id="title1"></input>
        <div id="editor">
            <textarea class="form-control editor" name="content1" id="content1"></textarea>
        </div>

        <label for="title2">Title 2</label>
        <input class="form-control" name="title2" id="title2"></input>
        <div id="editor">
            <textarea class="form-control editor" name="content2" id="content2"></textarea>
        </div>

        <label for="title3">Title 3</label>
        <input class="form-control" name="title3" id="title3"></input>
        <div id="editor">
            <textarea class="form-control editor" name="content3" id="content3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
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