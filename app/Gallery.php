<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
	protected $table = 'galleries';

    public $primaryKey = 'id';

     public function cadmins(){
        return $this->belongsTo('App\Cadmin');
    }
}
