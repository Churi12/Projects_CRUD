<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    protected $fillable = [
        'name',
        'project_id',
        'category_id',
        'details'
    ];

    use SoftDeletes;

    public function project()
    {
        return $this->belongsTo('App\Project');
    }

    public function category()
    {
        return $this->belongsTo('App\Category');
    }
}
