@extends('master')
@section('header')
    @include('layouts.header')
@endsection
@section('content')
    <main>
        <div class="relative overflow-hidden bg-white">
            <div class="pb-80 pt-16 sm:pb-40 sm:pt-24 lg:pb-48 lg:pt-40">
                <div class="relative mx-auto max-w-7xl px-4 sm:static sm:px-6 lg:px-8">
                    <div class="sm:max-w-lg">
                        <h1 class="text-4xl font-bold tracking-tight text-gray-900 sm:text-6xl">Cloth - for those who like to stand out.</h1>
                    </div>
                    <div>
                        <div class="mt-10">
                            <!-- Decorative image grid -->
                            <div aria-hidden="true" class="pointer-events-none lg:absolute lg:inset-y-0 lg:mx-auto lg:w-full lg:max-w-7xl">
                                <div class="absolute transform sm:left-1/2 sm:top-0 sm:translate-x-8 lg:left-1/2 lg:top-1/2 lg:-translate-y-1/2 lg:translate-x-8">
                                    <div class="flex items-center space-x-6 lg:space-x-8">
                                        <div class="grid flex-shrink-0 grid-cols-1 gap-y-6 lg:gap-y-8">
                                            <div class="h-64 w-44 overflow-hidden rounded-lg sm:opacity-0 lg:opacity-100">
                                                <img src="https://tailwindui.com/img/ecommerce-images/home-page-03-hero-image-tile-01.jpg" alt="" class="h-full w-full object-cover object-center">
                                            </div>
                                            <div class="h-64 w-44 overflow-hidden rounded-lg">
                                                <img src="https://tailwindui.com/img/ecommerce-images/home-page-03-hero-image-tile-02.jpg" alt="" class="h-full w-full object-cover object-center">
                                            </div>
                                        </div>
                                        <div class="grid flex-shrink-0 grid-cols-1 gap-y-6 lg:gap-y-8">
                                            <div class="h-64 w-44 overflow-hidden rounded-lg">
                                                <img src="https://tailwindui.com/img/ecommerce-images/home-page-03-hero-image-tile-03.jpg" alt="" class="h-full w-full object-cover object-center">
                                            </div>
                                            <div class="h-64 w-44 overflow-hidden rounded-lg">
                                                <img src="https://tailwindui.com/img/ecommerce-images/home-page-03-hero-image-tile-04.jpg" alt="" class="h-full w-full object-cover object-center">
                                            </div>
                                            <div class="h-64 w-44 overflow-hidden rounded-lg">
                                                <img src="https://tailwindui.com/img/ecommerce-images/home-page-03-hero-image-tile-05.jpg" alt="" class="h-full w-full object-cover object-center">
                                            </div>
                                        </div>
                                        <div class="grid flex-shrink-0 grid-cols-1 gap-y-6 lg:gap-y-8">
                                            <div class="h-64 w-44 overflow-hidden rounded-lg">
                                                <img src="https://tailwindui.com/img/ecommerce-images/home-page-03-hero-image-tile-06.jpg" alt="" class="h-full w-full object-cover object-center">
                                            </div>
                                            <div class="h-64 w-44 overflow-hidden rounded-lg">
                                                <img src="https://tailwindui.com/img/ecommerce-images/home-page-03-hero-image-tile-07.jpg" alt="" class="h-full w-full object-cover object-center">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <a href="{{ route('product.list') }}" class="inline-block rounded-md border border-transparent bg-indigo-600 px-8 py-3 text-center font-medium text-white hover:bg-indigo-700">To the store</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section aria-labelledby="trending-heading">
            <div class="mx-auto max-w-7xl px-4 py-24 sm:px-6 sm:py-32 lg:px-8 lg:pt-32">
                <div class="md:flex md:items-center md:justify-between">
                    <h2 id="favorites-heading" class="text-2xl font-bold tracking-tight text-gray-900">Trending Products</h2>
                    <a href="#" class="hidden text-sm font-medium text-indigo-600 hover:text-indigo-500 md:block">
                        Shop the collection
                        <span aria-hidden="true"> &rarr;</span>
                    </a>
                </div>

                <div class="mt-6 grid grid-cols-2 gap-x-4 gap-y-10 sm:gap-x-6 md:grid-cols-4 md:gap-y-0 lg:gap-x-8">
                    <div class="group relative">
                        <div class="h-56 w-full overflow-hidden rounded-md group-hover:opacity-75 lg:h-72 xl:h-80">
                            <img src="https://tailwindui.com/img/ecommerce-images/home-page-04-trending-product-02.jpg" alt="Hand stitched, orange leather long wallet." class="h-full w-full object-cover object-center">
                        </div>
                        <h3 class="mt-4 text-sm text-gray-700">
                            <a href="#">
                                <span class="absolute inset-0"></span>
                                Leather Long Wallet
                            </a>
                        </h3>
                        <p class="mt-1 text-sm text-gray-500">Natural</p>
                        <p class="mt-1 text-sm font-medium text-gray-900">$75</p>
                    </div>
                    <div class="group relative">
                        <div class="h-56 w-full overflow-hidden rounded-md group-hover:opacity-75 lg:h-72 xl:h-80">
                            <img src="https://tailwindui.com/img/ecommerce-images/home-page-04-trending-product-02.jpg" alt="Hand stitched, orange leather long wallet." class="h-full w-full object-cover object-center">
                        </div>
                        <h3 class="mt-4 text-sm text-gray-700">
                            <a href="#">
                                <span class="absolute inset-0"></span>
                                Leather Long Wallet
                            </a>
                        </h3>
                        <p class="mt-1 text-sm text-gray-500">Natural</p>
                        <p class="mt-1 text-sm font-medium text-gray-900">$75</p>
                    </div>
                    <div class="group relative">
                        <div class="h-56 w-full overflow-hidden rounded-md group-hover:opacity-75 lg:h-72 xl:h-80">
                            <img src="https://tailwindui.com/img/ecommerce-images/home-page-04-trending-product-02.jpg" alt="Hand stitched, orange leather long wallet." class="h-full w-full object-cover object-center">
                        </div>
                        <h3 class="mt-4 text-sm text-gray-700">
                            <a href="#">
                                <span class="absolute inset-0"></span>
                                Leather Long Wallet
                            </a>
                        </h3>
                        <p class="mt-1 text-sm text-gray-500">Natural</p>
                        <p class="mt-1 text-sm font-medium text-gray-900">$75</p>
                    </div>


                    <!-- More products... -->
                </div>


                <div class="mt-8 text-sm md:hidden">
                    <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500">
                        Shop the collection
                        <span aria-hidden="true"> &rarr;</span>
                    </a>
                </div>
            </div>
        </section>

        <section aria-labelledby="perks-heading" class="border-t border-gray-200 bg-gray-50">
            <h2 id="perks-heading" class="sr-only">Our perks</h2>

            <div class="mx-auto max-w-7xl px-4 py-24 sm:px-6 sm:py-32 lg:px-8">
                <div class="grid grid-cols-1 gap-y-12 sm:grid-cols-2 sm:gap-x-6 lg:grid-cols-4 lg:gap-x-8 lg:gap-y-0">
                    <div class="text-center md:flex md:items-start md:text-left lg:block lg:text-center">
                        <div class="md:flex-shrink-0">
                            <div class="flow-root">
                                <img class="-my-1 mx-auto h-24 w-auto" src="https://tailwindui.com/img/ecommerce/icons/icon-returns-light.svg" alt="">
                            </div>
                        </div>
                        <div class="mt-6 md:ml-4 md:mt-0 lg:ml-0 lg:mt-6">
                            <h3 class="text-base font-medium text-gray-900">Free returns</h3>
                            <p class="mt-3 text-sm text-gray-500">Not what you expected? Place it back in the parcel and attach the pre-paid postage stamp.</p>
                        </div>
                    </div>
                    <div class="text-center md:flex md:items-start md:text-left lg:block lg:text-center">
                        <div class="md:flex-shrink-0">
                            <div class="flow-root">
                                <img class="-my-1 mx-auto h-24 w-auto" src="https://tailwindui.com/img/ecommerce/icons/icon-calendar-light.svg" alt="">
                            </div>
                        </div>
                        <div class="mt-6 md:ml-4 md:mt-0 lg:ml-0 lg:mt-6">
                            <h3 class="text-base font-medium text-gray-900">Fast delivery</h3>
                            <p class="mt-3 text-sm text-gray-500">We offer fast and convenient delivery.</p>
                        </div>
                    </div>
                    <div class="text-center md:flex md:items-start md:text-left lg:block lg:text-center">
                        <div class="md:flex-shrink-0">
                            <div class="flow-root">
                                <img class="-my-1 mx-auto h-24 w-auto" src="https://tailwindui.com/img/ecommerce/icons/icon-gift-card-light.svg" alt="">
                            </div>
                        </div>
                        <div class="mt-6 md:ml-4 md:mt-0 lg:ml-0 lg:mt-6">
                            <h3 class="text-base font-medium text-gray-900">All year discount</h3>
                            <p class="mt-3 text-sm text-gray-500">Looking for a great deal? Use code "ALLYEAR" at checkout and get 5% off all year round.</p>
                        </div>
                    </div>
                    <div class="text-center md:flex md:items-start md:text-left lg:block lg:text-center">
                        <div class="md:flex-shrink-0">
                            <div class="flow-root">
                                <img class="-my-1 mx-auto h-24 w-auto" src="https://tailwindui.com/img/ecommerce/icons/icon-planet-light.svg" alt="">
                            </div>
                        </div>
                        <div class="mt-6 md:ml-4 md:mt-0 lg:ml-0 lg:mt-6">
                            <h3 class="text-base font-medium text-gray-900">For the planet</h3>
                            <p class="mt-3 text-sm text-gray-500">We’ve pledged 1% of sales to the preservation and restoration of the natural environment.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

@endsection
@section('footer')
    @include('layouts.footer')
@endsection
