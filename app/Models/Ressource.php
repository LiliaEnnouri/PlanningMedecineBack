<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ressource extends Model
{
    protected $table = 'Ressource';
    protected $primaryKey = 'ressource_id';
    public $timestamps = true;

    public $fillable = [
        'libelle',
        'path',
        'theme_id'
    ];

    protected $dates = ['deleted_at', 'created_at', 'updated_at'];

    public function theme()
    {
        return $this->hasOne('App\Theme','theme_id','theme_id');
    }




}
