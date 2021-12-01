<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.80.0">
    <title>Pusat Karir STIKI Indonesia</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="canonical" href="https://getbootstrap.com/docs/4.6/examples/carousel/">
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

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
      body {
          margin-top: 5%;
          
      }

      .top {
        position: relative;
        top: 66px;
      }

      @media (max-width: 500px) {

        .top {
          top: 100px;
        }

      }

    </style>

  </head>
<body>
<header>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <a class="navbar-brand" href="https://stiki-indonesia.ac.id/">
      <img src="gambar/logofooter.png" width="100" height="32" alt="">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      @include('nav')
     
    </div>
    <div class="col-md-4 float-right">
      <form class="form-inline my-2 my-lg-0" action=" " method="GET">
        <input class="form-control col mr-sm-2" type="search" placeholder="Search" aria-label="Search" id="searchevenet-1">
      </form>
    </div>
  </nav>
</header>
 
<div class="container d-flex flex-column justify-content-between top">

  <div id="resultQuery">

  </div>

  <div id="firstQuery">
    <div class="row">
      @forelse( $tbl_event as $data )
        <div class="row row-cols-1 row-cols-md-2">
          <div class="col mb-4">
            <div class="card">
              <img src="{{ url('foto_event/'.$data->foto_event) }}" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">{{ $data->nama_event }}</h5>
                <p class="card-text">{{ $data->deskripsi }}</p>
                <a href="admin/detailevent/{{ $data->id_event }}" class="btn btn-secondary">View details</a>
              </div>
            </div>
          </div>
        </div>
        @empty
        <div class="m-auto">Tidak Ada Event !</div>
        @endforelse
    </div>
  </div>

  <div class="row">
    <div class="col-12">
      @include('footer')
    </div>
  </div>

</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

<script type="text/javascript" src="{{ url('js/searchevent.js') }}"></script>

</body>
</html>