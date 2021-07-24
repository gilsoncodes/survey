<x-guest-layout pagetitle="{{ __('Two factor challenge') }}">
    <div class="footer-bottom">
        <div class="pt-14 gradient">
            <div class="container px-3 mx-auto flex flex-wrap flex-col md:flex-row items-center">
                <!--Left Col-->
                <div class="flex flex-col  justify-center w-full md:w-3/5 text-center">
                    <div class="w-full md:w-1/2">
                        <h1 class="my-3 text-3xl text-center font-semibold text-gray-700 dark:text-gray-200">Two Factor Challenge</h1>

                        <div x-data="{ recovery: false }">
                            <div class="mb-4 text-sm text-gray-600" x-show="! recovery">
                                {{ __('Please confirm access to your account by entering the authentication code provided by your authenticator application.') }}
                            </div>

                            <div class="mb-4 text-sm text-gray-600" x-show="recovery">
                                {{ __('Please confirm access to your account by entering one of your emergency recovery codes.') }}
                            </div>

                            <x-jet-validation-errors class="mb-4 bg-white" />

                            <form method="POST" action="{{ route('two-factor.login') }}">
                                @csrf

                                <div class="mt-4 relative" x-show="! recovery">
                                    <x-jet-input id="code" class="block mt-1 w-full pl-9" placeholder="{{ __('Code') }}" type="text" inputmode="numeric" name="code" autofocus x-ref="code" autocomplete="one-time-code" />
                                    <svg class="absolute top-2 left-2 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="#000000">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                         d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
                                    </svg>
                                </div>

                                <div class="mt-4 relative" x-show="recovery">
                                    <x-jet-input id="recovery_code" class="block mt-1 w-full pl-9" placeholder="{{ __('Recovery Code') }}" type="text" name="recovery_code" x-ref="recovery_code" autocomplete="one-time-code" />
                                    <svg class="absolute top-2 left-2 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="#000000">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                         d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
                                    </svg>
                                </div>

                                <div class="flex items-center justify-end mt-4">
                                    <button type="button" class="text-sm text-gray-600 hover:text-gray-900 underline cursor-pointer" x-show="! recovery" x-on:click="
                                          recovery = true;
                                          $nextTick(() => { $refs.recovery_code.focus() })
                                      ">
                                        {{ __('Use a recovery code') }}
                                    </button>

                                    <button type="button" class="text-sm text-gray-600 hover:text-gray-900 underline cursor-pointer" x-show="recovery" x-on:click="
                                          recovery = false;
                                          $nextTick(() => { $refs.code.focus() })
                                      ">
                                        {{ __('Use an authentication code') }}
                                    </button>

                                    <x-jet-button class="ml-4">
                                        {{ __('Log in') }}
                                    </x-jet-button>
                                </div>
                            </form>
                        </div>
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
