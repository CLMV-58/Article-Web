@extends('portal._layouts.cms')

@section('content')
<main>
    <form action="{{ route('portal.cms.store) }}" method="post">
        @csrf

        <div id="editor">
            <textarea class="form-control editor" name="title" id="title"></textarea>
            <textarea class="form-control editor" name="content" id="content"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
</main>
@endsection

@section('page-scripts')
<script src="{{ asset('assets/libs/ckeditor5/build/ckeditor.js') }}"></script>

<script>
    ClassicEditor.create(document.querySelector('.editor'), {
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
    }).catch(error => console.error(error));
</script>
@stop