<!-- Sidebar menu-->
<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
<aside class="app-sidebar">
    <div class="app-sidebar__user">
        <img class="app-sidebar__user-avatar" src="https://cdn.iconscout.com/icon/free/png-256/avatar-370-456322.png"
            width="42" height="42" alt="User Image" />
        <div>
            <p class="app-sidebar__user-name">{{ Auth::user()->name }}</p>
            <p class="app-sidebar__user-designation">Admin</p>
        </div>
    </div>
    <ul class="app-menu">
        <li>
            <a class="app-menu__item {{ Request::segment(1) == 'dashboard' ? ' active' : '' }}"
                href="{{ route('home') }}"><i class="app-menu__icon fa fa-dashboard"></i><span
                    class="app-menu__label">Dashboard</span></a>
        </li>
        <li>
            <a class="app-menu__item {{ Request::segment(1) == 'nasabah' ? ' active' : '' }}"
                href="{{ route('nasabah.index') }}">
                <i class="app-menu__icon fa fa-users"></i><span class="app-menu__label">Calon Nasabah</span>
            </a>
        </li>
        <li>
            <a class="app-menu__item {{ Request::segment(1) == 'pengaduan' ? ' active' : '' }}"
                href="{{ route('pengaduan.index') }}">
                <i class="app-menu__icon fa fa-exclamation-triangle"></i><span class="app-menu__label">Pengaduan
                    Nasabah</span>
            </a>
        </li>
        <li>
            <a class="app-menu__item {{ Request::segment(1) == 'blog' ? ' active' : '' }}"
                href="{{ route('blog.index') }}">
                <i class="app-menu__icon fa fa-file"></i><span class="app-menu__label">Blog Post</span>
            </a>
        </li>
        <li>
            <a class="app-menu__item {{ Request::segment(1) == 'banner' ? ' active' : '' }}"
                href="{{ route('banner.index') }}">
                <i class="app-menu__icon fa fa-sliders"></i><span class="app-menu__label">Setting Banner</span>
            </a>
        </li>
        <li>
            <a class="app-menu__item {{ Request::segment(1) == 'bunga' ? ' active' : '' }}"
                href="{{ route('bunga.index') }}">
                <i class="app-menu__icon fa fa-percent"></i><span class="app-menu__label">Setting Bunga</span>
            </a>
        </li>
        <li>
            <a class="app-menu__item {{ Request::segment(1) == 'galeri' ? ' active' : '' }}"
                href="{{ route('galeri.index') }}">
                <i class="app-menu__icon fa fa-picture-o"></i><span class="app-menu__label">Setting Galeri</span>
            </a>
        </li>

        {{-- Tree Dropdown --}}
        <li class="treeview {{ Request::segment(1) == 'tabungan' ? ' is-expanded' : '' }}">
            <a class="app-menu__item" href="#" data-toggle="treeview">
                <i class="app-menu__icon fa fa-users"></i>
                <span class="app-menu__label">Nasabah Penyimpanan</span>
                <i class="treeview-indicator fa fa-angle-right"></i>
            </a>
            <ul class="treeview-menu">
                <li>
                    <a class="treeview-item {{ Request::segment(2) == 'ibwadiah' ? ' active' : '' }}"
                        href="{{ route('tabungan.ibwadiah') }}"><i class="icon fa fa-circle-o"></i>
                        Tabungan iB Wadiah
                    </a>
                </li>
                <li>
                    <a class="treeview-item {{ Request::segment(2) == 'ibhaji' ? ' active' : '' }}"
                        href="{{ route('tabungan.ibhaji') }}"><i class="icon fa fa-circle-o"></i>
                        Tabungan iB Haji
                    </a>
                </li>
                <li>
                    <a class="treeview-item {{ Request::segment(2) == 'ibpendidikan' ? ' active' : '' }}"
                        href="{{ route('tabungan.ibpendidikan') }}">
                        <i class="icon fa fa-circle-o"></i>
                        Tabungan iB Pendidikan
                    </a>
                </li>
                <li>
                    <a class="treeview-item {{ Request::segment(2) == 'ibqurban' ? ' active' : '' }}"
                        href="{{ route('tabungan.ibqurban') }}">
                        <i class="icon fa fa-circle-o"></i>
                        Tabungan iB Qurban
                    </a>
                </li>
                <li>
                    <a class="treeview-item {{ Request::segment(2) == 'ibsimuda' ? ' active' : '' }}"
                        href="{{ route('tabungan.ibsimuda') }}">
                        <i class="icon fa fa-circle-o"></i>
                        Tabungan iB Si Muda
                    </a>
                </li>
            </ul>
        </li>

        {{-- Tree Dropdown --}}
        <li class="treeview">
            <a class="app-menu__item" href="#" data-toggle="treeview">
                <i class="app-menu__icon fa fa-users"></i>
                <span class="app-menu__label">Nasabah Pembiayaan</span>
                <i class="treeview-indicator fa fa-angle-right"></i>
            </a>
            <ul class="treeview-menu">
                <li>
                    <a class="treeview-item" href="bootstrap-components.html"><i class="icon fa fa-circle-o"></i>
                        Pembiayaan iB Murabahah
                    </a>
                </li>
                <li>
                    <a class="treeview-item" href="https://fontawesome.com/v4.7.0/icons/" target="_blank"
                        rel="noopener">
                        <i class="icon fa fa-circle-o"></i>
                        Pembiayaan iB Musyarakah
                    </a>
                </li>
                <li>
                    <a class="treeview-item" href="ui-cards.html">
                        <i class="icon fa fa-circle-o"></i>
                        Pembiayaan iB Multijasa
                    </a>
                </li>
                <li>
                    <a class="treeview-item" href="widgets.html">
                        <i class="icon fa fa-circle-o"></i>
                        iB Gadai Emas
                    </a>
                </li>
            </ul>
        </li>
    </ul>
</aside>