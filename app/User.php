<?php

namespace App;

use Illuminate\Notifications\Notifiable;

use Illuminate\Foundation\Auth\User as Authenticatable;


class User extends Authenticatable
{
    use Notifiable;

    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [ 
        'firstName', 'lastName', 'email', 'active', 'password'
    ];

    protected $hidden = [
      'password',
  ];


    protected $guarded = ['id'];

    /**
     * Guardar el nombre en minúscula
     * @param firstName
    */

    public function setFirstNameAttribute($valor)
    {
        $this->attributes['firstName'] = strtolower($valor);
    }
    /**
     * Guardar el apellido en minúscula
     * @param lastName
    */

    public function setLastNameAttribute($valor)
    {
        $this->attributes['lastName'] = strtolower($valor);
    }

    /**
     * Guardar el email en minúscula
     * @param email
    */
    public function setEmailAttribute($valor)
    {
        $this->attributes['email'] = strtolower($valor);
    }


}
