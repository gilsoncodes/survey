<div class="flex flex-col">
  <div class="w-full">
    <h1 class="text-center mb-3 text-3xl font-bold text-gray-700">{{ __('Contact Us') }}</h1>
  </div>

  <form wire:submit.prevent="submitForm">
        <div class="flex flex-col md:flex-row">
            <div class="flex flex-col w-full md:w-1/2">
              <div class="relative mb-6 ">
                  <input wire:model="name"
                           type="text"
                           wire:click="errorName"
                           name="name"
                           placeholder="Name"
                           class="w-full pl-9 pr-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 dark:bg-gray-700 dark:text-white dark:placeholder-gray-500 dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500" value="{{ old('name') }}"
                           required
                           oninvalid="this.setCustomValidity('{{ __('Please fill out this field') }}')"
                           oninput="this.setCustomValidity('')"
                           title=''
                           />
                  <svg class="absolute top-2 left-2 w-6 h-6" fill="none" stroke="{{ $this->nameicon }}" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                  @error('name')
                    <p class="text-red-500 mt-1 bg-white">@if($errorName) {{ $message }} @endif</p>
                  @enderror
              </div>

              <div class="mb-6 hidden">
                  <input wire:model.defer="extra" type="text" name="extra"  class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 dark:bg-gray-700 dark:text-white dark:placeholder-gray-500 dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500" />
              </div>

              <div class="relative mb-6 z-5">
                  <input wire:model="email"
                         type="email"
                         wire:click="errorEmail"
                         name="email"
                         placeholder="Email"
                         class="w-full  pl-9 pr-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 dark:bg-gray-700 dark:text-white dark:placeholder-gray-500 dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500"  value="{{ old('email') }}"
                         required
                         oninvalid="this.setCustomValidity('{{ __('Please enter a valid email') }}')"
                         oninput="setCustomValidity('')"
                         title=''
                         />
                  <svg class="absolute top-2 left-2 w-6 h-6" fill="none" stroke="{{ $this->emailicon }}" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207"></path></svg>
                  @error('email')
                    <p class="text-red-500 mt-1 bg-white">@if($errorEmail) {{ $message }} @endif</p>
                  @enderror
              </div>

              <div class="relative mb-6 z-5">
                  <input wire:model="phone"
                         type="text"
                         wire:click="errorPhone"
                         name="phone"
                         placeholder="Phone Number"
                         class="w-full  pl-9 pr-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 dark:bg-gray-700 dark:text-white dark:placeholder-gray-500 dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500"  value="{{ old('phone') }}"
                         required
                         oninvalid="this.setCustomValidity('{{ __('Please fill out this field') }}')"
                         oninput="setCustomValidity('')"
                         title=''
                         />
                  <svg class="absolute top-2 left-2 w-6 h-6" fill="none" stroke="{{ $this->phoneicon }}" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                  @error('phone')
                    <p class="text-red-500 mt-1 bg-white">@if($errorPhone) {{ $message }} @endif</p>
                  @enderror
              </div>
            </div>
            <div class="flex w-full md:w-1/2">
                  <textarea wire:model.defer="message"
                            wire:click="errorMessage"
                            rows="5"
                            name="message"
                            placeholder="{{ __('How can we help?') }}"
                            class="w-full mb-6 ml-0 md:ml-4 px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 "
                            required
                            oninvalid="this.setCustomValidity('{{ __('Please fill out this field') }}')"
                            oninput="setCustomValidity('')"
                            title=''
                            >
                                {{ old('message') }}
                  </textarea>
                  @error('message')
                    <p class="text-red-500 mt-1 bg-white">@if($errorMessage) {{ $message }} @endif</p>
                  @enderror

            </div>

        </div>
        @error('extra')
          <p class="text-red-500  mt-1 bg-white">
            {{ __('Oops! Something went wrong. Please try again.') }}
          </p>
        @enderror
        <div x-data="{show: false}"
             x-show.transition.opacity.out.duration.1500ms="show"
             x-cloak
             x-init="@this.on('successMessage', () => { show = true; setTimeout(() => { show = false; }, 10000 )} )"
             class=" flex justify-between rounded-md bg-green-50 p-4 mb-6"
             >
          <span>
            {!! __('Your message has been received.<br> We sent an email to') !!} <strong>{{ $email2 }}</strong>.
             {{ __("Check the spam or junk folder if you don't see it in the inbox.") }}
          </span>
          <span @click="show = false" class="cursor-pointer px-2" >&times;</span>
        </div>
        <button type="submit" class="mb-6 md:mb-0 bg-white text-gray-800 font-bold rounded-full mx-auto py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out" >
          <!-- This svg was grabbed from the source code view-source:https://tailwindcss.com/docs/animation -->
          <svg wire:loading wire:target="submitForm" class="animate-spin -ml-1 mr-3 h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
             <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
             <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
          </svg>
          <span>{{ __('Send') }}</span>
        </button>

  </form>



</div>
