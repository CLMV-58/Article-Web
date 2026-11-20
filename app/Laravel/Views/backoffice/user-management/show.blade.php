@extends('backoffice._layouts.main')

@section('content')
<div class="container px-3 px-md-4 pt-0 pb-4">
    <div class="row">
        <div class="col">
            <div class="card shadow-sm">
                <div class="card-header">
                    <h5 class="card-title">Account Details</h5>
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