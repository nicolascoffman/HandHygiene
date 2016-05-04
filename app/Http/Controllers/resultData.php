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



class resultData extends Controller
{

  public function datatable(){


    $results = Result::all();

    return Datatables::of($results)
        ->addColumn('action', function ($result) {
            return '<a href="#edit-'.$result->id.'" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-pencil"></i> Edit</a>';
        })
        ->make(true);


  }


  }
