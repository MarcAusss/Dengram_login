<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <x-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <input id="name" class="bg-[#121212] text-white outline-none border-1 border-gray-400 w-full focus:!outline-none focus:!border-none placeholder:text-gray-500" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" placeholder="Full name"/>
            </div>

            <div class="mt-4">
                <input id="email" class="bg-[#121212] text-white outline-none border-1 border-gray-400 w-full focus:!outline-none focus:!border-none placeholder:text-gray-500" type="email" name="email" :value="old('email')" required autocomplete="username" placeholder="email"/>
            </div>

            <div class="mt-4">
                <input id="password" class="bg-[#121212] text-white outline-none border-1 border-gray-400 w-full focus:!outline-none focus:!border-none placeholder:text-gray-500" type="password" name="password" required autocomplete="new-password" placeholder="Password"/>
            </div>

            <div class="mt-4">
                <input id="password_confirmation" class="bg-[#121212] text-white outline-none border-1 border-gray-400 w-full focus:!outline-none focus:!border-none placeholder:text-gray-500" type="password" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm password"/>
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-label for="terms">
                        <div class="flex items-center">
                            <x-checkbox name="terms" id="terms" required />

                            <div class="ms-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-label>
                </div>
            @endif

            <div class="flex items-center justify-center mt-4">
                <button class="w-full !text-center text-white bg-[#0069AD] border-1 border-gray-400 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 rounded-md px-4 py-2 text-sm font-semibold">
                    {{ __('Register') }}
                </button>
            </div>

            <div class="">
                
            </div>
            <div class="mt-20 text-center ">
                <h1 class="text-white">
                     {{ __('Already registered?') }}
                    <span>
                        <a class="text-[#0069AD] hover:text-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                            {{ __('Login') }}
                        </a>
                    </span>
                </h1>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>
