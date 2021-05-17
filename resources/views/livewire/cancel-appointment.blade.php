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
        <div>
            <button wire:click="cancelAppointment('{{ $appointment[0]->id }}','{{ $appointment[0]->reference }}')"
                    class="px-4 py-2 border border-transparent text-base leading-6 font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:border-indigo-700 active:bg-indigo-700 transition ease-in-out duration-150"
                    >
              {{ __('Cancel Appointment') }}
            </button>
        </div>
  @else
    <p>{{ __('Your appointment') }} '{{ $dateENorPT }} {{ __('at') }} {{ $time }}' {{ __('has been canceled.') }}</p>
    <p>{{ __("click the button below if you would like to reschedule it.") }}</p>
    <div class="hidden md:-my-px md:ml-7 md:flex"> <!-- Make an Apppointment -->
        <a class="inline-flex items-center text-center font-semibold h-12 px-4 my-auto text-sm text-white transition-colors duration-150 bg-yellow-500 rounded-xl focus:shadow-outline hover:bg-yellow-600"
        href="{{ route('contact', [ 'lang' => app()->getLocale()]) }}#appointment">
            {!! __('Request an <br> Appointment') !!}
        </a>
    </div>


  @endif


</div>
