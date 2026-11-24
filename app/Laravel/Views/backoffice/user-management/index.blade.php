@extends('backoffice._layouts.main')

@section('content')
<div class="container px-3 px-md-4 pt-0 pb-4">
    <div class="row">
        <div class="col-12">
            <div class="card shadow-sm mb-4">
                <div class="card-header">
                    <h1 class="h4 fw-bold mb-1">User Account Management</h1>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover align-middle mb-0">
                            <thead>
                                <tr>
                                    <th>Email</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Username</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>

                            <tbody>
                                @forelse ($records as $record)
                                    <tr>
                                        <td>{{ $record->email }}</td>
                                        <td>{{ $record->first_name }}</td>
                                        <td>{{ $record->last_name }}</td>
                                        <td>{{ $record->username }}</td>
                                        <td>
                                            <a href="{{ route('backoffice.user-management.edit', $record->id) }}" class="btn btn-sm btn-primary my-1">Edit</a>
                                            <a href="{{ route('backoffice.user-management.show', $record->id) }}" class="btn btn-sm btn-secondary my-1">View</a>
                                            <a href="{{ route('backoffice.user-management.delete', $record->id) }}" class="btn btn-sm btn-danger my-1">Delete</a>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5" class="text-center">
                                            No user accounts found.
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- test deleted acc -->
            <div class="card shadow-sm">
                <div class="card-header">
                    <h4 class="h4 fw-bold mb-1">Deleted Accounts</h4>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover align-middle mb-0">
                            <thead>
                                <tr>
                                    <th>Email</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Username</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>

                            <tbody>
                                @forelse ($deleted_records as $record)
                                    <tr>
                                        <td>{{ $record->email }}</td>
                                        <td>{{ $record->first_name }}</td>
                                        <td>{{ $record->last_name }}</td>
                                        <td>{{ $record->username }}</td>
                                        <td>
                                            <form action="{{ route('backoffice.user-management.restore', ['id' => $record->id]) }}" method="POST">
                                                @csrf
                                                <button type="submit" class="btn btn-sm btn-primary my-1">
                                                    Restore
                                                </button>  
                                            </form>
                                            <!-- <a href="#" class="btn btn-sm btn-danger my-1">Delete</a> -->
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5" class="text-center">
                                            No user accounts found.
                                        </td>
                                    </tr>
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