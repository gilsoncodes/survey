<div class="relative" x-data="{calendar: @entangle('calendar')}">
	<input	type="hidden"	name="dateHide"	wire:model.defer="dateHide"	>
	<div @click="calendar = !calendar" class=" {{ $this->calend }} text-left bg-white pl-9 cursor-pointer  w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-300">
		{{ $dateShow }}
	</div>
	<svg class="absolute  top-2 left-2 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="{{ $this->calendicon }}">
	  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
	</svg>

	<div class="bg-white absolute  top-10 left-0 z-20 border border-gray-300 outline-none ring ring-indigo-100 border-indigo-300"  @click.away="calendar = false " x-show="calendar" x-cloak >
		<div class="flex justify-between py-2">
			<div class="w-1/5 flex justify-center">
				@if ($hasPrevMonth)
					<span class="hover:bg-gray-300 px-4 cursor-pointer " wire:click="prevMonth">
								&lt;
					</span>
				@endif
			</div>

			<span>{{ __($monthArray[$monthNumber]) . " " . $year }}</span>

			<div class="w-1/5 flex justify-center" >
				@if ($hasNextMonth)
					<span class="hover:bg-gray-300 px-4 cursor-pointer " wire:click="nextMonth" >
						&gt;
					</span>
				@endif

			</div>

		</div>
		<div class="grid grid-cols-7 gap-1 pb-1">
			<div class="flex justify-center bg-gray-300">{{ __('Sun') }}</div>
			<div class="flex justify-center bg-gray-300">{{ __('Mon') }}</div>
			<div class="flex justify-center bg-gray-300">{{ __('Tue') }}</div>
			<div class="flex justify-center bg-gray-300">{{ __('Wed') }}</div>
			<div class="flex justify-center bg-gray-300">{{ __('Thu') }}</div>
			<div class="flex justify-center bg-gray-300">{{ __('Fri') }}</div>
			<div class="flex justify-center bg-gray-300">{{ __('Sat') }}</div>
			@for ($i=0; $i < $dayOfWeekRef; $i++)
			<div></div>
			@endfor
			@for ($j=1; $j <= $totalDays; $j++)
				@if ($availableDays[$j] == '')
					<div class="flex justify-center text-gray-400"
						wire:click="daySelected(0)"
					>{{ $j }}</div>
				@else
					@if ($dayRef==$j && $monthRef==$month && $yearRef==$year)
						<div class="flex justify-center bg-blue-300"
							wire:click="daySelected(0)"
						>{{ $j }}</div>
					@else
						<div class="flex justify-center hover:bg-gray-300  cursor-pointer"
									wire:click="daySelected({{ $j }})"
									>{{ $j }}</div>
					@endif
				@endif
			@endfor
		</div>
	</div>
	@error('dateShow')
	<p class="text-red-500 mt-1">@if($errorMessage) {{ $message }} @endif</p>
@enderror
	{{-- @error('dateMeeting')
		<p class="text-red-500 mt-1">@if($errorDate) {{ $message }} @endif</p>
	@enderror --}}
	{{-- @if ($dateError)
		<p class="text-red-500 mt-1">{{ $dateError }}</p>
	@endif --}}
	 <div class="mt-3 mb-4" >
			<div class="relative">
					<select
						class="{{ $this->clock }} cursor-pointer w-full pl-9  px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 dark:bg-gray-700 dark:text-white  dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500"
						name="timeSelection"
						wire:model="timeSelection"
						required
						oninvalid="this.setCustomValidity('{{ __('Please fill out this field') }}')"
						oninput="this.setCustomValidity('')"
						title=''
						>
						<option value="0">{{ __('Select Time') }}</option>
						{{-- @error('dateShow')
			 			 <p class="text-red-500 mt-1">@if($errorMessage) {{ $message }} @endif</p>
			 		 @enderror --}}
						@foreach ($timeShow as $timeOne)
							<option value="{{ $timeOne['id'] }}">{{ date('g:i A', strtotime($timeOne['timeSelected'])) }}</option>
						@endforeach
					</select>
					<svg class="absolute top-2 left-2 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="{{ $this->clockicon }}">
					  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
					</svg>
					@error('timeSelection')
					 <p class="text-red-500 mt-1">@if($errorMessage) {{ $message }} @endif</p>
				 @enderror
			</div>
	</div>
	@error('date') <!-- ????? -->
		<p class="text-red-500 mt-1">@if($errorDate) {{ $message }} @endif</p>
	@enderror
</div>
