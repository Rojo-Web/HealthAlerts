<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="name" class="form-label">{{ __('Rol') }}</label>
            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name', $role?->name) }}" id="name" placeholder="Rol">
            {!! $errors->first('name', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="permisos" class="form-label">{{ __('Permisos') }}</label>
            <select name="permisos" id="permisos" class="form-select @error('permisos') is-invalid @enderror" required>
                <option value="" selected disabled>Elegir</option>
                <option value="todos" {{ old('permisos', $role?->permisos) === 'todos' ? 'selected' : '' }}>Todos</option>
                <option value="lectura" {{ old('permisos', $role?->permisos) === 'lectura' ? 'selected' : '' }}>Lectura</option>
                <option value="escritura" {{ old('permisos', $role?->permisos) === 'escritura' ? 'selected' : '' }}>Escritura</option>
            </select>
            {!! $errors->first('permisos', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Enviar') }}</button>
    </div>
</div>
