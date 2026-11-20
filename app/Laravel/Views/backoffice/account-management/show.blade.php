@extends('backoffice._layouts.main')

@section('content')
<div class="container px-3 px-md-4 pt-0 pb-4">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <h1 class="h4 fw-bold mb-1">Account Details</h1>
                </div>
                <div class="card-body">
                    <label for="">Email:</label>
                    <p>{{ $record->email }}</p>

                    <label for="">First Name:</label>
                    <p>{{ $record->first_name }}</p>

                    <label for="">Last Name:</label>
                    <p>{{ $record->last_name }}</p>

                    <label for="">Username:</label>
                    <p>{{ $record->username }}</p>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection