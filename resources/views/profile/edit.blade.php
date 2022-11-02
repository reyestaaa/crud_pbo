@extends('layouts.main')

@section('title')
    <title>
        PROFILE
    </title>
@endsection


@section('main')

<div class="container mt-5">
    <form action="/profile/{{ $profile->kd_profile }}" method="post">

        @method('put')
        @csrf
        <input type="text" value="{{ $profile->nama_profile }}" name="nama_profile" placeholder="nama">
        <button type="submit">Update</button>

    </form>
</div>

@endsection