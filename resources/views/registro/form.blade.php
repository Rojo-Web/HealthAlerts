<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="paciente_id" class="form-label">{{ __('Paciente Id') }}</label>
            <input type="text" name="paciente_id" class="form-control @error('paciente_id') is-invalid @enderror" value="{{ old('paciente_id', $registro?->paciente_id) }}" id="paciente_id" placeholder="Paciente Id">
            {!! $errors->first('paciente_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="medio_comunicacion" class="form-label">{{ __('Medio comunicación') }}</label>
            <select name="medioComunicacion" id="medio_comunicacion" class="form-select @error('medioComunicacion') is-invalid @enderror">
                <option value="" selected disabled>Elegir</option>
                <option value="Correo electrónico" {{ old('medioComunicacion', $registro?->medioComunicacion) === 'Correo electrónico' ? 'selected' : '' }}>Correo electrónico</option>
                <option value="WhatsApp" {{ old('medioComunicacion', $registro?->medioComunicacion) === 'WhatsApp' ? 'selected' : '' }}>WhatsApp</option>
                <option value="Teléfono" {{ old('medioComunicacion', $registro?->medioComunicacion) === 'Teléfono' ? 'selected' : '' }}>Teléfono</option>
            </select>
            {!! $errors->first('medioComunicacion', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        
        <div class="form-group mb-2 mb20">
            <label for="descripcion" class="form-label">{{ __('Descripción') }}</label>
            <input type="text" name="descripcion" class="form-control @error('descripcion') is-invalid @enderror" value="{{ old('descripcion', $registro?->descripcion) }}" id="descripcion" placeholder="Descripción">
            {!! $errors->first('descripcion', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="fecha_registro" class="form-label">{{ __('Fecha de Registro') }}</label>
            <input type="text" name="fechaRegistro" class="form-control @error('fechaRegistro') is-invalid @enderror" value="{{ old('fechaRegistro', $registro?->fechaRegistro) }}" id="fecha_registro" placeholder="Fecha de Registro">
            {!! $errors->first('fechaRegistro', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Enviar') }}</button>
    </div>
</div>