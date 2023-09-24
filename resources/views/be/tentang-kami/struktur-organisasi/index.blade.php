@extends('core')
@section('main')
<div class="row">
    @include('be._partials.alert')
    <div class="col-md-12">
        <div class="tile">
            <div class="tile-body">
                <div class="table-responsive align-content-center">
                    <table class="table table-hover table-bordered" id="sampleTable">
                        <thead class="text-center">
                            <tr>
                                <th>Judul</th>
                                <th>File PDF</th>
                                <th style="width: 150px">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($strukturs as $struktur)
                            <tr>
                                <td>{{$struktur->judul}}</td>
                                <td>
                                    <a href="{{ asset('storage/files/strukturs/'. $struktur->pdfpath) }}"
                                        target="_blank" rel="noopener noreferrer">
                                        Lihat PDF
                                    </a>
                                </td>
                                <td class="text-center">
                                    <a href="{{ route('struktur.edit',$struktur->id) }}"
                                        class="btn btn-primary mb-1 btn-sm">
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