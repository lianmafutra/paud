<a href="{{ url('admin/pendaftaran/detail', $pendaftaran->id) }}"><button type="button" class="btn btn-success waves-effect waves-light btn_edit"><i class="fas fa-edit">Setujui</i></i></button></a>
<a href="{{ url('admin/pendaftaran/detail', $pendaftaran->id) }}"><button type="button" class="btn btn-primary waves-effect waves-light btn_edit"><i class="fas fa-edit"> Detail</i></i></button></a>
<button type="button" href="{{ url('admin/pendaftaran/destroy', $pendaftaran->id) }}" class="btn btn-danger waves-effect waves-light btn_delete"><i class="fas fa-trash-alt"> Hapus</i></button>
