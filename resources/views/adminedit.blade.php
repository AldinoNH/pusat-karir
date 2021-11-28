
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin Pusat Karir | Edit Page</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="{{asset('template')}}/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('template')}}/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{asset('template')}}/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('template')}}/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="{{asset('template')}}/dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-red sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="/" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>LT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>STIKI</b> Indonesia</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown messages-menu">
     
            <ul class="dropdown-menu">

              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li><!-- start message -->
                    <a href="#">
                      <div class="pull-left">
                        <img src="gambar/logokecil.png" class="img-circle" alt="User Image">
                      </div>
                 

                    </a>
                  </li>
                  <!-- end message -->
                </ul>
              </li>

            </ul>
          </li>
          <!-- Notifications: style can be found in dropdown.less -->
          <li class="dropdown notifications-menu">
            
            <ul class="dropdown-menu">
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li>
                    
                  </li>
                </ul>
              </li>
              
            </ul>
          </li>
          <!-- Tasks: style can be found in dropdown.less -->
          
           
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="gambar/logokecil.png" class="user-image" alt="User Image">
              <span class="hidden-xs">{{ Auth::user()->name }}</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="gambar/logokecil.png" class="img-circle" alt="User Image">

                <p>
                {{ Auth::user()->name }} - {{ Auth::user()->email }}
                  <small>Admin</small>
                </p>
              </li>
              <!-- Menu Body -->
              
              <!-- Menu Footer-->
              <li class="user-footer">

                <div class="pull-right">
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                      @csrf
                  <a href="#" class="btn btn-default btn-flat">Log out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
      
        </ul>
      </div>
    </nav>
  </header>

  <!-- =============================================== -->

  <!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="gambar/logokecil.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{ Auth::user()->name }}</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      @include('menu')
    </ul>   
              
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
   

    <!-- Main content -->
    <section class="content">
    <form action="/admin/update/{{ $lowongan->id_lowongan }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="content">
                <div class="row">
                    <div class="col-sm-6">

                        <div class="form-group">
                            <label>ID Lowongan</label>
                            <input name="id_lowongan" class="form-control" value="{{ $lowongan->id_lowongan }}" readonly>
                            <div class="text-danger">
                                @error('id_lowongan')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Nama Perusahaan</label>
                            <input name="name" class="form-control" value="{{ $lowongan->name }}">
                            <div class="text-danger">
                                @error('name')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Email</label>
                            <input name="email" class="form-control" value="{{ $lowongan->email }}">
                            <div class="text-danger">
                                @error('email')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Judul Lowongan</label>
                            <input name="judul_lowongan" class="form-control" value="{{ $lowongan->judul_lowongan }}">
                            <div class="text-danger">
                                @error('judul_lowongan')
                                    {{ $message }}
                                @enderror
                            </div>
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
                            <input name="kualifikasi" class="form-control" value="{{ $lowongan->kualifikasi }}">
                            <div class="text-danger">
                                @error('kualifikasi')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Persyaratan</label>
                            <input name="persyaratan" class="form-control" value="{{ $lowongan->persyaratan }}">
                            <div class="text-danger">
                                @error('persyaratan')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Alamat</label>
                            <input name="alamat" class="form-control" value="{{ $lowongan->alamat }}">
                            <div class="text-danger">
                                @error('alamat')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Kabupaten/Kota</label>
                            <input name="kabupatenkota" class="form-control" value="{{ $lowongan->kabupatenkota }}">
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
                            <input name="kodepos" class="form-control" value="{{ $lowongan->kodepos }}">
                            <div class="text-danger">
                                @error('kodepos')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="col-sm-4">
                                <img src="{{ url('foto/'.$lowongan->foto) }}" width="150px">
                            </div>
                            <div class="col-sm-8">
                                <div class="form-group">
                                <label>Foto</label>
                                <input type="file" name="foto" class="form-control">
                                <div class="text-danger">
                                    @error('foto')
                                        {{ $message }}
                                    @enderror
                                </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <button class="btn btn-primary btn-sm">Simpan</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b></b> 
    </div>
    <strong>Copyright &copy; 2021 <a href="https://adminlte.io">STMIK STIKOM Indonesia</a>.</strong> All rights
    reserved.
  </footer>


        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->

      <!-- /.tab-pane -->
      <!-- Settings tab content -->

      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->

<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="{{asset('template')}}/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{asset('template')}}/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="{{asset('template')}}/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="{{asset('template')}}/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="{{asset('template')}}/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('template')}}/dist/js/demo.js"></script>
<script>
  $(document).ready(function () {
    $('.sidebar-menu').tree()
  })
</script>
</body>
</html>
