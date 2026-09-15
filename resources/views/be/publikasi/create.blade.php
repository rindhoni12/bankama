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
            <h3 class="tile-title text-capitalize">Tambah Publikasi</h3>
            <div class="tile-body">
                <form method="post" action="{{ route('publikasi.store') }}" class="form-horizontal"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="pdfpath">File Publikasi (wajib .pdf)</label>
                            <input type="file" accept="application/pdf" name="pdfpath" id="pdfpath"
                                class="form-control-file">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="judul_laporan">Judul Publikasi</label>
                            <input type="text" class="form-control" name="judul_laporan" placeholder="Judul Publikasi"
                                autocomplete="off" value="{{ old('judul_laporan') }}" autofocus>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="tahun_laporan">Tahun Publikasi</label>
                            <input type="text" class="form-control" name="tahun_laporan" placeholder="Tahun Publikasi"
                                autocomplete="off" value="{{ old('tahun_laporan') }}" autofocus>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="kategori_laporan">Jenis Publikasi</label>
                            <select class="form-control" id="kategori_laporan" name="kategori_laporan">
                                @forelse ($kategori_publikasis as $kategori_publikasi)
                                <option value="{{ $kategori_publikasi->kategori_laporan }}">
                                    {{$kategori_publikasi->kategori_laporan}}
                                </option>
                                @empty
                                <option value="" disabled selected hidden>Buat Kategori Publikasi terlebih dahulu
                                </option>
                                @endforelse
                            </select>
                        </div>
                    </div>
                    <div class="tile-footer">
                        <div class="row">
                            <div class="col-md-12 col-md-offset-3 text-right">
                                <button class="btn btn-primary" type="submit">
                                    <i class="fa fa-fw fa-check-circle"></i>Simpan
                                </button>
                                <a class="btn btn-secondary" href="{{ url()->previous() }}">
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