@extends('main')

@section('content')

Storing Observation as {!! Auth::user()->name !!}.

<div>
  {!! Form::open(array('url' => '/observe')) !!}

    {{ Form::hidden('user_id', $id) }}
    <br />

    {{ Form::select('Loc_ID', $loc) }}<br />
    {{ Form::select('Job_ID', $hp) }}<br />
    {{ Form::select('Moment_ID', $mom) }}<br>

    {!! Form::select('Entry_Exit', array(
                '0' => 'Entry',
                '1' => 'Exit',
                ))
                !!}<br />


    {{ Form::select('Result_ID', $result) }}<br />
    {{ Form::select('Reason_ID', $reas) }}<br />



    {!! Form::select('Gloves', array(
                'True' => 'Gloves Yes',
                'False' => 'Gloves No',
                ))
                !!}<br />

  {!! Form::submit('Submit Form!') !!}


  {!! Form::close() !!}


</div>
@stop
