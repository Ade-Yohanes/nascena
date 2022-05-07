<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class quotation extends Model
{
    protected $guarded = [];

    protected $table = "quotation_form";
    protected $fillable = ['title','name', 'company', 'phone', 'email', 'description','file'];

}
