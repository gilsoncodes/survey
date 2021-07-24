<x-app-layout pagetitle="{{ __('Services') }}">
  <div class="pt-14 pb-1 gradient">
    <h1 class="my-4 text-5xl font-bold leading-tight text-center">
      {{ __('Online Ordering System') }}
    </h1>
    <div class="p-2 flex md:justify-around flex-col md:flex-row ">
        <div class="">
          <!--Left Col-->
           <div class="flex flex-col w-full  items-start text-center">
             <h3 class="my-4 text-2xl font-bold leading-tight text-left">
               {{ __('Risk-Free Trial!') }}
             </h3>
             <p class="w-full leading-normal text-2xl text-left flex ">
               <svg class="h-8 w-8 mr-3" fill="none" viewBox="0 0 24 24" stroke="#10B981">
                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7" />
               </svg>
                 {{ __('No cost to try it') }}
             </p>
             <p class="w-full leading-normal text-2xl text-left flex">
               <svg class="h-8 w-8 mr-3" fill="none" viewBox="0 0 24 24" stroke="#10B981">
                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7" />
               </svg>
               {{ __('No obligation after free trial') }}
             </p>
             <p class="w-full leading-normal text-2xl mb-6 text-left flex">
               <svg class="h-8 w-8 mr-3" fill="none" viewBox="0 0 24 24" stroke="#10B981">
                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7" />
               </svg>
               {{ __('No question-asked cancellation policy') }}
             </p>
           </div>
        </div>
        <div class="">
          <!--Right Col-->
          <div class=" w-full">
            <h3 class="my-4 text-2xl font-bold leading-tight  md:text-left">
              {{ __('Three-Step Procedure') }}
            </h3>
            <p class="w-full leading-normal text-2xl text-left flex">
              <span class="items-center h-7 px-1.5 text-base rounded-full mr-3  shadow-xl border-2  border-gray-800">
                  1
              </span>
                {{ __('Create and launch the website') }}
            </p>
            <p class="w-full leading-normal text-2xl md:text-left flex">
              <span class="items-center text-base rounded-full mr-3  h-7 px-1.5 shadow-xl border-2  border-gray-800">
                  2
              </span>
              {{ __('Implement the ordering system') }}
            </p>
            <p class="w-full leading-normal text-2xl mb-6 md:text-left flex">
              <span class="items-center text-base rounded-full mr-3 h-7 px-1.5 shadow-xl border-2 border-gray-800">
                  3
              </span>
              {{ __('The restaurant tries it for 15 days') }}
            </p>
          </div>
        </div>

      </div>
      <div class="text-center my-8 ">
        <a href="https://www.ongarizer.com" target="_blank" class="z-1 bg-white text-gray-800 font-bold rounded-full py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
          {{ __('See a Sample') }}
        </a>
      </div>
  </div>
  <div class="relative gradient -mt-5 lg:-mt-4 ">
    <svg viewBox="0 0 1428 174" >
      <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <g transform="translate(-2.000000, 44.000000)" fill="#FFFFFF" fill-rule="nonzero">
          <path d="M0,0 C90.7283404,0.927527913 147.912752,27.187927 291.910178,59.9119003 C387.908462,81.7278826 543.605069,89.334785 759,82.7326078 C469.336065,156.254352 216.336065,153.6679 0,74.9732496" opacity="0.100000001"></path>
          <path
            d="M100,104.708498 C277.413333,72.2345949 426.147877,52.5246657 546.203633,45.5787101 C666.259389,38.6327546 810.524845,41.7979068 979,55.0741668 C931.069965,56.122511 810.303266,74.8455141 616.699903,111.243176 C423.096539,147.640838 250.863238,145.462612 100,104.708498 Z"
            opacity="0.100000001"
          ></path>
          <path d="M1046,51.6521276 C1130.83045,29.328812 1279.08318,17.607883 1439,40.1656806 L1439,120 C1271.17211,77.9435312 1140.17211,55.1609071 1046,51.6521276 Z" id="Path-4" opacity="0.200000003"></path>
        </g>
        <g transform="translate(-4.000000, 76.000000)" fill="#FFFFFF" fill-rule="nonzero">
          <path
            d="M0.457,34.035 C57.086,53.198 98.208,65.809 123.822,71.865 C181.454,85.495 234.295,90.29 272.033,93.459 C311.355,96.759 396.635,95.801 461.025,91.663 C486.76,90.01 518.727,86.372 556.926,80.752 C595.747,74.596 622.372,70.008 636.799,66.991 C663.913,61.324 712.501,49.503 727.605,46.128 C780.47,34.317 818.839,22.532 856.324,15.904 C922.689,4.169 955.676,2.522 1011.185,0.432 C1060.705,1.477 1097.39,3.129 1121.236,5.387 C1161.703,9.219 1208.621,17.821 1235.4,22.304 C1285.855,30.748 1354.351,47.432 1440.886,72.354 L1441.191,104.352 L1.121,104.031 L0.457,34.035 Z"
          ></path>
        </g>
      </g>
    </svg>
  </div>
  <div class="">
      <h3 class="my-14 text-3xl font-bold leading-tight text-center">
        {{ __('How does It Work?') }}
      </h3>
      <h4 class="my-4 mx-2 text-2xl font-bold leading-tight">
        1<sup>{{ __('st') }}</sup> {{ __("We'll create a website for your restaurant if you don't have one.") }}
      </h4>
      <div class="bg-gray-200 py-6">
        <p class="text-center"> <strong>{{ __('See an example at') }} </strong><a href="https://ongarizer.com" class="text-blue-400" target="_blank"><strong>www.ongarizer.com</strong></a></p>
        <div class="flex flex-col items-center md:flex-row  md:justify-around">
            <div class="mx-4 text-center">
              <p class="my-3">{{ __('Header') }}</p>
              <img src="{{ asset('images/header_ongarizer.jpg') }}" alt="{{ __('Ongarizer Header') }}">
            </div>
            <div class="mx-4 text-center">
              <p class="my-3">{{ __('About') }}</p>
              <img src="{{ asset('images/about_ongarizer.jpg') }}" alt="{{ __('Ongarizer About') }}">
            </div>
            <div class="mx-4 text-center">
              <p class="my-3">{{ __('Contact') }}</p>
              <img src="{{ asset('images/contact_ongarizer.jpg') }}" alt="{{ __('Ongarizer Contact') }}">
            </div>
        </div>
      </div>
      <h4 class="mb-4 mt-8 mx-2 text-2xl font-bold leading-tight">
        2<sup>{{ __('nd') }}</sup> {{ __("We'll implement the online ordering system.") }}
      </h4>
      <div class="bg-gray-200 py-6">
        <p class="text-center"> <strong>{{ __('Transfer the restaurant information to the ordering page') }}</strong></p>
        <div class="flex flex-col items-center md:flex-row  md:justify-around">
            <div class="mx-4 text-center">
              <p class="my-3">{{ __('Menu') }}</p>
              <img src="{{ asset('images/menu.jpg') }}" alt="{{ __('Restaurant Menu') }}">
            </div>
            <div class="mx-4 text-center">
              <p class="my-3">{{ __('Ordering Page') }}</p>
              <img src="{{ asset('images/pizza_ongarizer.jpg') }}" alt="{{ __('Pizza Page') }}">
            </div>
        </div>
      </div>
  </div>
  <div  style="background-color: #ff8b00;" class="py-6">
    <h2 class="mb-6 px-3 max-w-lg mx-auto text-3xl leading-tight text-center">
      <strong>{{ __('Ordering System Main Features') }}</strong>
    </h2>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 text-xl text-center">
      <div class="py-1">
        {{ __('Vacation Mode') }}<!--13-->
      </div>
      <div class="py-1">
        {{ __('Scheduled orders') }}<!--16-->
      </div>
      <div class="py-1">
        {{ __('Detailed Reports') }}<!--16-->
      </div>
      <div class="py-1">
        {{ __('Promos and Coupons') }}<!--16-->
      </div>
      <div class="py-1">
        {{ __('Pictures in Menu') }}<!--16-->
      </div>
      <div class="py-1">
        {{ __('Real-Time Ordering') }}<!--18-->
      </div>
      <div class="py-1">
        {{ __('Table Reservations') }}<!--18-->
      </div>
      <div class="py-1">
        {{ __('End of The Day Report') }}<!--21-->
      </div>
      <div class="py-1">
        {{ __('Unlimited Online Orders') }}<!--23-->
      </div>
      <div class="py-1">
        {{ __('Draw Your Own Delivery Area') }}<!--27-->
      </div>
      <div class="py-1">
        {{ __('Order Ahead for Reservations') }}<!--28-->
      </div>
      <div class="py-1">
        {{ __('Multi-Template Receipt Editor') }}<!--29-->
      </div>
    </div>
  </div>
  <h4 class="mb-4 mt-8 mx-2 text-2xl font-bold leading-tight">
    3<sup>{{ __('rd') }}</sup> {{ __("We'll install and set up the app.") }}
  </h4>
  <div class="bg-gray-200 py-6">
    <p class="text-center"> <strong>{{ __('The restaurant should have a dedicated tablet or phone to take orders.') }}</p>
    <div class="flex flex-col items-center md:flex-row  md:justify-around">
        <div class="mx-4 text-center">
          <p class="my-3">{{ __('Login Page') }}</p>
          <img src="{{ asset('images/ipad_log_in.png') }}" alt="{{ __('App Login Page') }}">
        </div>
        <div class="mx-4 text-center">
          <p class="my-3">{{ __('Ordering Page') }}</p>
          <img src="{{ asset('images/ipad_my_orders.png') }}" alt="{{ __('My Orders Page') }}">
        </div>
    </div>
  </div>

  <div class="">
      <h3 class="my-14 text-3xl font-bold leading-tight text-center">
        {{ __('Four Steps of a Typical Ordering') }}
      </h3>
      <h4 class="my-4 mx-2 text-2xl font-bold leading-tight">
        1- {{ __("The customer orders food on your website") }}
      </h4>
      <div class="bg-gray-200 py-6">
        <p class="text-center"> <strong>{{ __("It's simple, quick, and efficient") }}</strong></p>
        <div class="flex flex-col items-center md:flex-row  md:justify-around">
            <div class="mx-4 text-center">
              <p class="my-3">{{ __('Menu') }}</p>
              <img src="{{ asset('images/online_menu.png') }}" alt="{{ __('Menu') }}">
            </div>
            <div class="mx-4 text-center">
              <p class="my-3">{{ __('Order') }}</p>
              <img src="{{ asset('images/online_order2.png') }}" alt="{{ __('Order') }}">
            </div>
            <div class="mx-4 text-center">
              <p class="my-3">{{ __("Checkout") }}</p>
              <img src="{{ asset('images/online_checkout2.png') }}" alt="{{ __("Checkout") }}">
            </div>
            <div class="mx-4 text-center">
              <p class="my-3">{{ __('Waiting for Confirmation') }}</p>
              <img src="{{ asset('images/online_wait.png') }}" alt="{{ __('Waiting') }}">
            </div>
        </div>
      </div>
      <div  style="background-color: #68c2ff;" class="py-6">
        <h2 class="mb-6 px-3 max-w-lg mx-auto text-3xl leading-tight text-center">
          <strong>{{ __('Payment Options') }}</strong>
        </h2>
        <div class="grid grid-cols-1 md:grid-cols-3 text-xl text-center">
          <div class="py-1">
            {{ __('Cash') }}<!--13-->
          </div>
          <div class="py-1">
            {{ __('Call Back') }}<!--16-->
          </div>
          <div class="py-1">
            {{ __('Credit Card') }}<!--16-->
          </div>
        </div>
        {{-- <p class="text-center"> <strong>{{ __('The ordering system is free and provided by www.gloriafood.com. Optionally, Gloria Food offers oline / credit card payment service for $ 29.00 per month.') }}</strong></p> --}}

      </div>
      <h4 class="mb-4 mt-8 mx-2 text-2xl font-bold leading-tight">
        2- {{ __("The restaurant takes the order") }}
      </h4>
      <div class="bg-gray-200 py-6">
        <p class="text-center"> <strong>{{ __('The order can also be sent to an email as a backup.') }} </strong></p>
        <div class="flex flex-col items-center md:flex-row  md:justify-around">
            <div class="mx-4 text-center">
              <p class="my-3">{{ __('Order Arrived') }}</p>
              <img src="{{ asset('images/pending.png') }}" alt="{{ __('Order Arrived') }}">
            </div>
            <div class="mx-4 text-center">
              <p class="my-3">{{ __('Accept the order') }}</p>
              <img src="{{ asset('images/accept2.png') }}" alt="{{ __('Accept the order') }}">
            </div>
            <div class="mx-4 text-center">
              <p class="my-3">{{ __('Set estimate time') }}</p>
              <img src="{{ asset('images/time.png') }}" alt="{{ __('Set estimate time') }}">
            </div>
        </div>
      </div>
      <h4 class="mb-4 mt-8 mx-2 text-2xl font-bold leading-tight">
        3- {{ __("The customer is notified") }}
      </h4>
      <div class="bg-gray-200 py-6">
        <p class="text-center"> <strong>{{ __('All these happen in real-time') }}</strong></p>
        <div class="flex flex-col items-center md:flex-row  md:justify-around">
            <div class="mx-4 text-center">
              <p class="my-3">{{ __('Website') }}</p>
              <img src="{{ asset('images/online_confirm.png') }}" alt="{{ __('Confirmation at the Website') }}">
            </div>
            <div class="mx-4 text-center">
              <p class="my-3">Email</p>
              <img src="{{ asset('images/confirm_email.png') }}" alt="{{ __("Customer's Email") }}">
            </div>
        </div>
      </div>
      <h4 class="mb-4 mt-8 mx-2 text-2xl font-bold leading-tight">
        4- {{ __("The customer receives the food") }}
      </h4>
      <div class="bg-gray-200 py-6 mb-14">
        <div class="flex flex-col items-center md:flex-row  md:justify-around">
            <div class="mx-4 text-center w-full lg:w-1/5">
              <p class="my-3">{{ __('The customer picks up the order') }}</p>
              <img src="{{ asset('images/delivery.png') }}" alt="{{ __('Delivery') }}">
            </div>
            <div class="mx-4 text-center  w-full lg:w-4/5">
              <p class="my-3"><strong>{{ __('The Online Ordering System can allow pickup and/or delivery options.') }}</strong></p>
            </div>
        </div>
      </div>
  </div>

  <!-- Change the colour #f8fafc to match the previous section colour -->
  <svg class="wave-top gradient" viewBox="0 0 1439 147" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
      <g transform="translate(-1.000000, -14.000000)" fill-rule="nonzero">
        <g class="wave" fill="#f8fafc">
          <path
            d="M1440,84 C1383.555,64.3 1342.555,51.3 1317,45 C1259.5,30.824 1206.707,25.526 1169,22 C1129.711,18.326 1044.426,18.475 980,22 C954.25,23.409 922.25,26.742 884,32 C845.122,37.787 818.455,42.121 804,45 C776.833,50.41 728.136,61.77 713,65 C660.023,76.309 621.544,87.729 584,94 C517.525,105.104 484.525,106.438 429,108 C379.49,106.484 342.823,104.484 319,102 C278.571,97.783 231.737,88.736 205,84 C154.629,75.076 86.296,57.743 0,32 L0,0 L1440,0 L1440,84 Z"
          ></path>
        </g>
        <g transform="translate(1.000000, 15.000000)" fill="#FFFFFF">
          <g transform="translate(719.500000, 68.500000) rotate(-180.000000) translate(-719.500000, -68.500000) ">
            <path d="M0,0 C90.7283404,0.927527913 147.912752,27.187927 291.910178,59.9119003 C387.908462,81.7278826 543.605069,89.334785 759,82.7326078 C469.336065,156.254352 216.336065,153.6679 0,74.9732496" opacity="0.100000001"></path>
            <path
              d="M100,104.708498 C277.413333,72.2345949 426.147877,52.5246657 546.203633,45.5787101 C666.259389,38.6327546 810.524845,41.7979068 979,55.0741668 C931.069965,56.122511 810.303266,74.8455141 616.699903,111.243176 C423.096539,147.640838 250.863238,145.462612 100,104.708498 Z"
              opacity="0.100000001"
            ></path>
            <path d="M1046,51.6521276 C1130.83045,29.328812 1279.08318,17.607883 1439,40.1656806 L1439,120 C1271.17211,77.9435312 1140.17211,55.1609071 1046,51.6521276 Z" opacity="0.200000003"></path>
          </g>
        </g>
      </g>
    </g>
  </svg>
  <section class=" mx-auto text-center py-6 pb-12 gradient">
    <h2 class="w-full mb-8 text-5xl font-bold leading-tight text-center text-white">
      {{ __('Get Started Today!') }}
    </h2>
    <div class="w-full mb-8">
      <div class="h-1 mx-auto bg-white w-1/6 opacity-25 my-0 py-0 rounded-t"></div>
    </div>
    <h3 class="px-3 max-w-lg mx-auto mb-8 text-3xl leading-tight">

      {{ __('Low investment and guaranteed high returns.') }}
      <br>
      {{ __("Talk to us for more details.") }}

    </h3>
    <a href="{{ route('contact', [ 'lang' => app()->getLocale()]) }}#consultation" class=" mx-auto lg:mx-0 bg-white text-gray-800 font-bold rounded-full py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
      {{ __('Schedule a Free Consultation') }}
    </a>
  </section>
</x-app-layout>
