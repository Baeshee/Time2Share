<nav class="u-z-2">
    <div class="menu-icon" onclick="changeIcon()">
        <div class="top"></div>
        <div class="middle"></div>
        <div class="bottom"></div>
    </div>
    <ul class="navigation-menu">
        <li class="navigation-menu__item"><a href="/">Home</a></li>
        <li class="navigation-menu__item"><a href="/dashboard">Account</a></li>
        <li class="navigation-menu__item"><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();">Logout</a>
        </li>
    </ul>
</nav>

<form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
    {{ csrf_field() }}
</form>