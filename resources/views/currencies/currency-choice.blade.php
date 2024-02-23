@extends('master')
<form method="post" action="{{ route('currencies.choice') }}">
    @csrf
    <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
            <ul>
                @foreach($currencies as $currency)
                    <div class="flex space-x-2 mb-2 items-center">
                        <input
                            type="radio"
                            id="currency_{{ $currency->id }}"
                            name="currency"
                            value="{{ $currency->id }}"
                        />
                        <label for="currency_{{ $currency->id }}" class="flex space-x-1 items-center">
                            <img src="{{ $currency->img }}">
                            <span class="">{{ $currency->name }}</span>
                        </label>
                    </div>
                @endforeach
            </ul>

            <div class="ml-3">
                <button type="submit">Save</button>
            </div>
        </div>
    </div>
</form>

