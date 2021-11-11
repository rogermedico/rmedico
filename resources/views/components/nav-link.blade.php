<li class="nav-item">
    <a
        @class([
        'nav-link',
        'menu-link-effect',
        'active' => $active
        ])
        href="{{route($routeName)}}">
        <span>{{$tag}}</span>
    </a>
</li>
