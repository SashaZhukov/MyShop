@extends('admin.layouts.admin-layouts')
@section('title', 'UserShow')
@section('content')
    @include('admin.layouts.user-pages-layout')
    <div class="mt-8" style="margin-left: 290px">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Role</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody class="table-group-divider">
                <tr>
                    <th scope="row">{{ $user->id }}</th>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->role }}</td>
                    <td><a href="{{ route('users.edit', $user->id) }}">Edit role</a></td>
                </tr>
            </tbody>
        </table>
        <div class="mt-4">
            <h3>Date of registration: <h5>{{ $user->created_at->toFormattedDateString() }}</h5></h3>
        </div>
        <div class="mt-4">
            <h3>User's purchases: <h5><a href="">Go to list</a></h5></h3>
        </div>
        <div class="mt-4">
            <h3>User's reviews: <h5><a href="">Go to reviews</a></h5></h3>
        </div>

    </div>
@endsection

