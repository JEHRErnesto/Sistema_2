<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Cliente
 *
 * @property $id
 * @property $Nombre
 * @property $Correo
 * @property $Teléfono
 * @property $Dirección
 * @property $DUI
 * @property $Crédito
 * @property $created_at
 * @property $updated_at
 *
 * @property Credito $credito
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Cliente extends Model
{
    
    static $rules = [
		'Nombre' => 'required',
		'Correo' => 'required',
		'Teléfono' => 'required',
		'Dirección' => 'required',
		'DUI' => 'required',
		'Crédito' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Nombre','Correo','Teléfono','Dirección','DUI','Crédito'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function credito()
    {
        return $this->hasOne('App\Models\Credito', 'id', 'Crédito');
    }
    

}
