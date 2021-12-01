@extends('adminlayout')

@section('title' , 'Admin | Add Pengajuan')

@section('header' , 'Admin Add Pengajuan')

@section('content')

<form action="/admin/insertpengajuan" method="POST" enctype="multipart/form-data">
  @csrf
  <div class="content">
      <div class="row">
          <div class="col-sm-6">

              <div class="form-group">
                  <label>ID Lowongan</label>
                  <input name="id_lowongan" class="form-control" value="{{ old('id_lowongan') }}">
                  <div class="text-danger">
                      @error('id_lowongan')
                          {{ $message }}
                      @enderror
                  </div>
              </div>

              <div class="form-group">
                  <label>Nama Perusahaan</label>
                  <input name="name" class="form-control" value="{{ old('name') }}">
                  <div class="text-danger">
                      @error('name')
                          {{ $message }}
                      @enderror
                  </div>
              </div>

              <div class="form-group">
                  <label>Email</label>
                  <input name="email" class="form-control" value="{{ old('email') }}">
                  <div class="text-danger">
                      @error('email')
                          {{ $message }}
                      @enderror
                  </div>
              </div>

              <div class="form-group">
                  <label>Judul Lowongan</label>
                  <input name="judul_lowongan" class="form-control" value="{{ old('judul_lowongan') }}">
                  <div class="text-danger">
                      @error('judul_lowongan')
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
                  <label>Bidang Industri</label>
                  <select name="bidangindustri" class="form-control">
                      <option selected>Semua Industri</option>
                      <option>Administrasi</option>
                      <option>Agrikultur/Kehutanan/Perikanan</option>
                      <option>Akuntansi</option>
                      <option>Audit </option>
                      <option>Bioteknologi</option>
                      <option>Catering </option>
                      <option>Desain</option>
                      <option>Keamanan</option>
                      <option>Kesehatan dan Kecantikan </option>
                      <option>Kimia </option>
                      <option>Konstruksi dan Bangunan</option>
                      <option>Layanan Bisnis </option>
                      <option>Media dan Periklanan</option>
                      <option>Migas dan Pertambangan</option>
                      <option>Otomotif</option>
                      <option>Pendidikan</option>
                      <option>Penerbangan </option>
                      <option>Perbankan/Finansial</option>
                      <option>Properti</option>
                      <option>R&D dan Lab</option>
                      <option>Teknologi Informatika</option>
                      <option>Telekomunikasi</option>
                      <option>Transportasi</option>
                      <option>Umum</option>
                  </select>
              </div>

              <div class="form-group">
                  <label>Kategori Posisi</label>
                  <select name="kategoriposisi" class="form-control">
                      <option selected>Semua Kategori</option>
                      <option>Akuntan/Auditor</option>
                      <option>Asuransi</option>
                      <option>Ekspedisi / Agen Cargo</option>
                      <option>Elektronika/Semikonduktor </option>
                      <option>Farmasi</option>
                      <option>Furnitur </option>
                      <option>Garmen/Tekstil</option>
                      <option>Hiburan</option>
                      <option>Hotel </option>
                      <option>Hukum </option>
                      <option>Internet</option>
                      <option>Kehutanan/Perkayuan </option>
                      <option>Keuangan/Bank</option>
                      <option>Kimia</option>
                      <option>Komputer/TI</option>
                      <option>Konstruksi</option>
                      <option>Konsultan </option>
                      <option>Kosmetik</option>
                      <option>Logam</option>
                      <option>Logistik/Transportasi</option>
                      <option>Mainan</option>
                      <option>Manufaktur</option>
                      <option>Media</option>
                      <option>Mekanik/Listrik</option>
                      <option>Otomotif</option>
                      <option>Minyak dan Gas </option>
                      <option>Makanan/Minuman</option>
                      <option>Penerbangan</option>
                      <option>Pengolahan sumber daya alam lainnya</option>
                      <option>Percetakan dan Kemasan</option>
                      <option>Kesehatan </option>
                      <option>Perikanan </option>
                      <option>Ritel</option>
                      <option>Telekomunikasi </option>
                      <option>Travel </option>
                      <option>Agribisnis </option>
                      <option>Lain-lain </option>
                  </select>
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
                  <input name="kualifikasi" class="form-control" value="{{ old('kualifikasi') }}">
                  <div class="text-danger">
                      @error('kualifikasi')
                          {{ $message }}
                      @enderror
                  </div>
              </div>

              <div class="form-group">
                  <label>Persyaratan</label>
                  <input name="persyaratan" class="form-control" value="{{ old('persyaratan') }}">
                  <div class="text-danger">
                      @error('persyaratan')
                          {{ $message }}
                      @enderror
                  </div>
              </div>

              <div class="form-group">
                  <label>Alamat</label>
                  <input name="alamat" class="form-control" value="{{ old('alamat') }}">
                  <div class="text-danger">
                      @error('alamat')
                          {{ $message }}
                      @enderror
                  </div>
              </div>

              <div class="form-group">
                  <label>Kabupaten/Kota</label>
                  <input name="kabupatenkota" class="form-control" value="{{ old('kabupatenkota') }}">
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
                  <input name="kodepos" class="form-control" value="{{ old('kodepos') }}">
                  <div class="text-danger">
                      @error('kodepos')
                          {{ $message }}
                      @enderror
                  </div>
              </div>

              <div class="form-group">
                  <label>Foto</label>
                  <input type="file" name="foto" class="form-control">
                  <div class="text-danger">
                      @error('foto')
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