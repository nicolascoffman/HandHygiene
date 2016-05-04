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



class locationData extends Controller
{

  public function datatable(){


    $locations = Location::all();

    return Datatables::of($locations)
        ->addColumn('action', function ($location) {
            return '<a href="#edit-'.$location->id.'" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-pencil"></i> Edit</a>';
        })
        ->make(true);

  }

  }
