<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class shoping extends Model
{
    public function item(){
        return $this->belongsTo(flowers::class,"flower_id");
    }

    public function user(){
        return $this->belongsTo(User::class,"User_id");
    }

    protected $table = "shopingcart";
}
