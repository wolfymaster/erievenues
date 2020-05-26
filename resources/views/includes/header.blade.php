<nav class="navbar" role="navigation" aria-label="main navigation">
    <div class="navbar-brand">
        <div class="brand-text">
            <a href="/" style="color:inherit;">
                ERI<span class="close-text">EV</span>ENUES
            </a>
        </div>

        <a role="button" class="navbar-burger burger" data-target="navMenu" aria-label="menu" aria-expanded="false">
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
        </a>
    </div>

    <div id="navMenu" class="navbar-menu">
        <div class="navbar-start">
            <a href="/" class="navbar-item">
                Home
            </a>

            <a class="navbar-item">
                Contact
            </a>

            <div class="navbar-item has-dropdown is-hoverable">
                <a class="navbar-link">
                    Venues
                </a>

                <div class="navbar-dropdown">
                    <a href="/venues" class="navbar-item">
                        Browse Venues
                    </a>
                    <a class="navbar-item">
                        Add Venue
                    </a>
                    <a class="navbar-item">
                        Plan Event
                    </a>
                    <hr class="navbar-divider">
                    <a class="navbar-item">
                        Report an issue
                    </a>
                </div>
            </div>
        </div>

        <div class="navbar-end">
            <!-- Authentication Links -->
            @guest
                <div class="navbar-item">
                    <div class="buttons">
                        @if (Route::has('register'))
                            <a class="button" id="sign-up-button">
                                <strong>Sign up</strong>
                            </a>
                        @endif
                        <a href="/login" class="button has-text-black" id="login-button">
                            Log In
                        </a>
                    </div>
                </div>
            @else
                <div class="navbar-item has-dropdown is-hoverable">
                    <a class="navbar-link" href="#">{{ Auth::user()->name }}</a>
                    <div class="navbar-dropdown is-right">
                        <a class="navbar-item" href="">View Account</a>

                        <hr class="navbar-divider">

                        <a class="navbar-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                           document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </div>
            @endguest
        </div>
    </div>
</nav>