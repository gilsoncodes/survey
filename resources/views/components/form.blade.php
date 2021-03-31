@props([
	'method' => 'POST',
	'action' => ''
])
<form method="{{  $method ==='GET' ? 'GET' : 'POST' }}"
			wire:submit.prevent="submitForm" action="{{ $action }}" {{ $attributes }}>

			@csrf

			@if (! in_array($method, ['GET', 'POST']))
				@method($method)
			@endif

			{{ $slot }}


			{{-- Instruction to use this component:
			**this helps to create forms elements**
			insert the code below the desired .blade.php
				<x-form method="GET or PATCH or PUT or DELETE"
								action="path"
								class="anyClass"
								anyAttribute="value"
				>

				</x-form> --}}
