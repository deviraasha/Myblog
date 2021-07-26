<nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
    <div class="sb-sidenav-menu">
        <div class="nav">
            {{-- link Dashbourd --}}
            <a class="nav-link {{ set_active('dashboard.index') }}" href="{{ route('dashboard.index') }}">
                <div class="sb-nav-link-icon">
                    <i class="fas fa-tachometer-alt"></i>
                </div>
                {{ trans('dashboard.link.dashboard') }}
            </a>
            <div class="sb-sidenav-menu-heading">{{ trans('dashboard.menu.master') }}</div>
            {{-- Post sidebar --}}
            <a class="nav-link {{ set_active(['posts.index', 'posts.create', 'posts.edit']) }}"
                href="{{ route('posts.index') }}">
                <div class="sb-nav-link-icon">
                    <i class="far fa-newspaper"></i>
                </div>
                {{ trans('dashboard.link.posts') }}
            </a>
            {{-- Sidebar Categories --}}
            <a class="nav-link {{ set_active(['categries.index', 'categories.create', 'categories.edit', 'categories.show']) }}"
                href="{{ route('categories.index') }}">
                <div class="sb-nav-link-icon">
                    <i class="fas fa-bookmark"></i>
                </div>
                {{ trans('dashboard.link.categories') }}
            </a>
            {{-- sidebar tags --}}
            <a class="nav-link {{ set_active(['tags.index', 'tags.create', 'tags.edit']) }}"
                href="{{ route('tags.index') }}">
                <div class="sb-nav-link-icon">
                    <i class="fas fa-tags"></i>
                </div>
                {{ trans('dashboard.link.tags') }}
            </a>
            <div class="sb-sidenav-menu-heading">{{ trans('dashboard.menu.user_permission') }}</div>

            {{-- users --}}
            <a class="nav-link {{ set_active(['users.index', 'users.edit']) }}" href="{{ route('users.index') }}">
                <div class="sb-nav-link-icon">
                    <i class="fas fa-user"></i>
                </div>
                {{ trans('dashboard.link.users') }}
            </a>

            {{-- Roles --}}
            <a class="nav-link {{ set_active(['roles.index', 'roles.show', 'roles.create', 'roles.edit']) }}"
                href="{{ route('roles.index') }}">
                <div class="sb-nav-link-icon">
                    <i class="fas fa-user-shield"></i>
                </div>
                {{ trans('dashboard.link.roles') }}
            </a>

            <div class="sb-sidenav-menu-heading">{{ trans('dashboard.menu.setting') }}</div>
            <a class="nav-link" href="#">
                <div class="sb-nav-link-icon">
                    <i class="fas fa-photo-video"></i>
                </div>
                {{ trans('dashboard.link.file_manager') }}
            </a>

        </div>
    </div>
    <div class="sb-sidenav-footer">
        <div class="small">{{ trans('dashboard.label.logged_in_as') }}</div>
        {{ Auth::user()->name }}
        <!-- show username -->
    </div>
</nav>
