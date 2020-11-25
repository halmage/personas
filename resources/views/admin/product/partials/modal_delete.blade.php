<!-- Button trigger modal -->
<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-delete-{{ $product->id }}">
  <li class="fas fa-trash"></li>
</button>

<!-- Modal -->
<div class="modal fade" id="modal-delete-{{ $product->id }}" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title lead text-danger" id="staticBackdropLabel">Eliminar producto</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      	<img src="{{ $product->image == null ? asset('img/warning/no-hay-foto.jpg') : 
	    			 $product->image  }}" class="rounded float-left mr-2" width="100" height="100">
      	<p class="mt-1 lead">
        	¿Seguro que quieres eliminar el producto {{ $product->name }} con el codigo {{ $product->code }}?
       	</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">&times Close</button>
        <form action="{{ route('product.destroy',$product) }}" method="POST" id="form-delete-{{ $product->id }}">
        	@method('DELETE')
        	@csrf
        </form>
        <button type="submit" class="btn btn-danger" form="form-delete-{{ $product->id }}"><li class="fas fa-trash"></li> Eliminar</button>
      </div>
    </div>
  </div>
</div>