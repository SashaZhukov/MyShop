@extends('master')
@section('content')
    <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
            <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Add new product</h2>
        </div>

        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
            <form action="{{ route('productsAdm.store') }}" method="POST"  enctype="multipart/form-data">
                @csrf
                <div class="space-y-12">
                     <div>
                         <h2 class="text-base font-semibold leading-7 text-gray-900">Image</h2>
                        <input type="file" name="image" id="mage">
                         @error('image')
                         <h2 class="mt-2.5 text-red-600" style="font-size: 14px">{{ $message }}</h2>
                         @enderror
                     </div>

                    <div class="border-b border-gray-900/10 pb-12">
                        <h2 class="text-base font-semibold leading-7 text-gray-900">Product Information</h2>

                        <div class="mt-6 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                            <div>
                                <div class="flex items-center justify-between">
                                    <label for="name" class="block text-sm font-medium leading-6 text-gray-900">Name</label>
                                </div>
                                <div class="mt-2">
                                    <input id="name" name="name" style="width: 90px" type="string" class=" block w-full rounded-md border-0 py-1.5 text-gray-900  ring-2 ring-inset ring-gray-300 placeholder:text-gray-400 pl-2 focus:ring-2  sm:text-sm sm:leading-6">
                                </div>
                            </div>
                            <div class="ml-8">
                                <div class="flex items-center justify-between">
                                    <label for="price" class="block text-sm font-medium leading-6 text-gray-900">Price</label>
                                </div>
                                <div class="mt-2">
                                    <input id="price" name="price" style="width: 90px" type="string" class=" block w-full rounded-md border-0 py-1.5 text-gray-900  ring-2 ring-inset ring-gray-300 placeholder:text-gray-400 pl-2 focus:ring-2  sm:text-sm sm:leading-6">
                                </div>
                            </div>
                            <div class="ml-16">
                                <div class="flex items-center justify-between">
                                    <label for="description" class="block text-sm font-medium leading-6 text-gray-900">Description</label>
                                </div>
                                <div class="mt-2">
                                    <input id="description" style="width: 90px" name="description" type="string" class=" block rounded-md border-0 py-1.5 text-gray-900  ring-2 ring-inset ring-gray-300 placeholder:text-gray-400 pl-2 focus:ring-2  sm:text-sm sm:leading-6">
                                </div>
                            </div>
                        </div>
                        @error('name')
                        <h2 class="mt-2.5 text-red-600" style="font-size: 14px">{{ $message }}</h2>
                        @enderror
                        @error('price')
                        <h2 class="mt-2.5 text-red-600" style="font-size: 14px">{{ $message }}</h2>
                        @enderror
                        @error('description')
                        <h2 class="mt-2.5 text-red-600" style="font-size: 14px">{{ $message }}</h2>
                        @enderror
                    </div>

                    <div class="border-b border-gray-900/10 pb-12">
                        <div class="mt-4 space-y-10">
                            <legend class="text-sm font-semibold leading-6 text-gray-900">Select colors</legend>
                            <ul>
                                @foreach($colors as $color)
                                    <li class="flex space-x-2 mb-2 items-center">
                                        <input type="checkbox" id="color" name="color[{{ $color->id }}]" value="{{ $color->name }}"/>
                                        <label for="color"><span style="width: 20px; height: 20px; color: {{ $color->hex_code }}"></span>{{ $color->name }}</label>
                                    </li>
                                @endforeach
                            </ul>
                            @error('colors')
                            <h2 class="mt-2.5 text-red-600" style="font-size: 14px">{{ $message }}</h2>
                            @enderror
                        </div>
                    </div>
                    <div class="border-b border-gray-900/10 pb-12">
                        <div class="mt-10 space-y-10">
                            <legend class="text-sm font-semibold leading-6 text-gray-900">Select sizes</legend><ul>
                                @foreach($sizes as $size)
                                    <div class="flex space-x-2 mb-2 items-center">
                                        <input type="checkbox" id="size" name="size[{{ $size->id }}]" value="{{ $size->name }}"/>
                                        <label for="size">{{ $size->name }}</label>
                                    </div>
                                @endforeach
                            </ul>
                            @error('sizes')
                            <h2 class="mt-2.5 text-red-600" style="font-size: 14px">{{ $message }}</h2>
                            @enderror
                        </div>
                    </div>
                    <div class="border-b border-gray-900/10 pb-12">
                        <div class="mt-10 space-y-10">
                            <legend class="text-sm font-semibold leading-6 text-gray-900">Select category</legend>
                            <ul>
                                @foreach($categories as $category)
                                    <div class="flex space-x-2 mb-2 items-center">
                                        <input type="radio" id="category" name="category" value="{{ $category->id }}"/>
                                        <label for="category">{{ $category->name }}</label>
                                    </div>
                                @endforeach
                            </ul>
                            @error('categories')
                            <h2 class="mt-2.5 text-red-600" style="font-size: 14px">{{ $message }}</h2>
                            @enderror
                        </div>
                    </div>
                </div>
                <div>
                    <button type="submit" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Create</button>
                </div>
            </form>

        </div>
    </div>

@endsection
