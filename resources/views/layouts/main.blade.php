<!doctype html>
<html lang="en">
  <head>
    <title>@yield('title','DASHBOARD-MENU')</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
  </head>
  <body style="background: #fffff5;">
      <div class="container-fluid">
        <div class="row">
          @yield('profile')
        </div>
        <div class="row">
            <div class="col-lg-2 vh-100" style="background: #ededed">
                <div class="nav flex-column nav-pills mt-4" aria-orientation="vertical" style="font-size: 20px">
                    <a class="nav-link text-dark {{($cek == 'dashboard') ? 'bg-warning active':''}}" href="/dashboard">Dashboard</a>
                    <a class="nav-link text-dark {{($cek == 'video') ? 'bg-warning active':''}}" href="/datavideo">Data Video</a>
                    <a class="nav-link text-dark {{($cek == 'laporananalisa') ? 'bg-warning active':''}}" href="/laporananalisa">Laporan Analisa</a>
                </div>
            </div>
            <div class="col-lg-10 vh-100">
              @yield('isi')
            </div>
        </div>
        <div class="row">
          @yield('footer')
        </div>
      </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>