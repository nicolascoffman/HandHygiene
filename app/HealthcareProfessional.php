<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HealthcareProfessional extends Model
{
protected $table = "healthcareprofessionals";

  public function observation(){return $this->hasMany('App\Observation');
  }
  public function result(){return $this->hasMany('App\Result');
  }
  public function reason(){return $this->hasMany('App\Reason');
  }

}
