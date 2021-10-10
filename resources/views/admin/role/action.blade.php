<button  type="button" class="buttons medium white"><i class="fas fa-eye"></i></button> 
<a href="{{ route('role.edit', $roles->id) }}"><button type="button" class="buttons btn_edit medium white"><i class="fas fa-edit"></i></i></button></a> 
<button type="button" href="{{ route('role.destroy', $roles->id) }}" class="buttons btn_delete medium white"><i class="fas fa-trash-alt"></i></button> 