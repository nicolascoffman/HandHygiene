<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
  public function observation() { 
    return $this->hasMany('App\Observation');
  }
  public function user() { 
    return $this->hasMany('App\User');
  }
  public function moment() { 
    return $this->hasMany('App\Moment');
  }
  public function healthcareprofessional() { 
    return $this->hasMany('App\HealthcareProfessional');
  }
  public function result() { 
    return $this->hasMany('App\Result');
  }
  public function reason() { 
    return $this->hasMany('App\Reason');
  }
}
