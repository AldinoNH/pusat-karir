@extends('adminlayout')

@section('title' , 'Admin | Upload Video Event')

@section('name' , 'Admin Upload Video Event')

@section('content')
  
  @if (session('pesan'))
  <div class="alert alert-success alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <h4><i class="icon fa fa-check"></i> Success!</h4>
    {{ session('pesan') }}
  </div>
  @endif

  @if (session('error'))
  <div class="alert alert-error alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <h4><i class="icon fa fa-times"></i> Gagal!</h4>
    {{ session('error') }}
  </div>
  @endif

  <form method="POST" action="/admin/upload/video/event/{{ $tbl_event->id_event }}" enctype="multipart/form-data">
    
    @csrf

    <div style="margin: 20px 0px;">
      <label for="formFileLg" class="form-label">Upload Video Event</label>
      <input name="upload" class="form-control form-control-lg @error('upload') is-invalid @enderror" id="formFileLg" type="file">
      @error('upload')
        <div style="color: red">{{ $message }}</div>
      @enderror
    </div>
    
    <div class="col-auto">
      <button type="submit" class="btn btn-primary mb-3">Upload</button>
    </div>

  </form>

@endsection