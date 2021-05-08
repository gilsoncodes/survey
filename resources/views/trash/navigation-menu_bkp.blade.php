<nav x-data="{ open: false, top: true }"  x-on:scroll.window="if(window.scrollY > 20){top=false;}else{top=true;}" class="fixed w-full bg-white border-b border-gray-100"><!-- fixed -->
    <!-- Primary Navigation Menu  (window.scrollY > 20) ? top=false; : top=true;-->


    <div class="max-w-7xl mx-auto px-4 md:px-2 lg:px-8">
      <div x-show.transition.opacity.duration.400ms="top" class="flex justify-end h-10 my-auto">
        <div x-data="{language: false}" >
          <div @click="language = !language" class="relative flex items-center justify-center text-sm border border-blue-500 hover:border-transparent rounded-xl cursor-pointer px-4 h-6 my-auto text-blue-500  hover:text-white bg-transparent hover:bg-blue-500 ">
            <div class="">
              English
            </div>
            <div class="pl-2">
              <svg class="w-3 h-3"
                    fill="none"
                    stroke="currentColor"
                    viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="2"
                          d="M19 9l-7 7-7-7">
                </path>
              </svg>
            </div>

            <div @click.away="language = false " x-show="language" class="absolute top-0 right-0 p-2 mt-12 border border-gray-400 bg-white">
              <div class="text-center">
                Select a language
              </div>
              <hr class="my-2">
              <!-- svg usa starts-->
              <a href="https://www.google.com">
                <div class="flex bg-blue-200">
                <svg  height="24" viewBox="0 0 512 512" width="32" >
                  <path d="m512 61v360c0 8.284-6.716 15-15 15h-482c-8.284 0-15-6.716-15-15v-150l256-210z"
                    fill="#f2f6fc"/>
                  <path d="m512 61v360c0 8.284-6.716 15-15 15h-241v-375z" fill="#dce1eb"/>
                  <path d="m241 121h271v30h-271z" fill="#e63950"/>
                  <path d="m512 61v30h-256c-8.284 0-15-6.716-15-15 0-8.284 6.716-15 15-15z" fill="#e63950"/>
                  <path d="m241 181h271v30h-271z" fill="#e63950"/>
                  <path d="m0 301h512v30h-512z" fill="#ff637b"/>
                  <path d="m0 361h512v30h-512z" fill="#ff637b"/>
                  <path d="m0 421h512v30h-512z" fill="#ff637b"/>
                  <path d="m256 61h-256v180c0 8.284 6.716 15 15 15h241z" fill="#0082ff"/>
                  <g fill="#dce1eb">
                    <path d="m53 173.5h30v30h-30z" transform="matrix(.707 .707 -.707 .707 153.206 7.127)"/>
                    <path d="m53 113.5h30v30h-30z" transform="matrix(.707 .707 -.707 .707 110.78 -10.447)"/>
                    <path d="m113 173.5h30v30h-30z" transform="matrix(.707 .707 -.707 .707 170.78 -35.299)"/>
                    <path d="m113 113.5h30v30h-30z" transform="matrix(.707 .707 -.707 .707 128.354 -52.873)"/>
                    <path d="m173 173.5h30v30h-30z" transform="matrix(.707 .707 -.707 .707 188.354 -77.726)"/>
                    <path d="m173 113.5h30v30h-30z" transform="matrix(.707 .707 -.707 .707 145.927 -95.299)"/>
                  </g>
                  <path d="m0 241h512v30h-512z" fill="#ff637b"/>
                  <path d="m256 241h256v30h-256z" fill="#e63950"/>
                  <path d="m256 301h256v30h-256z" fill="#e63950"/>
                  <path d="m256 361h256v30h-256z" fill="#e63950"/>
                  <path d="m256 421h256v30h-256z" fill="#e63950"/>
                </svg>
                <div class="">
                  English
                </div>
              </div>
              </a>
              <!-- svg br starts-->
              <a href="https://www.yahoo.com">
                <div class="flex">
                  <svg
                    height="24"
                    viewBox="0 0 128 128"
                    width="32"
                    >
                      <path d="m12 27.751h104v72.497h-104z"
                            fill="#6fa44a"/>
                      <path d="m64 36.667-46.782 27.333 46.782 27.333 46.782-27.333z" fill="#fed953"/>
                      <circle cx="64" cy="64" fill="#0b55b1" r="15.349"/>
                      <path d="m64.507 56.451a30.772 30.772 0 0 0 -13.407-.745 15.241 15.241 0 0 0 -2.163 5.386 30.871 30.871 0 0 1 13.337.774c6.714 1.821 12.149 5.424 15.164 9.552a15.243 15.243 0 0 0 1.84-5.942c-3.087-3.906-8.344-7.282-14.771-9.025z"
                        fill="#f0f0f0"/>
                  </svg>
                  <div class="">
                    Português
                  </div>
                </div>
              </a>
              <!-- svg br ends-->
            </div>
          </div>
        </div>
        <div class="">
          ttttttttttttttttttttttttttttttttttttttt
        </div>
      </div>
    </div>

        <div class="flex justify-between h-16">
            <!-- Logo -->
            <div class="flex flex-shrink-0 items-center">
                <a href="{{ route('home') }}">
                    <x-jet-application-mark class="block h-9 w-auto" />
                </a>
            </div>
            <div class="flex">
                <!-- Navigation Links -->
                <div class="hidden md:-my-px md:ml-9 md:flex"> <!-- Home -->
                    {{-- <svg height="12" viewBox="0 0 512 512" width="12" xmlns="http://www.w3.org/2000/svg">
                        <path d="m498.195312 222.695312c-.011718-.011718-.023437-.023437-.035156-.035156l-208.855468-208.847656c-8.902344-8.90625-20.738282-13.8125-33.328126-13.8125-12.589843 0-24.425781 4.902344-33.332031 13.808594l-208.746093 208.742187c-.070313.070313-.140626.144531-.210938.214844-18.28125 18.386719-18.25 48.21875.089844 66.558594 8.378906 8.382812 19.445312 13.238281 31.277344 13.746093.480468.046876.964843.070313 1.453124.070313h8.324219v153.699219c0 30.414062 24.746094 55.160156 55.167969 55.160156h81.710938c8.28125 0 15-6.714844 15-15v-120.5c0-13.878906 11.289062-25.167969 25.167968-25.167969h48.195313c13.878906 0 25.167969 11.289063 25.167969 25.167969v120.5c0 8.285156 6.714843 15 15 15h81.710937c30.421875 0 55.167969-24.746094 55.167969-55.160156v-153.699219h7.71875c12.585937 0 24.421875-4.902344 33.332031-13.808594 18.359375-18.371093 18.367187-48.253906.023437-66.636719zm0 0"/>
                    </svg> --}}
                    <x-jet-nav-link href="{{ route('home') }}" :active="request()->routeIs('home')">
                        {{ __('Home') }}
                    </x-jet-nav-link>
                </div>
                <div class="hidden md:-my-px md:ml-9 md:flex"> <!-- Services -->
                    <x-jet-nav-link href="{{ route('services') }}" :active="request()->routeIs('services')">
                        {{ __('Services') }}
                    </x-jet-nav-link>
                </div>
                <div class="hidden md:-my-px md:ml-9 md:flex"> <!-- Contact -->
                    <x-jet-nav-link href="{{ route('contact') }}" :active="request()->routeIs('contact')">
                        {{ __('Contact') }}
                    </x-jet-nav-link>
                </div>
                <div class="hidden md:-my-px md:ml-9 md:flex"> <!-- About -->
                  <x-jet-nav-link href="{{ route('about') }}" :active="request()->routeIs('about')">
                      {{ __('About') }}
                  </x-jet-nav-link>
              </div>
            </div>
            <div class="flex justify-between h-16">
                @auth
                <div class="hidden md:flex md:items-center md:ml-6">
                    <!-- Settings Dropdown -->
                    <div class="ml-3 relative">
                        <x-jet-dropdown align="right" width="48">
                            <x-slot name="trigger">
                                @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                <button class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition duration-150 ease-in-out">
                                    <img class="h-8 w-8 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                                </button>
                                @else
                                <span class="inline-flex rounded-md">
                                    <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                                        {{ Auth::user()->name }}
                                        <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                        </svg>
                                    </button>
                                </span>
                                @endif
                            </x-slot>
                            <x-slot name="content">
                                <!-- Account Management -->
                                <div class="block px-4 py-2 text-xs text-gray-400"><!-- Manage Account -->
                                    {{ __('Manage Account') }}
                                </div>
                                <x-jet-dropdown-link href="{{ route('dashboard') }}"><!-- dashboard -->
                                    {{ __('Dashboard') }}
                                </x-jet-dropdown-link>
                                <x-jet-dropdown-link href="{{ route('profile.show') }}"><!-- profile -->
                                    {{ __('Profile') }}
                                </x-jet-dropdown-link>
                                <div class="border-t border-gray-100"></div>
                                <!-- Authentication -->
                                <form method="POST" action="{{ route('logout') }}"><!-- Log Out -->
                                    @csrf
                                    <x-jet-dropdown-link href="{{ route('logout') }}"
                                                         onclick="event.preventDefault();
                                                              this.closest('form').submit();">
                                        {{ __('Log Out') }}
                                    </x-jet-dropdown-link>
                                </form>
                            </x-slot>
                        </x-jet-dropdown>
                    </div>
                </div>
                @else

                <div class="hidden md:-my-px md:ml-7 md:flex"> <!-- Log in -->
                    <x-jet-nav-link href="{{ route('login') }}" :active="request()->routeIs('login')">
                        {{ __('Log in') }}
                    </x-jet-nav-link>
                </div>
                @endauth
                <div class="hidden md:-my-px md:ml-5 md:flex"> <!-- Make an Apppointment -->
                    <a class="inline-flex items-center text-center font-semibold h-12 px-4 my-auto text-sm text-white transition-colors duration-150 bg-yellow-500 rounded-xl focus:shadow-outline hover:bg-yellow-600" href="{{ URL::route('contact') }}#appointment">
                        {!! __('Request an <br> Appointment') !!}
                    </a>
                </div>

            </div>
            <!-- Hamburger -->
            <div class="mr-2 flex items-center z-50 md:hidden ">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 bg-white focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" @click.away="open = false" class="hidden  md:hidden ">
        {{-- <div class="fixed top-0  h-full w-full bg-blue-900 opacity-90" @click='open = false'></div> <!-- like MODAL - blur outside the wrapper --> --}}
        <div class="relative bg-white mx-6 -mt-4 p-4 z-50 rounded-tl-md  rounded-b-md">
          <div class="flex justify-center bg-white pb-4 z-50"> <!-- Make an Apppointment -->
            <a @click='open = false'
            class="inline-flex z-50 items-center h-10 px-4 my-auto text-sm text-white transition-colors duration-150 bg-yellow-500 rounded-xl focus:shadow-outline hover:bg-yellow-600"
            href="{{ URL::route('contact') }}#appointment">
                {{ __('Request an Appointment') }}
            </a>
        </div>
            <div class="flex justify-between  mr-2">
            <div class="bg-white z-50"> <!-- menu Wrapper -->
              <!-- Webpages Links -->
              <div class="block px-4 py-2 text-xs text-gray-400">
                  {{ __('Webpages') }}
              </div>
                <div class="pt-1 pb-2 space-y-1"> <!-- Home -->
                    <x-jet-responsive-nav-link href="{{ route('home') }}" :active="request()->routeIs('home')">
                        {{ __('Home') }}
                    </x-jet-responsive-nav-link>
                </div>
                <div class="pt-1 pb-2 space-y-1"> <!-- Services -->
                    <x-jet-responsive-nav-link href="{{ route('services') }}" :active="request()->routeIs('services')">
                        {{ __('Services') }}
                    </x-jet-responsive-nav-link>
                </div>
                <div class="pt-1 pb-2 space-y-1"> <!-- Contact -->
                    <x-jet-responsive-nav-link href="{{ route('contact') }}" :active="request()->routeIs('contact')">
                        {{ __('Contact') }}
                    </x-jet-responsive-nav-link>
                </div>
                <div class="pt-1 pb-2 space-y-1 "> <!-- About -->
                    <x-jet-responsive-nav-link href="{{ route('about') }}" :active="request()->routeIs('about')">
                        {{ __('About') }}
                    </x-jet-responsive-nav-link>
                </div>
            </div>
            <div class="bg-white z-50"> <!-- account wrapper-->
                <!-- Account Management -->
                <div class="block px-4 py-2 text-xs text-gray-400">
                    {{ __('Manage Your Account') }}
                </div>
                <!-- Responsive Settings Options -->
                @auth
                <div class="pt-4 pb-1">

                    <div class="flex items-center px-4">
                        @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                        <div class="flex-shrink-0 mr-3">
                            <img class="h-10 w-10 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                        </div>
                        @endif
                        <div>
                            <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                            <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
                        </div>
                    </div>
                    <div class="pt-1 pb-2 space-y-1"> <!-- Dashboard -->
                        <x-jet-responsive-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                            {{ __('Dashboard') }}
                        </x-jet-responsive-nav-link>
                    </div>
                    <div class="mt-1  space-y-1">
                        <x-jet-responsive-nav-link href="{{ route('profile.show') }}"
                                                   :active="request()->routeIs('profile.show')">
                            {{ __('Profile') }}
                        </x-jet-responsive-nav-link>

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <x-jet-responsive-nav-link href="{{ route('logout') }}"
                                                       onclick="event.preventDefault();
                                                            this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-jet-responsive-nav-link>
                        </form>
                    </div>
                @else
                <div class="pt-4 pb-1">
                    <div class="pt-1 pb-2 space-y-1"> <!-- Log in -->
                        <x-jet-responsive-nav-link href="{{ route('login') }}" :active="request()->routeIs('login')">
                            {{ __('Log in') }}
                        </x-jet-responsive-nav-link>
                    </div>
                </div>
                @endauth
            </div>
        </div>
        </div>
    </div>
</nav>
