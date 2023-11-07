<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Credito
 *
 * @property $id
 * @property $Trabajo
 * @property $Cantidad
 * @property $Interes
 * @property $Pagos
 * @property $created_at
 * @property $updated_at
 *
 * @property Pago $pago
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Credito extends Model
{
    
    static $rules = [
		'Trabajo' => 'required',
		'Cantidad' => 'required',
		'Interes' => 'required',
		'Pagos' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Trabajo','Cantidad','Interes','Pagos'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function pago()
    {
        return $this->hasOne('App\Models\Pago', 'id', 'Pagos');
    }
    

}
