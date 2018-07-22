<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type_Unite extends Model
{
    protected $table = 'Type_Unite';
    protected $primaryKey = 'type_unite_id';
    public $timestamps = true;

    public $fillable = [
        'nom'
    ];

    protected $dates = ['deleted_at', 'created_at', 'updated_at'];

    public function Unite()
    {
        return $this->hasMany('App\Unite');
    }


}
