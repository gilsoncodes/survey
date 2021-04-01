@props([
	'method' => 'POST',// 'method' = POST by default but it can be GET DELETE PATCH PUT
	'action' => ''
])
<form method="{{  $method ==='GET' ? 'GET' : 'POST' }}"
			wire:submit.prevent="submitForm" action="{{ $action }}" {{ $attributes }}>
			<!-- ?????? Some how laravel figure out submitForm is a function at 'app/Http/Livewire/ContactForm.php'-->
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
