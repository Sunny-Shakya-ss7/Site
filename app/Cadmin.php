<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Cadmin extends Authenticatable 
{
    use Notifiable;

    protected $table = 'cadmins';

    public $primaryKey = 'id';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'password','club_name'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function users(){
        return $this->hasMany('App\User');
    }
    public function galleries(){
        return $this->hasMany('App\Gallery');
    }
    public function spas(){
        return $this->hasMany('App\spa');
    }
    public function news(){
        return $this->hasMany('App\News');
    }
    public function monthreports(){
        return $this->hasMany('App\Monthreport');
    }
    public function treasurers(){
        return $this->hasMany('App\Treasurer');
    }
}
