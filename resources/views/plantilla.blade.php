<div class="container">
    <div class="row">
        <div class="col-md-4">
            <form action="{{ route('companies.update', $compani->id) }}" method="post">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="">Nombre</label>
                    <input type="text" class="form-control" name="name" value="{{ $compani->name }}">
                </div>
                <div class="form-group">
                    <label for="">Nit</label>
                    <input type="text" class="form-control" name="nit" value="{{ $compani->nit }}">
                </div>
            <hr>
                <div class="form-group">
                    <label for=""></label>
                    <button class="btn btn-primary">Guardar cambios</button>
                    <a href="{{ url('companies') }}" class="btn btn-danger">Cancelar</a>
                </div>
            </form>

        </div>
    </div>
</div>
