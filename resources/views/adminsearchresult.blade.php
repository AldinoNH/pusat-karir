@extends('adminlayout')

@section('title' , 'Admin Pusat Karir | Search Page')

@section('content')

  <div class="row">
    <a href="{{ url()->previous() }}" class="btn btn-link">Kembali</a>
  </div>

  <div class="list-group">
      
  @if (count($lowongan) !== 0)
    <h3>Lowongan Cari</h3>

    @foreach ($lowongan as $item)
    <div class="list-group-item list-group-item-action flex-column align-items-start">
      <div class="d-flex w-100 justify-content-between">
        <h5 class="mb-1">{{ $item->judul_lowongan }}</h5>
        <small>{{ $item->name }}</small>
      </div>
      <p class="mb-1">{{ $item->deskripsi }}</p>
      <small>
        @if ($item->approved == 1)

          @if ($item->tgl_akhir >= Carbon\Carbon::now()->format('Y-m-d'))
            <b>Batas Akhir Lowongan {{ Carbon\Carbon::parse($item->tgl_akhir)->locale('id')->isoFormat('LL') }}</b>
          @else
            <b>Terarsip {{ Carbon\Carbon::parse($item->tgl_akhir)->locale('id')->diffForHumans() }}</b>
          @endif

        @else
          <b>Lowongan Tidak Disetujui</b>
        @endif
      </small>
    </div>
    @endforeach
  @endif
  
  @if (count($event) !== 0)

    <h3>Event Cari</h3>

    @foreach ($event as $item)
    <div class="list-group-item list-group-item-action flex-column align-items-start">
      <div class="d-flex w-100 justify-content-between">
        <h5 class="mb-1">{{ $item->nama_event }}</h5>
        <small>{{ $item->tipe }}</small>
      </div>
      <p class="mb-1">{{ $item->deskripsi }}</p>
      <small>
        @if ($item->waktu >= Carbon\Carbon::now()->format('Y-m-d'))
          <b>Acara digelar pada {{ Carbon\Carbon::parse($item->waktu)->locale('id')->isoFormat('LL') }}</b>
        @else
          <b>Terarsip {{ Carbon\Carbon::parse($item->waktu)->locale('id')->diffForHumans() }}</b>
        @endif
      </small>

      <div class="btn-group-horizontal">
          <a href="/admin/upload/event/{{$data->id_event}}" class="btn btn-primary">Upload</a>
          <a href="/admin/detailevent/{{ $item->id_event }}" class="btn btn-sm btn-success">Detail</a>
          <a href="/admin/editevent/{{ $item->id_event }}" class="btn btn-sm btn-warning">Edit</a>
          <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete{{ $item->id_event }}">
          Delete
          </button>
      </div>

    </div>
    @endforeach

  @endif

  @if (count($berita) !== 0)
    <h3>Berita Cari</h3>

    @foreach ($berita as $item)
    <div class="list-group-item list-group-item-action flex-column align-items-start">
      <div class="d-flex w-100 justify-content-between">
        <h5 class="mb-1">{{ $item->nama_berita }}</h5>
      </div>
      <p class="mb-1">{{ $item->deskripsi }}</p>
      <div class="btn-group-horizontal">
          
        <a href="/admin/detail/berita/{{ $item->id_berita }}" class="btn btn-sm btn-link p-0">Detail</a>
        <a href="/admin/edit/berita/{{ $item->id_berita }}" class="btn btn-sm btn-link p-0">Edit</a>
        <button type="button" class="btn btn-link p-0" data-toggle="modal" data-target="#delete{{ $item->id_berita }}">
        Delete
        </button>

      </div>
    </div>
    @endforeach
  @endif

</div>

@endsection