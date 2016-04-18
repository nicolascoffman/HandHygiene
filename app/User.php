<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function observation(){ return $this->hasMany('App\Observation');
    }

    public function moment(){ return $this->hasMany('App\Moment');
    }
    public function healthcareprofessional() { 
      return $this->hasMany('App\HealthcareProfessional');
    }
    public function location() { 
      return $this->hasMany('App\Location');
    }
    public function result() { 
      return $this->hasMany('App\Result');
    }
    public function reason() { 
      return $this->hasMany('App\Reason');
    }
}
