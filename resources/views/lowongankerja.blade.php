<div class="row">
  @forelse ( $lowongan as $data )
    <div class="col-md-4">
      <img class="content img-thumbnail" src="{{ url('foto/'.$data->foto) }}" width="100px">
      <h2>{{ $data->judul_lowongan }}</h2>
      <p>Deskripsi Pekerjaan Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt eum velit tempore maxime? Quia nisi, suscipit vitae amet aliquid saepe!</p>
      <p><a class="btn btn-secondary" href="admin/detail/{{ $data->id_lowongan }}">View details &raquo;</a></p>
    </div>
  @empty
  <p class="col-12" style="text-align: center">Belum ada lowngan saat ini !</p>
  @endforelse
</div>
