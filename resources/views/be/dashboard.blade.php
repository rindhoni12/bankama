@extends('core')
@section('main')
<div class="row">
    <div class="col-md-6 col-lg-6">
        <div class="widget-small primary coloured-icon"><i class="icon fa fa-users fa-3x"></i>
            <div class="info">
                <h4>Calon Nasabah</h4>
                <p><b>{{ $jmlNasabah }}</b></p>
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