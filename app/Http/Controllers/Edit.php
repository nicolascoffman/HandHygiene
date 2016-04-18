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


class Edit extends Controller
{

  //Shows form
  public function index(){
    $tables = Controller::GetTables();
    $current = 0;
    $data = 0;
  	return view('edit', compact('tables', 'current', 'data'));
      }

  public function display(Request $request){
      $tables = Controller::GetTables();

    $current = $request->input('current');

    $models = array(
    'users' => User::all(),
    'observations' => Observation::all(),
    'HealthcareProfessionals' => HealthcareProfessional::all(),
    'locations' => Location::all(),
    'moments' => Moment::all(),
    'results' => Result::all(),
    'reasons' => Reason::all(),
    );

    $data = $models[$current];



return view('edit', compact('tables', 'current', 'data'));
  }
}
