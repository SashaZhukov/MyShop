@extends('admin.layouts.admin-layouts')
@section('title', 'UserEditing')
@section('content')
    @include('admin.layouts.user-pages-layout')
    <div class="mt-8" style="margin-left: 290px">
        <form style="margin-top: 150px; margin-left: 350px" action="{{ route('users.update', $user_id) }}" method="post">
            @method('PATCH')
            @csrf
            <h2 style="margin-left: 30px; margin-top: 140px">Select role</h2>
            <div class=" mt-4 flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
                <div class="sm:mx-auto sm:w-full sm:max-w-sm">
                        @foreach($roles as $role)
                            <div class="flex space-x-2 mb-2 items-center">
                                <input
                                    type="radio"
                                    id="role_{{ $role->name }}"
                                    name="role"
                                    value="{{ $role->name }}"
                                />
                                <label for="role_{{ $role->id }}" class="flex space-x-1 items-center">
                                    <span class="">{{ $role->name }}</span>
                                </label>
                            </div>
                        @endforeach
                    <div class="ml-3">
                        <button style="margin-left: -20px" class="btn btn-primary mt-2" type="submit">Save</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection


