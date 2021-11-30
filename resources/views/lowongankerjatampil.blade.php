
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
  
  <div class="card bg-light" style="position: relative; top: 66px">
    <div class="card-header">Daftar Lowongan kerja</div>
    <div class="card-body p-0">
      <div class="d-flex">
        <div class="card-header">

          {{-- Kategori Posisi --}}
          <div>
            <h6> Kategori Posisi </h6>

            <div id="list-kategori-posisi" class="list-group list-group-flush my-4">
              <button type="button" class="list-group-item list-group-item-action" data-kategori="all">Semua Kategori</button>
              <button type="button" class="list-group-item list-group-item-action" data-kategori="administrasi">Administrasi</button>
              <button type="button" class="list-group-item list-group-item-action" data-kategori="kehutanan">Agrikultur / Kehutanan / Perikanan</button>
              <button type="button" class="list-group-item list-group-item-action" data-kategori="akuntansi">Akuntansi</button>
              <button type="button" class="list-group-item list-group-item-action" data-kategori="audit">Audit</button>
              <button type="button" class="list-group-item list-group-item-action" data-kategori="bioteknologi">Bioteknologi</button>
              <button type="button" class="list-group-item list-group-item-action" data-kategori="catring">Catering</button>
              <button type="button" class="list-group-item list-group-item-action" data-kategori="desain">Desain</button>
              <button type="button" class="list-group-item list-group-item-action" data-kategori="keamanan">Keamanan</button>
              <button type="button" class="list-group-item list-group-item-action" data-kategori="kesehatan">Kesehatan dan Kecantikan</button>
              <button type="button" class="list-group-item list-group-item-action" data-kategori="kimia">Kimia</button>
              <button type="button" class="list-group-item list-group-item-action" data-kategori="konstruksi">Konstruksi dan Bangunan</button>
              <button type="button" class="list-group-item list-group-item-action" data-kategori="layanan bisnis">Layanan Bisnis</button>
              <button type="button" class="list-group-item list-group-item-action" data-kategori="media dan periklanan">Media dan Periklanan</button>
              <button type="button" class="list-group-item list-group-item-action" data-kategori="migas dan pertambangan">Migas dan Pertambangan</button>
              <button type="button" class="list-group-item list-group-item-action" data-kategori="otomotif">Otomotif</button>
              <button type="button" class="list-group-item list-group-item-action" data-kategori="pendidikan">Pendidikan</button>
              <button type="button" class="list-group-item list-group-item-action" data-kategori="penerbangan">Penerbangan</button>
              <button type="button" class="list-group-item list-group-item-action" data-kategori="perbankan">Perbankan / Finansial</button>
              <button type="button" class="list-group-item list-group-item-action" data-kategori="properti">Properti</button>
              <button type="button" class="list-group-item list-group-item-action" data-kategori="r&d dan lab">R&D dan Lab</button>
              <button type="button" class="list-group-item list-group-item-action" data-kategori="teknologi informatika">Teknologi Informatika</button>
              <button type="button" class="list-group-item list-group-item-action" data-kategori="telekomunikasi">Telekomunikasi</button>
              <button type="button" class="list-group-item list-group-item-action" data-kategori="transportasi">Transportasi</button>
              <button type="button" class="list-group-item list-group-item-action" data-kategori="umum">Umum</button>
            </div>
          </div>
          
          {{-- Kategosri Industri --}}
          <div>
            <h6>Kategori Industri</h6>
            <div id="list-kategori-industri" class="list-group scrollable my-4">
              <button type="button" class="list-group-item list-group-item-action" data-kategori="all">Semua Industri</button>
              <button type="button" class="list-group-item list-group-item-action" data-kategori="akuntan">Akuntan/Auditor</button>
              <button type="button" class="list-group-item list-group-item-action" data-kategori="asuransi">Asuransi</button>
              <button type="button" class="list-group-item list-group-item-action" data-kategori="ekspedisi">Ekspedisi / Agen Cargo</button>
              <button type="button" class="list-group-item list-group-item-action" data-kategori="elektronika">Elektronika/Semikonduktor</button>
              <button type="button" class="list-group-item list-group-item-action" data-kategori="farmasi">Farmasi</button>
              <button type="button" class="list-group-item list-group-item-action" data-kategori="furnitur">Furnitur</button>
              <button type="button" class="list-group-item list-group-item-action" data-kategori="garmen">Garmen/Tekstil</button>
              <button type="button" class="list-group-item list-group-item-action" data-kategori="hiburan">Hiburan</button>
              <button type="button" class="list-group-item list-group-item-action" data-kategori="hotel">Hotel</button>
              <button type="button" class="list-group-item list-group-item-action" data-kategori="hukum">Hukum</button>
              <button type="button" class="list-group-item list-group-item-action" data-kategori="internet">Internet</button>
              <button type="button" class="list-group-item list-group-item-action" data-kategori="kehutanan">Kehutanan/Perkayuan</button>
              <button type="button" class="list-group-item list-group-item-action" data-kategori="keuangan">Keuangan/Bank</button>
              <button type="button" class="list-group-item list-group-item-action" data-kategori="kimia">Kimia</button>
              <button type="button" class="list-group-item list-group-item-action" data-kategori="komputer">Komputer/TI</button>
              <button type="button" class="list-group-item list-group-item-action" data-kategori="konstruksi">Konstruksi</button>
              <button type="button" class="list-group-item list-group-item-action" data-kategori="konsultan">Konsultan</button>
              <button type="button" class="list-group-item list-group-item-action" data-kategori="kosmetik">Kosmetik</button>
              <button type="button" class="list-group-item list-group-item-action" data-kategori="logam">Logam</button>
              <button type="button" class="list-group-item list-group-item-action" data-kategori="logistik">Logistik/Transportasi</button>
              <button type="button" class="list-group-item list-group-item-action" data-kategori="mainan">Mainan</button>
              <button type="button" class="list-group-item list-group-item-action" data-kategori="manufaktur">Manufaktur</button>
              <button type="button" class="list-group-item list-group-item-action" data-kategori="media">Media</button>
              <button type="button" class="list-group-item list-group-item-action" data-kategori="mekanik">Mekanik/Listrik</button>
              <button type="button" class="list-group-item list-group-item-action" data-kategori="otomotif">Otomotif</button>
              <button type="button" class="list-group-item list-group-item-action" data-kategori="migas">Minyak dan Gas</button>
              <button type="button" class="list-group-item list-group-item-action" data-kategori="makanan">Makanan/Minuman</button>
              <button type="button" class="list-group-item list-group-item-action" data-kategori="penerbangan">Penerbangan</button>
              <button type="button" class="list-group-item list-group-item-action" data-kategori="pengolahan sda">Pengolahan sumber daya alam lainnya</button>
              <button type="button" class="list-group-item list-group-item-action" data-kategori="percetakan">Percetakan dan Kemasan</a>
              <button type="button" class="list-group-item list-group-item-action" data-kategori="kesehatan">Kesehatan<buttona>
              <button type="button" class="list-group-item list-group-item-action" data-kategori="perikanan">Perikanan</button>
              <button type="button" class="list-group-item list-group-item-action" data-kategori="ritel">Ritel</button>
              <button type="button" class="list-group-item list-group-item-action" data-kategori="telekomunikasi">Telekomunikasi</button>
              <button type="button" class="list-group-item list-group-item-action" data-kategori="travel">Travel</button>
              <button type="button" class="list-group-item list-group-item-action" data-kategori="agribisnis">Agribisnis</button>
              <button type="button" class="list-group-item list-group-item-action" data-kategori="lainnya">Lain-lain</button>
            </div>
          </div>

        </div>

        <div class="p-1">

          <div class="row">
            <div class="col-12 py-4">
              <form class="form-inline my-2 my-lg-0" method="GET">
                <input class="form-control col-12 mr-sm-2" id="search-lowongan" autofocus type="search" placeholder="Search" aria-label="Search">
              </form>
            </div>
          </div>

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
    
    <script type="text/javascript">
      $(document).ready(function () {
      

        $('#list-kategori-posisi button').on('click', function (event) {
          
          var list = $(event.target)
          const kategori = list.data('kategori')

        })

        $('#list-kategori-industri button').on('click', function (event) {
          
          var list = $(event.target)
          const kategori = list.data('kategori')

        })

        $('#search-lowongan').keyup((ev) => {
          


          const value = ev.target.value

          if( value === '' ) {
            $('#firstquery').removeAttr('class')
            $('#searchresult').html('')
          }else{

            $('#firstquery').attr('class' , 'd-none')

            $('#searchresult').html(`<div class="col-12" style="text-align: center">Loading ...</div>`)

            $.get(`{{ route('search.lowongan') }}?search=${value}` , (res) => {
  
              let reshtml = `<div class="row">`

              if( res.length !== 0 ) {

                res.map(val => {
                  reshtml += 
                  `<div class="col-md-4">
                      <img class="content img-thumbnail" src="{{ url('foto/${val.foto}') }}" width="100px">
                      <h2>${val.judul_lowongan}</h2>
                      <p>Deskripsi Pekerjaan Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt eum velit tempore maxime? Quia nisi, suscipit vitae amet aliquid saepe!</p>
                      <p><a class="btn btn-secondary" href="admin/detail/${val.id_lowongan}">View details &raquo;</a></p>
                    </div>`
                })

              }else{

                reshtml += `<div class="col-12 text-center">Tidak ada hasil</div>`

              }


              reshtml += `</div>`

              $('#searchresult').html(reshtml)
  
            })
          }


        })

      });
    </script>
  </body>
</html>
