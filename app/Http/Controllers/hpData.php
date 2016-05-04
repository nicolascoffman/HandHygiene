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



class hpData extends Controller
{

  public function datatable(){

              $hps = HealthcareProfessional::all();

              return Datatables::of($hps)
                  ->addColumn('action', function ($user) {
                      return '<a href="#edit-'.$user->id.'" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-pencil"></i> Edit</a>';
                  })
                  ->make(true);
  }


  }
