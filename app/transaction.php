<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class transaction extends Model
{
    public function flowers(){
        return $this->belongsTo(flowers::class,"Flower_id");
    }

    public function user(){
        return $this->belongsTo(User::class,"User_id");
    }
    protected $table = "transactions";
}
