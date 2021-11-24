<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <div class="d-flex justify-content-center">

                    <x-application-logo class="w-25" />
                </div>
            </a>
        </x-slot>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Email')" />
                <x-input id="email" class="" type="email" name="email" :value="old('email')" autofocus />
            </div>

            <!-- Password -->
            <div class="mt-3">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="" type="password" name="password"
                    autocomplete="current-password" />
            </div>

            <!-- Remember Me -->
            <div class="d-flex align-items-center justify-content-between mt-3">
                <div for="remember_me" class="form-check">
                    <input id="remember_me" type="checkbox" class="form-check-input" name="remember">
                    <label for="remember_me" class="form-check-label">{{ __('Remember me') }}</label>
                </div>

                @if (Route::has('password.request'))
                    <a class="text-decoration-none text-secondary" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif
            </div>

            <div class="d-flex align-items-center justify-content-center mt-3">

                <x-button class="btn-dark">
                    {{ __('Log in') }}
                </x-button>
            </div>
            <div class="mt-2 d-flex justify-content-center">
                <a class="text-decoration-none text-secondary" href="{{ route('register') }}">
                    {{ __("Don't Have an Account? Register Now") }}
                </a>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
