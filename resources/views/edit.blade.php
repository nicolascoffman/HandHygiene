@extends('main')

@section('content')

{!! Form::open(array('url' => '/edit')) !!}
<div class="btn-group" role="group" aria-label="...">
  @foreach($tables as $key => $value)
    @if ($key === $current)
      <button name="current" type="submit" value= {!! $key !!} class="btn btn-warning">{!! $value !!}</button>
    @else
        <button name="current" type="submit" value= {!! $key !!} class="btn btn-primary">{!! $value !!}</button>
    @endif
  @endforeach
</div>
{!! Form::close() !!}

{!! $data !!}

@stop

<!--





-->
