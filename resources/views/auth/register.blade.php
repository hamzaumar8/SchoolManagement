<x-guest-layout>
    <x-auth-card>

        <h3 class="mb-4 pt-2 text-center text-2xl font-bold text-gray-700">
            {{ __('Set Your Password') }}
        </h3>
        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('staff.register') }}">
            @csrf

            <!-- Register Token -->
            <input type="hidden" name="id" value="{{ $staff->id }}">

            <!-- Name -->
            <div>
                <x-auth-label for="name" :value="__('Name')" />

                <x-auth-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required
                    autofocus value="{{$staff->full_name}}" />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-auth-label for="email" :value="__('Email')" />

                <x-auth-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                    value="{{$staff->email}}" required readonly disabled />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-auth-label for="password" :value="__('Password')" />

                <x-auth-input id="password" class="block mt-1 w-full" type="password" name="password" required
                    autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-auth-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-auth-input id="password_confirmation" class="block mt-1 w-full" type="password"
                    name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-auth-button class="ml-4">
                    {{ __('Register') }}
                </x-auth-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>