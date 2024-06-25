@extends('admin.layouts.admin-layouts')
@section('title', 'UsersList')
@section('content')
    @section('PageLogo', 'Products')
    @include('admin.layouts.logo-layout')
    <div class="mt-8" style="margin-left: 290px">
        <a href="{{ route('productsAdm.create') }}" type="submit" class="btn btn-primary ">Add product</a>
        <table class="table mt-2">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Price</th>
                <th scope="col">Category ID</th>
            </tr>
            </thead>
            <tbody class="table-group-divider">
            @foreach($products as $product)
                <tr>
                    <th scope="row">{{ $product->id }}</th>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->category_id }}</td>
                    <td><a href="{{ route('productsAdm.show', $product->id) }}">More</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection

