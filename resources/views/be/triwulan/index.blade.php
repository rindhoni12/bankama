@extends('core')
@section('main')
<div class="row">
    @include('be._partials.alert')
    <div class="col-md-12">
        <div class="tile">
            <div class="tile-body">
                <div class="mb-2 float-right">
                    <a href="{{ route('triwulan.create') }}" class="btn btn-success btn-sm">Tambah</a>
                </div>
                <div class="table-responsive align-content-center">
                    <table class="table table-hover table-bordered" id="sampleTable">
                        <thead class="text-center">
                            <tr>
                                <th>Judul</th>
                                <th>Tahun</th>
                                <th>File PDF</th>
                                <th style="width: 150px">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($triwulans as $triwulan)
                            <tr>
                                <td>{{$triwulan->judul}}</td>
                                <td>{{$triwulan->tanggal}}</td>
                                <td>
                                    <a href="{{ asset('storage/files/triwulans/'. $triwulan->pdfpath) }}"
                                        target="_blank" rel="noopener noreferrer">
                                        Lihat PDF
                                    </a>
                                </td>
                                <td class="text-center">
                                    <form action="{{ route('triwulan.destroy', $triwulan->id) }}" method="post">
                                        <a href="{{ route('triwulan.edit',$triwulan->id) }}"
                                            class="btn btn-primary mb-1 btn-sm">
                                            Ubah
                                        </a>
                                        @csrf @method('DELETE')
                                        <button class="btn btn-danger mb-1 btn-sm" type="submit">
                                            Hapus
                                        </button>
                                    </form>
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