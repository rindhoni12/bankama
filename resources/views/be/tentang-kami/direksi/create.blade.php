@extends('core')
@section('main')
<div class="row">
    <div class="col-md-12">

        @if ($errors->any())
        <div class="alert alert-dismissible alert-danger">
            <button class="close" type="button" data-dismiss="alert">x</button>
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <div class="tile">
            <h3 class="tile-title text-capitalize">Tambah {{ Request::segment(2) }}</h3>
            <div class="tile-body">
                <form method="post" action="{{ route('direksi.store') }}" class="form-horizontal"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="photo">Foto</label>
                            <input type="file" accept="image/*" name="photo" id="photo" class="form-control-file">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" name="nama" placeholder="Nama" autocomplete="off"
                                value="{{ old('nama') }}">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="jabatan">Jabatan</label>
                            <input type="text" class="form-control" name="jabatan" placeholder="Jabatan"
                                autocomplete="off" value="{{ old('jabatan') }}">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="pendidikan_terakhir">Pendidikan</label>
                            <input type="text" class="form-control" name="pendidikan_terakhir" placeholder="Pendidikan"
                                autocomplete="off" value="{{ old('pendidikan_terakhir') }}">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="pekerjaan_terakhir">Pengalaman Kerja</label>
                            <input type="text" class="form-control" name="pekerjaan_terakhir"
                                placeholder="Pengalaman Kerja" autocomplete="off"
                                value="{{ old('pekerjaan_terakhir') }}">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="dasar_pengangkatan">Dasar Pengangkatan</label>
                            <input type="text" class="form-control" name="dasar_pengangkatan"
                                placeholder="Dasar Pengangkatan" autocomplete="off"
                                value="{{ old('dasar_pengangkatan') }}">
                        </div>
                    </div>
                    <div class="tile-footer">
                        <div class="row">
                            <div class="col-md-12 col-md-offset-3 text-right">
                                <button class="btn btn-primary" type="submit">
                                    <i class="fa fa-fw fa-check-circle"></i>Simpan
                                </button>
                                <a class="btn btn-secondary" href="{{ route('direksi.index') }}">
                                    <i class="fa fa-fw fa-times-circle"></i>Batal
                                </a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection