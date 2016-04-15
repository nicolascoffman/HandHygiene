<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;

$tables = array(
  'Users' => 'users',
  'Oberservations' => 'observations',
  'Healthcare Professional Type' => 'HealthcareProfessionals',
  'Locations' => 'locations',
  'Moments' => 'moments',
  'Results' => 'results',
  'Reasons' => 'reasons',
  );

class Edit extends Controller
{
  //Shows form
  public function index(){

    $tables = array(
      'Users' => 'users',
      'Oberservations' => 'observations',
      'Healthcare Professional Type' => 'HealthcareProfessionals',
      'Locations' => 'locations',
      'Moments' => 'moments',
      'Results' => 'results',
      'Reasons' => 'reasons',
      );
  	return view('edit', ["tablelist" => array_keys($tables)]);
      }






}
