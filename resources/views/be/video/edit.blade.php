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
            <h3 class="tile-title text-capitalize">Ubah URL {{ Request::segment(1) }}</h3>
            <div class="tile-body">
                <form method="post" action="{{ route('video.update', $video->id) }}" class="form-horizontal">
                    @method('PATCH')
                    @csrf

                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="url">Link URL Youtube (Cukup Ganti Kode Terakhirnya yang Setelah kalimat
                                "embed")</label>
                            <input type="text" class="form-control" name="url" placeholder="Masukkan Link URL Youtube"
                                autocomplete="off" value="{{ old('url') ?? $video->url }}">
                        </div>
                    </div>

                    <div class="tile-footer">
                        <div class="row">
                            <div class="col-md-12 col-md-offset-3 text-right">
                                <button class="btn btn-primary" type="submit">
                                    <i class="fa fa-fw fa-check-circle"></i>Simpan
                                </button>
                                <a class="btn btn-secondary" href="{{ route('galeri.index') }}"><i
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