<nav class="bg-gray-100 border-collapse border-b-4" x-data="{ open : false}">
    <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8 lg:py-2">
        <div class="relative flex items-center justify-between h-16">

            <!-- Mobile menu button-->
            <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
                <button type="button" x-on:click="open = true"
                    class="inline-flex items-center justify-center p-2 rounded-md text-gray-600 hover:text-white hover:bg-blue-emi focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white"
                    aria-controls="mobile-menu" aria-expanded="false">

                    {{-- <span class="sr-only">Open main menu</span> --}}
                    <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                    <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>

            <div class="flex-1 flex items-center justify-center sm:items-stretch sm:justify-start">
                {{-- Logotipo --}}
                <a href="/" class="flex-shrink-0 flex items-center">
                    <img class="block lg:hidden h-14 w-auto" src="{{ URL::asset('../img/emi-900.png') }}"
                        alt="Workflow">
                    <img class="hidden lg:block h-14 w-auto" src="{{ URL::asset('../img/emi-900.png') }}"
                        alt="Workflow">
                </a>
            </div>

            <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
                {{-- Menu lg --}}
                <div class="relative text-left hidden sm:block sm:ml-6" x-data="{ open : false}">
                    <div>
                        <button x-on:click="open = true" type="button" class="inline-flex justify-center w-full shadow-sm px-2 py-2 bg-gray-100 text-gray-700 hover:bg-blue-emi hover:text-white font-bold" id="menu-button" aria-expanded="true" aria-haspopup="true">
                            CATEGORIAS &nbsp; <i class="m-auto fas fa-angle-down"></i>
                        </button>
                    </div>
                    <div x-show="open" x-on:click.away="open = false" class="origin-top-right absolute right-0 mt-2 w-56 shadow-lg bg-gray-100 ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                        <div class="py-1 grid grid-cols-1" role="none">
                            @foreach ($categories as $category)
                                <a href="{{route('posts.category', $category)}}" class="text-gray-600 px-2 py-2 font-bold hover:bg-blue-emi hover:text-white uppercase">
                                    {{$category->name}}
                                </a>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="hidden sm:block sm:ml-6">
                    <a href="#mision-vision">
                        <button type="button" class="inline-flex justify-center w-full shadow-sm px-2 py-2 bg-gray-100 text-gray-700 hover:bg-blue-emi hover:text-white font-bold">
                            MISIÓN Y VISIÓN
                        </button>
                    </a>
                </div>
                <div class="hidden sm:block sm:ml-6">
                    <a href="#autoridades">
                        <button type="button" class="inline-flex justify-center w-full shadow-sm px-2 py-2 bg-gray-100 text-gray-700 hover:bg-blue-emi hover:text-white font-bold">
                            AUTORIDADES
                        </button>
                    </a>
                </div>
                <div class="hidden sm:block sm:ml-6">
                    <a href="{{route('posts.contacto')}}">
                        <button type="button" class="inline-flex justify-center w-full shadow-sm px-2 py-2 bg-gray-100 text-gray-700 hover:bg-blue-emi hover:text-white font-bold">
                            CONTACTÉNOS
                        </button>
                    </a>
                </div>
            </div>

            @auth
                <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
                    <!-- Profile dropdown -->
                    <div class="ml-3 relative" x-data="{ open : false}">
                        <div>
                            <button x-on:click="open = true" type="button"
                                class="bg-gray-800 flex text-sm rounded-full focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white"
                                id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                                <img class="h-8 w-8 rounded-full" src="{{ auth()->user()->profile_photo_url }}" alt="">
                            </button>
                        </div>

                        <div x-show="open" x-on:click.away="open = false"
                            class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg py-1 bg-white ring-1 ring-black ring-opacity-5 focus:outline-none"
                            role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
                            <!-- Active: "bg-gray-100", Not Active: "" -->
                            <a href="{{ route('profile.show') }}" class="block px-4 py-2 text-sm text-gray-600"
                                role="menuitem" tabindex="-1" id="user-menu-item-0">Your Profile</a>

{{--                             @can('admin.home') --}}
                                <a href="{{ route('admin.home') }}" class="block px-4 py-2 text-sm text-gray-600"
                                    role="menuitem" tabindex="-1" id="user-menu-item-0">Dashboard</a>
{{--                             @endcan --}}

                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <a href="{{ route('logout') }}" class="block px-4 py-2 text-sm text-gray-600"
                                    role="menuitem" tabindex="-1" id="user-menu-item-2" onclick="event.preventDefault();
                                        this.closest('form').submit();">
                                    Sign out
                                </a>
                            </form>

                        </div>
                    </div>

                </div>
            @else
                <!-- This example requires Tailwind CSS v2.0+ -->
                <div class="relative inline-block text-left" x-data="{ open : false}">
                    <div>
                        @can('admin.home')
                            <button x-on:click="open = true" type="button" class="inline-flex justify-center w-full shadow-sm px-2 py-2 bg-gray-100 text-gray-700 hover:bg-blue-emi hover:text-white font-bold" id="menu-button" aria-expanded="true" aria-haspopup="true">
                                <i class="fas fa-sign-in-alt"></i>
                            </button>
                        @endcan
                    </div>
                    <div x-show="open" x-on:click.away="open = false" class="origin-top-right absolute right-0 mt-2 w-56 shadow-lg bg-gray-100 ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                        <div class="py-1" role="none">
                            <a href="{{ route('login') }}"
                                class="text-gray-600 hover:bg-blue-emi hover:text-white block px-3 py-3 text-sm font-bold"
                                aria-current="page">
                                Login
                            </a>
                            <a href="{{ route('register') }}"
                                class="text-gray-600 hover:bg-blue-emi hover:text-white block px-3 py-3 text-sm font-bold"
                                aria-current="page">
                                Register
                            </a>
                        </div>
                    </div>
                </div>
            @endauth
        </div>
    </div>

    <!-- Mobile menu, show/hide based on menu state. -->
    <div class="sm:hidden" id="mobile-menu" x-show="open" x-on:click.away="open = false">
        <div class="px-2 pt-2 pb-3 space-y-1">
            <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
            <a href="{{route('posts.category', $category)}}" class="bg-blue-emi text-white block px-3 py-2 rounded-md text-base font-medium"
                aria-current="page">categorias</a>
            @foreach ($categories as $category)
                <a href="{{route('posts.category', $category)}}"  class="text-gray-700 hover:bg-gray-600 hover:text-white block px-3 py-2 rounded-md text-base font-bold">
                    {{$category->name}}
                </a>
            @endforeach
        </div>
    </div>
</nav>
