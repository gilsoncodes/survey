<div class="mb-6" x-data="{calendar: @entangle('calendar')}">
	<div @click="calendar = !calendar">
		<input	type="text"
						name="dateShow"
						wire:model.defer="dateShow"
						class="cursor-pointer hover:bg-gray-300 w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-300 "
						disabled>
	</div>
	<div class="border"  @click.away="calendar = false " x-show="calendar" >
		<div class="flex justify-between py-2">
			<div class="w-1/5 flex justify-center">
				@if ($hasPrevMonth)
					<span class="hover:bg-gray-300 px-4 cursor-pointer " wire:click="prevMonth">
								&lt;
					</span>
				@endif
			</div>

			<span>{{ $monthArray[$monthNumber] . " " . $year }}</span>

			<div class="w-1/5 flex justify-center" >
				@if ($hasNextMonth)
					<span class="hover:bg-gray-300 px-4 cursor-pointer " wire:click="nextMonth" >
						&gt;
					</span>
				@endif

			</div>

		</div>
		<div class="grid grid-cols-7 gap-1 pb-1">
			<div class="flex justify-center bg-gray-300">Sun</div>
			<div class="flex justify-center bg-gray-300">Mon</div>
			<div class="flex justify-center bg-gray-300">Tue</div>
			<div class="flex justify-center bg-gray-300">Wed</div>
			<div class="flex justify-center bg-gray-300">Thu</div>
			<div class="flex justify-center bg-gray-300">Fri</div>
			<div class="flex justify-center bg-gray-300">Sat</div>
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
	@error('dateMeeting')
		<p class="text-red-500 mt-1">@if($errorDate) {{ $message }} @endif</p>
	@enderror
	@if ($dateError)
		<p class="text-red-500 mt-1">{{ $dateError }}</p>
	@endif
	 <div class="mb-6" >
			<div>
					<select
						class=" cursor-pointer w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 dark:bg-gray-700 dark:text-white  dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500"
						name="timeSelection"
						wire:model="timeSelection"
						>
						<option value="0">Select Time</option>
						@foreach ($timeShow as $timeOne)
							<option value="{{ $timeOne['id'] }}">{{ date('g:i A', strtotime($timeOne['timeSelected'])) }}</option>
						@endforeach
					</select>
			</div>
	</div>
	@error('date') <!-- ????? -->
		<p class="text-red-500 mt-1">@if($errorDate) {{ $message }} @endif</p>
	@enderror
</div>
