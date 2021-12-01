@extends('adminlayout')

@section('title' , 'Admin | Arsip Lowongan')

@section('content')

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
        <th scope="col">No</th>
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
      <?php $no=1; ?>
      @foreach ($lowongan as $data)
        <tr>
          <th>{{ $no++ }}</th>
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
@endsection