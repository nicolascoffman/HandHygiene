@extends('main')

@section('content')

Storing Observation as {!! Auth::user()->name !!}.

<div>
  {!! Form::open(array('url' => '/observe')) !!}

    {{ Form::hidden('user_id', $id) }}
<div class="well observe">
    <h3>Location</h3>

    <div class="radio" class="btn-group" data-toggle="buttons">
        @foreach($loc as $key => $value)
        <label class="btn btn-primary">
         <input type="radio" name="Loc_ID" id="{{$key}}" autocomplete="off" checked>{{$value}}
        </label>
        @endforeach
        
    </div>
</div>



<div class="well observe">
    <h3>Healthcare Professional</h3>
    <div class="radio" class="btn-group" data-toggle="buttons">
      @foreach($hp as $key => $value)
      <label class="btn btn-info">
       <input type="radio" name="Job_ID" id="{{$key}}" autocomplete="off" checked>{{$value}}
      </label>
      @endforeach
  </div>
  </div>

<div class="well observe">
  <h3>Moment</h3>
    <div class="radio" class="btn-group" data-toggle="buttons">
        @foreach($mom as $key => $value)
        <label class="btn btn-warning">
         <input type="radio" name="Moment_ID" id="{{$key}}" autocomplete="off" checked>{{$value}}
        </label>
        @endforeach
    </div>
    </div>

<div class="well observe">
    <h3>Entry/Exit</h3>
    <div class="radio" class="btn-group" data-toggle="buttons">
        <label class="btn btn-danger">
         <input type="radio" name="Entry_Exit" id="0" autocomplete="off" checked>Entry
         </label>
         <label class="btn btn-danger">
         <input type="radio" name="Entry_Exit" id="1" autocomplete="off" checked>Exit
        </label>
    </div>
    </div>

<div class="well observe">
    <h3>Result</h3>
      <div class="radio" class="btn-group" data-toggle="buttons">
          @foreach($reas as $key => $value)
          <label class="btn btn-success">
           <input type="radio" name="Result_ID" id="{{$key}}" autocomplete="off" checked>{{$value}}
          </label>
          @endforeach
      </div>
      </div>

<div class="well observe">
      <h3>Reason</h3>
        <div class="radio" class="btn-group" data-toggle="buttons">
            @foreach($result as $key => $value)
            <label class="btn btn-primary">
             <input type="radio" name="Reason_ID" id="{{$key}}" autocomplete="off" checked>{{$value}}
            </label>
            @endforeach
        </div>
        </div>

<div class="well observe">
  <h3>Gloves</h3>
    <div class="radio" class="btn-group" data-toggle="buttons">
        <label class="btn btn-info">
         <input type="radio" name="Gloves" id="True" autocomplete="off" checked>Yes
         </label>
         <label class="btn btn-info">
         <input type="radio" name="Gloves" id="False" autocomplete="off" checked>No
        </label>
    </div>
</div>


<div class="well observe">


  <button type="submit" class="btn btn-primary" value="Submit">Submit</button>
</div>

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
