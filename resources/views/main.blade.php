<!DOCTYPE html>
<html>
<head>

{!! Html::style('css/app.css') !!}

{!! Html::script('js/app.js') !!}

<!-- DataTables -->
  <!--script type="text/javascript" src="https://cdn.datatables.net/t/bs-3.3.6/jq-2.2.0/datatables.min.js"></script-->
  <script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
  <!-- App scripts -->
   @stack('scripts')



</head>

<body>




  <div class="navbar">
    @include('navbar')
  </div>
  <div class="content">
    @yield('content')
  </div>

  

</body>
</html>
