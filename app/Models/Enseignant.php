<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Tymon\JWTAuth\Contracts\JWTSubject;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Enseignant extends Authenticatable implements JWTSubject
{
    protected $table = 'Enseignant';
    protected $primaryKey = 'enseignant_id';
    public $timestamps = true;

    public $fillable = [
        'nom',
        'prenom',
        'CIN',
        'email',
        'qr_code',
        'password',
        'passwordDecrypt',
        'privilege_id'
    ];

    protected $dates = ['deleted_at', 'created_at', 'updated_at'];

    public function Privilege()
    {
        return $this->belongsTo('App\Privilege');
    }

    public function Unite()
    {
        return $this->hasMany('App\Unite');
    }



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
