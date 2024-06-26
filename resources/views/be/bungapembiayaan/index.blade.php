@extends('core')
@section('main')
<div class="row">
    @include('be._partials.alert')
    <div class="col-md-12">
        <div class="tile">
            <div class="tile-body">
                <div class="mb-2 float-right">
                    <a href="{{ route('bungapembiayaan.create') }}" class="btn btn-success btn-sm">Tambah</a>
                </div>
                <div class="table-responsive align-content-center">
                    <table class="table table-hover table-bordered">
                        <thead class="text-center">
                            <tr>
                                <th>Nama Pembiayaan</th>
                                <th>Presentase Bunga</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($bungapembiayaans as $bungapembiayaan)
                            <tr>
                                <td class="text-center">{{$bungapembiayaan->nama_pembiayaan}}</td>
                                <td class="text-center">{{$bungapembiayaan->presentase_bunga}}%</td>

                                <td class="text-center">
                                    <form action="{{ route('bungapembiayaan.destroy', $bungapembiayaan->id) }}"
                                        method="post">
                                        <a href="{{ route('bungapembiayaan.edit',$bungapembiayaan->id) }}"
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