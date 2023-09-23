@extends('core')
@section('main')
<div class="row">
    @include('be._partials.alert')
    <div class="col-md-12">
        <div class="tile">
            <div class="tile-body">
                <div class="mb-2 float-right">
                    <a href="{{ route('mitra.create') }}" class="btn btn-success btn-sm">Tambah</a>
                </div>
                <div class="table-responsive align-content-center">
                    <table class="table table-hover table-bordered" id="sampleTable">
                        <thead class="text-center">
                            <tr>
                                <th>Nama File</th>
                                <th>Logo Mitra</th>
                                <th style="width: 150px">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($mitras as $mitra)
                            <tr>
                                <td class="text-center">{{$mitra->photo}}</td>
                                <td class="text-center">
                                    <img src="{{ asset('storage/images/mitras/'.$mitra->photo) }}" class="img-thumbnail"
                                        alt="mitra"
                                        style=" max-width:100%; width:200px; height:auto; object-fit:cover;">
                                </td>

                                <td class="text-center">
                                    <form action="{{ route('mitra.destroy', $mitra->id) }}" method="post">
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