
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.80.0">

    <title>Detail Lowoangan</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="canonical" href="https://getbootstrap.com/docs/4.6/examples/carousel/">
    <meta name="msapplication-config" content="/docs/4.6/assets/img/favicons/browserconfig.xml">
    <meta name="theme-color" content="#563d7c">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }
      body {
          margin-top: 10%;
        }
        
      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>


  </head>
  <body>
    
  <header>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        @include('nav')
        
      </div>
    </nav>
  </header>

    <div class="container my-4">

      <div class="card col-12">
        <img class="img-fluid" src="{{ url('foto/' . $lowongan->foto) }}" alt="{{$lowongan->name}}" alt="{{$lowongan->name}}">
        <div class="card-body">
          <p class="text-muted">Akhir Lowongan {{ Carbon\Carbon::parse($lowongan->tgl_akhir)->locale('id')->isoFormat('LL') }}</p>
          <h5 class="card-title">{{ $lowongan->judul_lowongan }}</h5>
          <p class="card-text">Deskripsi Pekerjaan Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt eum velit tempore maxime? Quia nisi, suscipit vitae amet aliquid saepe!</p>
          
          <table class="table">

            <tr>
              <th>Lokasi</th>
              <td>{{ $lowongan->alamat }}</td>
            </tr>

            <tr>
              <th>Kota</th>
              <td>{{ $lowongan->kabupatenkota }}</td>
            </tr>

            <tr>
              <th>Provinsi</th>
              <td>{{ $lowongan->provinsi }}</td>
            </tr>

            <tr>
              <th>Kode Pos</th>
              <td>{{ $lowongan->kodepos }}</td>
            </tr>
            
            <tr>
              <th>Kualifikasi</th>
              <td>{{ $lowongan->kualifikasi }}</td>
            </tr>

            <tr>
              <th>Persyaratan</th>
              <td>{{ $lowongan->persyaratan }}</td>
            </tr>

            <tr>
              <th>Persyaratan</th>
              <td>{{ $lowongan->bidangindustri }}</td>
            </tr>

            <tr>
              <th>Persyaratan</th>
              <td>{{ $lowongan->kategoriposisi }}</td>
            </tr>

          </table>

          <p class="text-muted">dibuat {{ Carbon\Carbon::parse($lowongan->tgl_akhir)->locale('id')->diffForHumans() }}</p>
          
          <a href="/" class="btn btn-link">Kembali</a>
        
        </div>


      </div>

    </div>

    <div class="container">
      <div class="row">
        <div class="col-12">
          @include('footer')
        </div>
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
  </body>
</html>


