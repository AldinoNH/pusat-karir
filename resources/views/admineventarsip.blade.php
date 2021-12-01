
@extends('adminlayout')

@section('title' , 'Admin | Admin Event Arsip')

@section('content')

  <a href="/admin/addevent" class="btn btn-primary btn-sm">Add</a>
  <a href="/admin/printpdfevent" target="_blank" class="btn btn-primary btn-sm">Print</a>
  <a href="{{ route('printevent') }}" class="btn btn-primary btn-sm">Print per Periode</a>
  <a href="/admin/printpdfeventdownload" target="_blank" class="btn btn-success btn-sm">Download PDF</a>

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
        <th scope="col">Id event</th>
        <th scope="col">Nama Event</th>
        <th scope="col">Tipe</th>
        <th scope="col">Deskripsi</th>
        <th scope="col">Tgl</th>
        <th scope="col">foto</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      <?php $no=1; ?>
      @foreach ($tbl_event as $data)
        <tr>
          <th>{{ $no++ }}</th>
          <td>{{ $data->id_event }}</td>
          <td>{{ $data->nama_event }}</td>
          <td>{{ $data->waktu }}</td>
          <td>{{ $data->tipe }}</td>
          <td>{{ $data->deskripsi }}</td>
          <td><img src="{{ url('foto_event/'.$data->foto_event) }}" width="150px"></td>
          <td>
            <a href="/admin/upload/event/{{$data->id_event}}" class="btn btn-primary">Upload</a>
            <a href="/admin/detailevent/{{ $data->id_event }}" class="btn btn-sm btn-success">Detail</a>
            <a href="/admin/editevent/{{ $data->id_event }}" class="btn btn-sm btn-warning">Edit</a>
            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete{{ $data->id_event }}">
            Delete
            </button>
          </td>
        </tr>
      @endforeach
      
    </tbody>
  </table>

  @foreach ($tbl_event as $data)
    <div class="modal modal-danger fade" id="delete{{ $data->id_event }}">
      <div class="modal-dialog modal-sm">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">{{ $data->nama_event }}</h4>
          </div>
          <div class="modal-body">
            <p>Apakah Anda Yakin Ingin Menghapus Data Ini..??</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">No</button>
            <a href="/admin/deleteevent/{{ $data->id_event }}" class="btn btn-outline">Yes</a>
          </div>
        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>
  @endforeach
@endsection