<div class="flex items-center min-h-screen bg-gray-50 dark:bg-gray-900">
    <div class="container mx-auto">
        <div class="max-w-md mx-auto my-10 bg-white p-5 rounded-md shadow-sm">
            <div class="text-center">
                <h1 class="my-3 text-3xl font-semibold text-gray-700 dark:text-gray-200">{{ __('Request a Free Consultation') }}</h1>
                <p class="text-gray-900 dark:text-gray-400">{{  __("Let's meet in your restaurant or via Zoom. We'll show you how GAR Solutions can help your business. FREE consultation and NO obligations.") }}</p>
            </div>
            <div class="m-7">
              @if($hasDates)
                <form
                  wire:submit.prevent="submitForm">
                       <div class="relative mb-6">
                          <label for="name" class="block mb-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Name') }}</label>
                          <input wire:model="name"
                                type="text"
                                wire:click="errorName"
                                placeholder="John Doe"
                                class="w-full pl-9 px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 dark:bg-gray-700 dark:text-white dark:placeholder-gray-500 dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500" value="{{ old('name') }}"
                                required
                                oninvalid="this.setCustomValidity('{{ __('Please fill out this field') }}')"
                                oninput="this.setCustomValidity('')"
                                title=''
                                />
                                <svg class="absolute top-9 left-2 w-6 h-6" fill="none" stroke="{{ $this->nameicon }}" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                                @error('name')
                                  <p class="text-red-500 mt-1">@if($errorName) {{ $message }} @endif</p>
                                @enderror
                      </div>
                      <div class="relative mb-6">
                          <label for="business" class="block mb-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Business Name') }}</label>
                          <input wire:model="business"
                                type="text"
                                wire:click="errorBusiness"
                                name="business"
                                placeholder="Ongarizer Restaurant"
                                class="w-full pl-9 px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 dark:bg-gray-700 dark:text-white dark:placeholder-gray-500 dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500" value="{{ old('business') }}"
                                required
                                oninvalid="this.setCustomValidity('{{ __('Please fill out this field') }}')"
                                oninput="this.setCustomValidity('')"
                                title=''
                                />
                                <svg class=" absolute top-9 left-2 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="{{ $this->businessicon }}">
  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
</svg>
                                @error('business')
                                  <p class="text-red-500 mt-1">@if($errorBusiness) {{ $message }} @endif</p>
                                @enderror
                      </div>

                    <div class="mb-6 hidden">
                        <input wire:model.defer="extra" type="text" name="extra"  class="w-full" />
                    </div>
                    <div class="relative mb-6">
                        <label for="email" class="block mb-2 text-sm text-gray-600 dark:text-gray-400">Email</label>
                        <input wire:model="email"
                              type="email"
                              wire:click="errorEmail"
                              name="email"
                              placeholder="you@company.com"
                              class="w-full pl-9 px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 dark:bg-gray-700 dark:text-white dark:placeholder-gray-500 dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500"
                              value="{{ old('email') }}"
                              required
                              oninvalid="this.setCustomValidity('{{ __('Please enter a valid email') }}')"
                              oninput="setCustomValidity('')"
                              title=''
                              />
                              <svg class="absolute top-9 left-2 w-6 h-6" fill="none" stroke="{{ $this->emailicon }}" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207"></path></svg>

                              @error('email')
                                <p class="text-red-500 mt-1">@if($errorEmail) {{ $message }} @endif</p>
                              @enderror
                    </div>

                    <div class="relative mb-6">
                        <label for="phone" class="text-sm text-gray-600 dark:text-gray-400">{{ __('Phone Number') }}</label>
                        <input wire:model="phone"
                              type="text"
                              wire:click="errorPhone"
                              name="phone"
                              placeholder="+1 (555) 1234-567"
                              class="w-full pl-9 px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 dark:bg-gray-700 dark:text-white dark:placeholder-gray-500 dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500"
                              value="{{ old('phone') }}"
                              required
                              oninvalid="this.setCustomValidity('{{ __('Please fill out this field') }}')"
                              oninput="this.setCustomValidity('')"
                              title=''
                              />
                              <svg class="absolute top-8 left-2 w-6 h-6" fill="none" stroke="{{ $this->phoneicon }}" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>

                              @error('phone')
                                <p class="text-red-500 mt-1">@if($errorPhone) {{ $message }} @endif</p>
                              @enderror
                    </div>

                    <div class="mt-4">
                      <div class="mt-2"
                            x-data="{
                              lists: [
                                {	id: 1, name: '{{ __('Zoom meeting') }}' },
                                { id: 0, name: '{{ __('Visit our business') }}'}
                              ],
                               selectedMeeting: @entangle('selectedMeeting')
                            }">
                        <div class="flex justify-between mb-2">
                          <template  x-for="list in lists" :key="list.id">
                            <div class="inline-flex items-center">
                              <input x-model="selectedMeeting"
                              type="radio"
                              :value="list.id.toString()"
                              :id="list.name"

                              {{-- oninvalid="this.setCustomValidity('{{ __('Please fill out this field') }}')"
                              oninput="this.setCustomValidity('')"
                              title='' --}}
                              />
                              <label class="pl-2" :for="list.name" x-text="list.name"></label>
                            </div>
                          </template>

                        </div>
                        @error('selectedMeeting')
                          <p class="text-red-500 mt-1">@if($errorMeeting) {{ $message }} @endif</p>
                        @enderror
                        <div x-show="selectedMeeting == 0" x-cloak>
                          <div class="mb-2">
                              <label for="address" class="block mb-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Full Address') }}</label>
                              <input wire:model.defer="address"
                                    type="text"
                                    name="address"
                                    placeholder="125 Main Street, Watertown, MA 02472"
                                    class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 dark:bg-gray-700 dark:text-white dark:placeholder-gray-500 dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500"
                                    value="{{ old('address') }}"
                                    />
                          </div>
                        </div>
                      </div>
                    </div>
                    {{-- <x-datepicker /> <!-- using AlpineJS--> --}}
                     @livewire('datetimepicker')  <!-- using livewire -->
                     @error('dateShow')
         			 			 <p class="text-red-500 mt-1">@if($errorMessage) {{ $message }} @endif</p>
         			 		 @enderror
         						{{-- @foreach ($timeShow as $timeOne)
         							<option value="{{ $timeOne['id'] }}">{{ date('g:i A', strtotime($timeOne['timeSelected'])) }}</option>
         						@endforeach --}}
                    @error('timeSelection')
          					 <p class="text-red-500 mt-1">@if($errorMessage) {{ $message }} @endif</p>
          				 @enderror
                    <div class="mb-6">
                        <label for="message" class="block mb-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Comment') }}</label>
                        <textarea wire:model.defer="message"
                                 wire:click="errorMessage"
                                 rows="5"
                                 name="message"
                                 placeholder="{{ __('Optional') }}" class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 dark:bg-gray-700 dark:text-white dark:placeholder-gray-500 dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500"
                                 >
                                     {{ old('message') }}
                        </textarea>

                    </div>

                    @error('extra')
                      <p class="text-red-500  mt-1">
                        {{ __('Oops! Something went wrong. Please try again.') }}
                      </p>
                    @enderror
                    <div x-data="{show: false}"
                         x-show.transition.opacity.out.duration.5000ms="show"
                         x-cloak
                         x-init="@this.on('successRequest', () => { show = true; setTimeout(() => { show = false; }, 10000 )} )"
                         class=" flex justify-between rounded-md bg-green-50 p-4 mt-8"
                         >

                      <span>{!! __('Your request has been received.<br> We sent an email to') !!} <strong>{{ $email2 }}</strong>.
                       {{ __("Check the spam or junk folder if you don't see it in the inbox.") }}</span>
                      <span @click="show = false" class="cursor-pointer px-2" >&times;</span>
                    </div>
                    {{-- @if ($errors->any())
                       @foreach ($errors->all() as $error)
                           <div>{{$error}}</div>
                       @endforeach
                   @endif --}}
                    <div class="mb-6">
                        <button type="submit" class="inline-flex items-center px-4 py-2 border border-transparent text-base leading-6 font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:border-indigo-700 active:bg-indigo-700 transition ease-in-out duration-150  disabled:opacity-50" >
                          <!-- This svg was grabbed from the source code view-source:https://tailwindcss.com/docs/animation -->
                          <svg wire:loading wire:target="submitForm" class="animate-spin -ml-1 mr-3 h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                             <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                             <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                           </svg>
                          <span>{{ __('Request') }}</span>
                        </button>
                    </div>
                    <p class="text-base text-center text-gray-400" id="result">
                    </p>
                </form>
              @else
                <p class="text-center">{{ __('Contact us to Request a Free Consultation.') }}</p>
              @endif

            </div>
        </div>
    </div>
</div>
