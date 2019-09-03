<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ URL::asset('assets/images/favicon.png') }}">
    <title>Admin|PHOTOSHOOT</title>
    <!-- Custom CSS -->
    <link href="{{ URL::asset('assets/libs/flot/css/float-chart.css') }}"rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ URL::asset('dist/css/style.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ URL::asset('assets/libs/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')}}">

     
   
</head>

<body>
  <div class='container'>
 
  </div>
   @yield('content')
   

   <script src="{{URL::asset('assets/libs/jquery/dist/jquery.min.js')}}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{URL::asset('assets/libs/popper.js/dist/umd/popper.min.js')}}"></script>
    <script src="{{URL::asset('assets/libs/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <script src="{{URL::asset('assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js')}}"></script>
    <script src="{{URL::asset('assets/extra-libs/sparkline/sparkline.js')}}"></script>
    <!--Wave Effects -->
    <script src="{{URL::asset('dist/js/waves.js')}}"></script>
    <!--Menu sidebar -->
    <script src="{{URL::asset('dist/js/sidebarmenu.js')}}"></script>
    <!--Custom JavaScript -->
    <script src="{{URL::asset('dist/js/custom.min.js')}}"></script>
    <!--This page JavaScript -->
{{--  date picker  --}}
    <script src="{{URL::asset('dist/dist/js/bootstrap-datepicker.min.js')}}"></script>
    {{--  <!-- <script src="{{URL::asset('dist/js/pages/dashboards/dashboard1.js')}}"></script> -->  --}}

    <!-- This Page JS -->
    <script src="{{URL::asset('assets/libs/inputmask/dist/min/jquery.inputmask.bundle.min.js')}}"></script>
    <script src="{{URL::asset('dist/js/pages/mask/mask.init.js')}}"></script>
    <script src="{{URL::asset('assets/libs/select2/dist/js/select2.full.min.js')}}"></script>
    <script src="{{URL::asset('assets/libs/select2/dist/js/select2.min.js')}}"></script>
    <script src="{{URL::asset('assets/libs/jquery-asColor/dist/jquery-asColor.min.js')}}"></script>
    <script src="{{URL::asset('assets/libs/jquery-asGradient/dist/jquery-asGradient.js')}}"></script>
    <script src="{{URL::asset('assets/libs/jquery-asColorPicker/dist/jquery-asColorPicker.min.js')}}"></script>
    <script src="{{URL::asset('assets/libs/jquery-minicolors/jquery.minicolors.min.js')}}"></script>
    <script src="{{URL::asset('assets/libs/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>
    <script src="{{URL::asset('assets/libs/quill/dist/quill.min.js')}}"></script>

  
</body>

</html>
{{URL::asset('')}}