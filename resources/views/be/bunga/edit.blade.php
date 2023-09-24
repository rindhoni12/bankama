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
            <h3 class="tile-title text-capitalize">Ubah {{ Request::segment(1) }}</h3>
            <div class="tile-body">
                <form method="post" action="{{ route('bunga.update', $bunga->id) }}" class="form-horizontal"
                    enctype="multipart/form-data">
                    @method('PATCH')
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="jenis_investasi">Jenis Investasi</label>
                            <input type="text" class="form-control" name="jenis_investasi" placeholder="Jenis Investasi"
                                autocomplete="off" value="{{ old('jenis_investasi') ?? $bunga->jenis_investasi }}">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="nisbah">Nisbah (%)</label>
                            <input type="text" class="form-control" name="nisbah" placeholder="Nisbah"
                                autocomplete="off" value="{{ old('nisbah') ?? $bunga->nisbah }}">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="nama_bulan1">Nama Bulan 1</label>
                            <input type="text" class="form-control" name="nama_bulan1" placeholder="Nama Bulan 1"
                                autocomplete="off" value="{{ old('nama_bulan1') ?? $bunga->nama_bulan1 }}">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="nama_bulan2">Nama Bulan 2</label>
                            <input type="text" class="form-control" name="nama_bulan2" placeholder="Nama Bulan 2"
                                autocomplete="off" value="{{ old('nama_bulan2') ?? $bunga->nama_bulan2 }}">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="nama_bulan3">Nama Bulan 3</label>
                            <input type="text" class="form-control" name="nama_bulan3" placeholder="Nama Bulan 3"
                                autocomplete="off" value="{{ old('nama_bulan3') ?? $bunga->nama_bulan3 }}">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="bunga_bulan1">Bunga Bulan 1 (%)</label>
                            <input type="number" step="0.01" class="form-control" name="bunga_bulan1"
                                placeholder="Nama Bulan 1" autocomplete="off"
                                value="{{ old('bunga_bulan1') ?? $bunga->bunga_bulan1 }}" />
                        </div>
                        <div class="form-group col-md-4">
                            <label for="bunga_bulan2">Bunga Bulan 2 (%)</label>
                            <input type="number" step="0.01" class="form-control" name="bunga_bulan2"
                                placeholder="Nama Bulan 2" autocomplete="off"
                                value="{{ old('bunga_bulan2') ?? $bunga->bunga_bulan2 }}" />
                        </div>
                        <div class="form-group col-md-4">
                            <label for="bunga_bulan3">Bunga Bulan 3 (%)</label>
                            <input type="number" step="0.01" class="form-control" name="bunga_bulan3"
                                placeholder="Nama Bulan 3" autocomplete="off"
                                value="{{ old('bunga_bulan3') ?? $bunga->bunga_bulan3 }}" />
                        </div>
                    </div>

                    <div class="tile-footer">
                        <div class="row">
                            <div class="col-md-12 col-md-offset-3 text-right">
                                <button class="btn btn-primary" type="submit">
                                    <i class="fa fa-fw fa-check-circle"></i>Simpan
                                </button>
                                <a class="btn btn-secondary" href="{{ route('bunga.index') }}">
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