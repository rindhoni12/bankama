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
                <form method="post" action="{{ route('triwulan.update', $triwulan->id) }}" class="form-horizontal"
                    enctype="multipart/form-data">
                    @method('PATCH')
                    @csrf
                    <div class="form-row">
                        {{-- <div class="form-group col-md-12 d-flex justify-content-center">
                            <label for="pdfpath">File Laporan Saat Ini</label>
                            <a href="{{ asset('storage/files/triwulans/'. $triwulan->pdfpath) }}" target="_blank"
                                rel="noopener noreferrer">
                                Lihat PDF
                            </a>
                        </div> --}}
                        <div class="form-group col-md-12">
                            <label for="pdfpath">
                                Ubah File Laporan (wajib .pdf) -
                                <a href="{{ asset('storage/files/triwulans/'. $triwulan->pdfpath) }}" target="_blank"
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
                            <label for="judul">Judul Laporan</label>
                            <input type="text" class="form-control" name="judul" placeholder="Judul Laporan"
                                autocomplete="off" value="{{ old('judul') ?? $triwulan->judul }}">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="tanggal">Tahun Laporan</label>
                            <input type="text" class="form-control" name="tanggal" placeholder="Tahun Laporan"
                                autocomplete="off" value="{{ old('tanggal') ?? $triwulan->tanggal }}">
                        </div>
                    </div>
                    <div class="tile-footer">
                        <div class="row">
                            <div class="col-md-12 col-md-offset-3 text-right">
                                <button class="btn btn-primary" type="submit">
                                    <i class="fa fa-fw fa-check-circle"></i>Simpan
                                </button>
                                <a class="btn btn-secondary" href="{{ route('triwulan.index') }}"><i
                                        class="fa fa-fw fa-times-circle"></i>Batal</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection