<x-app-layout pagetitle="{{ __('Page not found') }}">
  <div class="pt-16  bg-gray-100">
      <div class="min-h-screen flex flex-col items-center pt-6 sm:pt-0">
          <div>
              {{-- <x-jet-authentication-card-logo /> --}}
          </div>

          <div class="w-full sm:max-w-2xl mt-6 p-6 bg-white shadow-md overflow-hidden sm:rounded-lg prose">
              <h1> Page not Found!</h1>
              <p>Check the url.</p>
          </div>
      </div>
  </div>
</x-app-layout>
