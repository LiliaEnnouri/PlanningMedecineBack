<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Niveau extends Model
{
    protected $table = 'Niveau';
    protected $primaryKey = 'niveau_id';
    public $timestamps = true;

    public $fillable = [
        'nom'
    ];

    protected $dates = ['deleted_at', 'created_at', 'updated_at'];

    public function etudiant()
    {
        return $this->hasMany('App\Etudiant');
    }

    public function unite()
    {
        return $this->hasMany('App\Unite');
    }


}
