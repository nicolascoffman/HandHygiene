<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ObservationController extends Controller
{
    //Shows form
    public function index($id){

      return view('observe');

    }
}
