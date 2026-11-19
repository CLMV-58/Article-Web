@extends('backoffice._layouts.main')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <a href="#" class="btn btn-primary float-end">+ Create</a>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Email</th>
                                <th scope="col">First Name</th>
                                <th scope="col">Last Name</th>
                                <th scope="col">Username</th>
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
                                        <a href="{{ route('backoffice.account-management.edit', $record->id) }}" class="btn btn-sm btn-primary">Edit</a>
                                        <a href="{{ route('backoffice.account-management.show', $record->id) }}" class="btn btn-sm btn-info">View</a>
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
@endsection

@section('page-styles')
@endsection