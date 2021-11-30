
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.80.0">

    <title>Detail Event</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="canonical" href="https://getbootstrap.com/docs/4.6/examples/carousel/">
    <!-- Bootstrap core CSS -->
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
        <img class="card-img-top" src="{{ url('foto_event/' . $tbl_event->foto_event) }}" alt="{{$tbl_event->nama_event}}" alt="{{$tbl_event->nama_event}}">
        <div class="card-body">
          <p class="text-muted">Tanggal Event {{ Carbon\Carbon::parse($tbl_event->waktu)->locale('id')->isoFormat('LL') }}</p>
          <h5 class="card-title">{{ $tbl_event->nama_event }}</h5>
          <p class="card-text">{{ $tbl_event->deskripsi }}</p>

          @if (( $tbl_event->waktu < Carbon\Carbon::now()->format('Y-m-d') ))
            @if ($tbl_event->link === null && $tbl_event->upload === null)
              <span class="btn btn-secondary disabled">Belum ada dokumentasi</span>
            @else
              <a href="/stream/past/event/{{ $tbl_event->id_event }}" class="btn btn-secondary">Lihat Dokumentasi</a>
            @endif
          @endif

          <br />
          
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


