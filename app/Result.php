<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Result extends Model
{


  public function user(){return $this->hasMany('App\User');
  }
  public function healthcareprofessional(){return $this->hasMany('App\HealthcareProfessional');
  }
  public function location(){return $this->hasMany('App\Location');
  }
  public function moment(){return $this->hasMany('App\Moment');
  }

}
