<header id="header" class="header">
    <div class="top-left">
        <div class="navbar-header">
            <a class="navbar-brand" href="{{ route('home')}}">SOCIALITE LOGIN</a>
            {{-- <a class="navbar-brand hidden" href="./"><img src="images/logo2.png" alt="Logo"></a> --}}
            <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
        </div>
    </div>
    <div class="top-right">
        <div class="header-menu">            
            <div class="user-area dropdown float-right">
                <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    {{-- <img class="user-avatar rounded-circle" src="images/admin.jpg" alt="User Avatar"> --}}
                    <i class="fa fa-user fa-2x"></i>
                </a>
                <div class="user-menu dropdown-menu">        
                    <a class="nav-link" href="{{ route('admin_logout') }}"><i class="fa fa-power -off"></i>Logout</a>
                </div>
            </div>
        </div>
    </div>
</header>