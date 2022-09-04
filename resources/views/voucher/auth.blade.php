<x-guest-layout>
    <x-auth-voucher-card>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <p class="mb-4">
            Please enter the adddmission and token number on the voucher
            in the form below to begin with the adddmission process!
        </p>
        <form method="POST" action="{{ route('voucher.auth') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-auth-label for="addmission_number" :value="__('Addmission Number')" />

                <x-auth-input id="addmission_number" class="block mt-1 w-full" type="text" name="addmission_number"
                    :value="old('addmission_number')" required autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-auth-label for="token" :value="__('Token')" />

                <x-auth-input id="token" class="block mt-1 w-full" type="password" name="token" required
                    autocomplete="current-password" />
            </div>


            <div class="mt-4">
                <x-auth-button class="flex items-center justify-center text-center w-full">
                    {{ __('Submit') }}
                </x-auth-button>
            </div>
        </form>
    </x-auth-voucher-card>
</x-guest-layout>