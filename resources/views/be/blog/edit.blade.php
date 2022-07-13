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
            <h3 class="tile-title text-capitalize">Ubah {{ Request::segment(2) }}</h3>
            <div class="tile-body">
                <form method="post" action="{{ route('blog.update', $blog->slug) }}" class="form-horizontal"
                    enctype="multipart/form-data">
                    @method('PATCH')
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-md-12 d-flex justify-content-center">
                            <img src="{{ asset('storage/images/blogs/'. $blog->thumbnail) }}" class="img-thumbnail"
                                alt="thumbnail" style=" max-width:100%; width:450px; height:auto; object-fit:cover;">
                        </div>
                        <div class="form-group col-md-12">
                            <label for="thumbnail">Ubah Thumbnail (Optional)</label>
                            <input type="file" accept="image/*" name="thumbnail" id="thumbnail"
                                class="form-control-file">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="judul">Judul</label>
                            <input type="text" class="form-control" name="judul" placeholder="Judul Artikel"
                                autocomplete="off" value="{{ old('judul') ?? $blog->judul }}">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="deskripsi">Deskripsi</label>
                            <textarea name="deskripsi" class="my-editor form-control" id="my-editor" cols="30"
                                rows="10">{{ old('deskripsi') ?? $blog->deskripsi }}</textarea>
                        </div>
                    </div>
                    <div class="tile-footer">
                        <div class="row">
                            <div class="col-md-12 col-md-offset-3 text-right">
                                <button class="btn btn-primary" type="submit">
                                    <i class="fa fa-fw fa-check-circle"></i>Simpan
                                </button>
                                <a class="btn btn-secondary" href="{{ route('blog.index') }}"><i
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
@section('ext_script')
<script src="//cdn.ckeditor.com/4.19.0/basic/ckeditor.js"></script>
<script>
    CKEDITOR.replace('my-editor');
</script>
@endsection