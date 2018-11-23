<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appareil extends Model
{
    protected $table = 'Appareil';
    protected $primaryKey = 'appareil_id';
    public $timestamps = true;

    public $fillable = [
        'nom'
    ];

    protected $dates = ['deleted_at', 'created_at', 'updated_at'];

    public function unite()
    {
        return $this->hasMany('App\Unite');
    }

}
