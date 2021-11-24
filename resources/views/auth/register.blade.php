<x-guest-layout>
    <x-slot name="title">Register</x-slot>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <div class="d-flex justify-content-center">
                    <x-application-logo class="w-25 " />
                </div>
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-3" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Name')" />

                <x-input id="name" class="" type="text" name="name" :value="old('name')" autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-3">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="" type="email" name="email" :value="old('email')" />
            </div>

            <!-- Password -->
            <div class="mt-3">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="" type="password" name="password"
                    autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-3">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="" type="password"
                    name="password_confirmation" />
            </div>

            <div class="mt-3 d-flex align-items-center justify-content-between">
                <a class="text-decoration-none text-secondary" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="btn-dark">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
