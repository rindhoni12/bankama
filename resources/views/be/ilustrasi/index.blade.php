@extends('core')
@section('main')
<div class="row">
    @include('be._partials.alert')
    <div class="col-md-12">
        <div class="tile">
            <div class="tile-body">
                <div class="table-responsive align-content-center">
                    <table class="table table-hover table-bordered">
                        <thead class="text-center">
                            <tr>
                                <th>Posisi</th>
                                <th>Thumbnail Banner</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($ilustrasis as $ilustrasi)
                            <tr>
                                <td class="text-center">{{ ucfirst($ilustrasi->posisi) }}</td>
                                <td class="text-center">
                                    <img src="{{ asset('storage/images/ilustrasis/'.$ilustrasi->banner) }}"
                                        class="img-thumbnail" alt="banner"
                                        style=" max-width:100%; width:250px; height:auto; object-fit:cover;">
                                </td>
                                <td class="text-center">
                                    <a href="{{ route('ilustrasi.edit',$ilustrasi->id) }}"
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