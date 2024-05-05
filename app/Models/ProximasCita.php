<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ProximasCita
 *
 * @property $id
 * @property $paciente_id
 * @property $descripcion
 * @property $copago
 * @property $fechaCita
 * @property $created_at
 * @property $updated_at
 *
 * @property Paciente $paciente
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class ProximasCita extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['paciente_id', 'descripcion', 'copago', 'fechaCita'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function paciente()
    {
        return $this->belongsTo(\App\Models\Paciente::class, 'paciente_id', 'cedula');
    }
    
}
