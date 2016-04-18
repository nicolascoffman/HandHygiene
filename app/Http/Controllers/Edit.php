<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;


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
      $data = 0;
	return view('edit', compact('tables', 'current', 'data'));
  }
}
