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
                                <th>Visi</th>
                                <th>Misi</th>
                                <th style="width: 150px">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($visimisis as $visimisi)
                            <tr>
                                <td>{{$visimisi->visi}}</td>
                                <td>{!! $visimisi->misi !!}</td>
                                <td class="text-center">
                                    <a href="{{ route('visimisi.edit',$visimisi->id) }}"
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