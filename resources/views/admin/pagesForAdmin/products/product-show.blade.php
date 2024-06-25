@extends('master')
@section('content')
    <div class="bg-white">

        <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:grid lg:max-w-7xl lg:grid-cols-2 lg:gap-x-8 lg:px-8">
            <!-- Product details -->

            <div class="lg:max-w-lg lg:self-end">
                <div class="mt-10">
                    <button type="submit" class="flex items-center justify-center rounded-md border border-transparent bg-indigo-600 px-8 py-3 text-base font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 focus:ring-offset-gray-50"><a href="{{ route('productsAdm.index') }}">Back</a></button>
                </div>
                <div class="mt-4">
                    <h1 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Product name: {{ $product->name }}</h1>
                </div>

                <section aria-labelledby="information-heading" class="mt-4">

                    <div class="flex items-center">
                        <p class="text-lg text-gray-900 sm:text-xl">Product price: {{ $product->price *  ($currency === 0 ? 1 : $currencyActive->value )}} {{ $currency === 0 ? 'USD' : $currencyActive->name }}</p>
                    </div>

                    <div class="mt-4 space-y-6">
                        <p class="text-base text-gray-500">Product description: {{ $product->description }}</p>
                    </div>

                    @if($status === 1)
                        <div class="mt-6 flex items-center">
                            <svg class="h-5 w-5 flex-shrink-0 text-green-500" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                            </svg>
                            <p class="ml-2 text-sm text-gray-500">Product status: In stock</p>
                        </div>
                    @else
                        <div class="mt-6 flex items-center">
                            @include('layouts.crossliner')
                            <p class="ml-2 text-sm text-gray-500">Product status: Out of stock</p>
                        </div>
                    @endif
                </section>
            </div>
            <!-- Product image -->
            <div class="mt-10 lg:col-start-2 lg:row-span-2 lg:mt-0 lg:self-center">
                <div class="aspect-h-1 aspect-w-1 overflow-hidden rounded-lg">
                    <img src="{{ $product->img }}" class="h-full w-full object-cover object-center">
                </div>
            </div>

            <!-- Product form -->
            <div class="mt-10 lg:col-start-1 lg:row-start-2 lg:max-w-lg lg:self-start">
                <section aria-labelledby="options-heading">
                    <div>Product sizes:</div>
                            <ul>
                            @foreach($sizes as $size)
                               <li>{{ $size->name }}</li><br>
                            @endforeach
                            </ul>
                    <div>Product colors:</div>
                            <ul>
                                @foreach($colors as $color)
                                    <li>{{ $color->name }}</li><br>
                            @endforeach
                            </ul>
                        <div class="mt-10">
                            <button type="submit" class="flex w-full items-center justify-center rounded-md border border-transparent bg-indigo-600 px-8 py-3 text-base font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 focus:ring-offset-gray-50">Product reviews</button>
                        </div>
                </section>
            </div>
        </div>
    </div>
@endsection

