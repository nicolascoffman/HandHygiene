<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="contianer">
    <div class="sidebar">
      @include('sidebar')
    </div>
    <div class="content">
      @yield('content')
    </div>
  </div>
</body>
</html>
