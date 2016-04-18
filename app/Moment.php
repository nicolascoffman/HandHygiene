<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Moment extends Model
{



  public function result(){return $this->hasOne('App\Result');
  }
  public function reason(){return $this->hasOne('App\Reason');
  }
}
