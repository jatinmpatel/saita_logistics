<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Saita Logistics Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/favicon.png') }}">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fullcalendar.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/morris/morris.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/datetimepicker/css/tempusdominus-bootstrap-4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/datetimepicker/css/tempusdominus-bootstrap-4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  </head>
  
   <body>
      <div class="main-wrapper">
         <div class="account-page">
            @yield('content')
         </div>
      </div>
      <script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
      <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
      <script src="{{ asset('js/jquery.slimscroll.js') }}"></script>
      <script src="{{ asset('js/select2.min.js') }}"></script>
      <script src="{{ asset('js/moment.min.js') }}"></script>
      <script src="{{ asset('js/fullcalendar.min.js') }}"></script>
      <script src="{{ asset('js/jquery.fullcalendar.js') }}"></script>
      <script src="{{ asset('plugins/morris/morris.min.js') }}"></script>
      <script src="{{ asset('plugins/raphael/raphael-min.js') }}"></script>
      <script src="{{ asset('js/apexcharts.js') }}"></script>
      <script src="{{ asset('js/chart-data.js') }}"></script>
      <script src="{{ asset('plugins/datetimepicker/js/tempusdominus-bootstrap-4.min.js') }}"></script>
      <script src="{{ asset('js/app.js') }}"></script>

      <script>

        $('#otherCheckbox').on('click',function() {
            var cb = $('#otherCheckbox').is(':checked');
            $('#other').prop('disabled', !cb);  
        });
  
      </script>

        <script>
            function valueChanged() {
              if($('.coupon_question').is(":checked"))   
                $(".answer").show();
              else
                $(".answer").hide();
            };
        </script>
   </body>
</html>