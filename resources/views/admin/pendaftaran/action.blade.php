<a href="{{ route('galeri-album.edit',$pendaftaran->id) }}"><button type="button" class="btn btn-primary waves-effect waves-light btn_edit"><i class="fas fa-edit"> Detail</i></i></button></a>
<button type="button" href="{{ url('admin/pendaftaran/destroy/', $pendaftaran->id) }}" class="btn btn-danger waves-effect waves-light btn_delete"><i class="fas fa-trash-alt"> Hapus</i></button>
