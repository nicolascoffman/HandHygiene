@extends('main')

@section('content')

@section('content')

@include('sidebar')

<div class="data-display">
<table class="table table-bordered" id="moments-table">
    <thead>
        <tr>
            <th>Moment Name</th>
            <th>Action</th>
        </tr>
    </thead>
</table>
</div>
@stop
@push('scripts')
<script>
$(function() {
    $('#moments-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: '{!! route('data.moment') !!}',
        columns: [
            { data: 'MomentName', name: 'Moment Name' },
            {data: 'action', name: 'action', orderable: false, searchable: false}
        ]
    });
});
</script>
@endpush
