@extends('core')
@section('main')
<div class="row">
    @include('be._partials.alert')
    <div class="col-md-12">
        <div class="tile">
            <div class="tile-body">
                <div class="mb-2 float-right">
                    <a href="{{ route('alamat.create') }}" class="btn btn-success btn-sm">Tambah</a>
                </div>
                <div class="table-responsive align-content-center">
                    <table class="table table-hover table-bordered" id="sampleTable">
                        <thead class="text-center">
                            <tr>
                                <th>Nama Cabang</th>
                                <th>Alamat</th>
                                <th>No Telepon</th>
                                <th>No HP</th>
                                <th>Flag</th>
                                <th style="width: 150px">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($alamats as $alamat)
                            <tr>
                                <td>{{$alamat->nama_cabang}}</td>
                                <td>{{$alamat->alamat}}</td>
                                <td>{{$alamat->no_telp}}</td>
                                <td>{{$alamat->no_hp}}</td>
                                <td>{{ ucfirst($alamat->flag) }}</td>
                                <td class="text-center">
                                    <form action="{{ route('alamat.destroy', $alamat->id) }}" method="post">
                                        <a href="{{ route('alamat.edit',$alamat->id) }}"
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