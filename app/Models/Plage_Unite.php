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

    public function partieTheme()
    {
        return $this->hasMany('App\Partie_Theme');
    }

    public function type()
    {
        return $this->belongsTo('App\Type');
    }

    public function unite()
    {
        return $this->hasOne('App\Unite','unite_id','unite_id');
    }

    public function seance()
    {
        return $this->hasMany('App\Seance');
    }

}
