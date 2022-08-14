@extends('core')
@section('main')
<div class="row">
    @include('be._partials.alert')
    <div class="col-md-12">
        <div class="tile">
            <div class="tile-body">
                <div class="mb-2 float-right">
                    <a href="{{ route('nasabah.create') }}" class="btn btn-success btn-sm">Tambah</a>
                </div>
                <div class="table-responsive align-content-center">
                    <table class="table table-hover table-bordered" id="sampleTable">
                        <thead class="text-center">
                            <tr>
                                <th>Jenis Produk</th>
                                <th>Nama</th>
                                <th>NIK</th>
                                <th>Tanggal Lahir</th>
                                <th>Alamat</th>
                                <th>No. HP</th>
                                <th>Foto KTP</th>
                                <th style="width: 150px">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($nasabahs as $nasabah)
                            <tr>
                                <td>{{$nasabah->jenis_produk}}</td>
                                <td>{{$nasabah->nama}}</td>
                                <td>{{$nasabah->nik}}</td>
                                <td>{{$nasabah->tgl_lahir}}</td>
                                <td>{{$nasabah->alamat}}</td>
                                <td>{{$nasabah->no_hp}}</td>
                                <td>
                                    <img src="{{ asset('storage/images/nasabahs/'.$nasabah->foto_ktp) }}"
                                        class="img-thumbnail" alt="foto_ktp"
                                        style=" max-width:100%; width:150px; height:auto; object-fit:cover;">
                                </td>
                                <td class="text-center">
                                    <form action="{{ route('nasabah.destroy', $nasabah->id)}}" method="post">
                                        <a href="{{ route('nasabah.show',$nasabah->id)}}"
                                            class="btn btn-warning mb-1 btn-sm">
                                            Lihat
                                        </a>
                                        <a href="{{ route('nasabah.edit',$nasabah->id)}}"
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