@extends('main')

@section('content')

@section('content')

@include('sidebar')

<div class="data-display">
<table class="table table-bordered" id="healthcareprofessionals-table">
    <thead>
        <tr>
            <th>Position Name</th>
            <th>Action</th>
        </tr>
    </thead>
</table>
</div>
@stop
@push('scripts')
<script>
$(function() {
    $('#healthcareprofessionals-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: '{!! route('data.healthcareprofessional') !!}',
        columns: [
            { data: 'PositionName', name: 'Position Name' },
            { data: 'action', name: 'action', orderable: false, searchable: false},
        ]
    });
});
</script>
@endpush
