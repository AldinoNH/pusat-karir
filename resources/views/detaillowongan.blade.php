
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.80.0">
    <title>Carousel Template · Bootstrap v4.6</title>
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
  
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      @include('nav')
      
    </div>
  </nav>
</header>

<table class="table">
      <tr>
        <th width="150px">Nama Lowongan</th>
        <th width="50px">:</th>
        <th>{{ $lowongan->name }}</th>
       </tr>
      <tr>
        <th width="150px">Email</th>
        <th width="50px">:</th>
        <th>{{ $lowongan->email }}</th>
        </tr>
      <tr>       
        <th width="150px">Judul Lowongan</th>
        <th width="50px">:</th>
        <th>{{ $lowongan->judul_lowongan }}</th>
        </tr>
      <tr>       
        <th width="150px">Deskripsi</th>
        <th width="50px">:</th>
        <th>{{ $lowongan->deskripsi }}</th>
        </tr>
      <tr>       
        <th width="150px">Kategori Posisi</th>
        <th width="50px">:</th>
        <th>{{ $lowongan->kategoriposisi }}</th>
        </tr>
      <tr>       
        <th width="150px">Bidang Industri</th>
        <th width="50px">:</th>
        <th>{{ $lowongan->bidangindustri }}</th>
        </tr>
      <tr>
        <th width="150px">Tgl Awal</th>
        <th width="50px">:</th>
        <th>{{ $lowongan->tgl_awal }}</th>
        </tr>
      <tr>
        <th width="150px">Tgl Akhir</th>
        <th width="50px">:</th>
        <th>{{ $lowongan->tgl_akhir }}</th>
        </tr>
      <tr>
        <th width="150px">Kualifikasi</th>
        <th width="50px">:</th>
        <th>{{ $lowongan->kualifikasi }}</th>
        </tr>
      <tr>
        <th width="150px">persyaratan</th>
        <th width="50px">:</th>
        <th>{{ $lowongan->persyaratan }}</th>
        </tr>
      <tr>
        <th width="150px">alamat</th>
        <th width="50px">:</th>
        <th>{{ $lowongan->alamat }}</th>
        </tr>
      <tr>
        <th width="150px">kabupatenkota</th>
        <th width="50px">:</th>
        <th>{{ $lowongan->kabupatenkota }}</th>
        </tr>
      <tr>
        <th width="150px">provinsi</th>
        <th width="50px">:</th>
        <th>{{ $lowongan->provinsi }}</th>
        </tr>
      <tr>
        <th width="150px">kodepos</th>
        <th width="50px">:</th>
        <th>{{ $lowongan->kodepos }}</th>
        </tr>
      <tr>
        <th width="150px">Logo</th>
        <th width="50px">:</th>
        <th><img src="{{ url('foto/'.$lowongan->foto) }}" width="400px" alt=""></th>
      </tr>
      <tr>
        <th><a href="/" class="btn btn-secondary">Kembali</a></th>
      </tr>
</table>

 @include('footer')

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="/docs/4.6/assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="/docs/4.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
      
  </body>
</html>


