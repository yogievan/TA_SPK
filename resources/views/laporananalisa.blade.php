@extends('layouts.main')
@section('title', '.:Laporan Analisa SAW:.')
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
<h4 class="mt-3">Laporan Analisis SAW</h4>
<div class="card-body">
    <div class="card">
        <div class="card-body">
        <h5>Matrik Data</h5>
            <table class="table table-hover">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">ALTERNATIF</th>
                    <th scope="col">C1</th>
                    <th scope="col">C2</th>
                    <th scope="col">C3</th>
                    <th scope="col">C4</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($video as $v)
                    <tr>
                        <td>{{$v -> nama_video}}</td>
                        <td>{{$v -> jum_like}}</td>
                        <td>{{$v -> jum_play}}</td>
                        <td>{{$v -> jum_komentar}}</td>
                        <td>{{$v -> jum_share}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <hr>
    <div class="card">
        <div class="card-body">
            <h5>Matrik Normalisasi</h5>
            <table class="table table-hover">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">ALTERNATIF</th>
                    <th scope="col">C1</th>
                    <th scope="col">C2</th>
                    <th scope="col">C3</th>
                    <th scope="col">C4</th>
                </tr>
                </thead>
                @php
                    use App\Video;

                    //bobot { C1 = 35%; C2 = 30%; C3 = 20%; dan C4 = 15%.}
                    $bobot = array(0.35,0.30,0.20,0.15);
                @endphp
                <tbody>
                    @foreach ($video as $v)
                    <tr>
                        <td>{{$v -> nama_video}}</td>
                        <td>{{$v -> jum_like / Video::max('jum_like')}}</td>
                        <td>{{$v -> jum_play / Video::max('jum_play')}}</td>
                        <td>{{$v -> jum_komentar / Video::max('jum_komentar')}}</td>
                        <td>{{$v -> jum_share / Video::max('jum_share')}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <hr>
<div class="card">
    <div class="card-body">
        <h5>Matrik Perankingan</h5>
        <table class="table table-hover">
            <thead class="thead-dark">
            <tr>
                <th scope="col">ALTERNATIF</th>
                <th scope="col">C1</th>
                <th scope="col">C2</th>
                <th scope="col">C3</th>
                <th scope="col">C4</th>
                <th scope="col">TOTAL NILAI</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($video as $v)
                <tr>
                    <td>{{$v -> nama_video}}</td>
                    <td>{{$v -> jum_like / Video::max('jum_like') * $bobot[0]}}</td>
                    <td>{{$v -> jum_play / Video::max('jum_play') * $bobot[1]}}</td>
                    <td>{{$v -> jum_komentar / Video::max('jum_komentar') * $bobot[2]}}</td>
                    <td>{{$v -> jum_share / Video::max('jum_share') * $bobot[3]}}</td>
                    <td>
                        {{ $totalnilai = 
                        (($v -> jum_like / Video::max('jum_like') * $bobot[0]) +
                        ($v -> jum_play / Video::max('jum_play') * $bobot[1]) +
                        ($v -> jum_komentar / Video::max('jum_komentar') * $bobot[2]) +
                        ($v -> jum_share / Video::max('jum_share') * $bobot[3]))
                        }}
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
</div>   
@endsection