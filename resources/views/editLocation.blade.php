@extends('main')

@section('content')

@include('sidebar')

<div class="data-display">
  <table class="table table-bordered" id="locations-table">
      <thead>
          <tr>
              <th>Location Name</th>
              <th>Action</th>
          </tr>
      </thead>
  </table>
</div>

@stop


@push('scripts')
<script>
$(function() {
    $('#locations-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: '{!! route('data.location') !!}',
        columns: [
            { data: 'LocationName', name: 'LocationName' },
            { data: 'action', name: 'action', orderable: false, searchable: false}
        ]
    });
});
</script>
@endpush
