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
    </ul>
</aside>