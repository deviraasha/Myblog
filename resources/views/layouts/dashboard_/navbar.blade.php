                <!-- Navbar -->
                <nav class="navbar navbar-expand-lg bg-primary navbar-absolute fixed-top">
                    <div class="container">
                        <div class="navbar-wrapper">
                            <a class="navbar-brand" href="{{ route('homepage.home') }}">
                                Kecerdasan Majemuk</a>
                        </div>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="navbar-toggler-icon icon-bar"></span>
                            <span class="navbar-toggler-icon icon-bar"></span>
                            <span class="navbar-toggler-icon icon-bar"></span>
                        </button>
                        <div class="collapse navbar-collapse justify-content-end pr-5">
                            <ul class="navbar-nav">
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">
                                        <span>
                                            @switch(app()->getLocale())
                                                @case('id')
                                                    <i class="flag-icon flag-icon-id"></i>
                                                @break
                                                @case('en')
                                                    <i class="flag-icon flag-icon-gb"></i>
                                                @break
                                            @endswitch
                                        </span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right"
                                        aria-labelledby="navbarDropdownMenuLink">
                                        <a href="{{ route('localization.switch', ['language' => 'id']) }}"
                                            class="dropdown-item">
                                            {{ trans('localization.id') }}
                                        </a>
                                        <a href="{{ route('localization.switch', ['language' => 'en']) }}"
                                            class="dropdown-item">
                                            {{ trans('localization.en') }}
                                        </a>
                                    </div>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="dropdown-toggle nav-link" href="javascript:;" id="navbarDropdownProfile"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">face</i>
                                        {{ Auth::user()->name }}
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right"
                                        aria-labelledby="navbarDropdownProfile">
                                        <a class="dropdown-item"
                                            href="{{ route('homepage.home') }}">{{ trans('dashboard.link.homepage') }}</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">{{ trans('dashboard.link.logout') }}</a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
