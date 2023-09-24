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
                <form method="post" action="{{ route('visimisi.update', $visimisi->id) }}" class="form-horizontal"
                    enctype="multipart/form-data">
                    @method('PATCH')
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="visi">Visi</label>
                            <input type="text" class="form-control" name="visi" placeholder="Visi" autocomplete="off"
                                value="{{ old('visi') ?? $visimisi->visi }}">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="misi">Misi</label>
                            <textarea name="misi" class="my-editor form-control" id="my-editor" cols="30"
                                rows="10">{{ old('misi') ?? $visimisi->misi }}</textarea>
                        </div>
                    </div>
                    <div class="tile-footer">
                        <div class="row">
                            <div class="col-md-12 col-md-offset-3 text-right">
                                <button class="btn btn-primary" type="submit">
                                    <i class="fa fa-fw fa-check-circle"></i>Simpan
                                </button>
                                <a class="btn btn-secondary" href="{{ route('visimisi.index') }}">
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
@section('ext_script')
<script src="//cdn.ckeditor.com/4.19.0/basic/ckeditor.js"></script>
<script>
    CKEDITOR.replace('my-editor');
</script>
@endsection