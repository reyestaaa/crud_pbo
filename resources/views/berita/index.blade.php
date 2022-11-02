@extends('layouts.main')

@section('title')
    <title>
        berita
    </title>
@endsection


@section('main')

<div class="container mt-5">
    <a href="" class="btn btn-success mb-3 px-5 fw-bold">Add</a>
    <table class="table w-100 table-bordered border-dark shadow table-striped">
        <tr>
            <th>Id</th>
            <th>Nama berita</th>
            <th>Action</th>
        </tr>
        @foreach($berita as $data)
            <tr>
                <td>{{ $data->kd_berita }}</td>
                <td>{{ $data->nama_berita }}</td>
                <td>
                    <a class="fw-bold btn btn-warning" href="/{{ $data->kd_berita }}/edit">Update</a>
                    
                    <a class="fw-bold btn btn-danger" href="/{{ $data->kd_berita }}">Delete</a>
                </td>
            </tr>
        @endforeach
    </table>
</div>

@endsection