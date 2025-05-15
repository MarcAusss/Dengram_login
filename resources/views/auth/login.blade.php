<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <x-validation-errors class="mb-4" />

        @session('status')
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ $value }}
            </div>
        @endsession

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <input id="email" class="bg-[#121212] text-white outline-none border-1 border-gray-400 w-full focus:!outline-none focus:!border-none placeholder:text-gray-500" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" placeholder="Email"/>
            </div>

            <div class="mt-4">
                <input id="password" class="bg-[#121212] text-white outline-none border-1 border-gray-400 w-full focus:!outline-none focus:!border-none placeholder:text-gray-500" type="password" name="password" required autocomplete="current-password" placeholder="Password"/>
            </div>
            <div class="mt-5 w-full">
                <button class="!w-full !text-center text-white bg-[#0069AD] border-1 border-gray-400 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 rounded-md px-4 py-2 text-sm font-semibold" type="button" >
                    {{ __('Log in') }}
                </button>
            </div>

            <div class="flex gap-4 mt-10 items-center">
                <hr class="w-1/2 border-gray-700">
                <h1 class="text-gray-300">OR</h1>
                <hr class="w-1/2 border-gray-700">
            </div>

            

            <div class="flex items-center justify-center mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-white hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif
            </div>

            <div class="mt-20 text-center ">
                <h1 class="text-white">
                    Don't have an account? 
                    <span>
                        <a href="{{route('register')}}" class="text-[#0069AD] hover:text-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                {{ __('Sign up') }}
                        </a>
                    </span>
                </h1>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>
