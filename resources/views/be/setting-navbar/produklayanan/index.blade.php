@extends('core')
@section('main')
<div class="row">
    @include('be._partials.alert')
    <div class="col-md-12">
        <div class="tile">
            <div class="tile-body">
                <div class="mb-2 float-right">
                    <a href="{{ route('produklayanan.create') }}" class="btn btn-success btn-sm">Tambah</a>
                </div>
                <div class="table-responsive align-content-center">
                    <table class="table table-hover table-bordered" id="sampleTable">
                        <thead class="text-center">
                            <tr>
                                <th>Thumbnail</th>
                                <th>Nama Produk & Layanan</th>
                                <th>Deskripsi</th>
                                <th>Kategori</th>
                                <th>Jenis Produk & Layanan</th>
                                <th style="width: 175px">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($produklayanans as $produklayanan)
                            <tr>
                                <td class="text-center">
                                    <img src="{{ asset('storage/images/produklayanans/'.$produklayanan->foto_thumbnail) }}"
                                        class="img-thumbnail" alt="thumbnail_produk"
                                        style=" max-width:100%; width:200px; height:auto; object-fit:cover;">
                                </td>
                                <td>{{$produklayanan->nama_produklayanan}}</td>
                                <td>{!! Str::limit( strip_tags($produklayanan->deskripsi), 75 ) !!}</td>
                                <td>{{$produklayanan->jenis_tabungan}}</td>
                                <td>{{$produklayanan->jenis_produk}}</td>
                                <td class="text-center">
                                    <form action="{{ route('produklayanan.destroy', $produklayanan->id) }}"
                                        method="post">
                                        <a href="{{ route('produklayanan.show',$produklayanan->id) }}"
                                            class="btn btn-warning mb-1 btn-sm">
                                            Lihat
                                        </a>
                                        <a href="{{ route('produklayanan.edit',$produklayanan->id) }}"
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