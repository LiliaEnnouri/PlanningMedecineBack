<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plage_Unite extends Model
{
    protected $table = 'Plage_Unite';
    protected $primaryKey = 'plage_unite_id';
    public $timestamps = true;

    public $fillable = [
        'jour',
        'heure_debut',
        'heure_fin',
        'unite_id',
        'type_id'
    ];

    protected $dates = ['deleted_at', 'created_at', 'updated_at'];

    public function Partie_Theme()
    {
        return $this->hasMany('App\Partie_Theme');
    }

    public function Type()
    {
        return $this->belongsTo('App\Type');
    }

    public function Unite()
    {
        return $this->belongsTo('App\Unite');
    }

}
