@extends('adminlayout')

@section('title' , 'Admin | Add Berita')

@section('header' , 'Admin Add Berita')

@section('content')

<form action="/admin/insertberita" method="POST" enctype="multipart/form-data">
  @csrf
  <div class="content">
      <div class="row">
          <div class="col-sm-6">

              <div class="form-group">
                  <label>ID Berita</label>
                  <input name="id_berita" class="form-control" value="{{ old('id_berita') }}">
                  <div class="text-danger">
                      @error('id_berita')
                          {{ $message }}
                      @enderror
                  </div>
              </div>

              <div class="form-group">
                  <label>Nama Berita</label>
                  <input name="nama_berita" class="form-control" value="{{ old('nama_berita') }}">
                  <div class="text-danger">
                      @error('nama_berita')
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
                  <label>Foto</label>
                  <input type="file" name="foto_berita" class="form-control">
                  <div class="text-danger">
                      @error('foto_berita')
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
