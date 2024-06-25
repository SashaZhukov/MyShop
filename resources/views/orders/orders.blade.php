@extends('master')
@section('content')
    <main class="mx-auto max-w-2xl pb-24 pt-8 sm:px-6 sm:pt-16 lg:max-w-7xl lg:px-8">
        @foreach($orders as $order)
        <div class="space-y-2 px-4 sm:flex sm:items-baseline sm:justify-between sm:space-y-0 sm:px-0">
            <div class="flex sm:items-baseline sm:space-x-4">
                <h1 class="text-2xl font-bold tracking-tight text-gray-900 sm:text-3xl">Order #{{ $order->id }}</h1>
            </div>
        </div>

        <!-- Products -->
        <section aria-labelledby="products-heading" class="mt-6">
            <h2 id="products-heading" class="sr-only">Products purchased</h2>
            <div class="space-y-8">
                @foreach($order->products as $product)
                <div class="border-b border-t border-gray-200 bg-white shadow-sm">
                    <div class="px-4 py-6 sm:px-6 lg:grid lg:grid-cols-12 lg:gap-x-8 lg:p-8">
                        <div class="sm:flex lg:col-span-7">
                            <div class="aspect-h-1 aspect-w-1 w-full flex-shrink-0 overflow-hidden rounded-lg sm:aspect-none sm:h-40 sm:w-40">
                                <img src="{{ $product->img }}" alt="Insulated bottle with white base and black snap lid." class="h-full w-full object-cover object-center sm:h-full sm:w-full">
                            </div>

                            <div class="mt-6 sm:ml-6 sm:mt-0">
                                <h3 class="text-base font-medium text-gray-900">
                                    <a href="#">{{ $product->name }}</a>
                                </h3>
                                <p class="mt-2 text-sm font-medium text-gray-900">{{ $product->price }} {{ empty($currency) ? '$' : $currencyActive->name }}</p>
                                <p class="mt-3 text-sm text-gray-500">{{ $product->discription }}</p>
                            </div>
                        </div>

                        <div class="mt-6 lg:col-span-5 lg:mt-0">
                            <dl class="grid grid-cols-2 gap-x-6 text-sm">
                                <div>
                                    <dt class="font-medium text-gray-900">Delivery address</dt>
                                    <dd class="mt-3 text-gray-500">
                                        <span class="block">{{ $order->country }}</span>
                                        <span class="block">{{ $order->address }}</span>
                                        <span class="block">{{ $order->city }}</span>
                                        <span class="block">{{ $order->postcode }}</span>
                                    </dd>
                                </div>
                                <div>
                                    <dt class="font-medium text-gray-900">Shipping updates</dt>
                                    <dd class="mt-3 space-y-3 text-gray-500">
                                        <p>{{ $order->full_name }}</p>
                                        <p>{{ $order->user_email }}</p>
                                        <button type="button" class="font-medium text-indigo-600 hover:text-indigo-500">Edit(не работает)</button>
                                    </dd>
                                </div>
                            </dl>
                        </div>
                    </div>
                    @endforeach

                    <div class="border-t border-gray-200 px-4 py-6 sm:px-6 lg:p-8">
                        <h4 class="sr-only">Status</h4>
                        <p class="text-sm font-medium text-gray-900">Preparing to ship on <time datetime="2021-03-24">March 24, 2021</time></p>
                        <div class="mt-6" aria-hidden="true">
                            <div class="overflow-hidden rounded-full bg-gray-200">
                                <div class="h-2 rounded-full bg-indigo-600" style="width:
                                @if($order->status === 'placed')
                                20%
                                @elseif($order->status === 'processing')
                                40%
                                @elseif($order->status === 'shipped')
                                65%
                                @elseif($order->status === 'delivered')
                                100%
                                @endif
                                "></div>
                            </div>
                            <div class="mt-6 hidden grid-cols-4 text-sm font-medium text-gray-600 sm:grid">
                                <div class="text-indigo-600">Order placed</div>
                                <div class="text-center text-indigo-600">Processing</div>
                                <div class="text-center text-indigo-600">Shipped</div>
                                <div class="text-right text-indigo-600">Delivered</div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- More products... -->
            </div>
        </section>
        @endforeach
    </main>
@endsection
