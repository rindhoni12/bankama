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
                <form method="post" action="{{ route('navbar.update', $navbar->id) }}" class="form-horizontal"
                    enctype="multipart/form-data">
                    @method('PATCH')
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="jenis_produk">Jenis Produk</label>
                            <select class="form-control" id="jenis_produk" name="jenis_produk">
                                @foreach ($jenis_produks as $jenis_produk)
                                <option value="{{ $jenis_produk->jenis_produk }}" {{ $jenis_produk->jenis_produk ==
                                    $navbar->jenis_produk ? 'selected' : ''}}>
                                    {{$jenis_produk->jenis_produk}}
                                </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="nama_produk">Nama Produk</label>
                            <input type="text" class="form-control" name="nama_produk" placeholder="Nama Produk"
                                autocomplete="off" value="{{ old('nama_produk') ?? $navbar->nama_produk }}">
                        </div>
                    </div>
                    <div class="tile-footer">
                        <div class="row">
                            <div class="col-md-12 col-md-offset-3 text-right">
                                <button class="btn btn-primary" type="submit">
                                    <i class="fa fa-fw fa-check-circle"></i>Simpan
                                </button>
                                <a class="btn btn-secondary" href="{{ route('navbar.index') }}">
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