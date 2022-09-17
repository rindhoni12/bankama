@extends('core')
@section('main')
<div class="row">
    <div class="col-md-12">
        <div class="tile">
            <h3 class="tile-title">Nama Pelapor: {{ $pengaduan->nama }}</h3>
            <div class="tile-body">
                <form class="form-horizontal">
                    <div class="row">
                        <div class="form-group col-md-12 text-secondary">
                            {{-- Nama Pelapor : {{ $pengaduan->nama }} --}}
                            Nomor HP Pelapor: {{ $pengaduan->no_hp }}
                        </div>
                        <div class="form-group col-md-12 text-justify">
                            <h4>Pesan Aduan:</h4>
                            {{ $pengaduan->pesan }}
                        </div>
                    </div>

                    <div class="tile-footer">
                        <div class="row">
                            <div class="col-md-12 col-md-offset-3 text-right">
                                <a class="btn btn-secondary" href="{{ route('pengaduan.index') }}"><i
                                        class="fa fa-fw fa-times-circle"></i>Kembali</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection