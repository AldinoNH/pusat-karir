<div class="row">
  @forelse ( $lowongan as $data )
    <div class="col-md-4 item-lowongan">
      <img class="content img-thumbnail mx-auto d-block" src="{{ url('foto/'.$data->foto) }}" width="100px">
      <h2 class="text-center">{{ $data->judul_lowongan }}</h2>
      <p class="text-center">{{ $data->deskripsi }}</p>
      <p><a class="btn btn-secondary col-md-12" href="admin/detail/{{ $data->id_lowongan }}">View details &raquo;</a></p>
    </div>
  @empty
  <p class="col-12" style="text-align: center">Belum ada lowngan saat ini !</p>
  @endforelse
</div>
