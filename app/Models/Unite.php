<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Unite extends Model
{
    protected $table = 'Unite';
    protected $primaryKey = 'unite_id';
    public $timestamps = true;

    public $fillable = [
        'code',
        'intitule',
        'nb_credits',
        'objectif',
        'prerequis',
        'description',
        'ECUE',
        'modalites_evaluation',
        'semaine_debut',
        'semaine_fin',
        'appareil_id',
        'niveau_id',
        'enseignant_id',
        'type_unite_id'
    ];

    protected $dates = ['deleted_at', 'created_at', 'updated_at'];

    public function plageUnite()
    {
        return $this->hasMany('App\Plage_Unite');
    }

    public function niveau()
    {
        return $this->hasOne('App\Niveau','niveau_id','niveau_id');
    }

    public function appareil()
    {
        return $this->belongsTo('App\Appareil');
    }

    public function typeUnite()
    {
        return $this->belongsTo('App\Type_Unite');
    }

    public function enseignant()
    {
        return $this->belongsTo('App\Enseignant');
    }

    public function theme()
    {
        return $this->hasMany('App\Theme');
    }

}
