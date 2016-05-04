@extends('main')

@section('content')

@section('content')

@include('sidebar')
<div class="data-display">
<table class="table table-bordered" id="observations-table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Created at</th>
        </tr>
    </thead>
</table>
</div>
@stop
@push('scripts')
<script>
$(function() {
    $('#observations-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: '{!! route('data.observation') !!}',
        columns: [
              {data: 'id'},
              {data: 'created_at', name: 'created_at' },
              //{data: 'IP_ID', name: 'IP_ID'},
              {data: 'updated_at', name: 'updated_at'},
            //  {data: 'updated_at', name: 'updated_at'},
            //  {data: 'updated_at', name: 'updated_at'},

        ]
    });
});
</script>
@endpush
