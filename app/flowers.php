<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\category;


class flowers extends Model
{
    //
    public function category(){
        return $this->belongsTo(category::class, 'Category_id');
    }
    protected $table = "flowers";
}
