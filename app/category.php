<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
            public function flowers(){
                return $this->hasMany(flowers::class);
            }

            protected $table = "categoryflowers";

}
