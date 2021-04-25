<div class="mb-6" x-data="{calendar: @entangle('calendar')}">
	<div @click="calendar = !calendar">
		<label for="dateMeeting" class="block mb-2 text-sm text-gray-600 dark:text-gray-400">Date</label>
		<input	type="text"
						name="date"
						wire:model="dateShow"
						class="cursor-pointer hover:bg-gray-300 w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-300 "
						disabled>
	</div>
	<div class="border"  @click.away="calendar = false " x-show="calendar" >
		<div class="flex justify-between py-2">
			<div class="w-1/5 flex justify-center">
				<span class="hover:bg-gray-300 px-4 cursor-pointer ">
							&lt;
				</span>
			</div>

			<span>{{ $monthArray[$this->monthNumber] . " " . $year }}</span>

			<div class="w-1/5 flex justify-center">
				<span class="hover:bg-gray-300 px-4 cursor-pointer ">
					&gt;
				</span>
			</div>

		</div>
		<div class="grid grid-cols-7 gap-1">
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
			@php
				$w = 0;
			@endphp

			@for ($j=1; $j <= $totalDays; $j++)
				@php
					$dayStatus = 'notAvailable';
				@endphp
				@for ($k=$w; $k < count($availableDays); $k++)
					@if ($availableDays[$k] == $j)
						@php
							$dayStatus = 'allowScheduling';
							$w++;
						@endphp
						@break($k == count($availableDays))
					@endif

				@endfor
				@if ($dayStatus == 'allowScheduling')
					@if ($dayRef==$j && $monthRef==$month && $yearRef==$year)
						<div class="flex justify-center bg-blue-300">{{ $j }}</div>
					@else
						<div class="flex justify-center hover:bg-gray-300  cursor-pointer"
									wire:click="daySelected({{ $j }})"
									>{{ $j }}</div>
					@endif
				@else
					<div class="flex justify-center text-gray-400">{{ $j }}</div>
				@endif
			@endfor
		</div>
	</div>
	@error('dateMeeting')
		<p class="text-red-500 mt-1">@if($errorDate) {{ $message }} @endif</p>
	@enderror
	 <div class="mb-6" >
			<label for="time" class="block mb-2 text-sm text-gray-600 dark:text-gray-400">Select time</label>
			<div class="flex">
					<div>
							<select
								class="border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 dark:bg-gray-700 dark:text-white  dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500"
								wire:model="hourOption"
								wire:click="hourChange($event.target.value)"
								>
								@foreach ($timeShow as $timeOne)
									<option value="{{ $timeOne['id'] }}">{{ $timeOne['hourSelected'] }}</option>
								@endforeach
							</select>
					</div>
					<span class="px-2 py-2" >:</span>
					<div>
							<select
								class="border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 dark:bg-gray-700 dark:text-white  dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500"
								wire:model="minuteOption"
								>
								@foreach ($minuteShow as $minuteOne)
									<option value="{{ $minuteOne['minuteSelected'] }}">{{ $minuteOne['minuteSelected'] }}</option>
								@endforeach
							</select>
					</div>
			</div>
	</div>
	@error('date') <!-- ????? -->
		<p class="text-red-500 mt-1">@if($errorDate) {{ $message }} @endif</p>
	@enderror
</div>

{{-- @push('calendar')
    <script>
        window.calendar = () => {
            return {
								selectedHour: @entangle('selectedHour'),
								hours: [ '1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12' ],
								selectedAmPm: @entangle('selectedAmPm'),
								AmPms: [ 'AM', 'PM' ],
								selectedMinute: @entangle('selectedMinute'),
								minutes: [ '00', '15', '30', '45' ],
								dateShow: @entangle('dateShow'),
								calendar: false,
								weekref: '',
								dayref: '',
								monthref: '',
								month: '',
								yearref: '',
								year: '',
								dayWeeks: ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'],
								months: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
								emptysN: [],
								daysN: '',
								upweek: '',
								downweek: '',
								prevM: 0,
								nextM: 2,
								selectDay(Nday){
									this.selectedHour = 1;
									this.dayref = Nday;
									this.monthref = this.month;
									this.yearref = this.year;
									this.weekref = Nday + this.emptysN.length - 1;
									if ((Nday + this.emptysN.length) > 7) {
										let remaiderAdjsted =((Nday + this.emptysN.length) % 7) - 1;
										this.weekref = 6;
										if (remaiderAdjsted >= 0) {
											this.weekref = remaiderAdjsted;
										}
									}
									this.dateShow = this.dayWeeks[this.weekref] + " " + this.months[this.monthref] + " " + this.dayref + ", " + this.yearref;
									this.calendar= false;
								},
                init() {
									let dt = new Date();
									this.weekref = dt.getDay(); //sunday index 0
									this.dayref = dt.getDate();
									this.monthref = dt.getMonth(); // january index 0
									this.yearref = dt.getFullYear();
									this.dateShow = this.dayWeeks[this.weekref] + " " + this.months[this.monthref] + " " + this.dayref + ", " + this.yearref;
									this.month = this.monthref;
									this.year = this.yearref;
									//this.monthYearShow = this.months[this.month] +" " + this.year;
									this.monthDays();


									let weekday1 = this.weekref;
									for (var i = this.dayref; i > 1 ; i--) {
										if (weekday1 == 0) {
											weekday1 = 6;
										} else {
											weekday1--;
										}
									}

									for (var i = 0; i < weekday1; i++) {
										this.emptysN.push('');
									}
									this.upweek = weekday1 - 1;
									if (this.upweek < 0) {
										this.upweek = 6;
									}

									let weekdayTDs = this.weekref;
									for (var i = this.dayref; i < this.daysN ; i++) {
										if (weekdayTDs == 6) {
											weekdayTDs = 0;
										} else {
											weekdayTDs++;
										}
									}

									this.downweek = weekdayTDs + 1;
									if (this.downweek > 6) {
										this.downweek = 0;
									}

                },
								prevMonth(){
									this.prevM--;
									this.nextM++;
									this.month--;
									if (this.month < 0) {
										this.month = 11;
										this.year--;
									}
									//this.monthYearShow = this.months[this.month] +" " + this.year;

									this.monthDays();
									//alert('day' + this.daysN + 'week:' + this.upweek);
									this.downweek = this.upweek + 1;

									let weekday1 = this.upweek;
									for (var i = this.daysN; i > 1  ; i--) {
										if (weekday1 == 0) {
											weekday1 = 6;
										} else {
											weekday1--;
										}
									}

									this.upweek = weekday1 - 1;
									if (this.upweek < 0) {
										this.upweek = 6;
									}

									this.emptysN = [];
									for (var i = 0; i < weekday1; i++) {
										this.emptysN.push('');
									}

								},
								nextMonth(){
									this.prevM++;
									this.nextM--;

									this.month++;
									if (this.month > 11) {
										this.month = 0;
										this.year++;
									}
									//this.monthYearShow = this.months[this.month] +" " + this.year;
									this.monthDays();

									this.upweek = this.downweek - 1;
									if (this.upweek < 0) {
										this.upweek = 6;
									}

									this.emptysN = [];
									for (var i = 0; i < this.downweek; i++) {
										this.emptysN.push('');
									}

									let weekdayTDN = this.downweek;
									for (var i = 1; i < this.daysN ; i++) {
										if (weekdayTDN == 6) {
											weekdayTDN = 0;
										} else {
											weekdayTDN++;
										}
									}

									this.downweek = weekdayTDN + 1;
									if (this.downweek > 6) {
										this.downweek = 0;
									}
								},
								monthDays(){
									if (this.month == 1) {
										this.daysN = 28;
									} else {
										if (this.month == 3 || this.month == 5 || this.month == 8 || this.month == 10) {
											this.daysN = 30;
										} else {
											this.daysN = 31;
										}
									}
								},
            };
        };
    </script>
@endpush --}}
