<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight mt-16">
            {{ __('Cancel Appointment') }}
        </h2>
    </x-slot>
  @if ($appointment)
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                Cancel the appointment available
            </div>
        </div>
    </div>
  @else
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                the link is incorrect
            </div>
        </div>
    </div>
  @endif

</x-app-layout>
