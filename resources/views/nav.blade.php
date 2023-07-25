<nav>
    <ul>
        <li> <a href="/"> Home </a></li>
        <li> <a href="/formAddCar"> Add Cars</a></li>
        <li> <a href="/showCoches"> Show Cars</a></li>
        @auth
            {{-- Mostar enlances usarios logeados --}}
            <li>
                <x-nav-link href="{{ route('dashboard')}}" :active="request()->routeIs('dashboard')">
                    {{__('Dashborad')}}
                </x-nav>
            </li>
        @else
            {{-- Para los no logeados --}}
            <li>
                <x-nav-link href="{{ route('login')}}" :active="request()->routeIs('login')">
                    {{__('Log in')}}
                </x-nav-link>
            </li>
            <li>
                <x-nav-link href="{{ route('register')}}" :active="request()->routeIs('register')">
                    {{__('Register')}}
                </x-nav-link>
            </li>
        @endauth
    </ul>
</nav>

