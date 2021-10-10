<button  type="button" class="buttons medium white"><i class="fas fa-eye"></i></button> 
<button type="button"  href="{{ route('user.detail', $users->id) }}" class="buttons btn_edit medium white"><i class="fas fa-edit"></i></i></button> 
<button type="button" href="{{ route('user.destroy', $users->id) }}" class="buttons btn_delete medium white"><i class="fas fa-trash-alt"></i></button> 