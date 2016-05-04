<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Datatables;
use Lava;
use DB;

class Dashboard extends Controller
{
  public function index(){





    $reasonTable = Lava::DataTable();

    $reasons = DB::table('reasons')->get();

    $reasonTable->addNumberColumn('Year')
               ->addNumberColumn('Number of People');

    foreach ($reasons as $key => $value) {
             $reasonTable->addRow([$value, DB::table('observations')->where('Reason_ID', $key)->count()]);
           };

    Lava::AreaChart('Population', $reasonTable, [
        'title' => 'Population Growth',
        'legend' => [
            'position' => 'in'
        ]
    ]);

/*

    $reasonz = Lava::DataTable();

    $reasonz->addStringColumn('Reasons')
            ->addNumberColumn('Percent')
            ->addRow(['Check Reviews', 5])
            ->addRow(['Watch Trailers', 2])
            ->addRow(['See Actors Other Work', 4])
            ->addRow(['Settle Argument', 89]);

    Lava::DonutChart('IMDB', $reasonz, [
        'title' => 'Reasons I visit IMDB'
    ]);




$finances = Lava::DataTable();

$finances->addDateColumn('Year')
         ->addNumberColumn('Sales')
         ->addNumberColumn('Expenses')
         ->setDateTimeFormat('Y')
         ->addRow(['2004', 1000, 400])
         ->addRow(['2005', 1170, 460])
         ->addRow(['2006', 660, 1120])
         ->addRow(['2007', 1030, 54]);

Lava::ColumnChart('Finances', $finances, [
    'title' => 'Company Performance',
    'titleTextStyle' => [
        'color'    => '#eb6b2c',
        'fontSize' => 14
    ]
]);

*/
    return view('dashboard');


  }
}
