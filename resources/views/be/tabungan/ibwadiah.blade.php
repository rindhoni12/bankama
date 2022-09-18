@extends('core')
@section('main')
<div class="row">
    @include('be._partials.alert')
    <div class="col-md-12">
        <div class="tile">
            <div class="tile-body">
                {{-- <div class="mb-2 float-right">
                    <a href="{{ route('nasabah.create') }}" class="btn btn-success btn-sm">Tambah</a>
                </div> --}}
                <div class="table-responsive align-content-center">
                    <table class="table table-hover table-bordered" id="sampleTable">
                        <thead class="text-center">
                            <tr>
                                {{-- <th>Jenis Produk</th> --}}
                                <th>Nama</th>
                                <th>Tempat Lahir</th>
                                <th>Tanggal Lahir</th>
                                <th>Alamat Domisili</th>
                                <th>No. HP</th>
                                <th>NIK</th>
                                <th>Foto KTP</th>
                                <th style="width: 150px">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($ibwadiahs as $tabungan)
                            <tr>
                                <td>{{$tabungan->nama}}</td>
                                <td>{{$tabungan->tempat_lahir}}</td>
                                <td>{{$tabungan->tgl_lahir}}</td>
                                <td>{{$tabungan->alamat_domisili}}</td>
                                <td>{{$tabungan->no_hp}}</td>
                                <td>{{$tabungan->nik}}</td>
                                <td>
                                    <img src="{{ asset('storage/images/tabungans/'.$tabungan->foto_ktp) }}"
                                        class="img-thumbnail" alt="foto_ktp"
                                        style=" max-width:100%; width:150px; height:auto; object-fit:cover;">
                                </td>
                                <td class="text-center">
                                    <a href="{{ route('tabungan.show',$tabungan->id)}}"
                                        class="btn btn-warning mb-1 btn-sm">
                                        Lihat
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