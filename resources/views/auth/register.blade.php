<x-guest-layout pagetitle="{{ __('Register') }}">
    <div class="footer-bottom">
  <div class="pt-14 gradient">
    <div class="container px-3 mx-auto flex flex-wrap flex-col md:flex-row items-center">
      <!--Left Col-->
      <div class="flex flex-col  justify-center w-full md:w-3/5 text-center">
        <div class="flex flex-col">
          <h1 class="my-3 text-3xl text-center font-semibold text-gray-700 dark:text-gray-200 mb-12">{{ __('Create an Account') }}</h1>

          <x-jet-validation-errors class="mb-4 bg-white" />

          <form method="POST" action="{{ route('register', [ 'lang' => app()->getLocale()]) }}" class="mb-12">
            @csrf
                <div class="flex flex-col md:flex-row">
                  {{-- left fields --}}
                    <div class="flex flex-col w-full md:w-1/2">
                      <div class="relative">
                          <x-jet-input id="name" class="block mt-1 w-full pl-9" placeholder="{{ __('Name') }}" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                          <svg class="absolute top-2 left-2 w-6 h-6" fill="none" stroke="#000000" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                      </div>
                      <input type="hidden" name="locale" value="{{ app()->getLocale() }}">

                      <div class="mt-4 relative">
                          <x-jet-input id="email" class="block mt-1 w-full pl-9" placeholder="{{ __('Email') }}" type="email" name="email" :value="old('email')" required />
                          <svg class="absolute top-2 left-2 w-6 h-6" fill="none" stroke="#000000" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207"></path></svg>
                      </div>
                      <div class="mt-4 relative">
                          <x-jet-input id="password" class="block mt-1 w-full pl-9" placeholder="{{ __('Password') }}" type="password" name="password" required autocomplete="new-password"  />
                          <svg class="absolute top-2 left-2 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="#000000"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 7a2 2 0 012 2m4 0a6 6 0 01-7.743 5.743L11 17H9v2H7v2H4a1 1 0 01-1-1v-2.586a1 1 0 01.293-.707l5.964-5.964A6 6 0 1121 9z" /></svg>
                          {{-- value="Aaaa!111" --}}
                      </div>
                    </div>
                    {{-- right fields --}}
                    <div class="flex flex-col w-full md:w-1/2">
                      <div class="relative">
                          <x-jet-input id="password_confirmation" class="block mt-6 md:mt-1 w-full pl-9 ml-0 md:ml-4" placeholder="{{ __('Confirm Password') }}" type="password" name="password_confirmation" required autocomplete="new-password" />
                          <svg class="absolute top-8 md:top-2 left-2 md:left-6 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="#000000"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 7a2 2 0 012 2m4 0a6 6 0 01-7.743 5.743L11 17H9v2H7v2H4a1 1 0 01-1-1v-2.586a1 1 0 01.293-.707l5.964-5.964A6 6 0 1121 9z" /></svg>
                          {{-- value="Aaaa!111" --}}
                      </div>
                      <div class="mt-4 relative">
                          <x-jet-input id="code" class="block mt-1 w-full pl-9 ml-0 md:ml-4" placeholder="{{ __('Authorization Code') }}" type="text" name="code" :value="old('code')"  />
                          <svg class="absolute top-2 left-2 md:left-6 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="#000000"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" /></svg>
                          {{-- , 'JobApplication' --}}
                          <div class="mt-2 text-xs text-center" >
                            <a href="{{ route('contact', [ 'lang' => app()->getLocale()]) }}" class="underline text-gray-600 hover:text-gray-900">
                              {{ __('Contact us') }}</a>
                            &nbsp;{{ __('to get an authorization code.') }}</div>
                      </div>
                    </div>
                </div>
                @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                    <div class="mt-4 hidden">
                        <x-jet-label for="terms">
                            <div class="flex items-center">
                                <x-jet-checkbox name="terms" id="terms" checked/>
                                  {{-- checked --}}
                                <div class="ml-2">
                                    {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                            'terms_of_service' => '<a target="_blank" href="'.route('terms.show', [ 'lang' => app()->getLocale()]).'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                            'privacy_policy' => '<a target="_blank" href="'.route('policy.show', [ 'lang' => app()->getLocale()]).'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                    ]) !!}
                                </div>
                            </div>
                        </x-jet-label>
                    </div>
                @endif

                <div class="flex items-center justify-end mt-4">
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                        {{ __('Already registered?') }}
                    </a>

                    <x-jet-button class="ml-4">
                        {{ __('Register') }}
                    </x-jet-button>
                </div>
          </form>
        </div>
      </div>
      <!--Right Col-->
      <div class="w-full md:w-2/5 pb-4 flex flex-col">
        <img class="w-full mx-auto md:w-4/5  z-8" src="{{ asset('images/register.png') }}" />
      </div>
    </div>
  </div>
</div>
</x-guest-layout>
