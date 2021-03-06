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



class userData extends Controller
{

  public function datatable(){


          $users = User::all();

          return Datatables::of($users)
              ->addColumn('action', function ($user) {
                  return '<a href="/editor/user/'.$user->id.'" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-pencil"></i> Edit</a>';
              })
              ->make(true);
  }


  }
