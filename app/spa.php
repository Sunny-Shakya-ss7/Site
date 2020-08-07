<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class spa extends Model
{
    public function cadmins(){
        return $this->belongsTo('App\Cadmin');
    }
}
