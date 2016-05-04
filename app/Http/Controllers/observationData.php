<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;


use App\Observation;
use App\HealthcareProfessional;
use App\Location;
use App\Moment;
use App\Reason;
use App\User;
use App\Result;

use Yajra\Datatables\Datatables;



class observationData extends Controller
{

  public function datatable(){
    return Datatables::of(Observation::all())->make(true);
  }

  }
