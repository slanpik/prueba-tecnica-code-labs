<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Imc extends Model
{
    const iMC_DELGADEZ = 'Delgadez severa';
    const iMC_NORMAL = 'Normal';
    const iMC_OBESIDAD = 'Obesidad';
    const iMC_ETC = 'Etc';

    protected $table = 'imc';

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [ 
        'weight', 'height', 'imc', 'user_id'
    ];

    public function users() {
        return $this->belongsTo('App\User', 'user_id');
    }
}
