<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vote extends Model
{
    //
    public function options(){
        return $this->belongsTo(Option::class);
    }
}
