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
            <h3 class="tile-title">{{ $produklayanan->nama_produklayanan }}</h3>
            <p>
                <small>
                    <i> Kategori:
                        <b>
                            {{ $produklayanan->jenis_produk }}/{{$produklayanan->jenis_tabungan}}
                        </b>
                    </i>
                </small>
            </p>
            <div class="tile-body">
                <form class="form-horizontal">
                    <div class="row">
                        <div class="form-group col-md-12 d-flex justify-content-center">
                            <img src="{{ asset('storage/images/produklayanans/'. $produklayanan->foto_thumbnail) }}"
                                class="img-thumbnail" alt="foto_thumbnail"
                                style=" max-width:100%; width:450px; height:auto; object-fit:cover;">
                        </div>
                        <div class="form-group col-md-12 px-4 mt-4">
                            {!! $produklayanan->deskripsi !!}
                        </div>
                    </div>

                    <div class="tile-footer">
                        <div class="row">
                            <div class="col-md-12 col-md-offset-3 text-right">
                                <a class="btn btn-secondary" href="{{ route('produklayanan.index') }}"><i
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