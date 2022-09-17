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
                                <th>Nama</th>
                                <th>Nomor HP</th>
                                <th>Pesan Aduan</th>
                                <th style="width: 150px">Status</th>
                                <th style="width: 150px">Lihat</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pengaduans as $pengaduan)
                            <tr>
                                <td>{{$pengaduan->nama}}</td>
                                <td>{{$pengaduan->no_hp}}</td>
                                <td>{{$pengaduan->pesan}}</td>
                                <td class="text-center">
                                    @if ($pengaduan->status == '0')
                                    <span class="badge badge-pill badge-danger">Belum Diproses</span>
                                    {{-- <a class="btn btn-danger mb-1 btn-sm"
                                        onclick="return confirm('Anda yakin ingin merubah status pengaduan?')" href="#">
                                        Belum Diproses
                                    </a> --}}
                                    @else
                                    <span class="badge badge-pill badge-success">Sudah Diproses</span>
                                    {{-- <a class="btn btn-success mb-1 btn-sm"
                                        onclick="return confirm('Anda yakin ingin merubah status pengaduan?')" href="#">
                                        Sudah Diproses
                                    </a> --}}
                                    @endif
                                </td>

                                <td class="text-center">
                                    <a href="{{ route('pengaduan.status',$pengaduan->id)}}"
                                        class="btn btn-info mb-1 btn-sm"
                                        onclick="return confirm('Anda yakin ingin merubah status pengaduan?')">
                                        Ubah Status
                                    </a>
                                    <a href="{{ route('pengaduan.show',$pengaduan->id)}}"
                                        class="btn btn-warning mb-1 btn-sm">
                                        Lihat
                                    </a>
                                    {{-- <form action="{{ route('nasabah.destroy', $nasabah->id)}}" method="post">
                                        <a href="{{ route('nasabah.edit',$nasabah->id)}}"
                                            class="btn btn-primary mb-1 btn-sm">
                                            Ubah
                                        </a>
                                        @csrf @method('DELETE')
                                        <button class="btn btn-danger mb-1 btn-sm" type="submit">
                                            Hapus
                                        </button>
                                    </form> --}}
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