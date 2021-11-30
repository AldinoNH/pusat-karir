
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


    <!-- Favicons -->
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
        width: 220px;
        height: 450px;
        overflow-y:scroll;

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
      <div class="dropdown">
  
    </div>
  </nav>
</header>

<main role="main">
  
  <div class="card bg-light">
    <div class="card-header">
      <div class="d-flex flex-column justify-content-between">
        <h4>
          Daftar Lowongan kerja
        </h4>
      </div>
    </div>
    <div class="card-body p-0">
      <div class="d-flex">
        <div class="card-header">

          {{-- Kategori Posisi --}}
          <div>
            <h6> Kategori Posisi </h6>

            <div id="list-kategori-posisi" class="list-group list-group-flush my-4">
              <button type="button" class="list-group-item list-group-item-action" data-kategori="Semua Kategori">Semua Kategori</button>
              <button type="button" class="list-group-item list-group-item-action" data-kategori="Administrasi">Administrasi</button>
              <button type="button" class="list-group-item list-group-item-action" data-kategori="Agrikultur/Kehutanan/Perikanan">Agrikultur/Kehutanan/Perikanan</button>
              <button type="button" class="list-group-item list-group-item-action" data-kategori="Akuntansi">Akuntansi</button>
              <button type="button" class="list-group-item list-group-item-action" data-kategori="Audit">Audit</button>
              <button type="button" class="list-group-item list-group-item-action" data-kategori="Bioteknologi">Bioteknologi</button>
              <button type="button" class="list-group-item list-group-item-action" data-kategori="Catering">Catering</button>
              <button type="button" class="list-group-item list-group-item-action" data-kategori="Desain">Desain</button>
              <button type="button" class="list-group-item list-group-item-action" data-kategori="Keamanan">Keamanan</button>
              <button type="button" class="list-group-item list-group-item-action" data-kategori="Kesehatan dan Kecantikan">Kesehatan dan Kecantikan</button>
              <button type="button" class="list-group-item list-group-item-action" data-kategori="Kimia">Kimia</button>
              <button type="button" class="list-group-item list-group-item-action" data-kategori="Konstruksi dan Bangunan">Konstruksi dan Bangunan</button>
              <button type="button" class="list-group-item list-group-item-action" data-kategori="Layanan Bisnis">Layanan Bisnis</button>
              <button type="button" class="list-group-item list-group-item-action" data-kategori="Media dan Periklanan">Media dan Periklanan</button>
              <button type="button" class="list-group-item list-group-item-action" data-kategori="Migas dan Pertambangan">Migas dan Pertambangan</button>
              <button type="button" class="list-group-item list-group-item-action" data-kategori="Otomotif">Otomotif</button>
              <button type="button" class="list-group-item list-group-item-action" data-kategori="Pendidikan">Pendidikan</button>
              <button type="button" class="list-group-item list-group-item-action" data-kategori="Penerbangan">Penerbangan</button>
              <button type="button" class="list-group-item list-group-item-action" data-kategori="Perbankan / Finansial">Perbankan/Finansial</button>
              <button type="button" class="list-group-item list-group-item-action" data-kategori="Properti">Properti</button>
              <button type="button" class="list-group-item list-group-item-action" data-kategori="R&D dan Lab">R&D dan Lab</button>
              <button type="button" class="list-group-item list-group-item-action" data-kategori="Teknologi Informatika">Teknologi Informatika</button>
              <button type="button" class="list-group-item list-group-item-action" data-kategori="Telekomunikasi">Telekomunikasi</button>
              <button type="button" class="list-group-item list-group-item-action" data-kategori="Transportasi">Transportasi</button>
              <button type="button" class="list-group-item list-group-item-action" data-kategori="Umum">Umum</button>
            </div>
          </div>
          
          {{-- Kategosri Industri --}}
          <div>
            <h6>Kategori Industri</h6>
            <div id="list-kategori-industri" class="list-group scrollable my-4">
              <button type="button" class="list-group-item list-group-item-action" data-kategori="Semua Industri">Semua Industri</button>
              <button type="button" class="list-group-item list-group-item-action" data-kategori="Akuntan/Auditor">Akuntan/Auditor</button>
              <button type="button" class="list-group-item list-group-item-action" data-kategori="Asuransi">Asuransi</button>
              <button type="button" class="list-group-item list-group-item-action" data-kategori="Ekspedisi / Agen Cargo">Ekspedisi / Agen Cargo</button>
              <button type="button" class="list-group-item list-group-item-action" data-kategori="Elektronika/Semikonduktor">Elektronika/Semikonduktor</button>
              <button type="button" class="list-group-item list-group-item-action" data-kategori="Farmasi">Farmasi</button>
              <button type="button" class="list-group-item list-group-item-action" data-kategori="Furnitur">Furnitur</button>
              <button type="button" class="list-group-item list-group-item-action" data-kategori="Garmen/Tekstil">Garmen/Tekstil</button>
              <button type="button" class="list-group-item list-group-item-action" data-kategori="Hiburan">Hiburan</button>
              <button type="button" class="list-group-item list-group-item-action" data-kategori="Hotel">Hotel</button>
              <button type="button" class="list-group-item list-group-item-action" data-kategori="Hukum">Hukum</button>
              <button type="button" class="list-group-item list-group-item-action" data-kategori="Internet">Internet</button>
              <button type="button" class="list-group-item list-group-item-action" data-kategori="Kehutanan/Perkayuan">Kehutanan/Perkayuan</button>
              <button type="button" class="list-group-item list-group-item-action" data-kategori="Keuangan/Bank">Keuangan/Bank</button>
              <button type="button" class="list-group-item list-group-item-action" data-kategori="Kimia">Kimia</button>
              <button type="button" class="list-group-item list-group-item-action" data-kategori="Komputer/TI">Komputer/TI</button>
              <button type="button" class="list-group-item list-group-item-action" data-kategori="Konstruksi">Konstruksi</button>
              <button type="button" class="list-group-item list-group-item-action" data-kategori="Konsultan">Konsultan</button>
              <button type="button" class="list-group-item list-group-item-action" data-kategori="Kosmetik">Kosmetik</button>
              <button type="button" class="list-group-item list-group-item-action" data-kategori="Logam">Logam</button>
              <button type="button" class="list-group-item list-group-item-action" data-kategori="Logistik/Transportasi">Logistik/Transportasi</button>
              <button type="button" class="list-group-item list-group-item-action" data-kategori="Mainan">Mainan</button>
              <button type="button" class="list-group-item list-group-item-action" data-kategori="Manufaktur">Manufaktur</button>
              <button type="button" class="list-group-item list-group-item-action" data-kategori="Media">Media</button>
              <button type="button" class="list-group-item list-group-item-action" data-kategori="Mekanik/Listrik">Mekanik/Listrik</button>
              <button type="button" class="list-group-item list-group-item-action" data-kategori="Otomotif">Otomotif</button>
              <button type="button" class="list-group-item list-group-item-action" data-kategori="Minyak dan Gas">Minyak dan Gas</button>
              <button type="button" class="list-group-item list-group-item-action" data-kategori="Makanan/Minuman">Makanan/Minuman</button>
              <button type="button" class="list-group-item list-group-item-action" data-kategori="Penerbangan">Penerbangan</button>
              <button type="button" class="list-group-item list-group-item-action" data-kategori="Pengolahan sumber daya alam lainnya">Pengolahan sumber daya alam lainnya</button>
              <button type="button" class="list-group-item list-group-item-action" data-kategori="Percetakan dan Kemasan">Percetakan dan Kemasan</button>
              <button type="button" class="list-group-item list-group-item-action" data-kategori="Kesehatan">Kesehatan</button>
              <button type="button" class="list-group-item list-group-item-action" data-kategori="Perikanan">Perikanan</button>
              <button type="button" class="list-group-item list-group-item-action" data-kategori="Ritel">Ritel</button>
              <button type="button" class="list-group-item list-group-item-action" data-kategori="Telekomunikasi">Telekomunikasi</button>
              <button type="button" class="list-group-item list-group-item-action" data-kategori="Travel">Travel</button>
              <button type="button" class="list-group-item list-group-item-action" data-kategori="Agribisnis">Agribisnis</button>
              <button type="button" class="list-group-item list-group-item-action" data-kategori="Lain-lain">Lain-lain</button>
            </div>
          </div>

        </div>

        <div class="p-1">

          <div class="row">
            <div class="col-12 py-4">
              <form class="form-inline my-2 my-lg-0" method="GET">
                <input class="form-control col-12 mr-sm-2" id="search-lowongan" type="search" placeholder="Search" aria-label="Search">
              </form>
            </div>
          </div>

          <div class="p-3" id="text-filter"></div>

          <div id="searchresult">

          </div>

          <div id="firstquery">
            @include('lowongankerja')
            <nav class="float-right" aria-label="...">
              {{ $lowongan->links() }}
            </nav>
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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    
    <script type="text/javascript" src="{{ url('js/filter.js') }}"></script>
  </body>
</html>
