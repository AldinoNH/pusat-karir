
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
          margin-top: 10%;
        }
      img.content {
        width: 100px;
        height: 100px;
      }
      #myCarousel {
        margin-bottom: 5%;
      }
      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
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

<body>
<div class="card mb-3">
  <img src="gambar/logostikipanjang.png" class="card-img-top" >
  <div class="card-body">
  <form action="/inputlowongankerja/insert" method="POST" enctype="multipart/form-data">
  @if (session('pesan'))
    <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-check"></i> Success!</h4>
                {{ session('pesan') }}
    </div>
    @endif
            @csrf
            <div class="content">
                <div class="row">
                    <div class="col-sm-6">

                        <div class="form-group">
                            <label>ID Lowongan</label>
                            <input name="id_lowongan" class="form-control" value="{{ old('id_lowongan') }}">
                            <div class="text-danger">
                                @error('id_lowongan')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Nama Perusahaan</label>
                            <input name="name" class="form-control" value="{{ old('name') }}">
                            <div class="text-danger">
                                @error('name')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Email</label>
                            <input name="email" class="form-control" value="{{ old('email') }}">
                            <div class="text-danger">
                                @error('email')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Judul Lowongan</label>
                            <input name="judul_lowongan" class="form-control" value="{{ old('judul_lowongan') }}">
                            <div class="text-danger">
                                @error('judul_lowongan')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Deskripsi</label>
                            <input name="deskripsi" class="form-control" value="{{ old('deskripsi') }}">
                            <div class="text-danger">
                                @error('deskripsi')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Bidang Industri</label>
                            <select name="bidangindustri" class="form-control">
                                <option selected value="all">Semua Industri</option>
                                <option value="administrasi">Administrasi</option>
                                <option value="kehutanan">Agrikultur/Kehutanan/Perikanan</option>
                                <option value="akuntansi">Akuntansi</option>
                                <option value="audit">Audit </option>
                                <option value="bioteknologi">Bioteknologi</option>
                                <option value="catring">Catering </option>
                                <option value="desain">Desain</option>
                                <option value="keamanan">Keamanan</option>
                                <option value="kesehatan">Kesehatan dan Kecantikan </option>
                                <option value="kimia">Kimia </option>
                                <option value="konstruksi">Konstruksi dan Bangunan</option>
                                <option value="layanan bisnis">Layanan Bisnis </option>
                                <option value="media dan periklanan">Media dan Periklanan</option>
                                <option value="migas dan pertambangan">Migas dan Pertambangan</option>
                                <option value="otomotif">Otomotif</option>
                                <option value="pendidikan">Pendidikan</option>
                                <option value="penerbangan">Penerbangan </option>
                                <option value="perbankan">Perbankan/Finansial</option>
                                <option value="properti">Properti</option>
                                <option value="r&d dan lab">R&D dan Lab</option>
                                <option value="teknologi informatika">Teknologi Informatika</option>
                                <option value="telekomunikasi">Telekomunikasi</option>
                                <option value="transportasi">Transportasi</option>
                                <option value="umum">Umum</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Kategori Posisi</label>
                            <select name="kategoriposisi" class="form-control">
                                <option selected value="all">Semua Kategori</option>
                                <option value="akuntan">Akuntan/Auditor</option>
                                <option value="asuransi">Asuransi</option>
                                <option value="ekspedisi">Ekspedisi / Agen Cargo</option>
                                <option value="elektronika">Elektronika/Semikonduktor </option>
                                <option value="farmasi">Farmasi</option>
                                <option value="furnitur">Furnitur </option>
                                <option value="garmen">Garmen/Tekstil</option>
                                <option value="hiburan">Hiburan</option>
                                <option value="hotel">Hotel </option>
                                <option value="hukum">Hukum </option>
                                <option value="internet">Internet</option>
                                <option value="kehutanan">Kehutanan/Perkayuan </option>
                                <option value="keuangan">Keuangan/Bank</option>
                                <option value="kimia">Kimia</option>
                                <option value="komputer">Komputer/TI</option>
                                <option value="konstruksi">Konstruksi</option>
                                <option value="konsultan">Konsultan </option>
                                <option value="kosmetik">Kosmetik</option>
                                <option value="logam">Logam</option>
                                <option value="logistik">Logistik/Transportasi</option>
                                <option value="mainan">Mainan</option>
                                <option value="manufaktur">Manufaktur</option>
                                <option value="media">Media</option>
                                <option value="mekanik">Mekanik/Listrik</option>
                                <option value="otomotif">Otomotif</option>
                                <option value="migas">Minyak dan Gas </option>
                                <option value="makanan">Makanan/Minuman</option>
                                <option value="penerbangan">Penerbangan</option>
                                <option value="pengolahan sda">Pengolahan sumber daya alam lainnya</option>
                                <option value="percetakan">Percetakan dan Kemasan</option>
                                <option value="kesehatan">Kesehatan </option>
                                <option value="perikanan">Perikanan </option>
                                <option value="ritel">Ritel</option>
                                <option value="telekomunikasi">Telekomunikasi </option>
                                <option value="travel">Travel </option>
                                <option value="agribisnis">Agribisnis </option>
                                <option value="lainnya">Lain-lain </option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Tanggal Awal</label>
                            <input type="date" name="tgl_awal" class="form-control">
                            <div class="text-danger">
                                @error('tgl_awal')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Tanggal Akhir</label>
                            <input type="date" name="tgl_akhir" class="form-control">
                            <div class="text-danger">
                                @error('tgl_akhir')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Kualifikasi</label>
                            <input name="kualifikasi" class="form-control" value="{{ old('kualifikasi') }}">
                            <div class="text-danger">
                                @error('kualifikasi')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Persyaratan</label>
                            <input name="persyaratan" class="form-control" value="{{ old('persyaratan') }}">
                            <div class="text-danger">
                                @error('persyaratan')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Alamat</label>
                            <input name="alamat" class="form-control" value="{{ old('alamat') }}">
                            <div class="text-danger">
                                @error('alamat')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Kabupaten/Kota</label>
                            <input name="kabupatenkota" class="form-control" value="{{ old('kabupatenkota') }}">
                            <div class="text-danger">
                                @error('kabupatenkota')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Provinsi</label>
                            <select name="provinsi" class="form-control">
                                <option selected>Choose...</option>
                                <option>Aceh</option>
                                <option>Sumatera Utara</option>
                                <option>Sumatera Barat</option>
                                <option>Riau </option>
                                <option>Kepulauan Riau</option>
                                <option>Jambi </option>
                                <option>Sumatera Selatan</option>
                                <option>Kepulauan Bangka Belitung</option>
                                <option>Bengkulu </option>
                                <option>Lampung </option>
                                <option>DKI Jakarta</option>
                                <option>Banten </option>
                                <option>Jawa Barat</option>
                                <option>Jawa Tengah</option>
                                <option>Jawa Timur</option>
                                <option>DI Yogyakarta</option>
                                <option>Bali </option>
                                <option>Nusa Tenggara Barat</option>
                                <option>Nusa Tenggara Timur</option>
                                <option>Kalimantan Barat</option>
                                <option>Kalimantan Tengah</option>
                                <option>Provinsi Kalimantan Selatan</option>
                                <option>Kalimantan Timur</option>
                                <option>Kalimantan Utara</option>
                                <option>Sulawesi Utara</option>
                                <option>Gorontalo </option>
                                <option>Sulawesi Tengah</option>
                                <option>Sulawesi Barat</option>
                                <option>Provinsi Sulawesi Selatan</option>
                                <option>Sulawesi Tenggara</option>
                                <option>Maluku </option>
                                <option>Maluku Utara </option>
                                <option>Papua Barat</option>
                                <option>Papua </option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Kode Pos</label>
                            <input name="kodepos" class="form-control" value="{{ old('kodepos') }}">
                            <div class="text-danger">
                                @error('kodepos')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Foto</label>
                            <input type="file" name="foto" class="form-control">
                            <div class="text-danger">
                                @error('foto')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <button class="btn btn-primary btn-sm">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>

  </div>
</div>
</body>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="/docs/4.6/assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="/docs/4.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
      
  </body>
</html>
