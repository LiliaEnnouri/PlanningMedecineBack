<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    protected $table = 'Etudiant';
    protected $primaryKey = 'etudiant_id';
    public $timestamps = true;

    public $fillable = [
        'nom',
        'prenom',
        'CIN',
        'email',
        'qr_code',
        'password',
        'passwordDecrypt',
        'niveau_id'
    ];

    protected $dates = ['deleted_at', 'created_at', 'updated_at'];

    public function Niveau()
    {
        return $this->belongsTo('App\Niveau');
    }
}
