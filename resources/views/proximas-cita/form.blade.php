<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="paciente_id" class="form-label">{{ __('Paciente Id') }}</label>
            <input type="text" name="paciente_id" class="form-control @error('paciente_id') is-invalid @enderror" value="{{ old('paciente_id', $proximasCita?->paciente_id) }}" id="paciente_id" placeholder="Paciente Id">
            {!! $errors->first('paciente_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="descripcion" class="form-label">{{ __('Descripción') }}</label>
            <input type="text" name="descripcion" class="form-control @error('descripcion') is-invalid @enderror" value="{{ old('descripcion', $proximasCita?->descripcion) }}" id="descripcion" placeholder="Descripción">
            {!! $errors->first('descripcion', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="copago" class="form-label">{{ __('Copago') }}</label>
            <input type="number" name="copago" class="form-control @error('copago') is-invalid @enderror" value="{{ old('copago', $proximasCita?->copago) }}" id="copago" placeholder="Copago">
            {!! $errors->first('copago', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="fecha_cita" class="form-label">{{ __('Fecha cita') }}</label>
            <input type="text" name="fechaCita" class="form-control @error('fechaCita') is-invalid @enderror" value="{{ old('fechaCita', $proximasCita?->fechaCita) }}" id="fecha_cita" placeholder="Fecha cita">
            {!! $errors->first('fechaCita', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Enviar') }}</button>
    </div>
</div>