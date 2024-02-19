<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            Update your information
        </h2>
    </header>

    <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('patch')

            <div class="relative rounded-md rounded-b-none px-3 pb-1.5 pt-2.5 ring-1 ring-inset ring-gray-300 focus-within:z-10 focus-within:ring-2  ">
                <label for="name" class="block text-xs font-medium text-gray-900">Name</label>
                <input id="name" name="name" type="text" class="block w-full border-0 p-0 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" required autofocus autocomplete="name" value="{{ old('name', $user->name) }}">
            </div>

            <div class="relative rounded-md rounded-t-none px-3 pb-1.5 pt-2.5 ring-1 ring-inset ring-gray-300 focus-within:z-10 focus-within:ring-2">
                <label for="email" class="block text-xs font-medium text-gray-900">Email</label>
                <input type="email" name="email" id="email" class="block w-full border-0 p-0 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" value="{{ old('email', $user->email) }}">
            </div>

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                <div>
                    <p class="text-sm mt-2 text-gray-800">
                        Your email address is unverified.

                        <button form="send-verification" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                             Click here to re-send the verification email.
                        </button>
                    </p>

                    @if (session('status') === 'verification-link-sent')
                        <p class="mt-2 font-medium text-sm text-green-600">
                            A new verification link has been sent to your email address.
                        </p>
                    @endif
                </div>
            @endif
        </div>

        <div class="flex mt-4 items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>

            @if (session('status') === 'profile-updated')
                <p>Saved</p>
            @endif
        </div>
    </form>
</section>
