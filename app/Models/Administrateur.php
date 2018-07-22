<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Administrateur extends Model
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

}
