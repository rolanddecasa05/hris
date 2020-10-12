<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <!-- Logo container -->
        </x-slot>
        <div class="flex flex-col mt-4">
            <h1 class="text-2xl font-bold text-purple-700">Welcome to Recovery App</h1>
            <p class="text-sm text-gray-400 mt-4 mb-4">Sign in to your account.</p>
        </div>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="mt-4">
                <x-jet-input id="email" class="block mt-1 w-full" placeholder="Email" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-input id="password" class="block mt-1 w-full" placeholder="Password" type="password" name="password" required autocomplete="current-password" />
            </div>

            <!-- <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <input id="remember_me" type="checkbox" class="form-checkbox" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div> -->

            <div class="flex flex-col items-end justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="text-sm text-gray-400 my-2 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif
                
                <x-jet-button class="w-full justify-center bg-purple-700 capitalize text-sm my-2 font-bold hover:bg-purple-500 hover:text-black">
                    {{ __('Sign In') }}
                </x-jet-button>
            </div>
            <div class="text-xs text-center w-full my-5">
                Don't have an account?
                <a href="{{ route('register') }}" class="text-gray-700 font-bold">Sign Up</a>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
