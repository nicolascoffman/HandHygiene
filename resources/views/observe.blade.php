@extends('main')

@section('content')

Storing Observation as {!! Auth::user()->name !!}.

<div>
  {!! Form::open(array('url' => '/observe')) !!}

    {{ Form::hidden('id', $id) }}

    {{ Form::select('Loc_ID', $loc) }}
    {{ Form::select('Job_ID', $hp) }}
    {{ Form::select('Moment_ID', $mom) }}

    {!! Form::select('Entry_Exit', array(
                '0' => 'Entry',
                '1' => 'Exit',
                ))
                !!}


    {{ Form::select('Result_ID', $result) }}
    {{ Form::select('Reason_ID', $reas) }}



    {!! Form::select('Gloves', array(
                'True' => 'Gloves Yes',
                'False' => 'Gloves No',
                ))
                !!}

  {!! Form::submit('Submit Form!') !!}


  {!! Form::close() !!}


</div>
@stop
<!--  $table->integer('Loc_ID');
      $table->integer('Job_ID');
      $table->integer('Moment_ID');
      $table->integer('Result_ID');
      $table->integer('Reason_ID');
      $table->boolean('Gloves');
      $table->binary('Entry Exit');

    -->
