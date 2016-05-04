@extends('main')

@section('content')

@section('content')

@include('sidebar')
<div class="data-display">
<table class="table table-bordered" id="reason-table">
    <thead>
        <tr>
            <th>Reason Name</th>
            <th>Action</th>
        </tr>
    </thead>
</table>
</div>
@stop
@push('scripts')
<script>
$(function() {
    $('#reason-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: '{!! route('data.reason') !!}',
        columns: [
            { data: 'ReasonName', name: 'Reason Name' },
              {data: 'action', name: 'action', orderable: false, searchable: false}
        ]
    });
});
</script>
@endpush
