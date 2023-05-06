<div>
  <div class="w-full mb-4 font-bold">
    <p>{{ __('Hi, my name is Gilson Reis and this survey is a project of a writing course I am taking at Bunker Hill Community College in Boston.') }}</p>
    <br />
    <p>{{ __('Please, answer the questions and click the button submit.') }}</p>
    <br />
    <p>{{ __('Your answers are anonymous and feel free to share the link with anyone that can participate.') }}</p>
    <br />
    <p>{{ __('Thank you!!!') }}</p>
  </div>

  <form wire:submit.prevent="submitForm">
    <div class="py-3 px-4 mb-4 rounded-xl   bg-blue-300">
      <div>1. {{ __('How many times did you perceive corporal punishment from your parents while growing up? (It means that you felt they were punishing you physically no matter how slightly.') }}</div>
      <div class="block">
        @error('question1')
          <p class="text-red-500 mt-1 bg-transparent">@if($errorQuestion1) {{ $message }} @endif</p>
        @enderror
      </div>
      <div class="flex flex-wrap  items-center mt-2 ">
        <div class="flex flex-row mb-4">
          <input wire:model="question1" id="answer-Q-1a" wire:click="errorQuestion1" type="radio"  value="Never"  class=" w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
          <label for="answer-Q-1a" class="ml-2 mr-3 text-sm font-medium">{{ __('Not once') }}</label>
        </div>
        <div class="flex flex-row mb-4">
          <input wire:model="question1" id="answer-Q-1b" wire:click="errorQuestion1" type="radio" value="Once" class="  w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
          <label for="answer-Q-1b" class="ml-2 mr-3 text-sm font-medium">{{ __('Once') }}</label>
        </div>
        <div class="flex flex-row mb-4">
          <input wire:model="question1" id="answer-Q-1c" wire:click="errorQuestion1" type="radio" value="Two or three times" class=" w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
          <label for="answer-Q-1c" class="ml-2 mr-3 text-sm font-medium">{{ __('Two or three times') }}</label>
        </div>
        <div class="flex flex-row mb-4">
          <input wire:model="question1" id="answer-Q-1d" wire:click="errorQuestion1" type="radio" value="Four times or more"  class=" w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
          <label for="answer-Q-1d" class="ml-2 mr-3 text-sm font-medium">{{ __('Four times or more') }}</label>
        </div>
      </div>
    </div>
    @if($applicable)
      <div class="py-2 px-4  rounded-t-xl  bg-blue-300">
        <div>2. {{ __('What form of corporal punishment did you receive from your parents as a minor (under 18 of age)? Check all that apply') }}.</div>
        <div class="flex items-center mt-2">
          <div class="flex flex-row mb-4">
            <input id="Q-2a" type="checkbox" wire:model="question2a" value="Q-2a" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            <label for="Q-2a" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">{{ __('Open-hand slap on the buttock') }}</label>
          </div>
          <div class="flex flex-row mb-4">
            <input id="answer-Q-2b" type="checkbox"  wire:model="question2b" value="Q-2b" class="ml-3 w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            <label for="answer-Q-2b" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">{{ __('Open-hand slap on the back') }}</label>
          </div>
        </div>
        <div class="flex items-center mb-2">
          <div class="flex flex-row mb-4">
            <input id="answer-Q-2c" type="checkbox" wire:model="question2c" value="Q-2c" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            <label for="answer-Q-2c" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">{{ __('Kick on the buttocks') }}</label>
          </div>
          <div class="flex flex-row mb-4">
            <input id="answer-Q-2d" type="checkbox" wire:model="question2d" value="Q-2d" class="ml-3 w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            <label for="answer-Q-2d" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">{{ __('Slap in the face') }}</label>
          </div>
          <div class="flex flex-row mb-4">
            <input id="answer-Q-2e" type="checkbox" wire:model="question2e" value="Q-2e" class="ml-3 w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            <label for="answer-Q-2e" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">{{ __('A whip on the back') }}</label>
          </div>
        </div>
      </div>
      <div class="pb-2 px-4 mb-4  rounded-b-xl  bg-blue-300">
        <div class=" mb-4 w-Full">
          <label for="answer-Q-2f" class=" mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ __('Other forms:') }} </label>
          <input type="text" id="answer-Q-2f" wire:model="question2f" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        </div>
      </div>
      <div class="pt-2 px-4 mb-4 rounded-xl  bg-blue-300">
        <div>{{ __('3. What age did your parents punish you? Check all that apply.') }}</div>
        <div class="flex items-center mt-2 mb-4">
          <div class="flex flex-row mb-4">
            <input id="answer-Q-3a" type="checkbox" wire:model="question3a" value="Q-3a" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            <label for="answer-Q-3a" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">{{ __('Under 8') }}</label>
          </div>
          <div class="flex flex-row mb-4">
            <input id="answer-Q-3b" type="checkbox" wire:model="question3b" value="Q-3b" class="ml-3 w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            <label for="answer-Q-3b" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">{{ __('8 to 12') }}</label>
          </div>
          <div class="flex flex-row mb-4">
            <input id="answer-Q-3c" type="checkbox" wire:model="question3c" value="Q-3c" class="ml-3 w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            <label for="answer-Q-3c" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">{{ __('12 to 16') }}</label>
          </div>
          <div class="flex flex-row mb-4">
            <input id="answer-Q-3d" type="checkbox" wire:model="question3d" value="Q-3d" class="ml-3 w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            <label for="answer-Q-3d" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">{{ __('16 to 18') }}</label>
          </div>
        </div>
      </div>
    @else
      <div class="py-2 px-4 rounded-xl mb-4   bg-blue-300">
        <div> {{ __('The questions 2 and 3 are not applicable.') }}</div>
      </div>
  @endif
  <div class="py-2 px-4 rounded-xl mb-4  bg-blue-300">
    <div>{{ __('4. How often did you get into a physical fight with your parents when you were between 8 and 12 years old?') }}</div>
    <div class="block">
      @error('question4')
        <p class="text-red-500 mt-1 bg-transparent">@if($errorQuestion4) {{ $message }} @endif</p>
      @enderror
    </div>
    <div class="flex items-center mt-2">
      <div class="flex flex-row mb-4">
        <input wire:model="question4" id="answer-Q-4a" wire:click="errorQuestion4" type="radio"  value="Never"  class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
        <label for="answer-Q-4a" class="ml-2 text-sm font-medium">{{ __('Never') }}</label>
      </div>
      <div class="flex flex-row mb-4">
        <input wire:model="question4" id="answer-Q-4b" wire:click="errorQuestion4" type="radio" value="Once" class="ml-3 w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
        <label for="answer-Q-4b" class="ml-2 text-sm font-medium">{{ __('Once') }}</label>
      </div>
      <div class="flex flex-row mb-4">
        <input wire:model="question4" id="answer-Q-4c" wire:click="errorQuestion4" type="radio" value="Twice" class="ml-3 w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
        <label for="answer-Q-4c" class="ml-2 text-sm font-medium">{{ __('Twice') }}</label>
      </div>
      <div class="flex flex-row mb-4">
        <input wire:model="question4" id="answer-Q-4d" wire:click="errorQuestion4" type="radio" value="three times or more"  class="ml-3 w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
        <label for="answer-Q-4d" class="ml-2 text-sm font-medium">{{ __('Three times or more') }}</label>
      </div>
    </div>
  </div>
  <div class="py-2 px-4 mb-4 rounded-xl  bg-blue-300">
    <div>{{ __('5. How often did you get into a physical fight with your parents when you were between 12 and 16 years old?') }}</div>
    <div class="block">
      @error('question5')
        <p class="text-red-500 mt-1 bg-transparent">@if($errorQuestion5) {{ $message }} @endif</p>
      @enderror
    </div>
    <div class="flex items-center mt-2">
      <div class="flex flex-row mb-4">
        <input wire:model="question5" id="answer-Q-5a" wire:click="errorQuestion5" type="radio"  value="Never"  class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
        <label for="answer-Q-5a" class="ml-2 text-sm font-medium">{{ __('Never') }}</label>
      </div>
      <div class="flex flex-row mb-4">
        <input wire:model="question5" id="answer-Q-5b" wire:click="errorQuestion5" type="radio" value="Once" class="ml-3 w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
        <label for="answer-Q-5b" class="ml-2 text-sm font-medium">{{ __('Once') }}</label>
      </div>
      <div class="flex flex-row mb-4">
        <input wire:model="question5" id="answer-Q-5c" wire:click="errorQuestion5" type="radio" value="Twice" class="ml-3 w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
        <label for="answer-Q-5c" class="ml-2 text-sm font-medium">{{ __('Twice') }}</label>
      </div>
      <div class="flex flex-row mb-4">
        <input wire:model="question5" id="answer-Q-5d" wire:click="errorQuestion5" type="radio" value="three times or more"  class="ml-3 w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
        <label for="answer-Q-5d" class="ml-2 text-sm font-medium">{{ __('Three times or more') }}</label>
      </div>
    </div>
  </div>
  <div class="py-2 px-4 rounded-xl mb-4  bg-blue-300">
    <div>{{ __('6. How often did you get into a physical fight with your parents when you were between 16 and 18 years old?') }}</div>
    <div class="block">
      @error('question6')
          <p class="text-red-500 mt-1 bg-transparent">@if($errorQuestion6) {{ $message }} @endif</p>
      @enderror
    </div>
    <div class="flex items-center mt-2">
      <div class="flex flex-row mb-4">
        <input wire:model="question6" id="answer-Q-6a" wire:click="errorQuestion6" type="radio"  value="Never"  class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
        <label for="answer-Q-6a" class="ml-2 text-sm font-medium">{{ __('Never') }}</label>
      </div>
      <div class="flex flex-row mb-4">
        <input wire:model="question6" id="answer-Q-6b" wire:click="errorQuestion6" type="radio" value="Once" class="ml-3 w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
        <label for="answer-Q-6b" class="ml-2 text-sm font-medium">{{ __('Once') }}</label>
      </div>
      <div class="flex flex-row mb-4">
        <input wire:model="question6" id="answer-Q-6c" wire:click="errorQuestion6" type="radio" value="Two or three times" class="ml-3 w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
        <label for="answer-Q-6c" class="ml-2 text-sm font-medium">{{ __('Twice') }}</label>
      </div>
      <div class="flex flex-row mb-4">
        <input wire:model="question6" id="answer-Q-6d" wire:click="errorQuestion6" type="radio" value="Three times or more"  class="ml-3 w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
        <label for="answer-Q-6d" class="ml-2 text-sm font-medium">{{ __('Three times or more') }}</label>
      </div>
    </div>
  </div>
  <div class="pt-2 px-4 mb-4 rounded-xl  bg-blue-300">
    <div>{{ __('7. How often did you get into a physical fight with a sibling while attending elementary school?') }}</div>
    <div class="block">
      @error('question7')
        <p class="text-red-500 mt-1 bg-transparent">@if($errorQuestion7) {{ $message }} @endif</p>
      @enderror
    </div>
    <div class="flex items-center mt-2">
      <div class="flex flex-row mb-4">
        <input wire:model="question7" id="answer-Q-7a" wire:click="errorQuestion7" type="radio"  value="Never"  class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
        <label for="answer-Q-7a" class="ml-2 text-sm font-medium">{{ __('Never') }}</label>
      </div>
      <div class="flex flex-row mb-4">
        <input wire:model="question7" id="answer-Q-7b" wire:click="errorQuestion7" type="radio" value="Once" class="ml-3 w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
        <label for="answer-Q-7b" class="ml-2 text-sm font-medium">{{ __('Once') }}</label>
      </div>
      <div class="flex flex-row mb-4">
        <input wire:model="question7" id="answer-Q-7c" wire:click="errorQuestion7" type="radio" value="Twice" class="ml-3 w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
        <label for="answer-Q-7c" class="ml-2 text-sm font-medium">{{ __('Twice') }}</label>
      </div>
      <div class="flex flex-row mb-4">
        <input wire:model="question7" id="answer-Q-7d" wire:click="errorQuestion7" type="radio" value="Four times or more"  class="ml-3 w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
        <label for="answer-Q-7d" class="ml-2 text-sm font-medium">{{ __('Three times or more') }}</label>
      </div>
    </div>
  </div>
  <div class="py-2 px-4 mb-4 rounded-xl  bg-blue-300">
    <div>{{ __('8. How often did you get into a physical fight with a sibling while attending middle school?') }}</div>
    <div class="block">
      @error('question8')
        <p class="text-red-500 mt-1 bg-transparent">@if($errorQuestion8) {{ $message }} @endif</p>
      @enderror
    </div>
    <div class="flex items-center mt-2">
      <div class="flex flex-row mb-4">
        <input wire:model="question8" id="answer-Q-8a" wire:click="errorQuestion8" type="radio"  value="Never"  class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
        <label for="answer-Q-8a" class="ml-2 text-sm font-medium">{{ __('Never') }}</label>
      </div>
      <div class="flex flex-row mb-4">
        <input wire:model="question8" id="answer-Q-8b" wire:click="errorQuestion8" type="radio" value="Once" class="ml-3 w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
        <label for="answer-Q-8b" class="ml-2 text-sm font-medium">{{ __('Once') }}</label>
      </div>
      <div class="flex flex-row mb-4">
        <input wire:model="question8" id="answer-Q-8c" wire:click="errorQuestion8" type="radio" value="Twice" class="ml-3 w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
        <label for="answer-Q-8c" class="ml-2 text-sm font-medium">{{ __('Twice') }}</label>
      </div>
      <div class="flex flex-row mb-4">
        <input wire:model="question8" id="answer-Q-8d" wire:click="errorQuestion8" type="radio" value="Four times or more"  class="ml-3 w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
        <label for="answer-Q-8d" class="ml-2 text-sm font-medium">{{ __('Three times or more') }}</label>
      </div>
    </div>
  </div>
  <div class="py-2 px-4 mb-4 rounded-xl  bg-blue-300">
    <div>{{ __('9. How often did you get into a physical fight with a sibling at home?') }}</div>
    <div class="block">
      @error('question9')
        <p class="text-red-500 mt-1 bg-transparent">@if($errorQuestion9) {{ $message }} @endif</p>
      @enderror
    </div>
    <div class="flex items-center mt-2">
      <div class="flex flex-row mb-4">
        <input wire:model="question9" id="answer-Q-9a" wire:click="errorQuestion9" type="radio"  value="Never"  class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
        <label for="answer-Q-9a" class="ml-2 text-sm font-medium">{{ __('Never') }}</label>
      </div>
      <div class="flex flex-row mb-4">
        <input wire:model="question9" id="answer-Q-9b" wire:click="errorQuestion9" type="radio" value="Once" class="ml-3 w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
        <label for="answer-Q-9b" class="ml-2 text-sm font-medium">{{ __('Once') }}</label>
      </div>
      <div class="flex flex-row mb-4">
        <input wire:model="question9" id="answer-Q-9c" wire:click="errorQuestion9" type="radio" value="Twice" class="ml-3 w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
        <label for="answer-Q-9c" class="ml-2 text-sm font-medium">{{ __('Twice') }}</label>
      </div>
      <div class="flex flex-row mb-4">
        <input wire:model="question9" id="answer-Q-9d" wire:click="errorQuestion9" type="radio" value="Four times or more"  class="ml-3 w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
        <label for="answer-Q-9d" class="ml-2 text-sm font-medium">{{ __('Three times or more') }}</label>
      </div>
    </div>
  </div>
  <div class="pt-2 px-4 rounded-xl mb-4  bg-blue-300">
    <div>{{ __('10. How often did you get into a physical fight with a classmate at elementary school, both on and off the campus?') }}</div>
    <div class="block">
      @error('question10')
        <p class="text-red-500 mt-1 bg-transparent">@if($errorQuestion10) {{ $message }} @endif</p>
      @enderror
    </div>
    <div class="flex items-center mb-4 mt-2">
      <div class="flex flex-row mb-4">
        <input wire:model="question10" id="answer-Q-10a" wire:click="errorQuestion10" type="radio"  value="Never"  class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
        <label for="answer-Q-10a" class="ml-2 text-sm font-medium">{{ __('Never') }}</label>
      </div>
      <div class="flex flex-row mb-4">
        <input wire:model="question10" id="answer-Q-10b" wire:click="errorQuestion10" type="radio" value="Once" class="ml-3 w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
        <label for="answer-Q-10b" class="ml-2 text-sm font-medium">{{ __('Once') }}</label>
      </div>
      <div class="flex flex-row mb-4">
        <input wire:model="question10" id="answer-Q-10c" wire:click="errorQuestion10" type="radio" value="Twice" class="ml-3 w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
        <label for="answer-Q-10c" class="ml-2 text-sm font-medium">{{ __('Twice') }}</label>
      </div>
      <div class="flex flex-row mb-4">
        <input wire:model="question10" id="answer-Q-10d" wire:click="errorQuestion10" type="radio" value="Three times or more"  class="ml-3 w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
        <label for="answer-Q-10d" class="ml-2 text-sm font-medium">{{ __('Three times or more') }}</label>
      </div>
    </div>
  </div>
  <div class="py-2 px-4 mb-4 rounded-xl  bg-blue-300">
    <div>{{ __('11. How often did you get into a physical fight with a classmate at middle school, both on and off the campus?') }}</div>
    <div class="block">
      @error('question11')
        <p class="text-red-500 mt-1 bg-transparent">@if($errorQuestion11) {{ $message }} @endif</p>
      @enderror
    </div>
    <div class="flex items-center mt-2">
      <div class="flex flex-row mb-4">
        <input wire:model="question11" id="answer-Q-11a" wire:click="errorQuestion11" type="radio"  value="Never"  class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
        <label for="answer-Q-11a" class="ml-2 text-sm font-medium">{{ __('Never') }}</label>
      </div>
      <div class="flex flex-row mb-4">
        <input wire:model="question11" id="answer-Q-11b" wire:click="errorQuestion11" type="radio" value="Once" class="ml-3 w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
        <label for="answer-Q-11b" class="ml-2 text-sm font-medium">{{ __('Once') }}</label>
      </div>
      <div class="flex flex-row mb-4">
        <input wire:model="question11" id="answer-Q-11c" wire:click="errorQuestion11" type="radio" value="Twice" class="ml-3 w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
        <label for="answer-Q-11c" class="ml-2 text-sm font-medium">{{ __('Twice') }}</label>
      </div>
      <div class="flex flex-row mb-4">
        <input wire:model="question11" id="answer-Q-11d" wire:click="errorQuestion11" type="radio" value="Three times or more"  class="ml-3 w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
        <label for="answer-Q-11d" class="ml-2 text-sm font-medium">{{ __('Three times or more') }}</label>
      </div>
    </div>
  </div>
  <div class="py-2 px-4 mb-4 rounded-xl  bg-blue-300">
    <div>{{ __('12. How often did you get into a physical fight with a classmate at high school, both on and off the campus?') }}</div>
    <div class="block">
      @error('question12')
        <p class="text-red-500 mt-1 bg-transparent">@if($errorQuestion12) {{ $message }} @endif</p>
      @enderror
    </div>
    <div class="flex items-center mt-2">
      <div class="flex flex-row mb-4">
        <input wire:model="question12" id="answer-Q-12a" wire:click="errorQuestion12" type="radio"  value="Never"  class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
        <label for="answer-Q-12a" class="ml-2 text-sm font-medium">{{ __('Never') }}</label>
      </div>
      <div class="flex flex-row mb-4">
        <input wire:model="question12" id="answer-Q-12b" wire:click="errorQuestion12" type="radio" value="Once" class="ml-3 w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
        <label for="answer-Q-12b" class="ml-2 text-sm font-medium">{{ __('Once') }}</label>
      </div>
      <div class="flex flex-row mb-4">
        <input wire:model="question12" id="answer-Q-12c" wire:click="errorQuestion12" type="radio" value="Twice" class="ml-3 w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
        <label for="answer-Q-12c" class="ml-2 text-sm font-medium">{{ __('Twice') }}</label>
      </div>
      <div class="flex flex-row mb-4">
        <input wire:model="question12" id="answer-Q-12d" wire:click="errorQuestion12" type="radio" value="Three times or more"  class="ml-3 w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
        <label for="answer-Q-12d" class="ml-2 text-sm font-medium">{{ __('Three times or more') }}</label>
      </div>
    </div>
  </div>
  <div class="py-2 px-4 mb-4 rounded-xl  bg-blue-300">
    <div>{{ __('13. How often were you disciplined at school because of aggressive behaviors to your classmates?') }}</div>
    <div class="block">
      @error('question13')
        <p class="text-red-500 mt-1 bg-transparent">@if($errorQuestion13) {{ $message }} @endif</p>
      @enderror
    </div>
    <div class="flex items-center mt-2">
      <div class="flex flex-row mb-4">
        <input wire:model="question13" id="answer-Q-13a" wire:click="errorQuestion13" type="radio" value="Never"  class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
        <label for="answer-Q-13a" class="ml-2 text-sm font-medium">{{ __('Never') }}</label>
      </div>
      <div class="flex flex-row mb-4">
        <input wire:model="question13" id="answer-Q-13b" wire:click="errorQuestion13" type="radio" value="Once" class="ml-3 w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
        <label for="answer-Q-13b" class="ml-2 text-sm font-medium">{{ __('Once') }}</label>
      </div>
      <div class="flex flex-row mb-4">
        <input wire:model="question13" id="answer-Q-13c" wire:click="errorQuestion13" type="radio" value="Twice" class="ml-3 w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
        <label for="answer-Q-13c" class="ml-2 text-sm font-medium">{{ __('Twice') }}</label>
      </div>
      <div class="flex flex-row mb-4">
        <input wire:model="question13" id="answer-Q-13d" wire:click="errorQuestion13" type="radio" value="Three times or more"  class="ml-3 w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
        <label for="answer-Q-13d" class="ml-2 text-sm font-medium">{{ __('Three times or more') }}</label>
      </div>
    </div>
  </div>
  <div class="py-2 px-4 mb-4 rounded-xl  bg-blue-300">
    <div>{{ __('14. How often were you disciplined at elementary school because of aggressive behaviors to your teachers?') }}</div>
    <div class="block">
      @error('question14')
        <p class="text-red-500 mt-1 bg-transparent">@if($errorQuestion14) {{ $message }} @endif</p>
      @enderror
    </div>
    <div class="flex items-center mt-2">
      <div class="flex flex-row mb-4">
        <input wire:model="question14" id="answer-Q-14a" wire:click="errorQuestion14" type="radio" value="Never"  class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
        <label for="answer-Q-14a" class="ml-2 text-sm font-medium">{{ __('Never') }}</label>
      </div>
      <div class="flex flex-row mb-4">
        <input wire:model="question14" id="answer-Q-14b" wire:click="errorQuestion14" type="radio" value="Once" class="ml-3 w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
        <label for="answer-Q-14b" class="ml-2 text-sm font-medium">{{ __('Once') }}</label>
      </div>
      <div class="flex flex-row mb-4">
        <input wire:model="question14" id="answer-Q-14c" wire:click="errorQuestion14" type="radio" value="Twice" class="ml-3 w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
        <label for="answer-Q-14c" class="ml-2 text-sm font-medium">{{ __('Twice') }}</label>
      </div>
      <div class="flex flex-row mb-4">
        <input wire:model="question14" id="answer-Q-14d" wire:click="errorQuestion14" type="radio" value="Three times or more"  class="ml-3 w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
        <label for="answer-Q-14d" class="ml-2 text-sm font-medium">{{ __('Three times or more') }}</label>
      </div>
    </div>
  </div>
  <div class="py-2 px-4 mb-4 rounded-xl  bg-blue-300">
    <div>{{ __('15. How often were you disciplined at middle school because of aggressive behaviors to your teachers?') }}</div>
    <div class="block">
      @error('question15')
        <p class="text-red-500 mt-1 bg-transparent">@if($errorQuestion15) {{ $message }} @endif</p>
      @enderror
    </div>
    <div class="flex items-center mt-2">
      <div class="flex flex-row mb-4">
        <input wire:model="question15" id="answer-Q-15a" wire:click="errorQuestion15" type="radio" value="Never"  class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
        <label for="answer-Q-15a" class="ml-2 text-sm font-medium">{{ __('Never') }}</label>
      </div>
      <div class="flex flex-row mb-4">
        <input wire:model="question15" id="answer-Q-15b" wire:click="errorQuestion15" type="radio" value="Once" class="ml-3 w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
        <label for="answer-Q-15b" class="ml-2 text-sm font-medium">{{ __('Once') }}</label>
      </div>
      <div class="flex flex-row mb-4">
        <input wire:model="question15" id="answer-Q-15c" wire:click="errorQuestion15" type="radio" value="Two or three times" class="ml-3 w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
        <label for="answer-Q-15c" class="ml-2 text-sm font-medium">{{ __('Twice') }}</label>
      </div>
      <div class="flex flex-row mb-4">
        <input wire:model="question15" id="answer-Q-15d" wire:click="errorQuestion15" type="radio" value="Four times or more"  class="ml-3 w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
        <label for="answer-Q-15d" class="ml-2 text-sm font-medium">{{ __('Three times or more') }}</label>
      </div>
    </div>
  </div>
  <div class="py-2 px-4 mb-4 rounded-xl  bg-blue-300">
    <div>{{ __('16. How often were you disciplined at high school because of aggressive behaviors to your teachers?') }}</div>
    <div class="block">
      @error('question16')
        <p class="text-red-500 mt-1 bg-transparent">@if($errorQuestion16) {{ $message }} @endif</p>
      @enderror
    </div>
    <div class="flex items-center mt-2">
      <div class="flex flex-row mb-4">
        <input wire:model="question16" id="answer-Q-16a" wire:click="errorQuestion16" type="radio"  value="Never"  class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
        <label for="answer-Q-16a" class="ml-2 text-sm font-medium">{{ __('Never') }}</label>
      </div>
      <div class="flex flex-row mb-4">
        <input wire:model="question16" id="answer-Q-16b" wire:click="errorQuestion16" type="radio" value="Once" class="ml-3 w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
        <label for="answer-Q-16b" class="ml-2 text-sm font-medium">{{ __('Once') }}</label>
      </div>
      <div class="flex flex-row mb-4">
        <input wire:model="question16" id="answer-Q-16c" wire:click="errorQuestion16" type="radio" value="Twice" class="ml-3 w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
        <label for="answer-Q-16c" class="ml-2 text-sm font-medium">{{ __('Twice') }}</label>
      </div>
      <div class="flex flex-row mb-4">
        <input wire:model="question16" id="answer-Q-16d" wire:click="errorQuestion16" type="radio" value="Three times or more"  class="ml-3 w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
        <label for="answer-Q-16d" class="ml-2 text-sm font-medium">{{ __('Three times or more') }}</label>
      </div>
    </div>
  </div>
  <div class="py-2 px-4 rounded-xl mb-4  bg-blue-300">
  <div>{{  __('17. How often did you get into a physical confrontation with strangers while growing up?') }}</div>
  <div class="block">
    @error('question17')
      <p class="text-red-500 mt-1 bg-transparent">@if($errorQuestion17) {{ $message }} @endif</p>
    @enderror
  </div>
  <div class="flex items-center mb-4 mt-2">

  <div class="flex flex-row mb-4">
    <input wire:model="question17" id="answer-Q-17a" wire:click="errorQuestion17" type="radio" value="Not once"  class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
    <label for="answer-Q-17a" class="ml-2 text-sm font-medium">{{ __('Never') }}</label>
  </div>
  <div class="flex flex-row mb-4">
    <input wire:model="question17" id="answer-Q-17b" wire:click="errorQuestion17" type="radio" value="Once" class="ml-3 w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
    <label for="answer-Q-17b" class="ml-2 text-sm font-medium">{{ __('Once') }}</label>
  </div>
  <div class="flex flex-row mb-4">
    <input wire:model="question17" id="answer-Q-17c" wire:click="errorQuestion17" type="radio" value="Two or three times" class="ml-3 w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
    <label for="answer-Q-17c" class="ml-2 text-sm font-medium">{{ __('Two or three times') }}</label>
  </div>
  <div class="flex flex-row mb-4">
    <input wire:model="question17" id="answer-Q-17d" wire:click="errorQuestion17" type="radio" value="Four times or more"  class="ml-3 w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
    <label for="answer-Q-17d" class="ml-2 text-sm font-medium">{{ __('Four times or more') }}</label>
  </div>

  </div>
</div>
<div class="py-2 px-4 mb-4 rounded-xl  bg-blue-300">
  <div>{{  __('18. How many times have you been kicked out of a place because you assaulted someone?') }}</div>
  <div class="block">
    @error('question18')
      <p class="text-red-500 mt-1 bg-transparent">@if($errorQuestion18) {{ $message }} @endif</p>
    @enderror
  </div>
  <div class="flex items-center mt-2">

  <div class="flex flex-row mb-4">
    <input wire:model="question18" id="answer-Q-18a" wire:click="errorQuestion18" type="radio"  value="Not once"  class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
    <label for="answer-Q-18a" class="ml-2 text-sm font-medium">{{ __('Not once') }}</label>
  </div>
  <div class="flex flex-row mb-4">
    <input wire:model="question18" id="answer-Q-18b" wire:click="errorQuestion18" type="radio" value="Once" class="ml-3 w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
    <label for="answer-Q-18b" class="ml-2 text-sm font-medium">{{ __('Once') }}</label>
  </div>
  <div class="flex flex-row mb-4">
    <input wire:model="question18" id="answer-Q-18c" wire:click="errorQuestion18" type="radio" value="Two or three times" class="ml-3 w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
    <label for="answer-Q-18c" class="ml-2 text-sm font-medium">{{ __('Two or three times') }}</label>
  </div>
  <div class="flex flex-row mb-4">
    <input wire:model="question18" id="answer-Q-18d" wire:click="errorQuestion18" type="radio" value="Four times or more"  class="ml-3 w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
    <label for="answer-Q-18d" class="ml-2 text-sm font-medium">{{ __('Four times or more') }}</label>
  </div>

  </div>
</div>
<div class="py-2 px-4 mb-4 rounded-xl  bg-blue-300">
  <div>{{ __('19. How many times have the police been called to separate a fight between you and a stranger?') }}</div>
  <div class="block">
    @error('question19')
      <p class="text-red-500 mt-1 bg-transparent">@if($errorQuestion19) {{ $message }} @endif</p>
    @enderror
  </div>
  <div class="flex items-center mt-2">

  <div class="flex flex-row mb-4">
    <input wire:model="question19" id="answer-Q-19a" wire:click="errorQuestion19" type="radio" value="Not once"  class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
    <label for="answer-Q-19a" class="ml-2 text-sm font-medium">{{ __('Not once') }}</label>
  </div>
  <div class="flex flex-row mb-4">
    <input wire:model="question19" id="answer-Q-19b" wire:click="errorQuestion19" type="radio" value="Once" class="ml-3 w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
    <label for="answer-Q-19b" class="ml-2 text-sm font-medium">{{ __('Once') }}</label>
  </div>
  <div class="flex flex-row mb-4">
    <input wire:model="question19" id="answer-Q-19c" wire:click="errorQuestion19" type="radio" value="Two or three times" class="ml-3 w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
    <label for="answer-Q-19c" class="ml-2 text-sm font-medium">{{ __('Two or three times') }}</label>
  </div>
  <div class="flex flex-row mb-4">
    <input wire:model="question19" id="answer-Q-19d" wire:click="errorQuestion19" type="radio" value="Four times or more"  class="ml-3 w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
    <label for="answer-Q-19d" class="ml-2 text-sm font-medium">{{ __('Four times or more') }}</label>
  </div>

  </div>
</div>

<div class="py-2 px-4 rounded-xl  bg-blue-300">
    <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ __('Comments') }}</label>
    <textarea id="message" wire:model="comments" rows="4" class="block p-2.5 mb-4 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="{{ __('Optional') }}..."></textarea>
  </div>



   <div class="flex items-center mb-4 mt-2">


    <button type="submit" class="mb-6 mt-8 md:mb-0 bg-white text-gray-800 font-bold rounded-full mx-auto py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out" >
          <!-- This svg was grabbed from the source code view-source:https://tailwindcss.com/docs/animation -->
      <svg wire:loading wire:target="submitForm" class="animate-spin -ml-1 mr-3 h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="#68c2ff" stroke-width="4"></circle>
        <path class="opacity-75" fill="#68c2ff" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
      </svg>
      <span>
        {{ __('Submit') }}&nbsp;
        <svg class="inline h-6 w-6" viewBox="0 0 48 48" fill="none">
          <path d="M44 24V9H24H4V24V39H24" stroke="#333" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
          <path d="M44 34L30 34" stroke="#333" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
          <path d="M39 29L44 34L39 39" stroke="#333" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
          <path d="M4 9L24 24L44 9" stroke="#333" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
            {{-- <svg class="inline h-6 w-6" viewBox="0 0 48 48" fill="none">
              <path d="M48 0H0V48H48V0Z" fill="white" fill-opacity="0.01"/>
              <path d="M43 5L29.7 43L22.1 25.9L5 18.3L43 5Z" stroke="#333" stroke-width="3" stroke-linejoin="round"/>
              <path d="M43.0001 5L22.1001 25.9" stroke="#333" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
            </svg> --}}
      </span>
    </button>

  </div>

  </form>
  @if($flash)

      {{-- <div x-data="{ show: true}" x-init="setTimeout(()=> show = false, 12000)" x-show="show" class="fixed bg-green-500 text-white py-2 px-4 rounded-xl bottom-3 right-3 text-sm alert alert-success">--}}
        <div class="fixed  bg-green-500 text-white py-2 px-4 rounded-xl bottom-3 right-3 text-sm alert alert-success">
          <div wire:click="closeFlashMessage" class="cursor-pointer flex justify-end text-white">
            {{ __('Close') }} X
          </div>
          <p>{{  __('You have successfully submitted your answers.') }}</p>
          <p>{{ __('Thank you!') }}</p>

      </div>
  @endif
</div>
