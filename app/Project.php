<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model
{
    protected $fillable = [
        'name'
    ];

    use SoftDeletes;

    public function products()
    {
        return $this->hasMany('App\Product');
    }
}
