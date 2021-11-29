
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin | Admin Page</title>
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
<style>
  
</style>
</head>
<body class="hold-transition skin-red sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="/" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>S</b>I</span>
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
                        <img src="gambar/logokecil.png" class="img-circle">
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
                      <button type="submit" class="btn btn-default btn-flat">Log out</button>
                  </form>
                  
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
      <form action="/cari" method="get" class="sidebar-form">
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



    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
   

    <!-- Main content -->
    <section class="content">
    <a href="/admin/add" class="btn btn-primary btn-sm">Add</a>
    <a href="/admin/printpdf" target="_blank" class="btn btn-primary btn-sm">Print</a>
    <a href="{{ route('print') }}" class="btn btn-primary btn-sm">Print per Periode</a>
    
    <a href="/admin/printpdfdownload" target="_blank" class="btn btn-success btn-sm">Download PDF</a>

    @if (session('pesan'))
    <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-check"></i> Success!</h4>
                {{ session('pesan') }}
    </div>
    @endif

    <table class="table">
        <thead>
          <tr>
            <th scope="col">Id Lowongan</th>
            <th scope="col">Nama</th>
            <th scope="col">Email</th>
            <th scope="col">Judul Lowongan Kerja</th>
            <th scope="col">Kategori Posisi</th>
            <th scope="col">Bidang Industri</th>
            <th scope="col">Tgl Awal</th>
            <th scope="col">Tgl Akhir</th>
            <th scope="col">Kualifikasi</th>
            <th scope="col">Persyaratan</th>
            <th scope="col">Alamat</th>
            <th scope="col">Kabupaten/Kota</th>
            <th scope="col">Provinsi</th>
            <th scope="col">Kode Pos</th>
            <th scope="col">foto</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($lowongan as $data)
            <tr>
              <td>{{ $data->id_lowongan }}</td>
              <td>{{ $data->name }}</td>
              <td>{{ $data->email }}</td>
              <td>{{ $data->judul_lowongan }}</td>
              <td>{{ $data->kategoriposisi }}</td>
              <td>{{ $data->bidangindustri }}</td>
              <td>{{ $data->tgl_awal }}</td>
              <td>{{ $data->tgl_akhir }}</td>
              <td>{{ $data->kualifikasi }}</td>
              <td>{{ $data->persyaratan }}</td>
              <td>{{ $data->alamat }}</td>
              <td>{{ $data->kabupatenkota }}</td>
              <td>{{ $data->provinsi }}</td>
              <td>{{ $data->kodepos }}</td>
              <td><img src="{{ url('foto/'.$data->foto) }}" width="150px"></td>
              <td>
                
              <div class="btn-group-vertical">
              @if ( $data->approved == 0 )
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#approve{{ $data->id_lowongan }}">
                Pending .....
              </button>
              @elseif ( $data->approved == 1 )
              <button type="button" class="btn btn-success" data-toggle="modal" data-target="#rejected{{ $data->id_lowongan }}">
                Sudah Disetujui
              </button>
              @endif
                <a href="/admin/detail/{{ $data->id_lowongan }}" class="btn btn-sm btn-info">Detail</a>
                <a href="/admin/edit/{{ $data->id_lowongan }}" class="btn btn-sm btn-warning">Edit</a>
                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete{{ $data->id_lowongan }}">
                Delete
                </button>
              </div>
              </td>
            </tr>
          @endforeach
          
        </tbody>
      </table>

@foreach ($lowongan as $data)
  
    <div class="modal modal-primary fade" id="approve{{ $data->id_lowongan }}">
          <div class="modal-dialog modal-sm">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">{{ $data->name }}</h4>
              </div>
              <div class="modal-body">
                <p>Apakah Anda Yakin Ingin Menyetujui Lowongan Ini..??</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">No</button>
                <a href="/admin/approve/{{ $data->id_lowongan }}" class="btn btn-outline">Yes <span class="glyphicon glyphicon-upload"></span></a>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>

        <div class="modal modal-warning fade" id="rejected{{ $data->id_lowongan }}">
          <div class="modal-dialog modal-sm">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">{{ $data->name }}</h4>
              </div>
              <div class="modal-body">
                <p>Apakah Anda Yakin Ingin Membatalkan Lowongan Ini..??</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">No</button>
                <a href="/admin/rejected/{{ $data->id_lowongan }}" class="btn btn-outline">Yes <span class="glyphicon glyphicon-upload"></span></a>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
  
      

      <div class="modal modal-danger fade" id="delete{{ $data->id_lowongan }}">
          <div class="modal-dialog modal-sm">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">{{ $data->name }}</h4>
              </div>
              <div class="modal-body">
                <p>Apakah Anda Yakin Ingin Menghapus Data Ini..??</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">No</button>
                <a href="/admin/delete/{{ $data->id_lowongan }}" class="btn btn-outline">Yes</a>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
@endforeach
{{ $lowongan->links() }}
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
