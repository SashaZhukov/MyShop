<div class="bg-white">
    <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:grid lg:max-w-7xl lg:grid-cols-12 lg:gap-x-8 lg:px-8 lg:py-32">
        <div class="lg:col-span-4">
            <h2 class="text-2xl font-bold tracking-tight text-gray-900">Customer Reviews</h2>

            <div class="mt-3 flex items-center">
                <div>
                    <div class="flex items-center">
                        @if(empty($avgCountEvaluation))
                            @for($i = 0; $i < 5; $i++)
                                <svg class="text-gray-300 h-5 w-5 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd" />
                                </svg>
                            @endfor
                        @else
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
                        @endif
                    </div>
                    <p class="sr-only">4 out of 5 stars</p>
                </div>
                <p class="ml-2 text-sm text-gray-900">Based on {{ $allCountReviews }} reviews</p>
            </div>

            <div class="mt-6">
                <h3 class="sr-only">Review data</h3>

                <dl class="space-y-3">
                    <div class="flex items-center text-sm">
                        <dt class="flex flex-1 items-center">
                            <p class="w-3 font-medium text-gray-900">5<span class="sr-only"> star reviews</span></p>
                            <div aria-hidden="true" class="ml-1 flex flex-1 items-center">
                                <svg class="h-5 w-5 flex-shrink-0 text-yellow-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd" />
                                </svg>

                                <div class="relative ml-3 flex-1">
                                    <div class="h-3 rounded-full border border-gray-200 bg-gray-100"></div>
                                    <div style="width: {{ isset($reviewsEvaluation[5]) ? $reviewsEvaluation[5] / $allCountReviews * 100 : '0' }}%" class="absolute inset-y-0 rounded-full border border-yellow-400 bg-yellow-400"></div>
                                </div>
                            </div>
                        </dt>
                        <dd class="ml-3 w-10 text-right text-sm tabular-nums text-gray-900">{{ isset($reviewsEvaluation[5]) ? round($reviewsEvaluation[5] / $allCountReviews * 100) : '0' }}%</dd>
                    </div>
                    <div class="flex items-center text-sm">
                        <dt class="flex flex-1 items-center">
                            <p class="w-3 font-medium text-gray-900">4<span class="sr-only"> star reviews</span></p>
                            <div aria-hidden="true" class="ml-1 flex flex-1 items-center">
                                <svg class="h-5 w-5 flex-shrink-0 text-yellow-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd" />
                                </svg>

                                <div class="relative ml-3 flex-1">
                                    <div class="h-3 rounded-full border border-gray-200 bg-gray-100"></div>
                                    <div style="width: {{ isset($reviewsEvaluation[4]) ? $reviewsEvaluation[4] / $allCountReviews * 100 : '0' }}%" class="absolute inset-y-0 rounded-full border border-yellow-400 bg-yellow-400"></div>
                                </div>
                            </div>
                        </dt>
                        <dd class="ml-3 w-10 text-right text-sm tabular-nums text-gray-900">{{ isset($reviewsEvaluation[4]) ? round($reviewsEvaluation[4] / $allCountReviews * 100) : '0' }}%</dd>
                    </div>
                    <div class="flex items-center text-sm">
                        <dt class="flex flex-1 items-center">
                            <p class="w-3 font-medium text-gray-900">3<span class="sr-only"> star reviews</span></p>
                            <div aria-hidden="true" class="ml-1 flex flex-1 items-center">
                                <svg class="h-5 w-5 flex-shrink-0 text-yellow-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd" />
                                </svg>

                                <div class="relative ml-3 flex-1">
                                    <div class="h-3 rounded-full border border-gray-200 bg-gray-100"></div>
                                    <div style="width: {{ isset($reviewsEvaluation[3]) ? $reviewsEvaluation[3] / $allCountReviews * 100 : '0' }}%" class="absolute inset-y-0 rounded-full border border-yellow-400 bg-yellow-400"></div>
                                </div>
                            </div>
                        </dt>
                        <dd class="ml-3 w-10 text-right text-sm tabular-nums text-gray-900">{{ isset($reviewsEvaluation[3]) ? round($reviewsEvaluation[3] / $allCountReviews * 100) : '0' }}%</dd>
                    </div>
                    <div class="flex items-center text-sm">
                        <dt class="flex flex-1 items-center">
                            <p class="w-3 font-medium text-gray-900">2<span class="sr-only"> star reviews</span></p>
                            <div aria-hidden="true" class="ml-1 flex flex-1 items-center">
                                <svg class="h-5 w-5 flex-shrink-0 text-yellow-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd" />
                                </svg>

                                <div class="relative ml-3 flex-1">
                                    <div class="h-3 rounded-full border border-gray-200 bg-gray-100"></div>
                                    <div style="width: {{ isset($reviewsEvaluation[2]) ? $reviewsEvaluation[2] / $allCountReviews * 100 : '0' }}%" class="absolute inset-y-0 rounded-full border border-yellow-400 bg-yellow-400"></div>
                                </div>
                            </div>
                        </dt>
                        <dd class="ml-3 w-10 text-right text-sm tabular-nums text-gray-900">{{ isset($reviewsEvaluation[2]) ? round($reviewsEvaluation[2] / $allCountReviews * 100) : '0' }}%</dd>
                    </div>
                    <div class="flex items-center text-sm">
                        <dt class="flex flex-1 items-center">
                            <p class="w-3 font-medium text-gray-900">1<span class="sr-only"> star reviews</span></p>
                            <div aria-hidden="true" class="ml-1 flex flex-1 items-center">
                                <svg class="h-5 w-5 flex-shrink-0 text-yellow-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd" />
                                </svg>

                                <div class="relative ml-3 flex-1">
                                    <div class="h-3 rounded-full border border-gray-200 bg-gray-100"></div>
                                    <div style="width: {{ isset($reviewsEvaluation[1]) ? $reviewsEvaluation[1] / $allCountReviews * 100 : '0' }}%" class="absolute inset-y-0 rounded-full border border-yellow-400 bg-yellow-400"></div>
                                </div>
                            </div>
                        </dt>
                        <dd class="ml-3 w-10 text-right text-sm tabular-nums text-gray-900">{{ isset($reviewsEvaluation[1]) ? round($reviewsEvaluation[1] / $allCountReviews * 100) : '0' }}%</dd>
                    </div>
                </dl>
            </div>

            <div class="mt-10">
                <h3 class="text-lg font-medium text-gray-900">Share your thoughts</h3>
                <p class="mt-1 text-sm text-gray-600">If you’ve used this product, share your thoughts with other customers</p>

                <a href="{{ route('review.create', $product->id) }}" class="mt-6 inline-flex w-full items-center justify-center rounded-md border border-gray-300 bg-white px-8 py-2 text-sm font-medium text-gray-900 hover:bg-gray-50 sm:w-auto lg:w-full">Write a review</a>
            </div>
        </div>

        <div class="mt-16 lg:col-span-7 lg:col-start-6 lg:mt-0">
            <h3 class="sr-only">Recent reviews</h3>
            <div class="flow-root">
                <div class="-my-12 divide-y divide-gray-200">
                    @foreach($reviewsViews as $reviewView)
                    <div class="py-12">
                        <div class="flex items-center">
                            <img src="/Uploads/80-805523_default-avatar-svg-png-icon-free-download-264157.png.jpeg" alt="Emily Selman." class="h-12 w-12 rounded-full">
                            <div class="ml-4">
                                <h4 class="text-sm font-bold text-gray-900">{{ $reviewView->user_name }}</h4>
                                <div class="mt-1 flex items-center">
                                    @for($i = 0; $i < $reviewView->evaluation; $i++)
                                        <svg class="text-yellow-400 h-5 w-5 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd" />
                                        </svg>
                                    @endfor
                                    @for($i = $reviewView->evaluation; $i < 5; $i++)
                                        <svg class="text-gray-300 h-5 w-5 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd" />
                                        </svg>
                                    @endfor
                                </div>
                                <p class="sr-only">5 out of 5 stars</p>
                            </div>
                        </div>

                        <div class="mt-4 space-y-6 text-base italic text-gray-600">
                            <p>{{ $reviewView->comment }}</p>
                        </div>
                    </div>
                    @endforeach
                    {{ $reviewsViews->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
