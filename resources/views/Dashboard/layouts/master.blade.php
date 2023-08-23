

<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="icon" type="image/png" href="{{URL::asset('assets/img/speedometer.png')}}">
       
        @include('Dashboard.layouts.head')
    </head>


  <body class="g-sidenav-show  bg-gray-100">
  @include('Dashboard.layouts.main-siderbar')
  @yield('dashContent')
  </body>
  @include('Dashboard.layouts.footer-scripts')

</html>

