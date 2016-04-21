<!DOCTYPE html>
<html>
<head>
  <!-- Latest compiled and minified CSS for Bootstrap -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
  <!-- DataTables CSS -->
  <!--link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/t/bs-3.3.6/jq-2.2.0/datatables.min.css"/-->
  <link rel="stylesheet" href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css">
     {!! Html::style('css/style.css') !!}
</head>
<body>
  <!-- jQuery -->
  <script src="//code.jquery.com/jquery.js"></script>
  <!-- DataTables -->
  <!--script type="text/javascript" src="https://cdn.datatables.net/t/bs-3.3.6/jq-2.2.0/datatables.min.js"></script-->
  <script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
  <!-- Bootstrap JavaScript -->
  <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
  <!-- App scripts -->
   @stack('scripts')



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
</body>
</html>
