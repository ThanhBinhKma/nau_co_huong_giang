<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    protected $table = 'foods';

    public function subfoods()
    {
        return $this->hasMany('App\Models\SubFood', 'food_id', 'id');
    }
}
