@extends('main')

@section('content')
<div>

<div id="pop_div">

@areachart('Population', 'pop_div')

</div>
</div>
@stop
<!--       $table->integer('Loc_ID');
      $table->integer('Job_ID');
      $table->integer('Moment_ID');
      $table->integer('Result_ID');
      $table->integer('Reason_ID');
      $table->boolean('Gloves');
      $table->binary('Entry Exit');

    -->
