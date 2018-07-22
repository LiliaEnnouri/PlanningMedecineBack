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
        'enseignant_id',
        'type_id',
        'unite_id'
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

    public function Enseignant()
    {
        return $this->belongsTo('App\Enseignant');
    }




}
