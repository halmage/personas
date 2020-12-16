<!-- Button trigger modal -->
<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-delete-{{ $user->id }}">
  <li class="fas fa-trash"></li>
</button>

<!-- Modal -->
<div class="modal fade" id="modal-delete-{{ $user->id }}" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title lead text-danger" id="staticBackdropLabel">Eliminar usuario</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      	<img src="{{ $user->avatar == null ? asset('img/warning/no-hay-foto.jpg') : 
	    			 $user->avatar  }}" class="rounded float-left mr-2" width="100" height="100">
      	<p class="mt-1 lead">
        	¿Seguro que quieres eliminar a {{ $user->name }} {{ $user->last_name }} miembro de la cedula de identidad 
        	C.I:{{ $user->identify }}?
       	</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">&times Close</button>
        <form action="{{ route('admin-user.destroy',$user) }}" method="POST" id="form-delete-{{ $user->id }}">
        	@method('DELETE')
        	@csrf
        </form>
        <button type="submit" class="btn btn-danger" form="form-delete-{{ $user->id }}"><li class="fas fa-trash"></li> Eliminar</button>
      </div>
    </div>
  </div>
</div>