<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Tymon\JWTAuth\Contracts\JWTSubject;


class Administrateur extends Authenticatable implements JWTSubject
{
    protected $table = 'Administrateur';
    protected $primaryKey = 'administrateur_id';
    public $timestamps = true;

    public $fillable = [
        'nom',
        'prenom',
        'email',
        'qr_code',
        'password',
        'passwordDecrypt'
    ];
    protected $dates = ['deleted_at', 'created_at', 'updated_at'];


    /**
     * Get the identifier that will be stored in the subject claim of the JWT.
     *
     * @return mixed
     */
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }


    /**
     * Return a key value array, containing any custom claims to be added to the JWT.
     *
     * @return array
     */
    public function getJWTCustomClaims()
    {
        return [];
    }
}
