<x-guest-layout pagetitle="{{ __('Cancelar Appointment') }}">
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight mt-16">
           Appointment
        </h2>
    </x-slot> --}}
    <div class="footer-bottom">
    <div class="pt-14 gradient">
        <div class="container px-3 mx-auto flex flex-wrap flex-col md:flex-row items-center">
        <!--Left Col-->
        <div class="flex flex-col  justify-center w-full md:w-3/5 text-left">
          <div class="w-full md:w-1/2 mb-6 md:mb-0">
            <h1 class="my-3 text-3xl text-center font-semibold text-gray-700 dark:text-gray-200">{{ __('Your Appointment') }}</h1>
            @livewire('cancel-appointment')
          </div>
      </div>
        <!--Right Col-->
        <div class="w-full md:w-2/5 pb-4 flex flex-col">
          <img class="w-full mx-auto md:w-4/5  z-8" src="{{ asset('images/appointment.png') }}" />
        </div>
      </div>
    </div>
  </div>

</x-guest-layout>
