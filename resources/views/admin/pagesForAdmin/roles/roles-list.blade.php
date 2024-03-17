@extends('admin.layouts.admin-layouts')
@section('title', 'UsersList')
@section('content')
    @section('PageLogo', 'Roles')
    @include('admin.layouts.logo-layout')
    <div class="mt-8" style="margin-left: 290px">
        <a href="{{ route('roles.create') }}" type="submit" class="btn btn-primary ">Add role</a>
        <table class="table mt-2">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Role</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody class="table-group-divider">
            @foreach($roles as $role)
                <tr>
                    <th scope="row">{{ $role->id }}</th>
                    <td>{{ $role->name }}</td>
                    <td><a href="">More</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection

