<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Contact') }}
        </h2>
    </x-slot>
  <div class="py-10">
    @livewire('contact-form')
  </div>
  <div class="py-10">
    @livewire('appointment-form')
  </div>
</x-app-layout>
