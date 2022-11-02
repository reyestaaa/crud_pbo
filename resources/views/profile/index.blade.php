@extends('layouts.main')

@section('title')
    <title>
        PROFILE
    </title>
@endsection


@section('main')

<div class="container mt-5">
    <a href="/profile/add" class="btn btn-success mb-3 px-5 fw-bold">Add</a>
    <table class="table w-50 table-bordered border-dark shadow table-striped">
        <tr>
            <th>Id</th>
            <th>Nama Profile</th>
            <th>Action</th>
        </tr>
        @foreach($profile as $data)
            <tr>
                <td>{{ $data->kd_profile }}</td>
                <td>{{ $data->nama_profile }}</td>
                <td class="d-flex justify-content-evenly ">
                    <a href="/profile/{{ $data->kd_profile }}/edit" class="btn fw-bold btn-warning mb-3">EDIT</a>
                    <form action="/profile/{{ $data->kd_profile }}" method="post">
                        @csrf
                        @method("delete")
                        <button type="submit" class="btn fw-bold btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
</div>

@endsection