<div>
  <p>{{ __('Hi') }} {{ $appointment[0]->name }},</p>
  @if ($hasAppointment)
    <p>{{ __('This is your appointment information:') }}</p>
    <p><strong>{{ __('Business Name') }}</strong>: {{ $appointment[0]['business'] }}</p>
    <p><strong>Email</strong>: {{ $appointment[0]['email'] }}</p>
    <p><strong>{{ __('Phone Number') }}</strong>: {{ $appointment[0]['phone'] }}</p>
    <p><strong>{{ __('Message') }}</strong>: {{ $appointment[0]['message'] }}</p>
    <p><strong>{{ __('Meeting') }}</strong>:
      @if ($appointment[0]['selectedMeeting'] == '1')
        Online (www.zoom.us)
      @else
        {{ __('At your business place') }}: ({{ $appointment[0]['address'] }})
      @endif
    </p>
    <p><strong>{{ __('Date') }}</strong>: {{ $dateENorPT }}</p>
    <p><strong>{{ __('Time') }}</strong>: {{ $time }}</p>
        <div class="mt-8 mb-8 md:mb-12">
            <button wire:click="cancelAppointment('{{ $appointment[0]->id }}','{{ $appointment[0]->reference }}')"
                    class=" bg-white text-gray-800 font-bold rounded-full mx-auto py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out"
                    >
              {{ __('Cancel Appointment') }}
            </button>
        </div>

  @else
    <p>{{ __('Your appointment') }} '{{ $dateENorPT }} {{ __('at') }} {{ $time }}' {{ __('has been canceled.') }}</p>
    <p class="mb-12">{{ __("click the button below if you would like to reschedule it.") }}</p>
    <div class="hidden md:-my-px md:ml-7 md:flex"> <!-- Make an Apppointment -->
      <a href="{{ route('contact', [ 'lang' => app()->getLocale()]) }}#consultation" class="z-10 mx-auto bg-white text-gray-800 font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
        {{ __('Request a Free Consultation') }}
      </a>
    </div>


  @endif


</div>
