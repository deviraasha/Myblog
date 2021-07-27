    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top navbar-expand-lg">
        <div class="container d-flex align-items-center">
            <h1 class="logo me-auto"><a href="{{ route('homepage.home') }}">
                    <img src="{{ asset('assets/img/2.png') }}" alt="" class="img-fluid"></a></h1>
            <nav id="navbar" class="navbar">
                <i class="bi bi-list mobile-nav-toggle"></i>
                <ul>
                    <!-- Search for post:start -->
                    <form class="input-group my-1 p-3" action="{{ route('homepage.search-post') }}" method="GET">
                        <input name="keyword" value="{{ request()->get('keyword') }}" type="search"
                            class="form-control"
                            placeholder="{{ trans('homepage.form_control.input.search.placeholder') }}">
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary" type="submit">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </form>
                    <li><a class="nav-link scrollto"
                            href="{{ route('homepage.home') }}">{{ trans('homepage.menu.home') }}</a>
                    </li>
                    <li><a class="nav-link scrollto"
                            href="{{ route('homepage.categories') }}">{{ trans('homepage.menu.categories') }}</a>
                    </li>
                    {{-- <li><a class="nav-link scrollto"
                            href="{{ route('homepage.tags') }}">{{ trans('homepage.menu.tags') }}</a></li> --}}

                    @auth
                        <li class="dropdown"><a href="#">{{ auth()->user()->name }}<i class="bi bi-chevron-down"></i></a>
                            <ul>
                                <li><a
                                        href="{{ route('dashboard.index') }}">{{ trans('homepage.menu.dashboard') }}</a>
                                </li>
                                <li><a href="{{ route('logout') }}"
                                        onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                        {{ trans('homepage.menu.logout') }}
                                    </a></li>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    <!-- csrf -->
                                    @method('POST')
                                    @csrf
                                </form>
                            </ul>
                        </li>
                    @else
                        <li><a href="{{ route('login') }}"> {{ trans('homepage.menu.login') }}</a></li>
                    @endauth


                    <li class="dropdown">
                        <a href="#">
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
                            <i class="bi bi-chevron-down">
                            </i>
                        </a>
                        <ul>
                            <li><a
                                    href="{{ route('localization.switch', ['language' => 'id']) }}">{{ trans('localization.id') }}</a>
                            </li>
                            <li><a
                                    href="{{ route('localization.switch', ['language' => 'en']) }}">{{ trans('localization.en') }}</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav><!-- .navbar -->
        </div>
    </header><!-- End Header -->
