<div class="app-title">
    <div>
        <h1 class="text-capitalize">
            <i class="fa fa-th-list"></i> Data {{ Request::segment(1) }}
        </h1>
    </div>
    <ul class="app-breadcrumb breadcrumb side">
        <li class="breadcrumb-item">
            <a href=" {{ route('home') }} "><i class="fa fa-home fa-lg"></i></a>
        </li>
        <li class="breadcrumb-item">Data {{ Request::segment(1) }}</li>
        @if (Request::segment(2))
        <li class="breadcrumb-item">Data {{ Request::segment(2) }}</li>
        @endif
    </ul>
</div>