<!-- Sidebar menu-->
<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
<aside class="app-sidebar">
    <div class="app-sidebar__user">
        <img class="app-sidebar__user-avatar" src="https://cdn.iconscout.com/icon/free/png-256/avatar-370-456322.png"
            width="42" height="42" alt="User Image" />
        <div>
            <p class="app-sidebar__user-name">John Doe</p>
            <p class="app-sidebar__user-designation">Frontend Developer</p>
        </div>
    </div>
    <ul class="app-menu">
        <li>
            <a class="app-menu__item {{ Request::segment(2) == 'dashboard' ? ' active' : '' }}"
                href="{{ route('index') }}"><i class="app-menu__icon fa fa-dashboard"></i><span
                    class="app-menu__label">Dashboard</span></a>
        </li>
        <li>
            <a class="app-menu__item {{ Request::segment(2) == 'nasabah' ? ' active' : '' }}"
                href="{{ route('nasabah.index') }}">
                <i class="app-menu__icon fa fa-pie-chart"></i><span class="app-menu__label">Calon Nasabah</span>
            </a>
        </li>
        {{-- <li>
            <a class="app-menu__item{{ request()->is('umkm') ? ' active' : '' }}" href="{{ route('umkm.index') }}">
                <i class="app-menu__icon fa fa-pie-chart"></i><span class="app-menu__label">UMKM</span>
            </a>
        </li> --}}
        {{-- <li>
            <a class="app-menu__item {{ Request::segment(1) == 'nasabah' ? 'active' : '' }}"
                href="{{ route('nasabah.index') }}"><i class="app-menu__icon fa fa-file-code-o"></i><span
                    class="app-menu__label">Data Nasabah</span></a>
        </li>
        <li>
            <a class="app-menu__item {{ Request::segment(1) == 'jaminanshm' ? 'active' : '' }}"
                href="{{ route('jaminanshm.index') }}"><i class="app-menu__icon fa fa-file-code-o"></i><span
                    class="app-menu__label">Data Jaminan SHM</span></a>
        </li>
        <li>
            <a class="app-menu__item {{ Request::segment(1) == 'jaminanbpkb' ? 'active' : '' }}"
                href="{{ route('jaminanbpkb.index') }}"><i class="app-menu__icon fa fa-file-code-o"></i><span
                    class="app-menu__label">Data Jaminan BPKB</span></a>
        </li>
        <li>
            <a class="app-menu__item {{ Request::segment(1) == 'jaminanijazah' ? 'active' : '' }}"
                href="{{ route('jaminanijazah.index') }}"><i class="app-menu__icon fa fa-file-code-o"></i><span
                    class="app-menu__label">Data Jaminan Ijazah</span></a>
        </li>
        <li>
            <a class="app-menu__item {{ Request::segment(1) == 'jaminandeposito' ? 'active' : '' }}"
                href="{{ route('jaminandeposito.index') }}"><i class="app-menu__icon fa fa-file-code-o"></i><span
                    class="app-menu__label">Data Jaminan Deposito</span></a>
        </li> --}}
    </ul>
</aside>