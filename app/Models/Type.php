<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    protected $table = 'Type';
    protected $primaryKey = 'type_id';
    public $timestamps = true;

    public $fillable = [
        'libelle'
    ];

    protected $dates = ['deleted_at', 'created_at', 'updated_at'];

    public function Theme()
    {
        return $this->hasMany('App\Theme');
    }

    public function Plage_Unite()
    {
        return $this->hasMany('App\Plage_Unite');
    }

}
