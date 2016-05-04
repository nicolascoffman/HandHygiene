@extends('main')

@section('content')

@include('sidebar')

<div class="data-display">
  <table class="table table-bordered" id="users-table">
      <thead>
          <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Created At</th>
            <th>Action</th>
          </tr>
      </thead>
  </table>
</div>

@stop

@push('scripts')
<script>
$(function() {
    $('#users-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: '{!! route('data.user') !!}',
        columns: [
          {data: 'name', name: 'name'},
          {data: 'email', name: 'email'},
          {data: 'created_at', name: 'created_at'},
          {data: 'action', name: 'action', orderable: false, searchable: false}
      ]
    });
});
</script>
@endpush
