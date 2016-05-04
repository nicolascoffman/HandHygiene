@extends('main')

@section('content')

{!! Auth::user()->name !!}


{!! $loc !!}
 {{$id}}

<div>
  {!! Form::open(array('url' => '/observe')) !!}

    {{ Form:hidden('IP_ID', {!! Auth::user()->id !!}) }}
    {{ Form::select('Loc_ID', $loc) }}
    {{ Form::select('Job_ID', $hp) }}
    {{ Form::select('Moment_ID', $mom) }}

    {!! Form::select('Entry Exit', array(
                '0' => 'Entry',
                '1' => 'Exit',
                ))
                !!}


    {{ Form::select('Result_ID', $result) }}
    {{ Form::select('Reason_ID', $reas) }}



    {!! Form::select('Gloves', array(
                '0' => 'Yes',
                '1' => 'No',
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
