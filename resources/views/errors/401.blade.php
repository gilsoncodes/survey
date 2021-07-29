<x-app-layout pagetitle="{{ __('Unauthorized') }}">
  <div class="footer-bottom">
      <div class="pt-14 gradient">
          <div class="container px-3 mx-auto flex flex-wrap flex-col md:flex-row items-center">
              <!--Left Col-->
              <div class="flex flex-col  justify-center w-full md:w-3/5 text-center">
                  <div class="w-full md:w-1/2 mb-6 md:mb-0">
                      <h1 class="mb-12 text-3xl text-center font-semibold text-gray-700 dark:text-gray-200">{{ __('Page Unauthorized') }}</h1>


                  </div>
              </div>
              <!--Right Col-->
              <div class="w-full md:w-2/5 pb-4 flex flex-col">
                  <img class="w-full mx-auto md:w-4/5  z-8" src="{{ asset('images/unauthorized.png') }}" />
              </div>
          </div>
      </div>
  </div>
  {{-- <div class="pt-16  bg-gray-100">
      <div class="min-h-screen flex flex-col items-center pt-6 sm:pt-0">
          <div>
              {-- <x-jet-authentication-card-logo /> --}
          </div>

          <div class="w-full sm:max-w-2xl mt-6 p-6 bg-white shadow-md overflow-hidden sm:rounded-lg prose">
              <h1> Page Unauthorized.</h1>
              <p></p>
          </div>
      </div>
  </div> --}}
</x-app-layout>
