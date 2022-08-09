@extends('core')
@section('main')
<div class="row">
    @include('be._partials.alert')
    <div class="col-md-12">
        <div class="tile">
            <div class="tile-body">
                {{-- <div class="mb-2 float-right">
                    <a href="{{ route('bunga.create') }}" class="btn btn-success btn-sm">Tambah</a>
                </div> --}}
                <div class="table-responsive align-content-center">
                    <table class="table table-hover table-bordered" id="sampleTable">
                        <thead class="text-center">
                            <tr>
                                <th>Jenis Investasi</th>
                                <th>Nisbah</th>
                                <th>Bulan 1</th>
                                <th>Bulan 2</th>
                                <th>Bulan 3</th>
                                <th>Bunga 1</th>
                                <th>Bunga 2</th>
                                <th>Bunga 3</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($bungas as $bunga)
                            <tr>
                                <td class="text-center">{{$bunga->jenis_investasi}}</td>
                                <td class="text-center">{{$bunga->nisbah}}%</td>
                                <td class="text-center">{{$bunga->nama_bulan1}}</td>
                                <td class="text-center">{{$bunga->nama_bulan2}}</td>
                                <td class="text-center">{{$bunga->nama_bulan3}}</td>
                                <td class="text-center">{{$bunga->bunga_bulan1}}%</td>
                                <td class="text-center">{{$bunga->bunga_bulan2}}%</td>
                                <td class="text-center">{{$bunga->bunga_bulan3}}%</td>
                                <td class="text-center">
                                    <a href="{{ route('bunga.edit',$bunga->id) }}" class="btn btn-primary mb-1 btn-sm">
                                        Ubah
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@include('be._partials.datatable')