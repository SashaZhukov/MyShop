@extends('admin.layouts.admin-layouts')
@section('title', 'UsersCreating')
@section('PageLogo', 'Users')
@include('admin.layouts.logo-layout')
@section('content')
    <div style="margin-left: 290px">
        <form style=" margin-left: 350px; margin-top: 150px" class="space-y-6" action="{{ route('roles.store') }}" method="POST">
            @csrf
            <h1 style="margin-bottom: 25px">Create new Role</h1>
            <div>
                <label for="name" class="">Name</label>
                <div>
                    <input id="name" name="name" type="text" class="form-control" style="width: 250px">
                </div>
                @error('name')
                <h2 class="mt-2.5 text-red-600" style="font-size: 14px">{{ $message }}</h2>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary mt-2">Add role</button>
        </form>
    </div>
@endsection

