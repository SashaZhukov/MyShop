@extends('master')
@section('header')
    @include('layouts.header')
@endsection
@section('content')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white  sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <div style="margin-left: 77px" class=" p-4 sm:p-8 bg-white sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <div style="margin-left: 77px" class=" p-4 sm:p-8 bg-white sm:rounded-lg">
                <form method="post" action="{{ route('logout') }}">
                    @csrf
                    <x-primary-button>Logout</x-primary-button>
                </form>
            </div>

            <div style="margin-left: 52px;"  class="p-4 -mt-16 sm:p-8 bg-white sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>
@endsection

