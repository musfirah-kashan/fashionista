<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from loopinfosol.in/themeforest/ekka-html-v32/ekka-admin/sign-up.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 16 Sep 2022 08:16:48 GMT -->
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="description" content="Ekka - Admin Dashboard HTML Template.">

  <title>Ekka - Admin Dashboard HTML Template.</title>

  <!-- GOOGLE FONTS -->
  <link rel="preconnect" href="https://fonts.googleapis.com/">
	<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500;600;700;800&amp;family=Poppins:wght@300;400;500;600;700;800;900&amp;family=Roboto:wght@400;500;700;900&amp;display=swap" rel="stylesheet">
  
    <link href="{{asset ('admin/assets/@mdi/font/css/materialdesignicons.min.css')}}" rel="stylesheet" />

  <!-- Ekka CSS -->
  <link id="ekka-css" href="{{asset ('admin/assets/css/ekka.css')}}" rel="stylesheet" />

  <!-- FAVICON -->
  <link href="{{asset ('admin/assets/img/favicon.png')}}" rel="shortcut icon" />
</head>

<body class="sign-inup" id="body">
  <div class="container d-flex align-items-center justify-content-center form-height pt-24px pb-24px">
    <div class="row justify-content-center">
      <div class="col-lg-6 col-md-10">
        <div class="card">
          <div style="background-color: black; height: 90px;" class="card-header">
            <div class="ec-brand">
              
            </div>
          </div>
          @yield('content')
          </div>
      </div>
    </div>
  </div>

  <!-- Javascript -->
  <script src="{{asset ('admin/assets/plugins/jquery/jquery-3.5.1.min.js')}}"></script>
	<script src="{{asset ('admin/assets/plugins/jquery/jquery.notify.min.js')}}"></script>
	<script src="{{asset ('admin/assets/plugins/jquery/jquery.bundle.notify.min.js')}}"></script>
	<script src="{{asset ('admin/assets/js/bootstrap.bundle.min.js')}}"></script>
	<script src="{{asset ('admin/assets/plugins/simplebar/simplebar.min.js')}}"></script>
	<script src="{{asset ('admin/assets/plugins/jquery-zoom/jquery.zoom.min.js')}}"></script>
	<script src="{{asset ('admin/assets/plugins/slick/slick.min.js')}}"></script>


  <!-- Ekka Custom -->
  <script src="{{asset ('admin/assets/js/ekka.js')}}"></script>
</body>