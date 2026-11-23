@extends('portal._layouts.main')

@section('content')
@auth('user')
<div class="container px-3 px-md-4 pt-0 pb-4">
    <div class="row">
        <div class="col">
            <div class="card shadow-sm">
                <div class="card-header d-flex justify-content-between">
                    <h1 class="h4 fw-bold mb-1">Your Profile</h1>
                    <a href="{{ route('portal.profile.edit') }}" class="btn btn-sm btn-primary">Edit</a>
                </div>
                <div class="card-body">
                    <label for="">Email:</label>
                    <p>{{ auth('user')->user()->email }}</p>

                    <label for="">First Name:</label>
                    <p>{{ auth('user')->user()->first_name }}</p>

                    <label for="">Last Name:</label>
                    <p>{{ auth('user')->user()->last_name }}</p>

                    <label for="">Username:</label>
                    <p>{{ auth('user')->user()->username }}</p>

                </div>
            </div>
        </div>
    </div>
</div>
@endauth
@endsection