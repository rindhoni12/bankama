@extends('core')
@section('main')
<div class="row">
    <div class="col-md-12">
        <div class="tile">
            <h3 class="tile-title text-capitalize">Calon {{ Request::segment(1) . ' ' .
                $tabungan->jenis_produk}} </h3>
            <div class="tile-body">
                <form class="form-horizontal">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <div class="form-row">
                                <div class="form-group col-md-12 d-flex justify-content-center">
                                    <img src="{{ asset('storage/images/tabungans/'. $tabungan->foto_ktp) }}"
                                        class="img-thumbnail" alt="foto_ktp"
                                        style=" max-width:100%; width:450px; height:auto; object-fit:cover;">
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-md-6">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="nama">Nama</label>
                                    <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap"
                                        autocomplete="off" value="{{ old('nama') ?? $tabungan->nama }}" disabled>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="nik">NIK</label>
                                    <input type="text" class="form-control" name="nik" placeholder="nik"
                                        autocomplete="off" value="{{ old('nik') ?? $tabungan->nik }}" disabled>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="tempat_lahir">Tempat Lahir</label>
                                    <input type="text" class="form-control" name="tempat_lahir"
                                        placeholder="Tempat Lahir" autocomplete="off"
                                        value="{{ old('tempat_lahir') ?? $tabungan->tempat_lahir }}" disabled>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="tgl_lahir">Tanggal Lahir</label>
                                    <input type="text" class="form-control" name="tgl_lahir" placeholder="Tanggal Lahir"
                                        autocomplete="off" value="{{ old('tgl_lahir') ?? $tabungan->tgl_lahir }}"
                                        disabled>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="no_hp">Nomor HP/WA</label>
                                    <input type="text" class="form-control" name="no_hp" placeholder="Nomor HP / WA"
                                        autocomplete="off" value="{{ old('no_hp') ?? $tabungan->no_hp }}" disabled>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="alamat">Alamat</label>
                                    <input type="text" class="form-control" name="alamat"
                                        placeholder="Alamat Sesuai KTP" autocomplete="off"
                                        value="{{ old('alamat') ?? $tabungan->alamat_domisili }}" disabled>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="tile-footer">
                        <div class="row">
                            <div class="col-md-12 col-md-offset-3 text-right">
                                <a class="btn btn-secondary" href="{{ url()->previous() }}"><i
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