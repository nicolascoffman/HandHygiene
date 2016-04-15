@extends('main')

@section('content')

<!-- edit content -->



@foreach($tablelist as $name)
    <h5>{!! $name !!}</h5>

@endforeach

@stop
