<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $filelabel = [
        'name'
    ];
    public function product()
    {
        return $this->hasMany('App\Product', 'category_id');
    }
}
