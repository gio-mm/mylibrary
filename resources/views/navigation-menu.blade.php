<nav x-data="{ open: false }" class="bg-transparent top-0 z-50 absolute w-full">
    <!-- Primary Navigation Menu -->

    {{-- @dd( Auth::user()->name) --}}
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="flex-shrink-0 flex items-center">
                    <a href="{{ route('home') }}">
                        {{-- <x-jet-application-mark class="block h-9 w-auto" /> --}}
                    </a>
                </div>
             
                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ml-5 sm:flex">
                    <x-jet-nav-link href="{{ route('home') }}" :active="request()->routeIs('home')">
                        {{ __('Home') }}
                    </x-jet-nav-link>
                </div>
                
            </div>
     

            
            <div class="flex">
                <div class="hidden space-x-8 sm:-my-px sm:ml-5 sm:flex">
                    
                 @if (Route::has('login'))
                  
                       @auth
                            <x-jet-nav-link href="{{ route('mybooks') }}" :active="request()->routeIs('mybooks')">
                                {{ __('MyBooks') }}
                            </x-jet-nav-link>
                        @else
                                @if (Route::has('login'))
                                <x-jet-nav-link href="{{ route('login') }}" :active="request()->routeIs('login')">
                                    {{ __('Login') }}
                                </x-jet-nav-link> 
                                @endif
                                @if (Route::has('register'))
                                <x-jet-nav-link href="{{ route('register') }}" :active="request()->routeIs('register')">
                                    {{ __('Register') }}
                                </x-jet-nav-link> 
                                @endif
                            
                         @endauth
                @endif
              
                </div>
                <div class="hidden sm:flex sm:items-center sm:ml-6">
               
                    <!-- Teams Dropdown -->
                    {{-- @if (Laravel\Jetstream\Jetstream::hasTeamFeatures())
                        <div class="ml-3 relative">
                            <x-jet-dropdown align="right" width="160">
                              
                            </x-jet-dropdown>
                        </div>
                    @endif --}}
    
                    <!-- Settings Dropdown -->
                    @auth
                    <div class="ml-3 relative">
                        <x-jet-dropdown align="right" width="48">
                            <x-slot name="trigger">
                                @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                    <button class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-green-300 transition duration-150 ease-in-out">
                                        <img class="h-8 w-8 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                                    </button>
                                @else
                                    <span class="inline-flex rounded-md">
                                        <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium  text-yellow-300 bg-none hover:text-black-700 focus:outline-none transition ease-in-out duration-150">
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
                                <div class="block px-4 py-2 text-xs  text-gray-500">
                                    {{ __('Manage Account') }}
                                </div>
    
                                <x-jet-dropdown-link href="{{ route('profile.show') }}">
                                    {{ __('Profile') }}
                                </x-jet-dropdown-link>
    
                                @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                                    <x-jet-dropdown-link href="{{ route('api-tokens.index') }}">
                                        {{ __('API Tokens') }}
                                    </x-jet-dropdown-link>
                                @endif
    
                                <div class="border-t w-1/2 ml-auto border-gray-800"></div>
    
                                <!-- Authentication -->
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
    
                                    <x-jet-dropdown-link href="{{ route('logout') }}"
                                             onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                        {{ __('Logout') }}
                                    </x-jet-dropdown-link>
                                </form>
                            </x-slot>
                        </x-jet-dropdown>
                    </div>
                    @endauth
                   
                </div>
    
            </div>
           
            <!-- Hamburger -->
            <div class="-mr-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-jet-responsive-nav-link href="{{ route('home') }}" :active="request()->routeIs('home')">
                {{ __('Home') }}
            </x-jet-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
       
    </div>
</nav>
