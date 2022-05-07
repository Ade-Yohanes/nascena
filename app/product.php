<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\brand_models;
use DB;

class product extends Model
{
    // public function brand(){
    //     return $this->belongsToMany('brand', 'logo', 'product_id', 'brand_id' );
    // }

    public function brand_list()
    {
        return $this->hasMany(brand::class, 'brand_id' );
    }
}
