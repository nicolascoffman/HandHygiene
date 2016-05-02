<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Observation;
use App\HealthcareProfessional;
use App\Location;
use App\Moment;
use App\Reason;
use App\User;
use App\Result;

use Yajra\Datatables\Datatables;



class Edit extends Controller
{


  //Shows form
  public function getIndex(){
    $tables = Controller::GetTables();
    $current = 0;

  	return view('editMain', compact('tables', 'current'));
      }


  public function postCurrent(Request $request){


    $tables = Controller::GetTables();

    $current = $request->input('current');


    $views = array(
    'users' => 'editUser',
    'observations' => 'editObservation',
    'HealthcareProfessionals' => 'editHealthcareProfessional',
    'locations' => 'editLocation',
    'moments' => 'editMoment',
    'results' => 'editResult',
    'reasons' => 'editReason',
    );

    $view = $views[$current];


  return view($view, compact('tables', 'current'));
  }

}
