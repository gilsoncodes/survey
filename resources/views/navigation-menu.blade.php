<nav x-data="{ open: false, top: true  }" class="fixed z-10 w-full bg-white border-b border-gray-100"><!-- fixed -->
	<x-top-navigation />
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 md:px-2 lg:px-8">
        <div class="flex justify-between h-16 ">
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
												<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
                        {{ __('Home') }}
                    </x-jet-nav-link>
                </div>
                <div class="hidden md:-my-px md:ml-9 md:flex"> <!-- Services -->
                    <x-jet-nav-link href="{{ route('services') }}" :active="request()->routeIs('services')">
												<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                        {{ __('Services') }}
                    </x-jet-nav-link>
                </div>
                <div class="hidden md:-my-px md:ml-9 md:flex"> <!-- Contact -->
                    <x-jet-nav-link href="{{ route('contact') }}" :active="request()->routeIs('contact')">
												<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path></svg>
                        {{ __('Contact') }}
                    </x-jet-nav-link>
                </div>
                <div class="hidden md:-my-px md:ml-9 md:flex"> <!-- About -->
                  <x-jet-nav-link href="{{ route('about') }}" :active="request()->routeIs('about')">
											<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
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
											<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"></path></svg>
                        {{ __('Log in') }}
                    </x-jet-nav-link>
                </div>
                @endauth
                <div class="hidden md:-my-px md:ml-7 md:flex"> <!-- Make an Apppointment -->
                    <a class="inline-flex items-center text-center font-semibold h-12 px-4 my-auto text-sm text-white transition-colors duration-150 bg-yellow-500 rounded-xl focus:shadow-outline hover:bg-yellow-600"
										href="{{ URL::route('contact') }}#appointment">
                        {!! __('Request an <br> Appointment') !!}
                    </a>
                </div>
            </div>
            <!-- Hamburger -->
            <div class="mr-2 flex items-center z-20 md:hidden ">
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
    <div :class="{'block': open, 'hidden': ! open}" @click.away="open = false" class="hidden  md:hidden z-20">
        {{-- <div class="fixed top-0  h-full w-full bg-blue-900 opacity-90" @click='open = false'></div> <!-- like MODAL - blur outside the wrapper --> --}}
        <div class="relative bg-white mx-6 -mt-4 p-4 rounded-tl-md  rounded-b-md">
          <div class="flex justify-center bg-white pb-4 "> <!-- Make an Apppointment -->
            <a @click='open = false'
            class="inline-flex  items-center h-10 px-4 my-auto text-sm text-white transition-colors duration-150 bg-yellow-500 rounded-xl focus:shadow-outline hover:bg-yellow-600"
            href="{{ URL::route('contact') }}#appointment">
                {{ __('Request an Appointment') }}
            </a>
        </div>
            <div class="flex justify-between  mr-2">
            <div class="bg-white "> <!-- menu Wrapper -->
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
            <div class="bg-white"> <!-- account wrapper-->
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
