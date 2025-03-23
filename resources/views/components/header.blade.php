<header id="header" id="home">
    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-6 col-4 header-top-left no-padding">
                    <a href="https://wa.me/+6281296287336" target="_blank">+62 812 9628 7336</a>
                    <a href="mailto:soli-interior@gmail.com">soli-interior@gmail.com</a>
                </div>
                <div class="col-lg-6 col-sm-6 col-8 header-top-right no-padding">
                    <ul>
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                        <li><a href="#"><i class="fa fa-behance"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container main-menu">
        <div class="row align-items-center justify-content-between d-flex">
            <div id="logo">
                <a href="index.html"><img src="{{ asset('img/logo.png') }}" alt="" title="" /></a>
            </div>
            <nav id="nav-menu-container">
                <ul class="nav-menu">
                    <li class="nav-item {{ Request::is('/') ? 'active' : '' }}"><a href="/">Beranda</a></li>
                    <li><a href="#">Profil</a></li>
                    <li class="nav-item {{ Request::is('services') ? 'active' : '' }}"><a href="/services">Layanan</a></li>
                    <li class="nav-item {{ Request::is('portofolios*') ? 'active' : '' }}"><a href="/portofolios">Portofolio</a></li>	
                    <li class="nav-item {{ Request::is('contact') ? 'active' : '' }}"><a href="/contact">Kontak</a></li>
                </ul>
            </nav>
        </div>
    </div>
</header>