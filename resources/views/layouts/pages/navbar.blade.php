<nav class="navbar navbar-transparent navbar-color-on-scroll fixed-top navbar-expand-lg" color-on-scroll="100"
    id="sectionsNav">
    <div class="container">
        <div class="navbar-translate">
            <a class="navbar-brand" href="{{ route('homepage.home') }}">
                Kecerdasan Majemuk</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="sr-only">Toggle navigation</span>
                <span class="navbar-toggler-icon"></span>
                <span class="navbar-toggler-icon"></span>
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse">

            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <form class="form-inline ml-auto" action="{{ route('homepage.search-post') }}" method="GET">
                        <div class="form-group has-white">
                            <input type="text" class="form-control"
                                placeholder="{{ trans('homepage.form_control.input.search.placeholder') }}"
                                name="keyword" value="{{ request()->get('keyword') }}" type="search">
                        </div>
                        <button type="submit" class="btn btn-white btn-raised btn-fab btn-round">
                            <i class="material-icons">search</i>
                        </button>
                    </form>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('homepage.home') }}">
                        {{ trans('homepage.menu.home') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('homepage.categories') }}">
                        {{ trans('homepage.menu.categories') }}
                    </a>
                </li>
                <li class="dropdown nav-item">
                    <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
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
                    <div class="dropdown-menu dropdown-with-icons">
                        <a href="{{ route('localization.switch', ['language' => 'id']) }}" class="dropdown-item">
                            {{ trans('localization.id') }}
                        </a>
                        <a href="{{ route('localization.switch', ['language' => 'en']) }}" class="dropdown-item">
                            {{ trans('localization.en') }}
                        </a>
                    </div>
                </li>
                @auth
                    <li class="dropdown nav-item">
                        <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                            <i class="material-icons">face</i>{{ auth()->user()->name }}
                        </a>
                        <div class="dropdown-menu dropdown-with-icons">
                            <a href="{{ route('dashboard.index') }}" class="dropdown-item">
                                {{ trans('homepage.menu.dashboard') }}
                            </a>
                            <a href="{{ route('logout') }}"
                                onclick="event.preventDefault();document.getElementById('logout-form').submit();"
                                class="dropdown-item">
                                {{ trans('homepage.menu.logout') }}
                            </a>
                        </div>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            <!-- csrf -->
                            @method('POST')
                            @csrf
                        </form>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">
                            {{ trans('homepage.menu.login') }}
                        </a>
                    </li>
                @endauth



            </ul>
        </div>
    </div>
</nav>
