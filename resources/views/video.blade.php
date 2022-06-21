@extends('layouts.main')
@section('title', '.:Data Video:.')
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
    <div>
        @if (session('create'))
            <div class="alert alert-primary alert-dismissible fade show mt-2" role="alert">
                <strong>{{session('create')}}</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span>&times;</span>
                </button>
            </div>
        @endif
                
        @if (session('update'))
            <div class="alert alert-success alert-dismissible fade show mt-2" role="alert">
                <strong>{{session('update')}}</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span>&times;</span>
                </button>
            </div>
        @endif

        @if (session('delete'))
            <div class="alert alert-danger alert-dismissible fade show mt-2" role="alert">
                <strong>{{session('delete')}}</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span>&times;</span>
                </button>
            </div>
        @endif
    </div>

<div class="card-header mt-2">
    <a class="btn btn-warning" href="/video/create/formvideo" role="button"><i class="bi bi-plus-square-dotted"></i> TAMBAH DATA VIDEO</a>
    <form class="form-inline my-2 my-lg-0 float-right" method="GET" action="/video/cari">
        <input class="form-control mr-sm-2" name="cari" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-warning my-2 my-sm-0" type="submit">Search</button>
    </form>
</div>
<div class="card-body">
    <table class="table table-hover">
        <thead class="thead-dark">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Username</th>
            <th scope="col">Nama Video</th>
            <th scope="col">Jumlah Like</th>
            <th scope="col">Jumlah Play</th>
            <th scope="col">Jumlah Komentar</th>
            <th scope="col">Jumlah Share</th>
            <th scope="col">Manipulasi</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($video as $no => $v)
            <tr>
                <th scope="row">{{$video -> firstItem() + $no}}</th>
                <td>{{$v -> username}}</td>
                <td>{{$v -> nama_video}}</td>
                <td>{{$v -> jum_like}}</td>
                <td>{{$v -> jum_play}}</td>
                <td>{{$v -> jum_komentar}}</td>
                <td>{{$v -> jum_share}}</td>
                <td>
                    <a href="/video/editvideo/{{ $v -> id }}" class="btn btn-outline-success">
                        <i class="bi bi-pencil"></i>
                    </a>
                    <a href="/video/delete/data/{{ $v -> id }}" class="btn btn-outline-danger" onclick="return confirm('Anda Yakin Menghapus Data?')">
                        <i class="bi bi-trash"></i>
                    </a>
                </td> 
            </tr>
        @endforeach
        </tbody>
    </table>
    <span class="float-right">{{$video -> links()}}</span>
    <tr>
        <th scope="row">Total Data >> {{$video -> count()}}</th>
    </tr>
</div>   
@endsection
@section('footer')
<div class="col-lg-12 bg-dark py-4 text-warning"> <b> &copy; SPK - 2022, UKDW Yogyakarta</b>
    <div>
        <p>Yogi Evan Dwi Kristantyo - Yonathan Fabiano - Selvi Ayu Melianda Sarumaha - Monica Gracethea</p>
    </div>
</div>
@endsection