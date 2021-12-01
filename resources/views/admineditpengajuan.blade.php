@extends('adminlayout')

@section('title' , 'Admin | Edit Pengajuan')

@section('header' , 'Admin Edit Pengajuan')

@section('content')
<form action="/admin/updatepengajuan/{{ $pengajuan->id_lowongan }}" method="POST" enctype="multipart/form-data">
  @csrf
  <div class="content">
      <div class="row">
          <div class="col-sm-6">

              <div class="form-group">
                  <label>ID Lowongan</label>
                  <input name="id_lowongan" class="form-control" value="{{ $pengajuan->id_lowongan }}" readonly>
                  <div class="text-danger">
                      @error('id_lowongan')
                          {{ $message }}
                      @enderror
                  </div>
              </div>

              <div class="form-group">
                  <label>Nama Perusahaan</label>
                  <input name="name" class="form-control" value="{{ $pengajuan->name }}">
                  <div class="text-danger">
                      @error('name')
                          {{ $message }}
                      @enderror
                  </div>
              </div>

              <div class="form-group">
                  <label>Email</label>
                  <input name="email" class="form-control" value="{{ $pengajuan->email }}">
                  <div class="text-danger">
                      @error('email')
                          {{ $message }}
                      @enderror
                  </div>
              </div>

              <div class="form-group">
                  <label>Judul Lowongan</label>
                  <input name="judul_lowongan" class="form-control" value="{{ $pengajuan->judul_lowongan }}">
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
                  <input name="kualifikasi" class="form-control" value="{{ $pengajuan->kualifikasi }}">
                  <div class="text-danger">
                      @error('kualifikasi')
                          {{ $message }}
                      @enderror
                  </div>
              </div>

              <div class="form-group">
                  <label>Persyaratan</label>
                  <input name="persyaratan" class="form-control" value="{{ $pengajuan->persyaratan }}">
                  <div class="text-danger">
                      @error('persyaratan')
                          {{ $message }}
                      @enderror
                  </div>
              </div>

              <div class="form-group">
                  <label>Alamat</label>
                  <input name="alamat" class="form-control" value="{{ $pengajuan->alamat }}">
                  <div class="text-danger">
                      @error('alamat')
                          {{ $message }}
                      @enderror
                  </div>
              </div>

              <div class="form-group">
                  <label>Kabupaten/Kota</label>
                  <input name="kabupatenkota" class="form-control" value="{{ $pengajuan->kabupatenkota }}">
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
                  <input name="kodepos" class="form-control" value="{{ $pengajuan->kodepos }}">
                  <div class="text-danger">
                      @error('kodepos')
                          {{ $message }}
                      @enderror
                  </div>
              </div>

              <div class="col-sm-12">
                  <div class="col-sm-4">
                      <img src="{{ url('fotopengajuan/'.$pengajuan->foto) }}" width="150px">
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


@endsection