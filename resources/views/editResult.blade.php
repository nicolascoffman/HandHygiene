@extends('main')

@section('content')

@section('content')

@include('sidebar')
<div class="data-display">
<table class="table table-bordered" id="result-table">
    <thead>
        <tr>
            <th>Result Name</th>
            <th>Action</th>
        </tr>
    </thead>
</table>
</div>
@stop
@push('scripts')
<script>
$(function() {
    $('#result-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: '{!! route('data.result') !!}',
        columns: [
            { data: 'ResultName', name: 'Result Name' },
              {data: 'action', name: 'action', orderable: false, searchable: false}
        ]
    });
});
</script>
@endpush
