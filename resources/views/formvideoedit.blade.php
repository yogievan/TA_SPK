@extends('layouts/main')
@section('title', '.:Update Data Video:.')
@section('profile')
<div class="col-lg-12 bg-dark py-4 text-warning"> <b>Sistem Pendukung Keputusan</b>
    <div class="dropdown float-right">
        <button class="btn btn-warning dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false">
            <i class="bi bi-person-circle"></i> PROFILE USER
        </button>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
          <a class="dropdown-item" href="#Profile">{{Auth::user() -> nama_user}}</a>
          <a class="dropdown-item" href="/logout">Log Out</a>
        </div>
    </div>     
</div>
@endsection
@section('isi')
<div class="container-fluid mt-4 rounded">
    <form action="/video/update/data/{{$video -> id}}" method="POST" class="pt-2 pb-2">
        @csrf
        @method('PUT')
        <div><h3>Update Data Video</h3></div>
        <div class="form-group w-50">
            <label>Username</label>
            <input type="text" name="username" class="form-control" placeholder="Masukan Username" value="{{$video->username}}">
        </div>
        <div class="form-group w-50">
            <label>Nama Video </label>
            <input type="text" name="nama_video" class="form-control" placeholder="Masukan Nama Video" value="{{$video->nama_video}}">
        </div>
        <div class="form-group w-50">
            <label>Jumlah Like Video</label>
            <input type="number" name="jum_like" class="form-control" placeholder="Masukan Angka" value="{{$video->jum_like}}">
        </div>
        <div class="form-group w-50">
            <label>Jumlah Play Video</label>
            <input type="number" name="jum_play" class="form-control" placeholder="Masukan Angka" value="{{$video->jum_play}}">
        </div>
        <div class="form-group w-50">
            <label>Jumlah Komentar Video</label>
            <input type="number" name="jum_komentar" class="form-control" placeholder="Masukan Angka" value="{{$video->jum_komentar}}">
        </div>
        <div class="form-group w-50">
            <label>Jumlah Share Video</label>
            <input type="number" name="jum_share" class="form-control" placeholder="Masukan Angka" value="{{$video->jum_share}}">
        </div>
        <div>
            <input class="btn btn-warning" type="submit" value="Submit">
        </div>
    </form>
</div>
@endsection
@section('footer')
<div class="col-lg-12 bg-dark py-4 text-warning"> <b> &copy; SPK - 2022, UKDW Yogyakarta</b>
    <div>
        <p>Yogi Evan Dwi Kristantyo - Yonathan Fabiano - Selvi Ayu Melianda Sarumaha - Monica Gracethea</p>
    </div>
</div>
@endsection