@extends('master')
@section('header')
    @include('layouts.header')
@endsection
@section('content')
    <div class="bg-white">
        <div>
            <main class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
                <div class="border-b border-gray-200 pb-10">
                    <h1 class="text-4xl font-bold tracking-tight text-gray-900">All products</h1>
                     </div>

                <div class="pt-12 lg:grid lg:grid-cols-3 lg:gap-x-8 xl:grid-cols-4">
                    <aside>
                        <h2 class="sr-only">Filters</h2>

                        <!-- Mobile filter dialog toggle, controls the 'mobileFilterDialogOpen' state. -->
                        <button type="button" class="inline-flex items-center lg:hidden">
                            <span class="text-sm font-medium text-gray-700">Filters</span>
                            <svg class="ml-1 h-5 w-5 flex-shrink-0 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path d="M10.75 4.75a.75.75 0 00-1.5 0v4.5h-4.5a.75.75 0 000 1.5h4.5v4.5a.75.75 0 001.5 0v-4.5h4.5a.75.75 0 000-1.5h-4.5v-4.5z" />
                            </svg>
                        </button>

                        <div class="hidden lg:block">
                            <form action="{{ route('products.index') }}" method="get" class="space-y-10 divide-y divide-gray-200">
                                <div class="pt-10">
                                    <fieldset>
                                        <div class="space-y-3 pt-6">
                                            <legend class="block text-sm font-medium text-gray-900">Category</legend>
                                                <select name="category_id" class="form-select form-select-sm">
                                                    <option disabled {{ empty(request()->category_id) ? 'selected' : ''}}>Select Category</option>
                                                    @foreach($categories as $category)
                                                        <option {{ $category->id == request()->category_id ? 'selected' : '' }} value="{{$category->id}}">{{ $category->name }}</option>
                                                    @endforeach
                                                </select>
                                        </div>
                                        <div class="space-y-3 pt-6">
                                            <legend class="block text-sm font-medium text-gray-900">Colors</legend>
                                            <select name="color_id" class="form-select form-select-sm">
                                                <option disabled {{ empty(request()->color_id) ? 'selected' : ''}}>Select Color</option>
                                                @foreach($colors as $color)
                                                    <option {{ $color->id == request()->color_id ? 'selected' : '' }} value="{{$color->id}}">{{ $color->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="space-y-3 pt-6">
                                            <legend class="block text-sm font-medium text-gray-900">Sizes</legend>
                                            <select name="size_id" class="form-select form-select-sm">
                                                <option disabled {{ empty(request()->size_id) ? 'selected' : ''}}>Select Size</option>
                                                @foreach($sizes as $size)
                                                    <option {{ $size->id == request()->size_id ? 'selected' : '' }} value="{{$size->id}}">{{ $size->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </fieldset>
                                </div>
                                <button type="submit" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Apply</button>
                            </form>
                            <a href="{{ route('products.index') }}"><button type="submit" class="mt-4 flex w-full justify-center rounded-md bg-gray-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-gray-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Clean</button></a>
                        </div>
                    </aside>
                    <!-- Product grid -->
                    <div class="mt-6 lg:col-span-2 lg:mt-0 xl:col-span-3">
                        <div class="bg-white">
                            <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
                                <h2 class="sr-only">Products</h2>
                                <div class="grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-8">
                                    @foreach($products as $product)
                                        <a href="{{ route('product.show', $product->id) }}" class="group">
                                            <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7">
                                                <img src="{{ $product->img }}" alt="Tall slender porcelain bottle with natural clay textured body and cork stopper." class="h-full w-full object-cover object-center group-hover:opacity-75">
                                            </div>
                                            <h3 class="mt-4 text-sm text-gray-700">{{ $product->name }}</h3>
                                            <p class="mt-1 text-lg font-medium text-gray-900">{{ $product->price *  ($currency === 0 ? 1 : $currencyActive->value )}} {{ $currency === 0 ? 'USD' : $currencyActive->name }}</p>
                                        </a>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
@endsection
@section('footer')
    @include('layouts.footer')
@endsection
