@extends('admin.layouts.admin-layouts')
@section('title', 'UsersCreating')
@section('PageLogo', 'Users')
@include('admin.layouts.logo-layout')
@section('content')
    <div style="margin-left: 290px">
        <form style=" margin-left: 350px" class="space-y-6" action="{{ route('users.store') }}" method="POST">
            @csrf
            <h1 style="margin-bottom: 25px">Create new User</h1>
            <div class="mt-2">
                <label for="name" class="">Name</label>
                <div>
                    <input id="name" name="name" type="text" class="form-control" style="width: 250px">
                </div>
                @error('name')
                <h2 class="mt-2.5 text-red-600" style="font-size: 14px">{{ $message }}</h2>
                @enderror
            </div>
            <div class="mt-2">
                <div class="flex items-center justify-between">
                    <label for="email" class="">Email</label>
                </div>
                <div>
                    <input id="email" name="email" type="email" class="form-control" style="width: 250px">
                </div>
                @error('email')
                <h2 class="mt-2.5 text-red-600" style="font-size: 14px">{{ $message }}</h2>
                @enderror
            </div>
            <div class="mt-2">
                <div class="flex items-center justify-between">
                    <label for="password" class="">Password</label>
                </div>
                <div>
                    <input id="password" name="password" type="password" class="form-control" style="width: 250px">
                </div>
                @error('password')
                <h2 class="mt-2.5 text-red-600" style="font-size: 14px">{{ $message }}</h2>
                @enderror
            </div>
            <div>
                <div class="mt-2">
                    <label for="password_confirmation" class="">Confirm password</label>
                </div>
                <div>
                    <input id="password_confirmation" name="password_confirmation" type="password" class="form-control"
                           style="width: 250px">
                </div>
                @error('password_confirmation')
                <h2 class="mt-2.5 text-red-600" style="font-size: 14px">{{ $message }}</h2>
                @enderror
            </div>
            <div>
                <div class="mt-2">
                    <label for="password_confirmation" class="">Select role</label>
                </div>
                <select name="role">
                    @foreach($roles as $role)
                        <option value="{{ $role->name }}">{{ $role->name }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary mt-2">Add user</button>
        </form>
    </div>
@endsection
