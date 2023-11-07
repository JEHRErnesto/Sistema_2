<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Pago
 *
 * @property $id
 * @property $Cantidad
 * @property $FechaPagos
 * @property $created_at
 * @property $updated_at
 *
 * @property Credito[] $creditos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Pago extends Model
{
    
    static $rules = [
		'Cantidad' => 'required',
		'FechaPagos' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Cantidad','FechaPagos'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function creditos()
    {
        return $this->hasMany('App\Models\Credito', 'Pagos', 'id');
    }
    

}
