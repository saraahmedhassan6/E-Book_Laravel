<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <meta content="" name="description">
    <meta content="" name="keywords">

    @include('layouts.head')

</head>

<body>

<!-- ======= Header ======= -->
@include('layouts.main-header')
<!-- End Header -->
@yield('content')
<!-- ======= Footer ======= -->
@include('layouts.footer')
<a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

@include('layouts.footer-scripts')
</body>

</html>
