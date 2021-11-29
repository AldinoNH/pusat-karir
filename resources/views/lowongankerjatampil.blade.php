
<!doctype html>
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

    

    <!-- Bootstrap core CSS -->
<link href="/docs/4.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">



    <!-- Favicons -->
<link rel="apple-touch-icon" href="/docs/4.6/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/4.6/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/4.6/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/4.6/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/4.6/assets/img/favicons/safari-pinned-tab.svg" color="#563d7c">
<link rel="icon" href="/docs/4.6/assets/img/favicons/favicon.ico">
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
          margin-top: 0%;
        }
        main {
          margin-top: 5%;
        }
      img.content {
        width: 200px;
        height: 200px;
      }
      #myCarousel {
        margin-bottom: 5%;
      }
      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
      .list-group {
        width: 300px;
        height: 450px;
        overflow-y:scroll;

      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="carousel.css" rel="stylesheet">
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
      <div class="dropdown">
  
    </div>
  </nav>
</header>

<main role="main">

<div class="col-12">
  <div class="row">
    
    <div class="col-12">
        <div class="card bg-light" >
          <div class="card-header">Daftar Lowongan kerja
          <div class="col-4 float-right">
              <form class="form-inline my-2 my-lg-0" action=" " method="GET">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit" value="cari">Search</button>
              </form>
            </div>
          </div>
          <div class="row">
            <div class="col-3">
              <div class="card" >
                    <div class="card-header">Kategori Posisi</div>
                      <div class="card-body">
                      <ul class="list-group list-group-flush ">
                      <li class="list-group-item"><a href="#" class="text-secondary stretched-link">Semua Kategori</a></li>
                        <li class="list-group-item"><a href="#" class="text-secondary stretched-link">Administrasi</a></li>
                        <li class="list-group-item"><a href="#" class="text-secondary stretched-link">Agrikultur/Kehutanan/Perikanan</a></li>
                        <li class="list-group-item"><a href="#" class="text-secondary stretched-link">Akuntansi</a></li>
                        <li class="list-group-item"><a href="#" class="text-secondary stretched-link">Audit</a></li>
                        <li class="list-group-item"><a href="#" class="text-secondary stretched-link">Bioteknologi</a></li>
                        <li class="list-group-item"><a href="#" class="text-secondary stretched-link">Catering</a></li>
                        <li class="list-group-item"><a href="#" class="text-secondary stretched-link">Desain</a></li>
                        <li class="list-group-item"><a href="#" class="text-secondary stretched-link">Keamanan</a></li>
                        <li class="list-group-item"><a href="#" class="text-secondary stretched-link">Kesehatan dan Kecantikan</a></li>
                        <li class="list-group-item"><a href="#" class="text-secondary stretched-link">Kimia</a></li>
                        <li class="list-group-item"><a href="#" class="text-secondary stretched-link">Konstruksi dan Bangunan</a></li>
                        <li class="list-group-item"><a href="#" class="text-secondary stretched-link">Layanan Bisnis</a></li>
                        <li class="list-group-item"><a href="#" class="text-secondary stretched-link">Media dan Periklanan</a></li>
                        <li class="list-group-item"><a href="#" class="text-secondary stretched-link">Migas dan Pertambangan</a></li>
                        <li class="list-group-item"><a href="#" class="text-secondary stretched-link">Otomotif</a></li>
                        <li class="list-group-item"><a href="#" class="text-secondary stretched-link">Pendidikan</a></li>
                        <li class="list-group-item"><a href="#" class="text-secondary stretched-link">Penerbangan</a></li>
                        <li class="list-group-item"><a href="#" class="text-secondary stretched-link">Perbankan/Finansial</a></li>
                        <li class="list-group-item"><a href="#" class="text-secondary stretched-link">Properti</a></li>
                        <li class="list-group-item"><a href="#" class="text-secondary stretched-link">R&D dan Lab</a></li>
                        <li class="list-group-item"><a href="#" class="text-secondary stretched-link">Teknologi Informatika</a></li>
                        <li class="list-group-item"><a href="#" class="text-secondary stretched-link">Telekomunikasi</a></li>
                        <li class="list-group-item"><a href="#" class="text-secondary stretched-link">Transportasi</a></li>
                        <li class="list-group-item"><a href="#" class="text-secondary stretched-link">Umum</a></li>
                      </ul>
                      </div>
                  <div class="card bg-light">
                    <div class="card-header">Bidang Industri</div>
                      <div class="card-body">
                      <div class="list-group scrollable">
                          <a href="#" class="list-group-item list-group-item-action active" aria-current="true">
                            The current link item
                          </a>
                          <a href="#" class="list-group-item list-group-item-action">Semua Industri</a>
                          <a href="#" class="list-group-item list-group-item-action">Akuntan/Auditor</a>
                          <a href="#" class="list-group-item list-group-item-action">Asuransi</a>
                          <a href="#" class="list-group-item list-group-item-action">Ekspedisi / Agen Cargo</a>
                          <a href="#" class="list-group-item list-group-item-action">Elektronika/Semikonduktor</a>
                          <a href="#" class="list-group-item list-group-item-action">Farmasi</a>
                          <a href="#" class="list-group-item list-group-item-action">Furnitur</a>
                          <a href="#" class="list-group-item list-group-item-action">Garmen/Tekstil</a>
                          <a href="#" class="list-group-item list-group-item-action">Hiburan</a>
                          <a href="#" class="list-group-item list-group-item-action">Hotel</a>
                          <a href="#" class="list-group-item list-group-item-action">Hukum</a>
                          <a href="#" class="list-group-item list-group-item-action">Internet</a>
                          <a href="#" class="list-group-item list-group-item-action">Kehutanan/Perkayuan</a>
                          <a href="#" class="list-group-item list-group-item-action">Keuangan/Bank</a>
                          <a href="#" class="list-group-item list-group-item-action">Kimia</a>
                          <a href="#" class="list-group-item list-group-item-action">Komputer/TI</a>
                          <a href="#" class="list-group-item list-group-item-action">Konstruksi</a>
                          <a href="#" class="list-group-item list-group-item-action">Konsultan</a>
                          <a href="#" class="list-group-item list-group-item-action">Kosmetik</a>
                          <a href="#" class="list-group-item list-group-item-action">Logam</a>
                          <a href="#" class="list-group-item list-group-item-action">Logistik/Transportasi</a>
                          <a href="#" class="list-group-item list-group-item-action">Mainan</a>
                          <a href="#" class="list-group-item list-group-item-action">Manufaktur</a>
                          <a href="#" class="list-group-item list-group-item-action">Media</a>
                          <a href="#" class="list-group-item list-group-item-action">Mekanik/Listrik</a>
                          <a href="#" class="list-group-item list-group-item-action">Otomotif</a>
                          <a href="#" class="list-group-item list-group-item-action">Minyak dan Gas</a>
                          <a href="#" class="list-group-item list-group-item-action">Makanan/Minuman</a>
                          <a href="#" class="list-group-item list-group-item-action">Penerbangan</a>
                          <a href="#" class="list-group-item list-group-item-action">Pengolahan sumber daya alam lainnya</a>
                          <a href="#" class="list-group-item list-group-item-action">Percetakan dan Kemasan</a>
                          <a href="#" class="list-group-item list-group-item-action">Kesehatan</a>
                          <a href="#" class="list-group-item list-group-item-action">Perikanan</a>
                          <a href="#" class="list-group-item list-group-item-action">Ritel</a>
                          <a href="#" class="list-group-item list-group-item-action">Telekomunikasi</a>
                          <a href="#" class="list-group-item list-group-item-action">Travel</a>
                          <a href="#" class="list-group-item list-group-item-action">Agribisnis</a>
                          <a href="#" class="list-group-item list-group-item-action">Lain-lain</a>
                        </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-9">
              @include('lowongankerja')
              <nav class="float-right" aria-label="...">
              {{ $lowongan->links() }}
              </nav>
            </div>
          </div>
        </div>
    </div>

  </div>
</div>

<div class="jumbotron" >
  <h1 class="display-4 text-center">Find Your Best Employees!</h1>
  <p class="lead text-center">Apakah anda punya lowongan pekerjaan ?</p>
  <hr class="my-4 text-center">
  <p class="text-center">Submit disini.</p>
  <div class="mx-auto" style="width: 100px;">
  <a class=" btn btn-primary btn-lg" href="/inputlowongankerja" role="button">Submit</a>
  </div>
</div>
<div class="footer footer-expand-md footer-light bottom bg-light">
  <div class="container">
  <div class="row">
    <div class="col-12">
      @include('footer')
    </div>
  </div>
  </div>
</div>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="/docs/4.6/assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="/docs/4.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
      
  </body>
</html>
