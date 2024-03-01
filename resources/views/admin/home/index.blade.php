@extends('admin.layouts.admin-layouts')
@section('title', 'Home')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper mt-4">
        @if(auth()->user()->hasRole('admin'))
            @include('admin.layouts.home-page-for-admin')
        @elseif(auth()->user()->hasRole('seller'))

        @endif
    </div>
@endsection
