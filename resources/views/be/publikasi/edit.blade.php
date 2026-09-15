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
            <h3 class="tile-title text-capitalize">Ubah Publikasi</h3>
            <div class="tile-body">
                <form method="post"action="{{ route('publikasi.update', $laporan->id) }}" class="form-horizontal"
                    enctype="multipart/form-data">
                    @method('PATCH')
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="pdfpath">
                                Ubah File Laporan (wajib .pdf) -
                                <a href="{{ asset('storage/files/publikasis/'. $laporan->pdfpath) }}" target="_blank"
                                    rel="noopener noreferrer">
                                    Lihat PDF Saat Ini
                                </a>
                            </label>
                            <input type="file" accept="application/pdf" name="pdfpath" id="pdfpath"
                                class="form-control-file">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="judul_laporan">Judul Publikasi</label>
                            <input type="text" class="form-control" name="judul_laporan" placeholder="Judul Publikasi"
                                autocomplete="off" value="{{ old('judul_laporan') ?? $laporan->judul_laporan }}">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="tahun_laporan">Tahun Publikasi</label>
                            <input type="text" class="form-control" name="tahun_laporan" placeholder="Tahun Publikasi"
                                autocomplete="off" value="{{ old('tahun_laporan') ?? $laporan->tahun_laporan }}">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="kategori_laporan">Jenis Publikasi</label>
                            <select class="form-control" id="kategori_laporan" name="kategori_laporan">
                                @foreach ($kategori_publikasis as $kategori_publikasi)
                                <option value="{{ $kategori_publikasi->kategori_laporan }}" {{ $kategori_publikasi->kategori_laporan ==
                                    $laporan->kategori_laporan ? 'selected' : ''}}>
                                    {{$kategori_publikasi->kategori_laporan}}
                                </option>
                                @endforeach
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
{{-- @section('ext_script')
<script src="//cdn.ckeditor.com/4.19.0/basic/ckeditor.js"></script>
<script>
    CKEDITOR.replace('my-editor');
</script>
@endsection --}}