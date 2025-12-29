<li class="visible_list {{ request()->routeIs($route) ? 'menu-active' : '' }}">
    <a href="{{ $href }}" class="nav-link {{ request()->routeIs($route) ? 'active' : '' }}">
        <span class="title">{{ $slot }}</span>
    </a>
</li>
