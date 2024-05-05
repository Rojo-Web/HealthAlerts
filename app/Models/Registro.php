<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Registro
 *
 * @property $id
 * @property $paciente_id
 * @property $medioComunicacion
 * @property $descripcion
 * @property $fechaRegistro
 * @property $created_at
 * @property $updated_at
 *
 * @property Paciente $paciente
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Registro extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['paciente_id', 'medioComunicacion', 'descripcion', 'fechaRegistro'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function paciente()
    {
        return $this->belongsTo(\App\Models\Paciente::class, 'paciente_id', 'cedula');
    }
    
}
