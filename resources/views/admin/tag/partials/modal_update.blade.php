<!-- Button trigger modal -->
<button type="button" 
        class="btn btn-warning" 
        data-toggle="modal" 
        data-target="#modal-update-{{ $tag->id }}">
  <li class="fas fa-edit"></li>
</button>

<!-- Modal -->
<div class="modal fade" id="modal-update-{{ $tag->id }}" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title lead text-primary" id="staticBackdropLabel">Crear tag</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      	<form action="{{ route('tag.update',$tag) }}" method="POST" id="form-update-{{ $tag->id }}">
            @csrf
            @method('PUT')
            <div class="form-group">
              <label for="name">Ingrese nombre del tag</label>
              <input type="text" 
                     id="name"
                     name="name" 
                     class="form-control @error('name') is-invalid @enderror"
                     value="{{ $tag->name }}" 
              >
              @error('name')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">&times Close</button>
        <button type="submit" class="btn btn-warning" form="form-update-{{ $tag->id }}"><li class="fas fa-edit"></li> Actualizar </button>
      </div>
    </div>
  </div>
</div>