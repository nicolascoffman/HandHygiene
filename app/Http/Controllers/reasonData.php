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



class reasonData extends Controller
{

  public function datatable(){


    $reasons = Reason::all();

    return Datatables::of($reasons)
        ->addColumn('action', function ($reason) {
            return '<a href="#edit-'.$reason->id.'" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-pencil"></i> Edit</a>';
        })
        ->make(true);


  }


  }
