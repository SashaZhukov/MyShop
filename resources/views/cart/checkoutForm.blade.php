@extends('master')
@section('content')
    <div class="bg-white">
        <!-- Background color split screen for large screens -->
        <div class="fixed left-0 top-0 hidden h-full w-1/2 bg-white lg:block" aria-hidden="true"></div>
        <div class="fixed right-0 top-0 hidden h-full w-1/2 bg-gray-50 lg:block" aria-hidden="true"></div>

        <div class="relative mx-auto grid max-w-7xl grid-cols-1 gap-x-16 lg:grid-cols-2 lg:px-8 xl:gap-x-48">
            <h1 class="sr-only">Order information</h1>

            <section aria-labelledby="summary-heading" class="bg-gray-50 px-4 pb-10 pt-16 sm:px-6 lg:col-start-2 lg:row-start-1 lg:bg-transparent lg:px-0 lg:pb-16">
                <div class="mx-auto max-w-lg lg:max-w-none">
                    <h2 id="summary-heading" class="text-lg font-medium text-gray-900">Order summary</h2>

                    <ul role="list" class="divide-y divide-gray-200 text-sm font-medium text-gray-900">
                        @foreach($cart as $productId => $product)
                            <li class="flex items-start space-x-4 py-6">
                                <img src="https://tailwindui.com/img/ecommerce-images/checkout-page-04-product-01.jpg" alt="Moss green canvas compact backpack with double top zipper, zipper front pouch, and matching carry handle and backpack straps." class="h-20 w-20 flex-none rounded-md object-cover object-center">
                                <div class="flex-auto space-y-1">
                                    <h3>{{ $product['name'] }}</h3>
                                    <p class="text-gray-500">{{ $product['color'] }}</p>
                                    <p class="text-gray-500">{{ $product['size'] }}</p>
                                    <p class="text-gray-500">Quantity: {{ $product['quantity'] }}</p>
                                </div>
                                <p class="flex-none text-base font-medium">{{ $product['price'] }}{{ session('currency') ?? '$' }}</p>
                            </li>
                        @endforeach
                        <!-- More products... -->
                    </ul>

                    <div class="flex items-center justify-between border-t border-gray-200 pt-6">
                        <dt class="text-base">Total</dt>
                        <dd class="text-base">{{ $totalPrice }}{{ session('currency') ?? '$' }}</dd>
                    </div>

                </div>
            </section>

            <form action="{{ route('order.add') }}" method="post" class="px-4 pb-36 pt-16 sm:px-6 lg:col-start-1 lg:row-start-1 lg:px-0 lg:pb-16">
                @csrf
                <div class="mx-auto max-w-lg lg:max-w-none">
                    <section aria-labelledby="contact-info-heading">
                        <h2 id="contact-info-heading" class="text-lg font-medium text-gray-900">Contact information</h2>

                        <div class="mt-6">
                            <label for="email-address" class="block text-sm font-medium text-gray-700">Email address</label>
                            <div class="mt-1">
                                <input type="email" id="email-address" name="user_email" autocomplete="email" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            </div>
                        </div>

                        <div class="mt-6">
                            <label for="email-address" class="block text-sm font-medium text-gray-700">Full name</label>
                            <div class="mt-1">
                                <input type="text" id="full_name" name="full_name" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            </div>
                        </div>
                    </section>

                    <section aria-labelledby="shipping-heading" class="mt-10">
                        <h2 id="shipping-heading" class="text-lg font-medium text-gray-900">Shipping address</h2>

                        <div class="mt-6 grid grid-cols-1 gap-x-4 gap-y-6 sm:grid-cols-3">

                            <div class="sm:col-span-3">
                                <label for="address" class="block text-sm font-medium text-gray-700">Country</label>
                                <div class="mt-1">
                                    <input type="text" id="country" name="country" autocomplete="street-address" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                </div>
                            </div>

                            <div class="sm:col-span-3">
                                <label for="address" class="block text-sm font-medium text-gray-700">City</label>
                                <div class="mt-1">
                                    <input type="text" id="city" name="city" autocomplete="street-address" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                </div>
                            </div>

                            <div class="sm:col-span-3">
                                <label for="address" class="block text-sm font-medium text-gray-700">Address</label>
                                <div class="mt-1">
                                    <input type="text" id="address" name="address" autocomplete="street-address" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                </div>
                            </div>

                            <div class="sm:col-span-3">
                                <label for="address" class="block text-sm font-medium text-gray-700">Postcode</label>
                                <div class="mt-1">
                                    <input type="text" id="postcode" name="postcode" autocomplete="street-address" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                </div>
                            </div>
                        </div>
                    </section>

                    <div class="mt-10 border-t border-gray-200 pt-6 sm:flex sm:items-center sm:justify-between">
                        <button type="submit" class="w-full rounded-md border border-transparent bg-indigo-600 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 focus:ring-offset-gray-50 sm:order-last sm:ml-6 sm:w-auto">Continue</button>
                        <p class="mt-4 text-center text-sm text-gray-500 sm:mt-0 sm:text-left">You won't be charged until the next step.</p>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

