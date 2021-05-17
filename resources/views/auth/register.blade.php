<x-guest-layout pagetitle="{{ __('Register') }}">
      <x-jet-authentication-card>
          <x-slot name="logo">
              {{-- <x-jet-authentication-card-logo /> --}}
          </x-slot>

          <h1 class="my-3 text-3xl text-center font-semibold text-gray-700 dark:text-gray-200">{{ __('Create an Account') }}</h1>

          <x-jet-validation-errors class="mb-4" />

          <form method="POST" action="{{ route('register', [ 'lang' => app()->getLocale()]) }}">
              @csrf

              <div>
                  <x-jet-label for="name" value="{{ __('Name') }}" />
                  <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
              </div>

                <input type="hidden" name="locale" value="{{ app()->getLocale() }}">

              <div class="mt-4">
                  <x-jet-label for="email" value="{{ __('Email') }}" />
                  <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
                  {{-- :value="old('email', time(). '@gmail.com')" --}}
              </div>
              <div class="mt-4">
                  <x-jet-label for="password" value="{{ __('Password') }}" />
                  <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password"  />
                  {{-- value="Aaaa!111" --}}
              </div>

              <div class="mt-4">
                  <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                  <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
                  {{-- value="Aaaa!111" --}}
              </div>

              <div class="mt-4">
                  <x-jet-label for="code" value="{{ __('Authorization Code') }}" />
                  <x-jet-input id="code" class="block mt-1 w-full" type="text" name="code" :value="old('code')"  />
                  {{-- , 'JobApplication' --}}
                  <div class="mt-2 text-xs text-center" >
                    <a href="{{ route('contact', [ 'lang' => app()->getLocale()]) }}" class="underline text-gray-600 hover:text-gray-900">
                      {{ __('Contact us') }}</a>
                    &nbsp;{{ __('to get an authorization code.') }}</div>
              </div>


              @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                  <div class="mt-4">
                      <x-jet-label for="terms">
                          <div class="flex items-center">
                              <x-jet-checkbox name="terms" id="terms"   />
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
      </x-jet-authentication-card>
</x-guest-layout>
