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

    public function Plage_Unite()
    {
        return $this->hasMany('App\Plage_Unite');
    }

    public function Niveau()
    {
        return $this->belongsTo('App\Niveau');
    }

    public function Appareil()
    {
        return $this->belongsTo('App\Appareil');
    }

    public function Type_Unite()
    {
        return $this->belongsTo('App\Type_Unite');
    }

    public function Enseignant()
    {
        return $this->belongsTo('App\Enseignant');
    }

    public function Theme()
    {
        return $this->hasMany('App\Theme');
    }

}
