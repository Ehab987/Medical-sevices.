<nav class="navbar navbar-expand-md navbar-dark  shadow-sm navStyle">
    <h2 class="brand">Admin</h2>
    <div class="container">
        
        <a class="link" href="{{ url('/') }}">
            Home
        </a>
        
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">
                     {{-- dropdown for Cities --}}
                     <li class="dropdown nav-item ml-4 mr-2">
                        <a href="#" class="nav-link dropdown-toggle link" data-toggle="dropdown">Cities<span class="caret"></span></a>
    
                        <ul class="dropdown-menu" role="menu">
                            <li><a class="dropdown-item link" href="{{route('admin.add.City')}}">Add </a></li>
                            <li><a class="dropdown-item link" href="{{route('admin.All.Cities')}}">View All</a></li>
                        </ul>
                    </li>
    
                    {{-- dropdown for Services --}}
                    <li class="dropdown nav-item mr-2">
                        <a href="#" class="nav-link dropdown-toggle link" data-toggle="dropdown">Services<span class="caret"></span></a>
    
                        <ul class="dropdown-menu" role="menu">
                            <li><a class="dropdown-item link" href="{{route('admin.add.Service')}}">Add </a></li>
                            <li><a class="dropdown-item link" href="{{route('admin.All.Services')}}">View All</a></li>
                        </ul>
                    </li>
                    
                    {{-- dropdown for Orders --}}
                    <li class="dropdown nav-item">
                        <a href="#" class="nav-link dropdown-toggle link" data-toggle="dropdown">Orders<span class="caret"></span></a>
    
                        <ul class="dropdown-menu" role="menu">
                                <li><a class="dropdown-item link" href="{{route('admin.All.Orders')}}">View All</a></li>
                        </ul>
                    </li>
            </ul>
         
            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">

           
                
                <!-- Authentication Links -->

                @guest
                    <li class="nav-item">
                        <a class="nav-link link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item link" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest

            </ul>
        </div>
    </div>
</nav>