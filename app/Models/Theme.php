<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Theme extends Model
{
    protected $table = 'Theme';
    protected $primaryKey = 'theme_id';
    public $timestamps = true;

    public $fillable = [
        'code',
        'contenu',
        'nb_heures',
        'ordre',
        'semaine_debut',
        'semaine_fin',
        'ressources',
        'enseignant_id',
        'type_id',
        'unite_id'
    ];

    protected $dates = ['deleted_at', 'created_at', 'updated_at'];


    public function type()
    {
        return $this->hasOne('App\Type','type_id','type_id');
    }

    public function unite()
    {
        return $this->hasOne('App\Unite','unite_id','unite_id');
    }

    public function enseignant()
    {
        return $this->hasOne('App\Enseignant','enseignant_id','enseignant_id');
    }

    public function seance()
    {
        return $this->hasMany('App\Seance','seance_id','seance_id');
    }

    public function ressource()
    {
        return $this->hasMany('App\Ressource');
    }




}
