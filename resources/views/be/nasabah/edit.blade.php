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
                <form method="post" action="{{ route('nasabah.update', $nasabah->id) }}" class="form-horizontal"
                    enctype="multipart/form-data">
                    @method('PATCH')
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-md-12 d-flex justify-content-center">
                            <img src="{{ asset('storage/images/nasabahs/'. $nasabah->foto_ktp) }}" class="img-thumbnail"
                                alt="foto_ktp" style=" max-width:100%; width:450px; height:auto; object-fit:cover;">
                        </div>
                        <div class="form-group col-md-12">
                            <label for="foto_ktp">Ubah Foto KTP (Optional)</label>
                            <input type="file" accept="image/*" name="foto_ktp" id="foto_ktp" class="form-control-file">
                            {{-- <small for="foto_ktp_info">Foto KTP saat ini : {{ $nasabah->foto_ktp }}</small> --}}
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="jenis_produk">Jenis Produk</label>
                            <select name="jenis_produk" class="form-control">
                                <option {{$nasabah->jenis_produk == 'Tabungan iB Wadiah' ? 'selected' : ''}}
                                    value="Tabungan iB Wadiah">
                                    Tabungan iB Wadiah
                                </option>
                                <option {{$nasabah->jenis_produk == 'Tabungan iB Mudharabah' ? 'selected' : ''}}
                                    value="Tabungan iB Mudharabah">
                                    Tabungan iB Mudharabah
                                </option>
                                <option {{$nasabah->jenis_produk == 'Deposito iB Mudharabah' ? 'selected' : ''}}
                                    value="Deposito iB Mudharabah">
                                    Deposito iB Mudharabah
                                </option>
                                <option {{$nasabah->jenis_produk == 'Pembiayaan iB Wadiah' ? 'selected' : ''}}
                                    value="Pembiayaan iB Wadiah">
                                    Pembiayaan iB Wadiah
                                </option>
                                <option {{$nasabah->jenis_produk == 'Pembiayaan iB Musyarakah' ? 'selected' : ''}}
                                    value="Pembiayaan iB Musyarakah">
                                    Pembiayaan iB Musyarakah
                                </option>
                                <option {{$nasabah->jenis_produk == 'Pembiayaan iB Multijasa' ? 'selected' : ''}}
                                    value="Pembiayaan iB Multijasa">
                                    Pembiayaan iB Multijasa
                                </option>
                                <option {{$nasabah->jenis_produk == 'Pembiayaan iB Gadai Emas' ? 'selected' : ''}}
                                    value="Pembiayaan iB Gadai Emas">
                                    Pembiayaan iB Gadai Emas
                                </option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap"
                                autocomplete="off" value="{{ old('nama') ?? $nasabah->nama }}">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="nik">NIK</label>
                            <input type="text" class="form-control" name="nik" placeholder="NIK" autocomplete="off"
                                value="{{ old('nik') ?? $nasabah->nik }}">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="tgl_lahir">Tanggal Lahir</label>
                            <input type="date" class="form-control" name="tgl_lahir" placeholder="Tanggal Lahir"
                                autocomplete="off" value="{{ old('tgl_lahir') ?? $nasabah->tgl_lahir }}">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="no_hp">Nomor HP / WA</label>
                            <input type="text" class="form-control" name="no_hp" placeholder="Nomor HP / WA"
                                autocomplete="off" value="{{ old('no_hp') ?? $nasabah->no_hp }}">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="alamat">Alamat</label>
                            <input type="text" class="form-control" name="alamat" placeholder="Alamat Sesuai KTP"
                                autocomplete="off" value="{{ old('alamat') ?? $nasabah->alamat }}">
                        </div>
                    </div>

                    <div class="tile-footer">
                        <div class="row">
                            <div class="col-md-12 col-md-offset-3 text-right">
                                <button class="btn btn-primary" type="submit">
                                    <i class="fa fa-fw fa-check-circle"></i>Simpan
                                </button>
                                <a class="btn btn-secondary" href="{{ route('nasabah.index') }}"><i
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