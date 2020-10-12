<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
           <!--  Logo here.. -->
        </x-slot>
        <div class="flex flex-col mt-4">
            <h1 class="text-2xl font-bold text-purple-700">Create Account</h1>
        </div>
        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="mt-4">
                <x-jet-input id="name" class="block mt-1 w-full" placeholder="Name" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-jet-input id="email" class="block mt-1 w-full" placeholder="Email" type="email" name="email" :value="old('email')" required />
            </div>

            <div class="mt-4">
                <x-jet-input id="password" class="block mt-1 w-full" placeholder="Password" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" placeholder="Confirm Password" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            <div class="flex flex-col items-end justify-end mt-4">
                <x-jet-button class="w-full justify-center bg-purple-700 capitalize text-sm my-2 font-bold hover:bg-purple-500 hover:text-black">
                    {{ __('Register') }}
                </x-jet-button>
            </div>
            <div class="text-xs text-center w-full my-5">
                {{ __('Already registered?') }}
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
