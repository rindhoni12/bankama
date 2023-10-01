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
                <form method="post" action="{{ route('bungapembiayaan.update', $bungapembiayaan->id) }}"
                    class="form-horizontal" enctype="multipart/form-data">
                    @method('PATCH')
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="nama_pembiayaan">Nama Pembiayaan</label>
                            <input type="text" class="form-control" name="nama_pembiayaan" placeholder="Nama Pembiayaan"
                                autocomplete="off"
                                value="{{ old('nama_pembiayaan') ?? $bungapembiayaan->nama_pembiayaan }}">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="presentase_bunga">Presentase Bunga (%)</label>
                            <input type="number" step="0.01" class="form-control" name="presentase_bunga"
                                placeholder="Presentase Bunga" autocomplete="off"
                                value="{{ old('presentase_bunga') ?? $bungapembiayaan->presentase_bunga }}">
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