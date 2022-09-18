@extends('core')
@section('main')
<div class="row">
    <div class="col-md-6 col-lg-6">
        <div class="widget-small primary coloured-icon"><i class="icon fa fa-users fa-3x"></i>
            <div class="info">
                <h4>Calon Nasabah Tabungan</h4>
                <p><b>{{ $jmlNasabahTabungan }}</b></p>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-6">
        <div class="widget-small primary coloured-icon"><i class="icon fa fa-users fa-3x"></i>
            <div class="info">
                <h4>Calon Nasabah Pembiayaan</h4>
                <p><b>{{ $jmlNasabahPembiayaan }}</b></p>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-6">
        <div class="widget-small danger coloured-icon"><i class="icon fa fa-exclamation-triangle fa-3x"></i>
            <div class="info">
                <h4>Pengaduan Nasabah</h4>
                <p><b>{{ $jmlPengaduan }}</b></p>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-6">
        <div class="widget-small warning coloured-icon"><i class="icon fa fa-file fa-3x"></i>
            <div class="info">
                <h4>Blog Post</h4>
                <p><b>{{ $jmlPost }}</b></p>
            </div>
        </div>
    </div>
    {{-- <div class="col-md-6 col-lg-3">
        <div class="widget-small warning coloured-icon"><i class="icon fa fa-files-o fa-3x"></i>
            <div class="info">
                <h4>Uploades</h4>
                <p><b>10</b></p>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-3">
        <div class="widget-small danger coloured-icon"><i class="icon fa fa-star fa-3x"></i>
            <div class="info">
                <h4>Stars</h4>
                <p><b>500</b></p>
            </div>
        </div>
    </div> --}}
</div>
@endsection