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
                        <div class="form-group col-md-4">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap"
                                autocomplete="off" value="{{ old('nama') ?? $nasabah->nama }}">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="no_hp">Nomor HP / WA</label>
                            <input type="text" class="form-control" name="no_hp" placeholder="Nomor HP / WA"
                                autocomplete="off" value="{{ old('no_hp') ?? $nasabah->no_hp }}">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="nama_gadis_ibu">Nama Gadis Ibu</label>
                            <input type="text" class="form-control" name="nama_gadis_ibu" placeholder="Nama Gadis Ibu"
                                autocomplete="off" value="{{ old('nama_gadis_ibu') ?? $nasabah->nama_gadis_ibu }}">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="agama">Agama</label>
                            <select name="agama" class="form-control">
                                {{-- <option selected hidden>Pilih Salah Satu</option> --}}
                                <option value="Islam" {{ $nasabah->agama == 'Islam' ? 'selected' : '' }} >Islam
                                </option>
                                <option value="Kristen" {{ $nasabah->agama == 'Kristen' ? 'selected' : '' }} >Kristen
                                </option>
                                <option value="Katolik" {{ $nasabah->agama == 'Katolik' ? 'selected' : '' }} >Katolik
                                </option>
                                <option value="Hindu" {{ $nasabah->agama == 'Hindu' ? 'selected' : '' }} >Hindu
                                </option>
                                <option value="Budha" {{ $nasabah->agama == 'Budha' ? 'selected' : '' }} >Budha
                                </option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="jenis_kelamin">Jenis Kelamin</label>
                            <select name="jenis_kelamin" class="form-control">
                                {{-- <option selected hidden>Pilih Salah Satu</option> --}}
                                <option value="Laki-laki" {{ $nasabah->jenis_kelamin == 'Laki-laki' ? 'selected' : '' }}
                                    >Laki-laki
                                </option>
                                <option value="Perempuan" {{ $nasabah->jenis_kelamin == 'Perempuan' ? 'selected' : '' }}
                                    >Perempuan
                                </option>
                            </select>
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