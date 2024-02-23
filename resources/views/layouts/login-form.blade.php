<x-auth-session-status class="mb-4" :status="session('status')" />
<div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
    <div class="sm:mx-auto sm:w-full sm:max-w-sm">
        <a href="{{ route('home') }}"><img class="mx-auto h-10 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="Your Company"></a>
        <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Login your account</h2>
    </div>

    <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
        <form class="space-y-6" action="{{ route('login') }}" method="POST">
            @csrf


            <div>
                <div class="flex items-center justify-between">
                    <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email</label>
                </div>
                <div class="mt-2">
                    <input id="email" name="email" type="email" value="{{ old('email') }}"  autocomplete="username" class=" block w-full rounded-md border-0 py-1.5 text-gray-900  ring-2 ring-inset ring-gray-300 placeholder:text-gray-400 pl-2 focus:ring-2  sm:text-sm sm:leading-6">
                </div>
                @error('email')
                <h2 class="mt-2.5 text-red-600" style="font-size: 14px">{{ $message }}</h2>
                @enderror
            </div>

            <div>
                <div class="flex items-center justify-between">
                    <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Password</label>
                </div>
                <div class="mt-2">
                    <input id="password" name="password" type="password"  autocomplete="new-password" class="block w-full rounded-md border-0 py-1.5 text-gray-900 ring-2 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 pl-2 sm:text-sm sm:leading-6">
                </div>
                @error('password')
                <h2 class="mt-2.5 text-red-600" style="font-size: 14px">{{ $message }}</h2>
                @enderror
            </div>

            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    Forgot your password?
                </a>
            @endif
            <br>
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('register') }}">
                No account? Sign Up
            </a>

            <div>
                <button type="submit" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Log in</button>
            </div>
        </form>

    </div>
</div>

