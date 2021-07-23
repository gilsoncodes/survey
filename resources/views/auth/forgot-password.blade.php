<x-guest-layout pagetitle="{{ __('Forgot Password') }}">
  <div class="footer-bottom">
  <div class="pt-14 gradient">
      <div class="container px-3 mx-auto flex flex-wrap flex-col md:flex-row items-center">
      <!--Left Col-->
      <div class="flex flex-col  justify-center w-full md:w-3/5 text-center">
        <div class="w-full md:w-1/2">
          <h1 class="my-3 text-3xl text-center font-semibold text-gray-700 dark:text-gray-200">{{ __('Forgot Password') }}</h1>

          <div class="mb-4 text-sm text-gray-600">
              {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
          </div>

          @if (session('status'))
              <div class="mb-4 font-medium text-sm text-green-600">
                  {{ session('status') }}
              </div>
          @endif

          <x-jet-validation-errors class="mb-4" />

          <form method="POST" action="{{ route('password.email', [ 'lang' => app()->getLocale()]) }}">
              @csrf

              <div class="block relative">
                  <x-jet-input id="email" class="block mt-1 w-full pl-9" placeholder="Email" type="email" name="email" :value="old('email')" required autofocus />
                  <svg class="absolute top-2 left-2 w-6 h-6" fill="none" stroke="#000000" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207"></path></svg>
              </div>

              <div class="flex items-center justify-end mt-4">
                  <x-jet-button>
                      {{ __('Email Password Reset Link') }}
                  </x-jet-button>
              </div>
          </form>
        </div>
    </div>
      <!--Right Col-->
      <div class="w-full md:w-2/5 pb-4 flex flex-col">
        <img class="w-full mx-auto md:w-4/5  z-8" src="{{ asset('images/forgot.png') }}" />

      </div>
    </div>
  </div>
</div>
</x-guest-layout>
