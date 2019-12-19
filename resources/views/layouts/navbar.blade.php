<div class="col-md-12 navbar1" id="navbar1">
    <div class="container">
        <ul class="justify-content-md-center">
            <li class="cari col-md-5">
                <a href="#"><i class="fas fa-search search "></i></a>
                <input type="text" name="firstname" placeholder=" Cari">
            </li>
            <li class="sosmed col-md-5">
                <a href="#">
                    <div id="fb"><i class="fab fa-facebook-f"></i></div>
                </a>
                <a href="#">
                    <div id="twitter"><i class="fab fa-twitter"></i></div>
                </a>
                <a href="#">
                    <div id="ig"><i class="fab fa-instagram"></i></div>
                </a>
            </li>
        </ul>
    </div>
</div>
<div class="navbar col-md-12" id="navbar">
    <div class="container">
        <div class="logo col-md-6">
            <a href="{{ url('/') }}"><img id="logo" src="{{ asset('img/logo.png') }}"></a>
        </div>
        <ul class="menu col-md-6" id="menu">
            @guest
            <li><a class="dropbtn {{ Request::is('contact') ? 'active' : '' }}" id="dropbtn6"
                    href="{{ url('/contact') }}">Kontak</a></li>
            <li><a class="dropbtn {{ Request::is('gallery') ? 'active' : '' }}" id="dropbtn5"
                    href="{{ url('/gallery') }}">Galeri</a></li>
            <li>
                <a class="dropbtn {{ Request::is('news') || Request::is('prestations') || Request::is('articles') || Request::is('schedules') ? 'active' : '' }}"
                    id="dropbtn4">Media Informasi</a>
                <div class="dropdown-content" id="dropdown-content1">
                    <a class="dropdown-item" href="{{ url('/news') }}">Berita</a>
                    <a class="dropdown-item" href="{{ url('/prestations') }}">Prestasi</a>
                    <a class="dropdown-item" href="{{ url('/articles') }}">Artikel</a>
                    <a class="dropdown-item" href="{{ url('/schedules') }}">Agenda Kegiatan</a>
                </div>
            </li>
            <li>
                <a class="dropbtn {{ Request::is('about') || Request::is('history') || Request::is('facility') ? 'active' : '' }}"
                    id="dropbtn3">Profil</a>
                <div class="dropdown-content" id="dropdown-content2">
                    <a class="dropdown-item" href="{{ url('/about') }}">Tentang</a>
                    <a class="dropdown-item" href="{{ url('/history') }}">Sejarah</a>
                    <a class="dropdown-item" href="{{ url('/facility') }}">Fasilitas</a>
                </div>
            </li>
            <li>
                <a class="dropbtn" id="dropbtn2">Unit</a>
                <div class="dropdown-content" id="dropdown-content3">
                    <a class="dropdown-item" href="http://pgtk.bpiedu.id/" target="_blank">DG - PGTK BPI</a>
                    <a class="dropdown-item" href="http://sd.bpiedu.id/" target="_blank">SD BPI</a>
                    <a class="dropdown-item" href="http://smpbpi1bandung.sch.id/" target="_blank">SMP BPI 1</a>
                    <a class="dropdown-item" href="http://smasbpi1bdg.net/" target="_blank">SMA BPI 1</a>
                    <a class="dropdown-item" href="http://smabpi2bandung.sch.id/" target="_blank">SMA BPI 2</a>
                    <a class="dropdown-item" href="http://smkbpi.sch.id/" target="_blank">SMK BPI</a>
                </div>
            </li>
            <li><a class="dropbtn {{ Request::is('/') ? 'active' : '' }}" id="dropbtn1" href="{{ url('/') }}">Home</a>
            </li>
            @else
            <li>
                <a id="dropbtn1" class="dropbtn">{{ Auth::user()->name }}</a>
                <div class="dropdown-content">
                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
                </div>
            </li>
            @if(Auth::user()->role === 2)
            <li>
                <a class="dropbtn" href="{{ url('/admin/view') }}">Lihat Semua</a>
                <div class="dropdown-content">
                    <a class="dropdown-item" href="{{ url('/admin/view/units') }}">Unit</a>
                    <a class="dropdown-item" href="{{ url('/admin/view/schedules') }}">Agenda</a>
                    <a class="dropdown-item" href="{{ url('/admin/view/articles') }}">Artikel</a>
                    <a class="dropdown-item" href="{{ url('/admin/view/news') }}">Berita</a>
                    <a class="dropdown-item" href="{{ url('/admin/view/prestations') }}">Prestasi</a>
                    <a class="dropdown-item" href="{{ url('/admin/view/gallery') }}">Galeri</a>
                </div>
            </li>
            <li>
                <a class="dropbtn" href="{{ url('/admin/post') }}">Postingan</a>
                <div class="dropdown-content">
                    <a class="dropdown-item" href="{{ url('/admin/post/schedules') }}">Agenda</a>
                    <a class="dropdown-item" href="{{ url('/admin/post/articles') }}">Artikel</a>
                    <a class="dropdown-item" href="{{ url('/admin/post/news') }}">Berita</a>
                    <a class="dropdown-item" href="{{ url('/admin/post/prestations') }}">Prestasi</a>
                    <a class="dropdown-item" href="{{ url('/admin/post/gallery') }}">Galeri</a>
                </div>
            </li>
            <li><a class="dropbtn" href="{{ url('/admin/messages') }}">Messages</a></li>
            <li><a class="dropbtn" href="{{ url('/admin') }}">Home</a></li>
            @elseif(Auth::user()->role > 0)
            <li><a class="dropbtn" id="notif-master" href="{{ url('/home/notification') }}">Notification</a></li>
            <li>
                <a class="dropbtn" href="{{ route('home') }}">Home</a>
                <div class="dropdown-content">
                    <a class="dropdown-item" href="{{ url('home/schedules') }}">Agenda</a>
                    <a class="dropdown-item" href="{{ url('home/articles') }}">Artikel</a>
                    <a class="dropdown-item" href="{{ url('home/news') }}">Berita</a>
                    <a class="dropdown-item" href="{{ url('home/prestations') }}">Prestasi</a>
                    <a class="dropdown-item" href="{{ url('home/gallery') }}">Galeri</a>
                </div>
            </li>
            @endif
            @endguest
        </ul>
    </div>
</div>
<div class="navbar-responsive col-md-12" id="navbar-responsive">
    <div class="logo">
        <a href="{{ asset('img/icon.png') }}"><img src="{{ asset('img/logo.png') }}"></a>
    </div>
    <div class="bungkus-menu">
        <div id="container" class="menu-responsive" onclick="openNav(this)" class="fade">
            <div class="bar1"></div>
            <div class="bar2"></div>
            <div class="bar3"></div>
        </div>
    </div>
</div>
<div id="mySidenav" class="sidenav">
    <ul>
        @guest
        <li class="cari">
            <a href="#"><i class="fas fa-search search "></i></a>
            <input type="text" id="fname" name="firstname" placeholder=" Cari">
        </li>
        <li><a href="{{ url('/') }}" class="content-sidenav {{ Request::is('/') ? 'active' : '' }}">Home</a>
        </li>
        <li>
            <a id="dropdown-responsive1" class="content-sidenav dropdown-responsive" onclick="openMenu(this)">Unit<i
                    class="fas fa-chevron-right arrow-dropdown-responsive" id="arrow-dropdown-responsive1"></i></a>
            <div class="content-dropdown-responsive" id="content-dropdown-responsive1">
                <a class="dropdown-item-responsive" href="http://pgtk.bpiedu.id/" target="_blank">DG - PGTK BPI</a>
                <a class="dropdown-item-responsive" href="http://sd.bpiedu.id/" target="_blank">SD BPI</a>
                <a class="dropdown-item-responsive" href="http://smpbpi1bandung.sch.id/" target="_blank">SMP BPI 1</a>
                <a class="dropdown-item-responsive" href="http://smasbpi1bdg.net/" target="_blank">SMA BPI 1</a>
                <a class="dropdown-item-responsive" href="http://smabpi2bandung.sch.id/" target="_blank">SMA BPI 2</a>
                <a class="dropdown-item-responsive" href="http://smkbpi.sch.id/" target="_blank">SMK BPI </a>
            </div>
        </li>
        <li>
            <a id="dropdown-responsive2"
                class="content-sidenav dropdown-responsive {{ Request::is('about') || Request::is('history') || Request::is('facility') ? 'active' : '' }}"
                onclick="openMenu2(this)">Profil<i class="fas fa-chevron-right arrow-dropdown-responsive"
                    id="arrow-dropdown-responsive2"></i></a>
            <div class="content-dropdown-responsive" id="content-dropdown-responsive2">
                <a class="dropdown-item-responsive " href="{{ url('/about') }}">Tentang</a>
                <a class="dropdown-item-responsive" href="{{ url('/history') }}">Sejarah</a>
                <a class="dropdown-item-responsive" href="{{ url('/facility') }}">Fasilitas</a>
            </div>
        </li>
        <li>
            <a id="dropdown-responsive3" class="content-sidenav dropdown-responsive" onclick="openMenu3(this)">Media
                Informasi<i class="fas fa-chevron-right arrow-dropdown-responsive"
                    id="arrow-dropdown-responsive3"></i></a>
            <div class="content-dropdown-responsive" id="content-dropdown-responsive3">
                <a class="dropdown-item-responsive" href="{{ url('/news') }}">Berita</a>
                <a class="dropdown-item-responsive" href="{{ url('/prestations') }}">Prestasi</a>
                <a class="dropdown-item-responsive" href="{{ url('/articles') }}">Artikel</a>
                <a class="dropdown-item-responsive" href="{{ url('/schedules') }}">Agenda Kegiatan</a>
            </div>
        </li>
        <li><a href="{{ url('/gallery') }}"
                class="content-sidenav {{ Request::is('gallery') ? 'active' : '' }}">Galeri</a></li>
        <li><a href="{{url('/contact')}}"
                class="content-sidenav {{ Request::is('contact') ? 'active' : '' }}">Kontak</a></li>
        <li class="sosmed">
            <a href="#">
                <div id="fb"><i class="fab fa-facebook-f"></i></div>
            </a>
            <a href="#">
                <div id="twitter"><i class="fab fa-twitter"></i></div>
            </a>
            <a href="#">
                <div id="ig"><i class="fab fa-instagram"></i></div>
            </a>
        </li>
        @else
        <li>
            <a id="dropdown-responsive2" class="content-sidenav dropdown-responsive"
                onclick="openMenu2(this)">{{ Auth::user()->name }} <i
                    class="fas fa-chevron-right arrow-dropdown-responsive" id="arrow-dropdown-responsive2"></i></a>
            <div class="content-dropdown-responsive" id="content-dropdown-responsive2">
                <a class="dropdown-item-responsive" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>
            </div>
        </li>
        @if (Auth::user()->role === 2)
        <li>
            <a id="dropdown-responsive1" class="content-sidenav dropdown-responsive" onclick="openMenu(this)">Lihat
                Semua <i class="fas fa-chevron-right arrow-dropdown-responsive" id="arrow-dropdown-responsive1"></i></a>
            <div class="content-dropdown-responsive" id="content-dropdown-responsive1">
                <a class="dropdown-item-responsive" href="{{ url('/admin/view/units') }}">Unit</a>
                <a class="dropdown-item-responsive" href="{{ url('/admin/view/schedules') }}">Agenda</a>
                <a class="dropdown-item-responsive" href="{{ url('/admin/view/articles') }}">Artikel</a>
                <a class="dropdown-item-responsive" href="{{ url('/admin/view/news') }}">Berita</a>
                <a class="dropdown-item-responsive" href="{{ url('/admin/view/prestations') }}">Prestasi</a>
                <a class="dropdown-item-responsive" href="{{ url('/admin/view/gallery') }}">Galeri</a>
            </div>
        </li>
        <li>
            <a id="dropdown-responsive3" class="content-sidenav dropdown-responsive" onclick="openMenu3(this)">Postingan
                <i class="fas fa-chevron-right arrow-dropdown-responsive" id="arrow-dropdown-responsive3"></i></a>
            <div class="content-dropdown-responsive" id="content-dropdown-responsive3" style="min-height: auto">
                <a class="dropdown-item-responsive" href="{{ url('/admin/post/schedules') }}">Agenda</a>
                <a class="dropdown-item-responsive" href="{{ url('/admin/post/articles') }}">Artikel</a>
                <a class="dropdown-item-responsive" href="{{ url('/admin/post/news') }}">Berita</a>
                <a class="dropdown-item-responsive" href="{{ url('/admin/post/prestations') }}">Prestasi</a>
                <a class="dropdown-item-responsive" href="{{ url('/admin/post/gallery') }}">Galeri</a>
            </div>
        </li>
        <li><a class="content-sidenav" href="{{ url('/admin/messages') }}">Messages</a></li>
        <li><a class="content-sidenav" href="{{ url('/admin') }}">Home</a></li>
        @else
        <li><a class="content-sidenav" id="notif-master" href="{{ url('/home/notification') }}">Notification</a></li>
        <li>
            <a id="dropdown-responsive1" class="content-sidenav dropdown-responsive" onclick="openMenu(this)">Home <i
                    class="fas fa-chevron-right arrow-dropdown-responsive" id="arrow-dropdown-responsive1"></i></a>
            <div class="content-dropdown-responsive" id="content-dropdown-responsive1">
                <a class="dropdown-item-responsive" href="{{ url('home/schedules') }}">Agenda</a>
                <a class="dropdown-item-responsive" href="{{ url('home/articles') }}">Artikel</a>
                <a class="dropdown-item-responsive" href="{{ url('home/news') }}">Berita</a>
                <a class="dropdown-item-responsive" href="{{ url('home/prestations') }}">Prestasi</a>
                <a class="dropdown-item-responsive" href="{{ url('home/gallery') }}">Galeri</a>
            </div>
        </li>
        @endif
        @endguest
    </ul>
</div>
@auth
<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form>
@endauth