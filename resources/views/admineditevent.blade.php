
@extends('adminlayout')

@section('title' , 'Admin Pusat Karir | Add Event Page')

@section('header' , 'Admin Add Event')

@section('content')
<form action="/admin/updateevent/{{ $tbl_event->id_event }}" method="POST" enctype="multipart/form-data">
  @csrf
  <div class="content">
      <div class="row">
          <div class="col-sm-6">

              <div class="form-group">
                  <label>ID Event</label>
                  <input name="id_event" class="form-control" value="{{ $tbl_event->id_event }}" readonly>
                  <div class="text-danger">
                      @error('id_event')
                          {{ $message }}
                      @enderror
                  </div>
              </div>

              <div class="form-group">
                  <label>Nama Event</label>
                  <input name="nama_event" class="form-control" value="{{ $tbl_event->nama_event }}">
                  <div class="text-danger">
                      @error('nama_event')
                          {{ $message }}
                      @enderror
                  </div>
              </div>

              <div class="form-group">
                  <label>waktu</label>
                  <input type="date" name="waktu" class="form-control">
                  <div class="text-danger">
                      @error('waktu')
                          {{ $message }}
                      @enderror
                  </div>
              </div>

              <div class="form-group">
                  <label>Tipe</label>
                  <input name="tipe" class="form-control" value="{{ $tbl_event->tipe }}">
                  <div class="text-danger">
                      @error('tipe')
                          {{ $message }}
                      @enderror
                  </div>
              </div>

              

              <div class="form-group">
                  <label>Deskripsi</label>
                  <input name="deskripsi" class="form-control" value="{{ $tbl_event->deskripsi }}">
                  <div class="text-danger">
                      @error('deskripsi')
                          {{ $message }}
                      @enderror
                  </div>
              </div>


              <div class="col-sm-12">
                  <div class="col-sm-4">
                      <img src="{{ url('foto_event/'.$tbl_event->foto_event) }}" width="150px">
                  </div>
                  <div class="col-sm-8">
                      <div class="form-group">
                      <label>Pamflet</label>
                      <input type="file" name="foto_event" class="form-control">
                      <div class="text-danger">
                          @error('foto_event')
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

@endsection