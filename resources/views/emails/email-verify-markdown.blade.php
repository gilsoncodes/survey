@component('mail::message')
{{ __('Hello') }},

{{ __('Please click the button below to verify your email address.') }}<br>

@component('mail::button', ['url' => $url])
{{ __('Verify Email Address') }}
@endcomponent

{{ __('If you did not create an account, no further action is required.') }}


{{ __('Regards') }},

<span style="border-bottom: 2px solid #ff8b00; padding-bottom: 3px; margin-bottom: 17px; ">
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

@slot('subcopy')
@lang("If you’re having trouble clicking the 'Verify Email Address' button, copy and paste the URL below into your web browser:")<br>
 <span class="break-all"> <a href="{{ $url }}">{{ $url }}</a> </span>
@endslot

@endcomponent
