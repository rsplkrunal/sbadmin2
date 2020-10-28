<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">

    <meta name="author" content="">


    <title>SB Admin 2 - Bootstrap Admin Theme</title>


    <!-- Bootstrap Core CSS -->

    <link href="{!! asset('theme/vendor/fontawesome-free/css/all.min.css') !!}" rel="stylesheet">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <!-- Custom CSS -->

    <link href="{!! asset('theme/dist/css/sb-admin-2.css') !!}" rel="stylesheet">



</head>

<body>


    <div id="wrapper">


        <!-- Navigation -->
            @include('theme.sidebar') 



        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">
                @include('theme.header')

                <div class="container-fluid">
                @yield('content')
                </div>

            </div>
            @include('theme.footer')


        </div>

        <!-- /#page-wrapper -->


    </div>

    <!-- /#wrapper -->


    <!-- jQuery -->

    <script src="{!! asset('theme/vendor/jquery/jquery.min.js') !!}"></script>


    <!-- Bootstrap Core JavaScript -->

    <script src="{!! asset('theme/vendor/bootstrap/js/bootstrap.min.js') !!}"></script>



    <script src="{!! asset('theme/vendor/bootstrap/js/bootstrap.bundle.min.js') !!}"></script>

    <script src="{!! asset('theme/dist/js/sb-admin-2.js') !!}"></script>

    <script src="{!! asset('theme/vendor/chart.js/Chart.min.js') !!}"></script>

    <script src="{!! asset('theme/js/demo/chart-area-demo.js') !!}"></script>

    <script src="{!! asset('theme/js/demo/chart-pie-demo.js') !!}"></script>

    <!-- Custom Theme JavaScript -->




</body>


</html>