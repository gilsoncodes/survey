@component('mail::message')
{{ __('Hello') }} {{ ucwords($contact['name']) }},

{{ __('Thank you for reaching out!') }}


@component('mail::panel')
**{{ __('You are very important to us, your information below will always remain private.') }}**
@endcomponent
**{{ __('Name') }}:** {{ ucwords($contact['name']) }}

**Email:** {{ $contact['email'] }}

**{{ __('Phone Number') }}:** {{ $contact['phone'] }}

**{{ __('Message') }}:** {{ $contact['message'] }}

{{ __('We will contact you as soon as we review your message.') }}</p>

{{ __('Sincerely,') }}

<span style="border-bottom: 4px solid #ff8b00;   ">
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
<a href="tel:+16175641345" style="color:  #006fc2; text-decoration: none; font-size: small; ">
(617) 564 - 1345
</a>
</p>

@endcomponent
