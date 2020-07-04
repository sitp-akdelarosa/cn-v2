<div class="page-header md-shadow-z-1-i navbar navbar-fixed-top">
    <div class="page-header-inner">
        
        <div class="page-logo">
            <a href="{{ route('home') }}">
                <img src="{{ asset('img/pricon-logo-white.png') }}"
                    alt="logo" class="logo-default img-responsive hidden-xs hidden-sm" />
            </a>
            <div class="menu-toggler sidebar-toggler hide"></div>
        </div>
        <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse"
            data-target=".navbar-collapse">
        </a>
        <div class="top-menu">
            <ul class="nav navbar-nav pull-right">

                <li class="dropdown dropdown-quick-sidebar-toggler">
                    <a href="{{ route('logout') }}" class="dropdown-toggle" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                        <i class="icon-logout"></i>
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
            </ul>
        </div>
    </div>
</div>