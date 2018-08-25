<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seance extends Model
{
    protected $table = 'Seance';
    protected $primaryKey = 'seance_id';
    public $timestamps = true;

    public $fillable = [
        'samaine',
        'theme_id',
        'plage_unite_id'
    ];

    protected $dates = ['deleted_at', 'created_at', 'updated_at'];

    public function PlageUnite()
    {
        return $this->hasOne('App\Plage_Unite','plage_unite_id','plage_unite_id');
    }

    public function Theme()
    {
        return $this->hasOne('App\Theme','theme_id','theme_id');
    }


}
