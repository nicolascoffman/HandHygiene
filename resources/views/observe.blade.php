
@parent

<div>
  {!! Form::open(array('url' => '/observe')) !!}

      <li>{!! Form::text('username', $placeholder = 'username') !!}</li>
      <li>{!! Form::select('Loc_ID', array(
                '0' => 'SICU',
                '1' => 'PICU',
                '2' => 'Other'
                ))
                !!}</li>
      <li>{!! Form::select('Job_ID', array(
                '0' => 'SICU',
                '1' => 'PICU',
                '2' => 'Other'
                ))
                !!}</li>
      <li>{!! Form::select('Moment_ID', array(
                '0' => 'SICU',
                '1' => 'PICU',
                '2' => 'Other'
                ))
                !!}</li>

{!! Form::submit('Submit Form!') !!}


  {!! Form::close() !!}

<button ><a href="./observe/json">View as JSON</a></button><br />


{!! $responses !!}


</div>
<!--       $table->integer('Loc_ID');
      $table->integer('Job_ID');
      $table->integer('Moment_ID');
      $table->integer('Result_ID');
      $table->integer('Reason_ID');
      $table->boolean('Gloves');
      $table->binary('Entry Exit');

    -->
