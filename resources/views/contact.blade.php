<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight mt-16">
            {{ __('Contact') }}
        </h2>
    </x-slot> --}}
  <div class="pt-16">
    @livewire('contact-form')
  </div>
  <div id='appointment'>
    @livewire('appointment-form')
  </div>
</x-app-layout>
