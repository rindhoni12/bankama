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
            <h3 class="tile-title text-capitalize">Ubah {{ Request::segment(2) }}</h3>
            <div class="tile-body">
                <form method="post" action="{{ route('direksi.update', $direksi->id) }}" class="form-horizontal"
                    enctype="multipart/form-data">
                    @method('PATCH')
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-md-12 d-flex justify-content-center">
                            <img src="{{ asset('storage/images/direksis/'. $direksi->photo) }}" class="img-thumbnail"
                                alt="photo" style=" max-width:100%; width:450px; height:auto; object-fit:cover;">
                        </div>
                        <div class="form-group col-md-12">
                            <label for="photo">Ubah Foto (Optional)</label>
                            <input type="file" accept="image/*" name="photo" id="photo" class="form-control-file">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" name="nama" autocomplete="off"
                                value="{{ old('nama') ?? $direksi->nama }}">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="jabatan">Jabatan</label>
                            <input type="text" class="form-control" name="jabatan" autocomplete="off"
                                value="{{ old('jabatan') ?? $direksi->jabatan }}">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="pendidikan_terakhir">Pendidikan</label>
                            <input type="text" class="form-control" name="pendidikan_terakhir" autocomplete="off"
                                value="{{ old('pendidikan_terakhir') ?? $direksi->pendidikan_terakhir }}">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="pekerjaan_terakhir">Pengalaman Kerja</label>
                            <input type="text" class="form-control" name="pekerjaan_terakhir" autocomplete="off"
                                value="{{ old('pekerjaan_terakhir') ?? $direksi->pekerjaan_terakhir }}">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="dasar_pengangkatan">Dasar Pengangkatan</label>
                            <input type="text" class="form-control" name="dasar_pengangkatan" autocomplete="off"
                                value="{{ old('dasar_pengangkatan') ?? $direksi->dasar_pengangkatan }}">
                        </div>
                    </div>
                    <div class="tile-footer">
                        <div class="row">
                            <div class="col-md-12 col-md-offset-3 text-right">
                                <button class="btn btn-primary" type="submit">
                                    <i class="fa fa-fw fa-check-circle"></i>Simpan
                                </button>
                                <a class="btn btn-secondary" href="{{ route('direksi.index') }}">
                                    <i class="fa fa-fw fa-times-circle"></i>Batal</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection