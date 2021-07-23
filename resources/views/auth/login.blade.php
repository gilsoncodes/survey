<x-guest-layout pagetitle="{{ __('Log In') }}">
  <div class="footer-bottom">
  <div class="pt-14 gradient">
      <div class="container px-3 mx-auto flex flex-wrap flex-col md:flex-row items-center">
      <!--Left Col-->
      <div class="flex flex-col  justify-center w-full md:w-3/5 text-center">
        <div class="w-full md:w-1/2">
        <h1 class="my-3 text-3xl text-center font-semibold text-gray-700 dark:text-gray-200">{{ __('Log In') }}</h1>
        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif
        <form method="POST" action="{{ route('login', [ 'lang' => app()->getLocale()]) }}">
            @csrf

            <div class="relative">
                <x-jet-input class="block mt-1 w-full pl-9" placeholder="Email" type="email" name="email" :value="old('email')" required autofocus />
                <svg class="absolute top-2 left-2 w-6 h-6" fill="none" stroke="#000000" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207"></path></svg>
            </div>

            <div class="mt-4 relative">
                <x-jet-input class="block mt-1 w-full pl-9" placeholder="Password" type="password" name="password" required autocomplete="current-password" />
                <svg class="absolute top-2 left-2 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="#000000"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 7a2 2 0 012 2m4 0a6 6 0 01-7.743 5.743L11 17H9v2H7v2H4a1 1 0 01-1-1v-2.586a1 1 0 01.293-.707l5.964-5.964A6 6 0 1121 9z" /></svg>
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request', [ 'lang' => app()->getLocale()]) }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-jet-button class="ml-4">
                    {{ __('Log in') }}
                </x-jet-button>
            </div>
            <div class="flex items-center justify-center mt-4 ">
              <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('register', [ 'lang' => app()->getLocale()]) }}">
                  {{ __('Create an Account') }}
              </a>
            </div>
        </form>
      </div>
    </div>
      <!--Right Col-->
      <div class="w-full md:w-2/5 pb-4 flex flex-col">
        <img class="w-full mx-auto md:w-4/5  z-8" src="{{ asset('images/acess.png') }}" />

      </div>
    </div>
  </div>
</div>
    {{-- <x-jet-authentication-card>
        {-- <x-slot name="logo">
             <x-jet-authentication-card-logo />
        </x-slot> --}

        <h1 class="my-3 text-3xl text-center font-semibold text-gray-700 dark:text-gray-200">{{ __('Log In') }}</h1>


        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login', [ 'lang' => app()->getLocale()]) }}">
            @csrf

            <div>
                <x-jet-label for="email" value="Email" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request', [ 'lang' => app()->getLocale()]) }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-jet-button class="ml-4">
                    {{ __('Log in') }}
                </x-jet-button>
            </div>
            <div class="flex items-center justify-center mt-4 ">
              <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('register', [ 'lang' => app()->getLocale()]) }}">
                  {{ __('Create an Account') }}
              </a>
            </div>
        </form>
    </x-jet-authentication-card> --}}
</x-guest-layout>
