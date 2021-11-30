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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
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

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
      body {
          margin-top: 10%;
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
    <div class="col-4 float-right">
      <form class="form-inline my-2 my-lg-0" action=" " method="GET">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit" value="cari">Search</button>
      </form>
    </div>
  </nav>
</header>
    <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

  <div class="container marketing">

    <div class="accrodion" id="accrodionArsip">

      {{-- Approve Lowongan --}}

      <div class="accordion-item">
        <div class="card">
          <div class="card-header" id="headingOne">
            <h2 class="mb-0">
              <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                Lowongan Approval
              </button>
            </h2>
          </div>
      
          <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accrodionArsip">
            <div class="card-body">
              
               <!-- START THE FEATURETTES -->
                  @foreach( $lowongan as $data )
                  <hr class="featurette-divider">

                  <div class="d-flex justify-content-between featurette">
                    <div class="col-md-7">
                      <h2 class="featurette-heading">{{ $data->judul_lowongan }} <span class="text-muted"></span></h2>
                      <p class="lead">{{ $data->kualifikasi }}</p>
                      <a href="admin/detail/{{ $data->id_lowongan }}" class="btn btn-secondary">View details</a>
                    </div>
                    
                    <div class="col-md-2">
                      <img src="{{ url('foto/'.$data->foto) }}" style="max-height: 150px" class="img-thumbnail">
                    </div>
                  </div>
                  @endforeach

                <!-- /END THE FEATURETTES -->

            </div>
          </div>
        </div>
      </div>

      {{-- Arsip Lowongan --}}

      <div class="accordion-item">
        <div class="card">
          <div class="card-header" id="headingTwo">
            <h2 class="mb-0">
              <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                Lowongan Terarsip
              </button>
            </h2>
          </div>
      
          <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accrodionArsip">
            <div class="card-body">
              
               <!-- START THE FEATURETTES -->
                  @foreach( $arsip as $data )
                  <hr class="featurette-divider">

                  <div class="d-flex justify-content-between featurette">
                    <div class="col-md-7">
                      <h2 class="featurette-heading">{{ $data->judul_lowongan }} <span class="text-muted"></span></h2>
                      <p class="lead">{{ $data->kualifikasi }}</p>
                      <span class="badge badge-danger my-3">Sudah Selesai Pada {{ Carbon\Carbon::parse($data->tgl_akhir)->locale('id')->isoFormat('LL') }}</span>
                      <br />
                      <a href="admin/detail/{{ $data->id_lowongan }}" class="btn btn-secondary">View details</a>
                    </div>
                    
                    <div class="col-md-2">
                      <img src="{{ url('foto/'.$data->foto) }}" style="max-height: 150px" class="img-thumbnail">
                    </div>
                  </div>
                  @endforeach

                <!-- /END THE FEATURETTES -->

            </div>
          </div>
        </div>
      </div>
        
    </div>


    {{-- Arsip Not Aprrove --}}

    <div class="accordion-item">
      <div class="card">
        <div class="card-header" id="headingThree">
          <h2 class="mb-0">
            <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
              Lowongan Tidak di Approved
            </button>
          </h2>
        </div>
    
        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accrodionArsip">
          <div class="card-body">
            
             <!-- START THE FEATURETTES -->
                @foreach( $notapproved as $data )
                <hr class="featurette-divider">

                <div class="d-flex justify-content-between featurette">
                  <div class="col-md-7">
                    <h2 class="featurette-heading">{{ $data->judul_lowongan }} <span class="text-muted"></span></h2>
                    <p class="lead">{{ $data->kualifikasi }}</p>
                    <span class="badge badge-danger my-3">Sudah Selesai Pada {{ Carbon\Carbon::parse($data->tgl_akhir)->locale('id')->isoFormat('LL') }}</span>
                    <br />
                    <a href="admin/detail/{{ $data->id_lowongan }}" class="btn btn-secondary">View details</a>
                  </div>
                  
                  <div class="col-md-2">
                    <img src="{{ url('foto/'.$data->foto) }}" style="max-height: 150px" class="img-thumbnail">
                  </div>
                </div>
                @endforeach

              <!-- /END THE FEATURETTES -->

          </div>
        </div>
      </div>
    </div>
      
  </div>

</div><!-- /.container -->

<div class="container">
  <div class="row">
    <div class="col-12">
      @include('footer')
    </div>
  </div>
</div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

</body>
</html>