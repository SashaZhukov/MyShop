@extends('admin.layouts.admin-layouts')
@section('title', 'UsersList')
@section('content')
    @include('admin.layouts.user-pages-layout')
    <div class="mt-8" style="margin-left: 290px">
        <a href="{{ route('users.create') }}" type="submit" class="btn btn-primary ">Add user</a>
        <table class="table mt-2">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Role</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody class="table-group-divider">
            @foreach($users as $user)
            <tr>
                <th scope="row">{{ $user->id }}</th>
                <td>{{ $user->name }}</td>
                <td>{{ $user->role }}</td>
                <td><a href="{{ route('users.show', $user->id) }}">More</a></td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
