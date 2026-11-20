@extends('backoffice._layouts.main')

@section('content')
<div class="container px-3 px-md-4 pt-0 pb-4">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h1 class="h4 fw-bold mb-1">Admin Account Management</h1>
                </div>

                <div class="card-body">
                    <div class="table-responsive">

                        <table class="table table-hover align-middle mb-0">
                            <thead>
                                <tr>
                                    <th scope="col">Email</th>
                                    <th scope="col">First Name</th>
                                    <th scope="col">Last Name</th>
                                    <th scope="col">Username</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($records as $index => $record)
                                    <tr>
                                        <td>{{ $record->email }}</td>
                                        <td>{{ $record->first_name }}</td>
                                        <td>{{ $record->last_name }}</td>
                                        <td>{{ $record->username }}</td>
                                        <td>
                                            <a href="{{ route('backoffice.account-management.edit', $record->id) }}" class="btn btn-sm btn-primary my-1">Edit</a>
                                            <a href="{{ route('backoffice.account-management.show', $record->id) }}" class="btn btn-sm btn-secondary my-1">View</a>
                                            <a href="{{ route('backoffice.account-management.delete', $record->id) }}" class="btn btn-sm btn-danger my-1">Delete</a>
                                        </td>
                                    </tr>
                                @empty
                                    <tr><td class="text-center">No records found.</td></tr>
                                @endforelse
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('page-styles')
@endsection