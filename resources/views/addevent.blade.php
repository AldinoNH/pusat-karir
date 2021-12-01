
@extends('adminlayout')

@section('title' , 'Admin Pusat Karir | Add Event Page')

@section('header' , 'Admin Add Event')

@section('content')

<form action="/admin/insertevent" method="POST" enctype="multipart/form-data">
  @csrf
  <div class="content">
      <div class="row">
          <div class="col-sm-6">

              <div class="form-group">
                  <label>ID Event</label>
                  <input name="id_event" class="form-control" value="{{ old('id_event') }}">
                  <div class="text-danger">
                      @error('id_event')
                          {{ $message }}
                      @enderror
                  </div>
              </div>
              <div class="form-group">
                  <label>Nama Event</label>
                  <input name="nama_event" class="form-control" value="{{ old('nama_event') }}">
                  <div class="text-danger">
                      @error('nama_event')
                          {{ $message }}
                      @enderror
                  </div>
              </div>
              <div class="form-group">
                  <label>Tipe Event</label>
                  <input name="tipe" class="form-control" value="{{ old('tipe') }}">
                  <div class="text-danger">
                      @error('tipe')
                          {{ $message }}
                      @enderror
                  </div>
              </div>
              <div class="form-group">
                  <label>Waktu Event</label>
                  <input type="date" name="waktu" class="form-control" value="{{ old('waktu') }}">
                  <div class="text-danger">
                      @error('waktu')
                          {{ $message }}
                      @enderror
                  </div>
              </div>
              <div class="form-group">
                  <label>Deskripsi Event</label>
                  <input name="deskripsi" class="form-control" value="{{ old('deskripsi') }}">
                  <div class="text-danger">
                      @error('deskripsi')
                          {{ $message }}
                      @enderror
                  </div>
              </div>

              <div class="form-group">
                  <label>Foto</label>
                  <input type="file" name="foto_event" class="form-control">
                  <div class="text-danger">
                      @error('foto_event')
                          {{ $message }}
                      @enderror
                  </div>
              </div>

              <div class="form-group">
                  <label>Link</label>
                  <input type="link" name="link" class="form-control">
                  <div class="text-danger">
                      @error('link')
                          {{ $message }}
                      @enderror
                  </div>
              </div>

              <div class="form-group">
                  <label>File Video</label>
                  <input type="file" name="upload" class="form-control">
                  <div class="text-danger">
                      @error('upload')
                          {{ $message }}
                      @enderror
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