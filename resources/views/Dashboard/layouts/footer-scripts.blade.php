 <!-- Nepcha Analytics (nepcha.com) -->
        <!-- Nepcha is a easy-to-use web analytics. No cookies and fully compliant with GDPR, CCPA and PECR. -->
        <script defer data-site="YOUR_DOMAIN_HERE" src="https://api.nepcha.com/js/nepcha-analytics.js"></script>


        <!--   Core JS Files   -->
<script src="{{URL::asset('Dashboard/assets/js/core/popper.min.js')}}" ></script>
<script src="{{URL::asset('Dashboard/assets/js/core/bootstrap.min.js')}}" ></script>
<script src="{{URL::asset('Dashboard/assets/js/plugins/perfect-scrollbar.min.js')}}" ></script>
<script src="{{URL::asset('Dashboard/assets/js/plugins/smooth-scrollbar.min.js')}}" ></script>


<script>
  var win = navigator.platform.indexOf('Win') > -1;
  if (win && document.querySelector('#sidenav-scrollbar')) {
    var options = {
      damping: '0.5'
    }
    Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
  }
</script>

<!-- Github buttons -->
<script async defer src="https://buttons.github.io/buttons.js"></script>


<!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc --><script src="./assets/js/material-dashboard.min.js?v=3.1.0"></script>
@yield('dashJS')