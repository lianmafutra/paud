<a href="{{ route('slider.show', $slider->id) }}"><button  type="button" class="btn btn-success waves-effect waves-light"><i class="fas fa-eye"> Detail</i></button> </a>
<a href="{{ route('slider.edit', $slider->id) }}"><button type="button" class="btn btn-primary waves-effect waves-light btn_edit"><i class="fas fa-edit"> Ubah</i></i></button></a> 
<button type="button" href="{{ route('slider.destroy', $slider->id) }}" class="btn btn-danger waves-effect waves-light btn_delete"><i class="fas fa-trash-alt"> Hapus</i></button> 