<div class="flex items-center min-h-screen bg-gray-50 dark:bg-gray-900">
    <div class="container mx-auto">
        <div class="max-w-md mx-auto my-10 bg-white p-5 rounded-md shadow-sm">
            <div class="text-center">
                <h1 class="my-3 text-3xl font-semibold text-gray-700 dark:text-gray-200">Contact Us</h1>
                <p class="text-gray-900 dark:text-gray-400">Fill out the form below and send us a message.</p>
            </div>
            <div class="m-7">
              {{-- In livewire I think I don't need to to set the method and action  --}}
								<form
                  wire:submit.prevent="submitForm">

                      <div class="relative mb-6 ">
                          <label for="name" class=" block mb-2 text-sm text-gray-600 dark:text-gray-400">Name</label>
                          <input wire:model.defer="name"
                                   type="text"
                                   wire:click="errorName"
                                   name="name"
                                   placeholder="John Doe"
                                   class="w-full pl-9 pr-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 dark:bg-gray-700 dark:text-white dark:placeholder-gray-500 dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500" value="{{ old('name') }}"
                                   />
                          <svg class="absolute top-9 left-2 w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>


                      </div>
                      @error('name')
  											<p class="text-red-500 mt-1">@if($errorName) {{ $message }} @endif</p>
  										@enderror



                    <div class="mb-6 hidden">
                        <input wire:model.defer="extra" type="text" name="extra"  class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 dark:bg-gray-700 dark:text-white dark:placeholder-gray-500 dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500" />
                    </div>
                    <div class="relative mb-6 z-5">
                        <label for="email" class="block mb-2 text-sm text-gray-600 dark:text-gray-400">Email Address</label>
                        <input wire:model.defer="email"
                               type="email"
                               wire:click="errorEmail"
                               name="email"
                               placeholder="you@company.com"
                               class="w-full  pl-9 pr-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 dark:bg-gray-700 dark:text-white dark:placeholder-gray-500 dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500"  value="{{ old('email') }}"
                               />
                        <svg class="absolute top-9 left-2 w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207"></path></svg>
                    </div>
										@error('email')
											<p class="text-red-500 mt-1">@if($errorEmail) {{ $message }} @endif</p>
										@enderror
                    <div class="relative mb-6 z-5">
                        <label for="phone" class="block mb-2 text-sm text-gray-600 dark:text-gray-400">Phone Number</label>
                        <input wire:model.defer="phone"
                               type="text"
                               wire:click="errorPhone"
                               name="phone"
                               placeholder="+1 (555) 123-4567"
                               class="w-full  pl-9 pr-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 dark:bg-gray-700 dark:text-white dark:placeholder-gray-500 dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500"  value="{{ old('phone') }}"
                               />
                        <svg class="absolute top-9 left-2 w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                    </div>
										@error('phone')
											<p class="text-red-500 mt-1">@if($errorPhone) {{ $message }} @endif</p>
										@enderror
                    <div class="mb-6">
                        <label for="message" class="block mb-2 text-sm text-gray-600 dark:text-gray-400">Message</label>
                        <textarea wire:model.defer="message"
                                  wire:click="errorMessage"
                                  rows="5"
                                  name="message"
                                  placeholder="How can we help?"
                                  class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 dark:bg-gray-700 dark:text-white dark:placeholder-gray-500 dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500"
                                  >
                                      {{ old('message') }}
                        </textarea>
                    </div>
										@error('message')
											<p class="text-red-500 mt-1">@if($errorMessage) {{ $message }} @endif</p>
										@enderror
                    @error('extra')
											<p class="text-red-500  mt-1">
                        {{ __('Oops! Something went wrong. Please try again.') }}
                      </p>
										@enderror
                    <div x-data="{show: false}"
                         x-show.transition.opacity.out.duration.1500ms="show"
                         x-init="@this.on('successMessage', () => { show = true; setTimeout(() => { show = false; }, 10000 )} )"
                         class=" flex justify-between rounded-md bg-green-50 p-4 mt-8"
                         >
                      <span>
                        Your message has been received.
                        <br>
                         We sent an email to <strong>{{ $email2 }}</strong>.
                         Check the spam or junk folder if you don't see it in the inbox.
                      </span>
                      <span @click="show = false" class="cursor-pointer px-2" >&times;</span>
                    </div>
                    <div class="mb-6">
                        <button type="submit" class="inline-flex items-center px-4 py-2 border border-transparent text-base leading-6 font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:border-indigo-700 active:bg-indigo-700 transition ease-in-out duration-150  disabled:opacity-50" >
                          <!-- This svg was grabbed from the source code view-source:https://tailwindcss.com/docs/animation -->
                          <svg wire:loading wire:target="submitForm" class="animate-spin -ml-1 mr-3 h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                             <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                             <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                           </svg>
                          <span>Send Message</span>
                        </button>
                    </div>
                    <p class="text-base text-center text-gray-400" id="result">
                    </p>
                </form>
            </div>
        </div>
    </div>
</div>
