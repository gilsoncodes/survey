<div class="flex items-center min-h-screen bg-gray-50 dark:bg-gray-900">
    <div class="container mx-auto">
        <div class="max-w-md mx-auto my-10 bg-white p-5 rounded-md shadow-sm">
            <div class="text-center">
                <h1 class="my-3 text-3xl font-semibold text-gray-700 dark:text-gray-200">{{ __('Request an Appointment') }}</h1>
                <p class="text-gray-900 dark:text-gray-400">{{  __("Let's meet in your restaurant or via Zoom. We'll show you how GAR Solutions can help your business. FREE consultation and NO obligations.") }}</p>
            </div>
            <div class="m-7">
              @if($hasDates)
                <form
                  wire:submit.prevent="submitForm">
                       <div class="mb-6">
                          <label for="name" class="block mb-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Name') }}</label>
                          <input wire:model.defer="name"
                                type="text"
                                wire:click="errorName"
                                placeholder="John Doe"
                                class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 dark:bg-gray-700 dark:text-white dark:placeholder-gray-500 dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500" value="{{ old('name') }}"
                                required
                                oninvalid="this.setCustomValidity('{{ __('Please fill out this field') }}')"
                                oninput="this.setCustomValidity('')"
                                title=''
                                />
                                @error('name')
                                  <p class="text-red-500 mt-1">@if($errorName) {{ $message }} @endif</p>
                                @enderror
                      </div>
                      <div class="mb-6">
                          <label for="business" class="block mb-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Business Name') }}</label>
                          <input wire:model.defer="business"
                                type="text"
                                wire:click="errorBusiness"
                                name="business"
                                placeholder="Ongarizer Restaurant"
                                class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 dark:bg-gray-700 dark:text-white dark:placeholder-gray-500 dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500" value="{{ old('business') }}"
                                required
                                oninvalid="this.setCustomValidity('{{ __('Please fill out this field') }}')"
                                oninput="this.setCustomValidity('')"
                                title=''
                                />
                                @error('business')
                                  <p class="text-red-500 mt-1">@if($errorBusiness) {{ $message }} @endif</p>
                                @enderror
                      </div>

                    <div class="mb-6 hidden">
                        <input wire:model.defer="extra" type="text" name="extra"  class="w-full" />
                    </div>
                    <div class="mb-6">
                        <label for="email" class="block mb-2 text-sm text-gray-600 dark:text-gray-400">Email</label>
                        <input wire:model.defer="email"
                              type="email"
                              wire:click="errorEmail"
                              name="email"
                              placeholder="you@company.com"
                              class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 dark:bg-gray-700 dark:text-white dark:placeholder-gray-500 dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500"
                              value="{{ old('email') }}"
                              required
                              oninvalid="this.setCustomValidity('{{ __('Please enter a valid email') }}')"
                              oninput="setCustomValidity('')"
                              title=''
                              />
                              @error('email')
                                <p class="text-red-500 mt-1">@if($errorEmail) {{ $message }} @endif</p>
                              @enderror
                    </div>

                    <div class="mb-6">
                        <label for="phone" class="text-sm text-gray-600 dark:text-gray-400">{{ __('Phone Number') }}</label>
                        <input wire:model.defer="phone"
                              type="text"
                              wire:click="errorPhone"
                              name="phone"
                              placeholder="+1 (555) 1234-567"
                              class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 dark:bg-gray-700 dark:text-white dark:placeholder-gray-500 dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500"
                              value="{{ old('phone') }}"
                              required
                              oninvalid="this.setCustomValidity('{{ __('Please fill out this field') }}')"
                              oninput="this.setCustomValidity('')"
                              title=''
                              />
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
                              required
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
                <p class="text-center">{{ __('Contact us to schedule an appointment.') }}</p>
              @endif

            </div>
        </div>
    </div>
</div>
