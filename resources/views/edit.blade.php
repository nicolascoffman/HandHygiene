@extends('main')

@section('content')

<!-- edit content -->


@foreach($tablelist as $name)
   <option value="5" >    {!!  $name !!} </option>

@endforeach

@stop
