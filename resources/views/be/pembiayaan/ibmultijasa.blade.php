@extends('core')
@section('main')
<div class="row">
    @include('be._partials.alert')
    <div class="col-md-12">
        <div class="tile">
            <div class="tile-body">
                <div class="table-responsive align-content-center">
                    <table class="table table-hover table-bordered" id="sampleTable">
                        <thead class="text-center">
                            <tr>
                                <th>Nama</th>
                                <th>Tempat Lahir</th>
                                <th>Tanggal Lahir</th>
                                <th>Alamat Domisili</th>
                                <th>Kebutuhan Dana</th>
                                <th>Jangka Waktu</th>
                                <th>Agunan</th>
                                <th>No. HP</th>
                                <th>NIK</th>
                                <th>Foto KTP</th>
                                <th style="width: 50px">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($ibmultijasas as $pembiayaan)
                            <tr>
                                <td>{{$pembiayaan->nama}}</td>
                                <td>{{$pembiayaan->tempat_lahir}}</td>
                                <td>{{$pembiayaan->tgl_lahir}}</td>
                                <td>{{$pembiayaan->alamat_domisili}}</td>
                                <td>Rp{{$pembiayaan->kebutuhan_dana}}</td>
                                <td>{{$pembiayaan->jangka_waktu}}</td>
                                <td>{{$pembiayaan->agunan}}</td>
                                <td>{{$pembiayaan->no_hp}}</td>
                                <td>{{$pembiayaan->nik}}</td>
                                <td>
                                    <img src="{{ asset('storage/images/pembiayaans/'.$pembiayaan->foto_ktp) }}"
                                        class="img-thumbnail" alt="foto_ktp"
                                        style=" max-width:100%; width:150px; height:auto; object-fit:cover;">
                                </td>
                                <td class="text-center">
                                    <a href="{{ route('pembiayaan.show',$pembiayaan->id)}}"
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