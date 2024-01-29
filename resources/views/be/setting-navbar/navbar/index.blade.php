@extends('core')
@section('main')
<div class="row">
    @include('be._partials.alert')
    <div class="col-md-12">
        <div class="tile">
            <div class="tile-body">
                <div class="mb-2 float-right">
                    <a href="{{ route('navbar.create') }}" class="btn btn-success btn-sm">Tambah</a>
                </div>
                <div class="table-responsive align-content-center">
                    <table class="table table-hover table-bordered" id="sampleTable">
                        <thead class="text-center">
                            <tr>
                                <th>Jenis Produk</th>
                                <th>Nama Produk</th>
                                <th>Slug</th>
                                <th style="width: 150px">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($navbars as $navbar)
                            <tr>
                                <td>{{ $navbar->jenis_produk }}</td>
                                <td>{{ $navbar->nama_produk }}</td>
                                <td>{{ $navbar->slug }}</td>
                                <td class="text-center">
                                    <form action="{{ route('navbar.destroy', $navbar->id) }}" method="post">
                                        <a href="{{ route('navbar.edit',$navbar->id) }}"
                                            class="btn btn-primary mb-1 btn-sm">
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