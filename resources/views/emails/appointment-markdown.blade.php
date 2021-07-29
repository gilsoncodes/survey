@component('mail::message')
{{ $appointment['name'] }}, {{ __('thank you for scheduling an appointment.') }}

@component('mail::panel')
**{{ __('You are very important to us, your information below will always remain private.') }}**
@endcomponent
**{{ __('Name') }}:** {{ ucwords($appointment['name']) }}

**{{ __('Business Name') }}:** {{ $appointment['business'] }}

**Email:** {{ $appointment['email'] }}

**{{ __('Phone Number') }}:** {{ $appointment['phone'] }}

**{{ __('Message') }}:** {{ $appointment['message'] }}

**{{ __('Meeting') }}:**
@if ($appointment['selectedMeeting'] == '1')
Online (www.zoom.us)
@else
{{ __('At your business place') }}: ({{ $appointment['address'] }})
@endif

**{{ __('Date') }}:** {{ $dateMail }}

**{{ __('Time') }}:** {{ $timeMail }}

@if ($appointment['selectedMeeting'] == '1')
{{ __("You'll receive another email shortly with the instructions to access the zoom Meeting.") }}
@else
{{ __("We'll be visiting your place in the date and time you scheduled.") }}
@endif

@if ($appointment['selectedMeeting'] == '1')
{{ __('If you are unable to make it, please click the button below and cancel your appointment') }}
@else
{{ __('If you are unable to meet us at your restaurante, please click the button below and cancel your appointment') }}
@endif
@component('mail::button', ['url' => config('app.url') . '/' . app()->getLocale() . '/appointment?a=' . $appointment['id'] . '&r=' . $appointment['reference']])
{{ __('Cancel Appointment') }}
@endcomponent

{{ __('We are looking forward to speaking with you,') }}

<span style="border-bottom: 4px solid #ff8b00;  ">
{{ __('The GAR Solutions Team') }}
</span>

<p style="display:flex; align-items: center; margin: 3px 0 0; padding:0;   font-size: small;">
	<img src="{{ asset( 'images/globe.png' ) }}" width="15" height="15" alt="globe icon">
&nbsp;
<a href="https://www.garsolutions.com/{{ app()->getLocale() }}" style="color: #006fc2; text-decoration: none;">
www.garsolutions.com
</a>
</p>

<p style="display:flex; align-items: center; margin: 0; padding:0; font-size: small;">
	<img src="{{ asset( 'images/at.png' ) }}" width="15" height="15" alt="at icon">
&nbsp;
<a href="mailto:contact@garsolutions.com" style="color: #006fc2; text-decoration: none;">
contact@garsolutions.com
</a>
</p>

<p style="display:flex; align-items: center; margin: 0; padding:0;  font-size: small;">
	<img src="{{ asset( 'images/phone.png' ) }}" width="15" height="15" alt="phone icon">
&nbsp;
<a href="tel:+16175641345" style="color:  #006fc2; text-decoration: none; font-size: small;">
(617) 564 - 1345
</a>
</p>

@slot('subcopy')
@lang("If you want to cancel the appointment and you're having trouble clicking the 'Cancel Appointment' button, copy and paste the URL into your web browser:")<br>
 <span class="break-all"> <a href="{{ config('app.url') }}/{{ app()->getLocale() }}/appointment?a={{ $appointment['id'] }}&r={{ $appointment['reference']}}">{{ config('app.url') }}/{{ app()->getLocale() }}/appointment?a={{ $appointment['id'] }}&r={{ $appointment['reference']}}</a> </span>
@endslot
@endcomponent
