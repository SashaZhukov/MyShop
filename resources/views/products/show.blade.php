@extends('master')
@section('header')
    @include('layouts.header')
@endsection
@section('content')
    <div class="bg-white">
        <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:grid lg:max-w-7xl lg:grid-cols-2 lg:gap-x-8 lg:px-8">
            <!-- Product details -->
            <div class="lg:max-w-lg lg:self-end">

                <div class="mt-4">
                    <h1 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">{{ $product->name }}</h1>
                </div>

                <section aria-labelledby="information-heading" class="mt-4">
                    <h2 id="information-heading" class="sr-only">Product information</h2>

                    <div class="flex items-center">
                        <p class="text-lg text-gray-900 sm:text-xl">{{ $product->price *  (empty($currency) ? 1 : $currency->value )}} {{ empty($currency) ? 'USD' : $currency->currency }}</p>

                        <div class="ml-4 border-l border-gray-300 pl-4">
                            <h2 class="sr-only">Reviews</h2>
                            <div class="flex items-center">
                                <div>
                                    <div class="flex items-center">
                                        @for($i = 0; $i < $avgCountEvaluation; $i++)
                                            <svg class="text-yellow-400 h-5 w-5 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd" />
                                            </svg>
                                        @endfor
                                        @for($i = $avgCountEvaluation; $i < 5; $i++)
                                            <svg class="text-gray-300 h-5 w-5 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd" />
                                            </svg>
                                        @endfor
                                    </div>
                                    <p class="sr-only">4 out of 5 stars</p>
                                </div>
                                <p class="ml-2 text-sm text-gray-500"></p>
                            </div>
                        </div>
                    </div>

                    <div class="mt-4 space-y-6">
                        <p class="text-base text-gray-500">{{ $product->description }}</p>
                    </div>

                    @if($status === 1)
                        <div class="mt-6 flex items-center">
                            <svg class="h-5 w-5 flex-shrink-0 text-green-500" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                            </svg>
                            <p class="ml-2 text-sm text-gray-500">In stock</p>
                        </div>
                    @else
                        <div class="mt-6 flex items-center">
                             @include('layouts.crossliner')
                            <p class="ml-2 text-sm text-gray-500">Out of stock</p>
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
                    <h2 id="options-heading" class="sr-only">Product options</h2>

                    <form>
                        <div class="sm:flex sm:justify-between">
                            <!-- Size selector -->
                            <fieldset class="mt-4">
                                <legend class="sr-only">Choose a size</legend>
                                <div class="grid grid-cols-4 gap-4 sm:grid-cols-8 lg:grid-cols-4">
                                    @foreach($sizes as $size)
                                            @if($productInfo->search($size->id) !== false)
                                                <label class="group relative flex items-center justify-center rounded-md border  py-3 px-4 text-sm font-medium uppercase hover:bg-gray-50 focus:outline-none sm:flex-1 sm:py-6 cursor-pointer bg-white text-gray-900 shadow-sm ">
                                                    <input type="radio" name="size-choice" value="XS" aria-labelledby="size-choice-1-label">
                                                    <span id="size-choice-1-label">{{ $size->name }}</span>
                                                    <span class="pointer-events-none absolute -inset-px rounded-md" aria-hidden="true"></span>
                                                </label>
                                            @else
                                                <label class="group relative flex items-center justify-center rounded-md border py-3 px-4 text-sm font-medium uppercase hover:bg-gray-50 focus:outline-none sm:flex-1 sm:py-6 cursor-pointer shadow-sm   bg-gray-50 text-gray-200">
                                                    <input type="radio" name="size-choice" value="XS" class="sr-only" disabled aria-labelledby="size-choice-1-label">
                                                    <span id="size-choice-1-label">{{ $size->name }}</span>
                                                    <span aria-hidden="true" class="pointer-events-none absolute -inset-px rounded-md border-2 border-gray-200">
                                                    <svg class="absolute inset-0 h-full w-full stroke-2 text-gray-200" viewBox="0 0 100 100" preserveAspectRatio="none" stroke="currentColor">
                                                        <line x1="0" y1="100" x2="100" y2="0" vector-effect="non-scaling-stroke" />
                                                    </svg>
                                                    </span>
                                                </label>
                                            @endif
                                    @endforeach
                                </div>
                            </fieldset>
                        </div>
                        <div class="mt-4">
                            <a href="#" class="group inline-flex text-sm text-gray-500 hover:text-gray-700">
                                <span>What size should I buy?</span>
                                <svg class="ml-2 h-5 w-5 flex-shrink-0 text-gray-400 group-hover:text-gray-500" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zM8.94 6.94a.75.75 0 11-1.061-1.061 3 3 0 112.871 5.026v.345a.75.75 0 01-1.5 0v-.5c0-.72.57-1.172 1.081-1.287A1.5 1.5 0 108.94 6.94zM10 15a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd" />
                                </svg>
                            </a>
                        </div>
                        <div class="mt-10">
                            <button type="submit" class="flex w-full items-center justify-center rounded-md border border-transparent bg-indigo-600 px-8 py-3 text-base font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 focus:ring-offset-gray-50">Add to bag</button>
                        </div>
                    </form>
                </section>
            </div>
        </div>
    </div>
    @include('layouts.reviews')
@endsection
@section('footer')
    @include('layouts.footer')
@endsection
