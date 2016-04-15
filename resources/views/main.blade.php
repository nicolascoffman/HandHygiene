<!DOCTYPE html>
<html>

{!! Html::style('css/style.css') !!}
<div class="outer">
  <div class="middle">

      <div class="container">
        <div class="sidebar">
          @include('sidebar')
        </div>
        <div class="content">
          @yield('content')
        </div>
      </div>
  </div>
</div>

</html>
