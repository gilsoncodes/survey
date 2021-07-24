<x-guest-layout pagetitle="{{ __('Verify email') }}">
    <div class="footer-bottom">
      <div class="pt-14 gradient">
        <div class="container px-3 mx-auto flex flex-wrap flex-col md:flex-row items-center">
        <!--Left Col-->
        <div class="flex flex-col  justify-center w-full md:w-3/5 text-center">
          <div class="w-full md:w-1/2">
            <h1 class="my-3 text-3xl text-center font-semibold text-gray-700 dark:text-gray-200">{{ __('Virify Email') }}</h1>

            <div class="mb-4 text-sm text-gray-600">
                {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? Check Spam and Junk folder if you don\'t see on the inbox.  If you didn\'t receive the email, we will gladly send you another.') }}
            </div>

            @if (session('status') == 'verification-link-sent')
                <div class="mb-4 font-medium text-sm text-green-600 bg-white">
                    {{ __('A new verification link has been sent to the email address you provided during registration.') }}
                </div>
            @endif

            <div class="mt-4 flex items-center justify-between">
                <form method="POST" action="{{ route('verification.send') }}">
                    @csrf

                    <div>
                        <x-jet-button type="submit">
                            {{ __('Resend Verification Email') }}
                        </x-jet-button>
                    </div>
                </form>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900">
                        {{ __('Log Out') }}
                    </button>
                </form>
          </div>
        </div>
      </div>
        <!--Right Col-->
        <div class="w-full md:w-2/5 pb-4 flex flex-col">
          <img class="w-full mx-auto md:w-4/5  z-8" src="{{ asset('images/verify.png') }}" />

        </div>
      </div>
          {{-- <h1 class="my-3 text-3xl text-center font-semibold text-gray-700 dark:text-gray-200">{{ __('Virify Email') }}</h1>

          <div class="mb-4 text-sm text-gray-600">
              {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? Check Spam and Junk folder if you don\'t see on the inbox.  If you didn\'t receive the email, we will gladly send you another.') }}
          </div>

          @if (session('status') == 'verification-link-sent')
              <div class="mb-4 font-medium text-sm text-green-600">
                  {{ __('A new verification link has been sent to the email address you provided during registration.') }}
              </div>
          @endif

          <div class="mt-4 flex items-center justify-between">
              <form method="POST" action="{{ route('verification.send') }}">
                  @csrf

                  <div>
                      <x-jet-button type="submit">
                          {{ __('Resend Verification Email') }}
                      </x-jet-button>
                  </div>
              </form>

              <form method="POST" action="{{ route('logout') }}">
                  @csrf

                  <button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900">
                      {{ __('Log Out') }}
                  </button>
              </form>
        </div> --}}
    </div>
</x-guest-layout>
