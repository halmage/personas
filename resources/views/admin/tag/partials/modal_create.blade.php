<!-- Button trigger modal -->
<button type="button" class="btn btn-primary mb-2 float-right" data-toggle="modal" data-target="#modal-create">
  + crear tag
</button>

<!-- Modal -->
<div class="modal fade" id="modal-create" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title lead text-primary" id="staticBackdropLabel">Crear tag</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      	<form action="{{ route('admin-tag.store') }}" method="POST" id="form-create">          
            @csrf
            <div class="form-group">
              <label for="name">Ingrese nombre del tag</label>
              <input type="text" 
                     id="name"
                     name="name" 
                     class="form-control @error('name') is-invalid @enderror"
                     placeholder="Ingrese nombre del tag" 
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
        <button type="submit" class="btn btn-primary" form="form-create"><li class="far fa-bookmark"></li> Crear </button>
      </div>
    </div>
  </div>
</div>