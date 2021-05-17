<x-guest-layout pagetitle="{{ __('Cancelar Appointment') }}">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight mt-16">
           Appointment
        </h2>
    </x-slot>

    @livewire('cancel-appointment')
</x-guest-layout>
