@component('mail::message')
Hello {{ ucwords($contact['name']) }},

{{ __('Thank you for reaching out!') }}


@component('mail::panel')
**You are very important to us, your information below will always remain private.**
@endcomponent
**Name:** {{ ucwords($contact['name']) }}

**Email:** {{ $contact['email'] }}

**Phone:** {{ $contact['phone'] }}

**Message:** {{ $contact['message'] }}

We will contact you as soon as we review your message.</p>

Sincerly,

<span style="border-bottom: 2px solid #ff8b00; padding-bottom: 3px; ">
The GAR Solutions Team
</span>

<p style="display:flex; align-items: center; margin: 3px 0 0; padding:0;   font-size: small;">
	<img src="{{ asset( 'images/globe.png' ) }}" width="15" height="15" alt="globe icon">
&nbsp;
<a href="https://www.garsolutions.com" style="color: #68c2ff; text-decoration: none;">
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
<a href="tel:+16175641345" style="color: #005fe4; text-decoration: none; font-size: ">
(617) 564 - 1345
</a>
</p>

@endcomponent
