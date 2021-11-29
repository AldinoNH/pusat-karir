<!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

  <div class="container marketing">

<!-- Three columns of text below the carousel -->
<div class="row">
  <div class="col-lg-4">
   

@foreach( $lowongan as $data )
<img class="content" src="{{ url('foto/'.$data->foto) }}" width="100px">
    <h2>{{ $data->judul_lowongan }}</h2>
    <p>{{ $data->deskripsi }}</p>
    <p><a class="btn btn-secondary" href="admin/detail/{{ $data->id_lowongan }}">View details &raquo;</a></p>
  </div><!-- /.col-lg-4 -->
  <div class="col-lg-4">
   
@endforeach
   

    <!-- <h2>Heading</h2>
    <p>And lastly this, the third column of representative placeholder content.</p>
    <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p> -->
  </div><!-- /.col-lg-4 -->

</div><!-- /.row -->

</div><!-- /.container -->
  