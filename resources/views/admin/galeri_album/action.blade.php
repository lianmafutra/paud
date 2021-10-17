<a href="{{ route('galeri-album.show',$galeri_album->id) }}"><button  type="button" class="btn btn-success waves-effect waves-light"><i class="fas fa-eye"> Detail</i></button> </a>
<a href="{{ route('galeri-album.edit',$galeri_album->id) }}"><button type="button" class="btn btn-primary waves-effect waves-light btn_edit"><i class="fas fa-edit"> Ubah</i></i></button></a>
<button type="button" href="{{ route('galeri-album.destroy', $galeri_album->id) }}" class="btn btn-danger waves-effect waves-light btn_delete"><i class="fas fa-trash-alt"> Hapus</i></button>
