@php
    $user = Auth::guard('web')->user() ?? Auth::guard('admin')->user();
@endphp

<nav x-data="{ open: false }" class="border-b border-gray-100 bg-blue-400">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 ">
        <div class="flex justify-between h-fit items-center">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('home') }}">
                        <x-application-logo class="block h-24 w-auto fill-current text-gray-800" />
                    </a>
                </div>
                
                {{-- Barra de Pesquisa --}}
            </div>

            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ms-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="inline-flex items-center border border-black text-sm leading-4 font-medium w-12 h-12 rounded-full overflow-hidden text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                            @if($user)
                                <img src="{{ asset("storage/{$user->foto}") }}" alt="imagem do usuário logado" class="aspect-square object-cover">
                            @else
                                <img src="images/exemplo/usuario_deslogado.png" alt="imagem do usuário deslogado" class="aspect-square object-cover">
                            @endif
                            
                            {{-- <div class="ms-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div> --}}
                        </button>
                    </x-slot>

                    {{-- Dropdown de usuário logado --}}
                    @if($user)
                        <x-slot name="content">
                            
                            @if (Auth::guard('admin')->check())
                                <x-dropdown-link :href="route('admin.profile.edit')">
                                {{ __('Profile') }}
                                </x-dropdown-link>
                            @endif

                            @if (Auth::guard('web')->check())
                                <x-dropdown-link :href="route('profile.edit')">
                                {{ __('Profile') }}
                                </x-dropdown-link>
                            @endif

                            @if (Auth::guard('admin')->check())
                                <x-dropdown-link :href="route('admin.dashboard')">
                                    {{ __('Dashboard') }}
                                </x-dropdown-link>
                            @endif

                            @if (Auth::guard('web')->check())
                                <x-dropdown-link :href="route('dashboard')">
                                    {{ __('Dashboard') }}
                                </x-dropdown-link>
                            @endif

                           

                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                                </x-dropdown-link>
                            </form>
                        </x-slot>
                    
                    {{-- Droppdown do usuário deslogado --}}
                    @else
                        <x-slot name="content">
                            <x-dropdown-link :href="route('login')">
                            {{ __('Login') }}
                            </x-dropdown-link>
                        </x-slot>
                    
                    @endif
                    
                </x-dropdown>
            </div>

            <!-- Hamburger -->
            <div class="-me-2 flex items-center sm:hidden">
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
            @if($user && Auth::guard('admin')->check()))
                <x-responsive-nav-link :href="route('admin.users')" :active="request()->routeIs('admin.users')">
                    {{ __('Users') }}
                </x-responsive-nav-link>
            @endif
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Meus Produtos') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Compras') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Vendas') }}
            </x-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="">
                @if($user)
                    <div class="font-medium text-base text-gray-800">{{ $user->name }}</div>
                    <div class="font-medium text-sm text-gray-500">{{ $user->email }}</div>

                    <div class="mt-3 space-y-1">
                        <x-responsive-nav-link :href="route('profile.edit')">
                            {{ __('Profile') }}
                        </x-responsive-nav-link>
        
                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
        
                            <x-responsive-nav-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-responsive-nav-link>
                        </form>
                    </div>

                @else
                    <x-responsive-nav-link :href="route('login')">
                        {{ __('Login') }}
                    </x-responsive-nav-link>
                @endif
            </div>
        </div>
    </div>
</nav>
