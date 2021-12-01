@extends('adminlayout')

@section('title' , 'Admin | Arsip Lowongan')

@section('content')

    <a href="/admin/add/berita" class="btn btn-primary btn-sm">Add</a>
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
          <th scope="col">Id Berita</th>
          <th scope="col">Nama Berita</th>
          <th scope="col">Deskripsi</th>
          <th scope="col">Foto Berita</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        <?php $no=1; ?>
        @foreach ($tbl_berita as $data)
          <tr>
            <th>{{ $no++ }}</th>
            <td>{{ $data->id_berita }}</td>
            <td>{{ $data->nama_berita }}</td>
            <td>{{ $data->deskripsi }}</td>
            <td><img src="{{ url('foto_berita/'.$data->foto_berita) }}" width="150px"></td>
            <td>
              
            <div class="btn-group-vertical">
              
              <a href="/admin/detail/berita/{{ $data->id_berita }}" class="btn btn-sm btn-info">Detail</a>
              <a href="/admin/edit/berita/{{ $data->id_berita }}" class="btn btn-sm btn-warning">Edit</a>
              <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete{{ $data->id_berita }}">
              Delete
              </button>
            </div>
            </td>
          </tr>
        @endforeach
        
      </tbody>
    </table>

  @foreach ($tbl_berita as $data)
  
  <div class="modal modal-danger fade" id="delete{{ $data->id_berita }}">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">{{ $data->nama_berita }}</h4>
        </div>
        <div class="modal-body">
          <p>Apakah Anda Yakin Ingin Menghapus Berita Ini..??</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">No</button>
          <a href="/admin/delete/berita/{{ $data->id_berita }}" class="btn btn-outline">Yes</a>
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
    </div>
  @endforeach
@endsection