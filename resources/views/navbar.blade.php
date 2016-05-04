<div class="navbar">
  <a href="/dashboard"  class="btn {{ (Request::is('dashboard') ? 'btn-default' :  'btn-primary') }}">Dashboard</a>
  <a href="/observe"  class="btn {{ (Request::is('observe') ? 'btn-default' :  'btn-primary') }}">Observe</a>
  <a href="/analyze"  class="btn {{ (Request::is('analyze') ? 'btn-default' :  'btn-primary') }}">Analyze</a>
  <a href="/edit"  class="btn {{ (Request::is('edit') ? 'btn-default' :  'btn-primary') }}">Edit</a>
</div>
