@extends('master')
<div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
    <div class="sm:mx-auto sm:w-full sm:max-w-sm">
        <a href="{{ route('home') }}"><img class="mx-auto h-10 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="Your Company"></a>
        <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Write your reviews</h2>
    </div>

    <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
        <form class="space-y-6" action="{{ route('review.store', $product->id) }}" method="POST">
            @csrf

            <div>
                <div class="flex items-center justify-between">
                    <label class="block text-sm font-medium leading-6 text-gray-900">{{ auth()->user()->name }}</label>
                    <input name="user_name" type="hidden" value="{{ auth()->user()->name }}">
                </div>
                <div class="mt-2">
                    <input id="comment" name="comment" class="block w-full rounded-md border-0 py-1.5 text-gray-900 ring-2 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 pl-2 sm:text-sm sm:leading-6">
                </div>
            </div>

            <div>
                <div class="flex items-center justify-between">
                    <label class="block text-sm font-medium leading-6 text-gray-900">Your evaluation</label>
                </div>
                <select name="rating">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </div>
            <div class="mt-2">
                <input id="product_id" name="product_id" type="hidden" value="{{ $product->id }}" class="block w-full rounded-md border-0 py-1.5 text-gray-900 ring-2 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 pl-2 sm:text-sm sm:leading-6">
            </div>

            <div>
                <button type="submit" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Add</button>
            </div>
        </form>
    </div>
</div>
