<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Partie_Theme extends Model
{
    protected $table = 'Partie_Theme';
    protected $primaryKey = 'partie_theme_id';
    public $timestamps = true;

    public $fillable = [
        'semaine_debut',
        'semaine_fin',
        'theme_id',
        'plage_unite_id'
    ];

    protected $dates = ['deleted_at', 'created_at', 'updated_at'];

    public function Seance()
    {
        return $this->hasMany('App\Seance');
    }

    public function Plage_Unite()
    {
        return $this->belongsTo('App\Plage_Unite');
    }

    public function Theme()
    {
        return $this->belongsTo('App\Theme');
    }

}
