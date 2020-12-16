<!-- Button trigger modal -->
<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-delete-{{ $tag->id }}">
  <li class="fas fa-trash"></li>
</button>

<!-- Modal -->
<div class="modal fade" id="modal-delete-{{ $tag->id }}" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title lead text-danger" id="staticBackdropLabel">Eliminar usuario</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      	<p class="mt-1 lead">
        	¿Seguro que quieres eliminar el tag {{ $tag->name }}?
       	</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">&times Close</button>
        <form action="{{ route('admin-tag.destroy',$tag) }}" method="POST" id="form-delete-{{ $tag->id }}">
        	@method('DELETE')
        	@csrf
        </form>
        <button type="submit" class="btn btn-danger" form="form-delete-{{ $tag->id }}"><li class="fas fa-trash"></li> Eliminar</button>
      </div>
    </div>
  </div>
</div>