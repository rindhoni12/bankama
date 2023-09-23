@extends('core')
@section('main')
<div class="row">
    @include('be._partials.alert')
    <div class="col-md-12">
        <div class="tile">
            <div class="tile-body">
                <div class="mb-2 float-right">
                    <a href="{{ route('award.create') }}" class="btn btn-success btn-sm">Tambah</a>
                </div>
                <div class="table-responsive align-content-center">
                    <table class="table table-hover table-bordered" id="sampleTable">
                        <thead class="text-center">
                            <tr>
                                <th>Judul</th>
                                <th>Deskripsi</th>
                                <th>Foto</th>
                                <th style="width: 150px">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($awards as $award)
                            <tr>
                                <td>{{$award->judul}}</td>
                                <td>{!! $award->deskripsi !!}</td>
                                <td class="text-center">
                                    <img src="{{ asset('storage/images/awards/'.$award->photo) }}" class="img-thumbnail"
                                        alt="award"
                                        style=" max-width:100%; width:200px; height:auto; object-fit:cover;">
                                </td>
                                <td class="text-center">
                                    <form action="{{ route('award.destroy', $award->id) }}" method="post">
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