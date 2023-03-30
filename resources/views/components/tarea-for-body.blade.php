@csrf 
    <div class="row">
            <div class="col-sm-12">
                <label for="InputRol" class="form-label">* Nombre del Rol</label>
                <input type="text" class="form-control" id="InputRol" name="rol" placeholder="..." value="{{ old('rol') }}"></input>
            </div>

            <div class="col-sm-12 text-end my-2">
                <button type="submit" class="btn btn-primary">
                    Guardar
                </button>
            </div>
    </div>
