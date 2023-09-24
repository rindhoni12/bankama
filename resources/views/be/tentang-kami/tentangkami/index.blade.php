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
                                <th>Deskripsi</th>
                                <th style="width: 150px">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($tentangkamis as $tentangkami)
                            <tr>
                                <td>{{$tentangkami->judul}}</td>
                                <td>{!! $tentangkami->deskripsi !!}</td>
                                <td class="text-center">
                                    <a href="{{ route('tentangkami.edit',$tentangkami->id) }}"
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