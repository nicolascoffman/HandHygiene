<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;



class Controller extends BaseController
{

    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function GetTables(){
      $tables = array(
        'users' => 'Users',
        'observations' => 'Oberservations',
        'HealthcareProfessionals' => 'Healthcare Professionals',
        'locations' => 'Locations',
        'moments' => 'Moments',
        'results' => 'Results',
        'reasons' => 'Reasons',
        );
        return $tables;
      }



}
