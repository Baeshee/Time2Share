<nav class="u-z-2">
    <div class="menu-icon" onclick="changeIcon()">
        <div class="top"></div>
        <div class="middle"></div>
        <div class="bottom"></div>
    </div>
    <ul class="navigation-menu">
        <li class="navigation-menu__item"><a href="/">Time2Share <i class="fas fa-history"></i></a></li>
        <li class="navigation-menu__item"><a href="/dashboard">Account</a></li>
    </ul>
</nav>

<form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
    {{ csrf_field() }}
</form>