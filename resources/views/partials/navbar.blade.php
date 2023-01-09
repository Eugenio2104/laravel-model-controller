<div class="navbar">

    <ul class="d-flex">
        <li class="px-5 {{ Route::currentRouteName() == 'home' ? 'active' : '' }}"><a href="{{ route('home') }}">Home</a>
        </li>
        <li class="px-5 {{ Route::currentRouteName() == 'about' ? 'active' : '' }}"><a href="{{ route('about') }}">About
                us</a></li>
        <li class="px-5 {{ Route::currentRouteName() == 'movies' ? 'active' : '' }}"><a
                href="{{ route('movies') }}">Movies</a></li>
    </ul>
</div>
