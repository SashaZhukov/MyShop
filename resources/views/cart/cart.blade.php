@extends('master')
@section('header')
    @include('layouts.header')
@endsection
@section('content')
    <div class="bg-white">
        <div class="mx-auto max-w-4xl px-4 py-16 sm:px-6 sm:py-24 lg:px-8">
            <h1 class="text-3xl font-bold tracking-tight text-gray-900">Shopping Cart</h1>

                <div>
                    <h2 class="sr-only">Items in your shopping cart</h2>

                    <ul role="list" class="divide-y divide-gray-200 border-b border-t border-gray-200">
                        @if(!isset($cart))
                            <h1>Cart is empty</h1>
                        @else
                            @foreach($cart as $productId => $product)
                        <li class="flex py-6 sm:py-10">
                            <div class="flex-shrink-0">
                                <img src="{{ $product['img'] }}" alt="Insulated bottle with white base and black snap lid." class="h-24 w-24 rounded-lg object-cover object-center sm:h-32 sm:w-32">
                            </div>

                            <div class="relative ml-4 flex flex-1 flex-col justify-between sm:ml-6">
                                <div>
                                    <div class="flex justify-between sm:grid sm:grid-cols-2">
                                        <div class="pr-6">
                                            <h3 class="text-sm">
                                                <a href="#" class="font-medium text-gray-700 hover:text-gray-800">{{ $product['name']}}</a>
                                            </h3>
                                            <p class="mt-1 text-sm text-gray-500">Color: {{ $product['color'] }}</p>
                                            <p class="mt-1 text-sm text-gray-500">Size: {{ $product['size'] }}</p>
                                        </div>

                                        <p class="text-right text-sm font-medium text-gray-900">
                                            @php
                                                $price = $product['price'] * $product['quantity'];
                                            @endphp
                                            {{ $price }}
                                            {{ session('currency') ?? '$' }}</p>
                                    </div>

                                    <div class="mt-4 flex items-center sm:absolute sm:left-1/2 sm:top-0 sm:mt-0 sm:block">
                                        <h1>Quantity: {{ $product['quantity'] }}</h1>
                                        <form action="{{ route('product.remove', $productId) }}" method="post">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="ml-4 text-sm font-medium text-indigo-600 hover:text-indigo-500 sm:ml-0 sm:mt-3">
                                                Remove
                                            </button>
                                        </form>

                                    </div>
                                </div>

                                <p class="mt-4 flex space-x-2 text-sm text-gray-700">
                                    <svg class="h-5 w-5 flex-shrink-0 text-green-500" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                                    </svg>
                                    <span>In stock</span>
                                </p>
                            </div>
                        </li>
                            @endforeach
                        @endif
                        <!-- More products... -->
                    </ul>
                </div>

                <!-- Order summary -->


                        <div class="flow-root">
                            <dl class="-my-4 divide-y divide-gray-200 text-sm">
                                <div class="flex items-center justify-between py-4">
                                    <h1 style="font-size: 25px" class="fa-bold">Order total</h1>
                                    <dd class="text-base font-medium text-gray-900">
                                            {{ $totalPrice }}{{ session('currency') ?? '$' }}
                                    </dd>
                                </div>
                            </dl>
                        </div>

                    <div class="mt-10">
                        <button type="submit" class="w-full rounded-md border border-transparent bg-indigo-600 px-4 py-3 text-base font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 focus:ring-offset-gray-50">Checkout</button>
                    </div>

                    <div class="mt-6 text-center text-sm text-gray-500">
                        <p>
                            or
                            <a href="{{ route('products.index') }}" class="font-medium text-indigo-600 hover:text-indigo-500">
                                Continue Shopping
                            </a>
                        </p>
                    </div>
        </div>
    </div>
@endsection
