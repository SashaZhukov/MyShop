<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Update Password') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __('Ensure your account is using a long, random password to stay secure.') }}
        </p>
    </header>

    <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('put')
        <div class="relative rounded-md rounded-t-none px-3 pb-1.5 pt-2.5 ring-1 ring-inset ring-gray-300 focus-within:z-10 focus-within:ring-2">
            <label class="block text-xs font-medium text-gray-900" for="update_password_current_password">Current Password</label>
            <input id="update_password_current_password" name="current_password" type="password" class="block w-full border-0 p-0 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" autocomplete="current-password">
            <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
        </div>

        <div class="relative rounded-md rounded-t-none px-3 pb-1.5 pt-2.5 ring-1 ring-inset ring-gray-300 focus-within:z-10 focus-within:ring-2">
            <label class="block text-xs font-medium text-gray-900" for="update_password_password">New Password</label>
            <input id="update_password_password" name="password" type="password" class="block w-full border-0 p-0 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" autocomplete="new-password">
            <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
        </div>

        <div class="relative rounded-md rounded-t-none px-3 pb-1.5 pt-2.5 ring-1 ring-inset ring-gray-300 focus-within:z-10 focus-within:ring-2">
            <label class="block text-xs font-medium text-gray-900" for="update_password_password_confirmation">Confirm Password</label>
            <input id="update_password_password_confirmation" name="password_confirmation" type="password" class="block w-full border-0 p-0 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" autocomplete="new-password">
            <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>

            @if (session('status') === 'password-updated')
                <p>Saved</p>
            @endif
        </div>
    </form>
</section>
