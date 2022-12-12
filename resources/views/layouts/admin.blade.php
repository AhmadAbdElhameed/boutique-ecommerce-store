<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="description" content="Dashborad">
    <meta name="author" content="Titan Tech">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Custom fonts for this template-->
    <link href="{{asset('backend/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('backend/css/sb-admin-2.min.css')}}" rel="stylesheet">
    @yield("style")
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Favicon-->
    <link rel="shortcut icon" href="{{asset('favicon.png')}}">

    <title>{{ config('app.name', 'Laravel') }} Dashborad</title>

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])


</head>
<body id="page-top">

    <!-- Page Wrapper -->
<div id="app">

    <div id="wrapper">
        @include('partial.backend.sidebar')

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                @include("partial.backend.navbar")

                <!-- Begin Page Content -->
                <div class="container-fluid">


                    @yield('content')


                </div>
            </div>

            @include("partial.backend.footer")
        </div>
    </div>

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    @include('partial.backend.modal')

</div>

    <!-- JavaScript files-->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <!-- Bootstrap core JavaScript-->
    <script src="{{asset('backend/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('backend/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Scripts -->
    <script src="{{asset('backend/vendor/jquery-easing/jquery.easing.min.js')}}"></script>
    <script src="{{asset('backend/js/sb-admin-2.min.js')}}"></script>
    @yield("script")

</body>
</html>
