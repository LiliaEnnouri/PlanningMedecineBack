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
        'partie_theme_id'
    ];

    protected $dates = ['deleted_at', 'created_at', 'updated_at'];

    public function Partie_theme()
    {
        return $this->hasOne('App\Partie_Theme');
    }


}
