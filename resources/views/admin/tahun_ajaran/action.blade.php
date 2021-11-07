{{-- <a href="{{ url('admin/pendaftaran/detail', $pendaftaran->id) }}"><button type="button" class="btn btn-success waves-effect waves-light btn_edit"><i class="fas fa-edit">Aksi</i></i></button></a> --}}
<a href="{{ route('tahun-ajaran.edit', $tahun_ajaran->id) }}"><button type="button" class="btn btn-success waves-effect waves-light "><i class="fas fa-edit"> Edit</i></i></button></a>
<a href="{{ route('tahun-ajaran.show', $tahun_ajaran->id) }}"><button type="button" class="btn btn-primary waves-effect waves-light btn_edit"><i class="fas fa-edit"> Detail</i></i></button></a>
<button type="button" href="{{ route('tahun-ajaran.destroy', $tahun_ajaran->id) }}" class="btn btn-danger waves-effect waves-light btn_delete"><i class="fas fa-trash-alt"> Hapus</i></button>
