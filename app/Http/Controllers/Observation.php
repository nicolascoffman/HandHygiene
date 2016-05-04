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

use Auth;

class Observation extends Controller
{
    //Shows form
    public function index(){

      $id = Auth::id();

      $loc = Location::pluck('LocationName', 'Location_ID');
      $hp = HealthcareProfessional::pluck('PositionName', 'Job_ID');
      $mom = Moment::pluck('MomentName', 'Moment_ID');
      $reas = Reason::pluck('ReasonName', 'Reason_ID');
      $result = Result::pluck('ResultName', 'Result_ID');


      return view('observe',  compact('loc', 'hp', 'id', 'mom', 'reas', 'result'));

    }

    //Handles Submission

    public function gotWhatever(Request $request){
      $obj = new Observation;
      $obj->id  =  $request->input('id');
      $obj->Loc_ID =  $request->input('Loc_ID');
      $obj->Job_ID =  $request->input('Job_ID');
      $obj->Moment_ID  =  $request->input('Moment_ID');
      $obj->Entry_Exit  =  $request->input('Entry_Exit');
      $obj->Result_ID =  $request->input('Result_ID');
      $obj->Reason_ID  =  $request->input('Reason_ID');
      $obj->Gloves =  $request->input('Gloves');
      $obj->save();

      $id = Auth::getName();

      $loc = Location::pluck('LocationName', 'Location_ID');
      $hp = HealthcareProfessional::pluck('PositionName', 'Job_ID');
      $mom = Moment::pluck('MomentName', 'Moment_ID');
      $reas = Reason::pluck('ReasonName', 'Reason_ID');
      $result = Result::pluck('ResultName', 'Result_ID');


      return view('observe',  compact('loc', 'hp', 'id', 'mom', 'reas', 'result'));



    }
/*
          $table->integer('Loc_ID');
          $table->integer('Job_ID');
          $table->integer('Moment_ID');
          $table->integer('Result_ID');
          $table->integer('Reason_ID');
          $table->boolean('Gloves');
          $table->binary('Entry Exit');
*/


}
