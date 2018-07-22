<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Enseignant extends Model
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

}
