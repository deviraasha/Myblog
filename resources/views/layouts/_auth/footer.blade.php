        <footer class="footer">
            <div class="container">
                <nav class="float-left">
                    <ul>
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
                    </ul>
                </nav>
                <div class="copyright float-right">
                    &copy;
                    <script>
                        document.write(new Date().getFullYear())
                    </script>, made with <i class="material-icons">favorite</i> by
                    <a href="https://www.creative-tim.com/" target="_blank">Creative Tim</a> for a better web.
                </div>
            </div>
        </footer>
