<header>
    <nav>
        <ul class="d-flex">
            <li class="px-5">
                <a class=" {{Route::currentRouteName() == 'home' || Route::currentRouteName() == 'descriptionMovie'  ? 'active' : ''}} " href="{{ route('home') }}">Home</a>
            </li>
            <li class="px-5">
                <a class=" {{Route::currentRouteName() == 'about' ? 'active' : '' }} " href="{{ route('about') }}">About Us</a>
            </li>
            <li class="px-5">
                <a class=" {{Route::currentRouteName() == 'contacts' ? 'active' : '' }} " href="{{ route('contacts') }}">Contatti</a>
            </li>
        </ul>
    </nav>
</header>
