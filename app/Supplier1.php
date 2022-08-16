<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier1 extends Model
{
    //
    protected $table = "supplier_1";

    public function product(){
        return $this->hasMany('App\Product','id_ncc','id');
    }
}
