<li class="nav-item">
    <a
        @class([
        'nav-link',
        'active' => $active
        ])
        href="{{route($routeName)}}">
        {{$tag}}
    </a>
</li>
