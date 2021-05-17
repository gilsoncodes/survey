<x-app-layout pagetitle="{{ __('Contact') }}">
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Contact') }}
        </h2>
    </x-slot> --}}
  <div class="">
    @livewire('contact-form')
  </div>
  <div id='appointment'>
    @livewire('appointment-form')
  </div>
</x-app-layout>
