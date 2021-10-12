<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FoodType extends Model
{
   protected $table ='food_types';

   public function foods()
   {
       return $this->hasMany('App\Models\Food', 'food_type', 'id');
   }
}
