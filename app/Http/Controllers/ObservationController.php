<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Observation;

class ObservationController extends Controller
{
    //Shows form
    public function index(){

      return view('observe', ['responses' => ""]);

    }

    //Handles Submission

    public function gotWhatever(Request $request){
      $obj = new Observation;
      $obj->Moment_ID  =  $request->input('Moment_ID');
      $obj->Loc_ID =  $request->input('Loc_ID');
      $obj->Job_ID =  $request->input('Job_ID');
      $obj->save();
      $questions = Observation::all();
      return view('observe', ['responses' => $questions]);
    }


    public function json(){
      $questions = Observation::all();
      return response()->json($questions);
    }

}
