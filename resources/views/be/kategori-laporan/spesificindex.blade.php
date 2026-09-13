@extends('core')
@section('main')
<div class="row">
    @include('be._partials.alert')
    <div class="col-md-12">
        <div class="tile">
            <div class="tile-body">
                <div class="mb-2 float-right">
                    <a href="{{ route('kategorilaporan.create') }}" class="btn btn-success btn-sm">Tambah</a>
                </div>
                <div class="table-responsive align-content-center">
                    <table class="table table-hover table-bordered" id="sampleTable">
                        <thead class="text-center">
                            <tr>
                                <th>Kategori {{ request('kategori_laporan') }}</th>
                                <th style="width: 150px">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($kategori_laporans as $kategori_laporan)
                            <tr>
                                <td class="text-center">{{ ucfirst($kategori_laporan->kategori_laporan) }}</td>
                                <td class="text-center">
                                    <form action="{{ route('kategorilaporan.destroy', $kategori_laporan->id) }}" method="post">
                                        <a href="{{ route('kategorilaporan.edit', $kategori_laporan->id) }}" class="btn btn-primary mb-1 btn-sm">
                                            Ubah
                                        </a>
                                        @csrf @method('DELETE')
                                        <button class="btn btn-danger mb-1 btn-sm" type="submit">
                                            Hapus
                                        </button>
                                    </form>
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