<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
   protected $table = 'news';

	public $primaryKey = 'id';

	public $timestamps = true;

}
