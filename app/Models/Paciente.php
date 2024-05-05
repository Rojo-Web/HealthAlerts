<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Paciente
 *
 * @property $id
 * @property $cedula
 * @property $name
 * @property $celular
 * @property $email
 * @property $created_at
 * @property $updated_at
 *
 * @property CitasPendiente[] $citasPendientes
 * @property ProximasCita[] $proximasCitas
 * @property Registro[] $registros
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Paciente extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['cedula', 'name', 'celular', 'email'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function citasPendientes()
    {
        return $this->hasMany(\App\Models\CitasPendiente::class, 'cedula', 'paciente_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function proximasCitas()
    {
        return $this->hasMany(\App\Models\ProximasCita::class, 'cedula', 'paciente_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function registros()
    {
        return $this->hasMany(\App\Models\Registro::class, 'cedula', 'paciente_id');
    }
    
}
