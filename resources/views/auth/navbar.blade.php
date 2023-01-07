<nav class="navbar navbar-expand-lg navbar-light bg-transparent" style="padding:0px">
    <!-- Container wrapper -->
    <div class="container-fluid topnav" style="height:100%; background-color: rgba(0, 0, 0, 0.877)">
        <!-- Toggle button -->
        <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarCenteredExample"
            aria-controls="navbarCenteredExample" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>

        <!-- Collapsible wrapper -->
        <div class="collapse navbar-collapse justify-content-center" id="navbarCenteredExample" style="color: white;">
            <a href="{{ route('landing') }}"id="matajer"><img src="{{ asset('images/logotransparent.svg') }}"
                    style="width: 40px; "></a>
            <!-- Left links -->
            <ul class="navbar-nav mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('landing') }}"
                        style="color: white;font-size:20px;">Home</a>
                </li>
                @guest
                    @if (Route::currentRouteName() == 'login')
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ route('register') }}"
                                style="color: white;font-size:20px;"> Register</a>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ route('login') }}"
                                style="color: white;font-size:20px;"> Login</a>
                        </li>
                    @endif

                @endguest

                @auth

                    <li class="nav-item">
                        {{-- <a class="nav-link active" aria-current="page" href="{{route("client.get.cart")}}">My Cart</a> --}}
                        <a class="nav-link active" aria-current="page" href="{{ route('client.get.cart') }}">
                            <i class="fas fa-shopping-cart" style="font-size:28px; color: rgb(255, 255, 255)"></i>
                            @php
                                $quantity = 0;
                                if (isset(Auth::user()->cart)) {
                                    foreach (Auth::user()->cart->Product as $product) {
                                        $quantity += $product->pivot->quantity;
                                    }
                                }
                            @endphp
                            <span class="badge badge-success bg-danger">
                                {{ $quantity }}
                            </span>
                        </a>
                        {{-- <a href="{{ route('client.get.cart') }}" class="btn btn-dark">
                            Profile <span class="badge badge-danger">9</span>
                            <span class="sr-only">unread messages</span>
                        </a> --}}
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('client.wishlist') }}"><i
                                class="fa fa-heart" style="font-size:28px; color:rgb(255, 0, 85);"></i> </a>
                    </li>
                </ul>




                <!-- Settings Dropdown -->
                {{-- <div class="hidden sm:flex sm:items-center sm:ml-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                            <div>{{ Auth::user()->name }}</div>

                            <div class="ml-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link :href="route('profile.edit')">
                            {{ __('Profile') }}
                        </x-dropdown-link>

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
                </x-dropdown>
            </div> --}}

                <!-- Hamburger -->
                {{-- <div class="-mr-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div> --}}

            @endauth
            <!-- Left links -->
        </div>
        <!-- Right elements -->
        @auth


            <div class="d-flex align-items-center">

                <div style="color:black">

                    <a class="nav-link dropdown-toggle inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150"
                        href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        {{ Auth::user()->name }}
                    </a>

                    <div class="sm:flex sm:items-center sm:ml-6">
                        <ul class="dropdown-menu ">
                            <li><a class="dropdown-item" href="{{ route('profile.edit') }}">{{ __('Profile') }}</a></li>
                            <li>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf

                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                        {{ __('Log Out') }}
                                    </a>
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        @endauth


    </div>
    <!-- Collapsible wrapper -->
    {{-- </div> --}}
    <!-- Container wrapper -->
</nav>
