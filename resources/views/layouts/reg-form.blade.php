<div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
    <div class="sm:mx-auto sm:w-full sm:max-w-sm">
        <a href="{{ route('home') }}"><img class="mx-auto h-10 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="Your Company"></a>
        <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Create your account</h2>
    </div>

    <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
        <form class="space-y-6" action="{{ route('register') }}" method="POST">
            @csrf
            <div>
                <label for="name" class="block text-sm font-medium leading-6 text-gray-900">Name</label>
                <div class="mt-2">
                    <input id="name" name="name" type="text" value="{{ old('name') }}" autofocus autocomplete="name" class="block w-full rounded-md border-0 py-1.5 text-gray-900  ring-2 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
                @error('name')
               <h2 class="mt-2.5 text-red-600" style="font-size: 14px">{{ $message }}</h2>
                @enderror
            </div>

            <div>
                <div class="flex items-center justify-between">
                    <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email</label>
                </div>
                <div class="mt-2">
                    <input id="email" name="email" type="email" value="{{ old('email') }}"  autocomplete="username" class="block w-full rounded-md border-0 py-1.5 text-gray-900 ring-2 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
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
                    <input id="password" name="password" type="password"  autocomplete="new-password" class="block w-full rounded-md border-0 py-1.5 text-gray-900 ring-2 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
                @error('password')
                <h2 class="mt-2.5 text-red-600" style="font-size: 14px">{{ $message }}</h2>
                @enderror
            </div>

            <div>
                <div class="flex items-center justify-between">
                    <label for="password_confirmation" class="block text-sm font-medium leading-6 text-gray-900">Confirm password</label>
                </div>
                <div class="mt-2">
                    <input id="password_confirmation" name="password_confirmation" type="password" autocomplete="new-password" class="block w-full rounded-md border-0 py-1.5 text-gray-900 ring-2 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
                @error('password_confirmation')
                <h2 class="mt-2.5 text-red-600" style="font-size: 14px">{{ $message }}</h2>
                @enderror
            </div>
            <div class="mt-2">
            <a href="{{ route('github.auth') }}"><button type="button" class="btn btn-dark">GitHub</button></a>
            </div>
            <div>
                <button type="submit" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Create</button>
            </div>
        </form>

    </div>
</div>
