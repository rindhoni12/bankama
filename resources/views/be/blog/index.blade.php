@extends('core')
@section('main')
<div class="row">
    @include('be._partials.alert')
    <div class="col-md-12">
        <div class="tile">
            <div class="tile-body">
                <div class="mb-2 float-right">
                    <a href="{{ route('blog.create') }}" class="btn btn-success btn-sm">Tambah</a>
                </div>
                <div class="table-responsive align-content-center">
                    <table class="table table-hover table-bordered" id="sampleTable">
                        <thead class="text-center">
                            <tr>
                                <th>Judul</th>
                                <th>Slug</th>
                                <th>Deskripsi</th>
                                <th style="width: 150px">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($blogs as $blog)
                            <tr>
                                <td>{{$blog->judul}}</td>
                                <td>{{$blog->slug}}</td>
                                <td>{!! Str::limit( strip_tags($blog->deskripsi), 75 ) !!}</td>
                                <td class="text-center">
                                    <form action="{{ route('blog.destroy', $blog->slug) }}" method="post">
                                        <a href="{{ route('blog.show',$blog->slug) }}"
                                            class="btn btn-warning mb-1 btn-sm">
                                            Lihat
                                        </a>
                                        <a href="{{ route('blog.edit',$blog->slug) }}"
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