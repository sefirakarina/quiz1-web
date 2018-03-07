<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\items;

class categories extends Model
{
    //
    public function items()
    {
    	return $this->hasMany(items::class);
    	//return $this->hasMany('App\items');->alternativ nya
    }
}
