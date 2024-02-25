<div class="site-mobile-menu site-navbar-target">
    <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
        </div>
    </div>
    <div class="site-mobile-menu-body"></div>
</div>


<header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">

    <div class="container-fluid">
        <div class="d-flex align-items-center">
            <div class="site-logo"><a href="index.html">Workout<span>.Gym</span> </a></div>
            <div class="ml-auto">
                <nav class="site-navigation position-relative text-right" role="navigation">
                    <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                        <li><a href="/" class="nav-link {{ request()->is('/') ? 'active' : '' }}">Beranda</a></li>
                        <li><a href="/classes" class="nav-link {{ request()->is('classes') ? 'active' : '' }}">Kelas</a></li>
                        <li><a href="/jadwal" class="nav-link {{ request()->is('jadwal') ? 'active' : '' }}">Jadwal</a></li>
                        <li><a href="/pelatih" class="nav-link {{ request()->is('pelatih') ? 'active' : '' }}">Pelatih</a></li>
                        <li><a href="/tentang" class="nav-link {{ request()->is('tentang') ? 'active' : '' }}">Tentang</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>

</header>
