<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
   protected $table = 'Contacts';

	public $primaryKey = 'id';

	public $timestamps = false;
}
