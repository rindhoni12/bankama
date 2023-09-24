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
                <form method="post" action="{{ route('alamat.update', $alamat->id) }}" class="form-horizontal"
                    enctype="multipart/form-data">
                    @method('PATCH')
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="nama_cabang">Nama Cabang</label>
                            <input type="text" class="form-control" name="nama_cabang" autocomplete="off"
                                value="{{ old('nama_cabang') ?? $alamat->nama_cabang }}">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="alamat">Alamat</label>
                            <input type="text" class="form-control" name="alamat" autocomplete="off"
                                value="{{ old('alamat') ?? $alamat->alamat }}">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="no_telp">Nomor Telepon</label>
                            <input type="text" class="form-control" name="no_telp" autocomplete="off"
                                value="{{ old('no_telp') ?? $alamat->no_telp }}">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="no_hp">Nomor HP</label>
                            <input type="text" class="form-control" name="no_hp" autocomplete="off"
                                value="{{ old('no_hp') ?? $alamat->no_hp }}">
                        </div>
                    </div>
                    <div class="tile-footer">
                        <div class="row">
                            <div class="col-md-12 col-md-offset-3 text-right">
                                <button class="btn btn-primary" type="submit">
                                    <i class="fa fa-fw fa-check-circle"></i>Simpan
                                </button>
                                <a class="btn btn-secondary" href="{{ route('alamat.index') }}">
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