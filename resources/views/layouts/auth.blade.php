<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <head>
        <meta charset="utf-8" />
        <title>@yield('title')</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="" name="description" />
        <meta content="" name="author" />
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
        <link href="{{ asset('pages/login/login.css') }}" rel="stylesheet" type="text/css"/>
        <link rel="shortcut icon" href="favicon.ico" />
    </head>

    <body class="page-md login">
        <div class="logo"></div>
        <div class="menu-toggler sidebar-toggler"></div>
        
        <div class="content blue-madison">
            @yield('content')
        </div>
        
        <!--[if lt IE 9]>
        <script src="../assets/global/plugins/respond.min.js"></script>
        <script src="../assets/global/plugins/excanvas.min.js"></script> 
        <![endif]-->
        <script src="{{ asset('pages/login/login.js') }}" type="text/javascript"></script>
    </body>

</html>