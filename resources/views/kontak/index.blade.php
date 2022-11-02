@extends('layouts.main')

@section('title')
    <title>
        kontak
    </title>
@endsection


@section('main')

<div class="container mt-5">
    <a href="" class="btn btn-success mb-3 px-5 fw-bold">Add</a>
    <table class="table w-50 table-bordered border-dark shadow table-striped">
        <tr>
            <th>Id</th>
            <th>Nama kontak</th>
            <th>Action</th>
        </tr>
        @foreach($kontak as $data)
            <tr>
                <td>{{ $data->kd_kontak }}</td>
                <td>{{ $data->nama_kontak }}</td>
                <td>
                    <a class="fw-bold btn btn-warning" href="/{{ $data->kd_kontak }}/edit">Update</a>
                    
                    <a class="fw-bold btn btn-danger" href="/{{ $data->kd_kontak }}">Delete</a>
                </td>
            </tr>
        @endforeach
    </table>
</div>

@endsection