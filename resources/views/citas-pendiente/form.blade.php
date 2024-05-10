<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="paciente_id" class="form-label">{{ __('Paciente Id') }}</label>
            <input type="text" name="paciente_id" class="form-control @error('paciente_id') is-invalid @enderror" value="{{ old('paciente_id', $citasPendiente?->paciente_id) }}" id="paciente_id" placeholder="Paciente Id">
            {!! $errors->first('paciente_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="descripcion" class="form-label">{{ __('Descripción') }}</label>
            <input type="text" name="descripcion" class="form-control @error('descripcion') is-invalid @enderror" value="{{ old('descripcion', $citasPendiente?->descripcion) }}" id="descripcion" placeholder="Descripción">
            {!! $errors->first('descripcion', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="solicitud" class="form-label">{{ __('Solicitud') }}</label>
            <select name="solicitud" id="solicitud" class="form-select @error('solicitud') is-invalid @enderror">
                <option value="" selected disabled>Elegir</option>
                <option value="Modificar" {{ old('solicitud', $citasPendiente?->solicitud) === 'Modificar' ? 'selected' : '' }}>Modificar</option>
                <option value="Cancelar" {{ old('solicitud', $citasPendiente?->solicitud) === 'Cancelar' ? 'selected' : '' }}>Cancelar</option>
            </select>
            {!! $errors->first('solicitud', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="fecha_solicitud" class="form-label">{{ __('Fechasolicitud') }}</label>
            <input type="text" name="fechaSolicitud" class="form-control @error('fechaSolicitud') is-invalid @enderror" value="{{ old('fechaSolicitud', $citasPendiente?->fechaSolicitud) }}" id="fecha_solicitud" placeholder="Fechasolicitud">
            {!! $errors->first('fechaSolicitud', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Enviar') }}</button>
    </div>
</div>