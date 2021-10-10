<div class="btn-group">
  <button type="button" class="btn btn-default dropdown-toggle dropdown-icon" data-toggle="dropdown">
    <span class="sr-only">Toggle Dropdown</span>
  </button>
  <div class="dropdown-menu" role="menu">
      <a class="btn_open dropdown-item" target="_blank" href="{{ "http://127.0.0.1:8000/file/".$model->file }}">Buka File</a>
      <a class="btn_ubah dropdown-item"  href="{{ $model->id }}">Ubah</a>
      <a class="btn_hapus dropdown-item" href="{{ route('statistik.destroy',$model) }}">Hapus</a>

  </div>
</div>
