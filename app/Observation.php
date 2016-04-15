<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Observation extends Model
{
  public function user(){
    return $this->hasOne('App\User');
  }

  public function healthcareprofessional(){return $this->hasOne('App\HealthcareProfessional');
  }
  public function location(){return $this->hasOne('App\Location');
  }
  public function moment(){return $this->hasMany('App\Moment');
  }

}
