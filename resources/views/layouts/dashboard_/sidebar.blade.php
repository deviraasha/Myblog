<div class="sidebar-wrapper">
    <ul class="nav">
        <li class="nav-item {{ set_active('dashboard.index') }}">
            <a class="nav-link" href="{{ route('dashboard.index') }}">
                <i class="material-icons">dashboard</i>
                <p>{{ trans('dashboard.link.dashboard') }}</p>
            </a>
        </li>
        <li class="nav-item pl-3 pt-3">
            <p>{{ trans('dashboard.menu.master') }}</p>
            <div class="dropdown-divider"></div>
        </li>
        <li class="nav-item ">
            {{-- Post sidebar --}}
            @can('manage_posts')
                <a class="nav-link {{ set_active(['posts.index', 'posts.create', 'posts.edit']) }}"
                    href="{{ route('posts.index') }}">
                    <i class="material-icons">library_books</i>
                    <p>{{ trans('dashboard.link.posts') }}</p>
                </a>
            @endcan
        </li>
        <li class="nav-item ">
            {{-- Sidebar Categories --}}
            @can('manage_categories')
                <a class="nav-link {{ set_active(['categries.index', 'categories.create', 'categories.edit', 'categories.show']) }}"
                    href="{{ route('categories.index') }}">
                    <i class="material-icons">content_copy</i>
                    <p>{{ trans('dashboard.link.categories') }}</p>
                </a>
            @endcan
        </li>
        <li class="nav-item ">
            {{-- sidebar tags --}}
            @can('manage_tags')
                <a class="nav-link {{ set_active(['tags.index', 'tags.create', 'tags.edit']) }}"
                    href="{{ route('tags.index') }}">
                    <i class="material-icons">local_offer</i>
                    <p>{{ trans('dashboard.link.tags') }}</p>
                </a>
            @endcan
        </li>

        <li class="nav-item pl-3 pt-2">
            <p>{{ trans('dashboard.menu.user_permission') }}</p>
            <div class="dropdown-divider"></div>
        </li>

        <li class="nav-item ">
            {{-- users --}}
            @can('manage_users')
                <a class="nav-link {{ set_active(['users.index', 'users.edit']) }}" href="{{ route('users.index') }}">
                    <i class="material-icons">person</i>
                    <p>{{ trans('dashboard.link.users') }}</p>
                </a>
            @endcan
        </li>
        <li class="nav-item ">
            {{-- Roles --}}
            @can('manage_roles')
                <a class="nav-link {{ set_active(['roles.index', 'roles.show', 'roles.create', 'roles.edit']) }}"
                    href="{{ route('roles.index') }}">
                    <i class="material-icons">content_paste</i>
                    <p>{{ trans('dashboard.link.roles') }}</p>
                </a>
            @endcan
        </li>
        <li class="nav-item pl-3 pt-2">
            <p>{{ trans('dashboard.menu.setting') }}</p>
            <div class="dropdown-divider"></div>
        </li>
        <li class="nav-item ">
            {{-- file manager --}}
            <a class="nav-link {{ set_active(['filemanager.index']) }}" href="{{ route('filemanager.index') }}">
                <i class="material-icons">unarchive</i>
                <p>{{ trans('dashboard.link.file_manager') }}</p>
            </a>
        </li>
        <li class="nav-item pl-3">
            <div class="small">{{ trans('dashboard.label.logged_in_as') }}</div>
            {{ Auth::user()->name }}
            <!-- show username -->
        </li>
    </ul>
</div>
</div>
