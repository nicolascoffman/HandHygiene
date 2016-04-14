<!DOCTYPE html>
<html>

{{!! HTML::style('css/style.css') !!}}

  <div class="contianer">
    <div class="sidebar">
      @include('sidebar')
    </div>
    <div class="content">
      @yield('content')
    </div>
  </div>

</html>
