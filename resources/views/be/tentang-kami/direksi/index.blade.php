@extends('core')
@section('main')
<div class="row">
    @include('be._partials.alert')
    <div class="col-md-12">
        <div class="tile">
            <div class="tile-body">
                <div class="mb-2 float-right">
                    <a href="{{ route('direksi.create') }}" class="btn btn-success btn-sm">Tambah</a>
                </div>
                <div class="table-responsive align-content-center">
                    <table class="table table-hover table-bordered" id="sampleTable">
                        <thead class="text-center">
                            <tr>
                                <th>Foto</th>
                                <th>Nama</th>
                                <th>Jabatan</th>
                                <th>Pendidikan</th>
                                <th>Pengalaman Kerja</th>
                                <th>Dasar Pengangkatan</th>
                                <th style="width: 150px">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($direksis as $direksi)
                            <tr>
                                <td class="text-center">
                                    <img src="{{ asset('storage/images/direksis/'.$direksi->photo) }}"
                                        class="img-thumbnail" alt="direksi"
                                        style=" max-width:100%; width:200px; height:auto; object-fit:cover;">
                                </td>
                                <td>{{$direksi->nama}}</td>
                                <td>{{$direksi->jabatan}}</td>

                                <td>{{$direksi->pendidikan_terakhir}}</td>
                                <td>{{$direksi->pekerjaan_terakhir}}</td>
                                <td>{{$direksi->dasar_pengangkatan}}</td>
                                <td class="text-center">
                                    <form action="{{ route('direksi.destroy', $direksi->id) }}" method="post">
                                        <a href="{{ route('direksi.edit',$direksi->id) }}"
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