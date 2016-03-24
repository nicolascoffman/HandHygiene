<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Observation;
use DB;

class ObservationController extends Controller
{
    //Shows form
    public function index(){

      return view('observe', ['name' => "dick"]);

    }

    //Handles Submission

    public function gotWhatever(Request $request){
      $obj = new Observation;
      $obj->Moment_ID  =  $request->input('Moment_ID');
      $obj->Loc_ID =  $request->input('Loc_ID');
      $obj->Job_ID =  $request->input('Job_ID');
      $obj->save();
      $questions = Observation::all();
      return response()->json($questions);
    }

}
