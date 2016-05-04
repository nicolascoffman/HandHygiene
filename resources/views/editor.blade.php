@extends('main')

@section('content')


Edit entry for {{ $table }} table
{{ $table }}
{{ $id }}

{!! Form::open(array('url' => '/update')) !!}

{!! Form::submit('Update') !!}


{!! Form::close() !!}


@stop
