<header>
    <nav>
        <ul class="d-flex">
            <li class="px-5">
                <a class=" {{Route::currentRouteName() == 'home' ? 'active' : ''}} " href="{{ route('home') }}">Home</a>
            </li>
            <li class="px-5">
                <a class=" {{Route::currentRouteName() == 'about' ? 'active' : ''}} " href="{{ route('about') }}">About Us</a>
            </li>
        </ul>
    </nav>
</header>
