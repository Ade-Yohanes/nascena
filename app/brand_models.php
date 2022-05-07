<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\product;
use DB;

class brand_models extends Model
{
    public function brand()
    {
        $brand = DB::table('brand')->get();
        
        return $brand;
    }




    // public function products(){
    //     return $this->belongsTomany('product', 'product_name', 'brand_id', 'product_id' );
    // }

    public function products()
    {
        return $this->belongsTo(Products::class , 'product_id' );
    }
}
