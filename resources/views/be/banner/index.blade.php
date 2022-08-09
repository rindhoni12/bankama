@extends('core')
@section('main')
<div class="row">
    @include('be._partials.alert')
    <div class="col-md-12">
        <div class="tile">
            <div class="tile-body">
                {{-- <div class="mb-2 float-right">
                    <a href="{{ route('banner.create') }}" class="btn btn-success btn-sm">Tambah</a>
                </div> --}}
                <div class="table-responsive align-content-center">
                    <table class="table table-hover table-bordered" id="sampleTable">
                        <thead class="text-center">
                            <tr>
                                <th>Nomor Slide</th>
                                <th>Thumbnail Banner</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($banners as $banner)
                            <tr>
                                <td class="text-center">{{$banner->no_slide}}</td>
                                <td class="text-center">
                                    <img src="{{ asset('storage/images/banners/'.$banner->banner) }}"
                                        class="img-thumbnail" alt="banner"
                                        style=" max-width:100%; width:250px; height:auto; object-fit:cover;">
                                </td>
                                <td class="text-center">
                                    <a href="{{ route('banner.edit',$banner->id) }}"
                                        class="btn btn-primary mb-1 btn-sm">
                                        Ubah
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@include('be._partials.datatable')