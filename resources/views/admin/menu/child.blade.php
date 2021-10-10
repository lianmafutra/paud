

  @foreach($childs as $child)
    @if (Auth::user()->hasRole($child->role) ) 
    <li class="nav-item">
      <a href="{{ url($child->href) }}" class="nav-link  @if(\Request::path() ==  $child->href) active @endif">
          <i class="{{ $child->icon }} nav-icon"></i>
          
          <p>{{ $child->text }}</p>

          @if (Auth::user()->hasRole($child->role) && isset($child->children))
           
          @if (Auth::user()->hasRole($child->role) && isset($child->children))
              <i class="right fas fa-angle-right"></i>
          @endif
          
     
          @endif
      </a>

      @if(isset($child->children))
          <ul style=""  class="nav nav-treeview" style="display: none;"> 
               @include('admin.menu.child', ['childs' => $child->children ])
          </ul>

      @endif
   
     </li>
    @endif
    @endforeach


   
      




    
   
      