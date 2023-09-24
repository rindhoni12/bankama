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
            <h3 class="tile-title text-capitalize">Ubah Banner Mobile {{$banner->no_slide}} </h3>
            <div class="tile-body">
                <form method="post" action="{{ route('banner-mobile.update', $banner->id) }}" class="form-horizontal"
                    enctype="multipart/form-data">
                    @method('PATCH')
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-md-12 d-flex justify-content-center">
                            <img src="{{ asset('storage/images/banners-mobile/'. $banner->banner) }}"
                                class="img-thumbnail" alt="banner"
                                style=" max-width:100%; width:450px; height:auto; object-fit:cover;">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="banner">Ubah Banner Mobile {{$banner->no_slide}} (Optional)</label>
                            <input type="file" accept="image/*" name="banner" id="banner" class="form-control-file">
                        </div>
                        <div class="form-group col-md-12">
                            {{-- <label for="no_slide">Nomor Slide</label> --}}
                            <input type="text" class="form-control" name="no_slide" placeholder="Nomor Slide"
                                autocomplete="off" value="{{ old('no_slide') ?? $banner->no_slide }}" hidden>
                        </div>
                    </div>

                    <div class="tile-footer">
                        <div class="row">
                            <div class="col-md-12 col-md-offset-3 text-right">
                                <button class="btn btn-primary" type="submit">
                                    <i class="fa fa-fw fa-check-circle"></i>Simpan
                                </button>
                                <a class="btn btn-secondary" href="{{ route('banner-mobile.index') }}">
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