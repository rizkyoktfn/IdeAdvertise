<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>IDEADVERTISE</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <?php /* <link href="<?php echo e(elixir('css/app.css')); ?>" rel="stylesheet"> */ ?>

    <style>
        .stylebody {
            font: 50px Montserrat, sans-serif;
            line-height: 1.8;
            color: white;
            text-align: center;
        }
        .margin
        {
            font-size: 70px;
            font-family: "Comic Sans MS";
        }
        span {

            width: 100px;
            height: 100px;
            background-color: darkgrey;
            font-size: 25px;
            margin: 25px;
        }

        p {font-size: 16px;}

        .bg-1 {
            background-image: url("img1.jpg");
            color: white;
            font-size: 50px;
        }

        .bg-8
        {
            color: white;
            font-size: 50px;
        }
        .bg-2
        {
            background-color: whitesmoke; /* Dark Blue */
            color: black;
            font-size: 50px;


        }
        .bg-5
        {
            background-color: white;
            color: black;
            font-size: 75px;
            font-family: "Comic Sans MS";


        }

        .fontTittle
        {
            color: black;
            font-size: 40px;
            font-family: "Comic Sans MS";
            text-align: center;
        }
        .bg-5-font
        {

            color: black;
            font-size: 75px;
            font-family: "Comic Sans MS";
            margin-right: 250px;
            margin-left: 250px;

        }

        .big
        {
            font-size: 50px;
            color: black;
            font-family: "Comic Sans MS";
        }
        .col-sm-2 {
            display: inline-block;
            width: 400px;
            height: 400px;
            margin-left: 100px;
            margin-right: 100px;
            background-color: lightgrey;
            text-align: center;

        }
        .col-sm-3 {
            display: inline-block;
            width: 315px;
            height: 370px;
            margin: 75px;
            background-color: ghostwhite;
            text-align: center;
        }
        .bg-2-font
        {
            padding-left: 25%;
            padding-right: 25%;
            font-size: 65px;
            font-family: "Kristen ITC";
        }
        .fontt
        {
            padding-left: 25%;
            padding-right: 25%;
            font-size: 155px;
            font-family: "Kristen ITC";
            color: black;

        }
        .bg-3 {
            background-color: lightgrey; /* White */
            color: #555555;
            text-align: center;
        }
        .bg-6
        {
            background-color: darkgrey;
        }
        .bg-4 {
            background-color: #2f2f2f; /* Black Gray */
            color: #fff;
        }
        .container-fluid {
            padding-top: 70px;
            padding-bottom: 70px;
            text-align: center;
        }
        body {
            font-family: 'Lato';
        }
        .fa-btn {
            margin-right: 6px;
        }

        .navbar-brand{
            font-size: 20px;
            font-family: "Comic Sans MS";
        }
        .nav
        {
            font-size: 25px;
        }
        .images
        {
            text-align: center;



        }
        .imgBlur {
            opacity: 0.5;
            filter: alpha(opacity=50);
        }

        .bg-7
        {
            margin-left: 200px;
            margin-right: 200px;
            background-color: #dfdfdf;
            text-align: center;
            padding: 50px;
            color: black;
        }
        .buton
        {
            text-align: center;
            color: black;
            font-size: 35px;
            margin: 25px;

        }

    </style>
</head>
<body id="app-layout">
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="<?php echo e(url('/')); ?>">
                    IDEADVERTISE
                </a>
            </div>

            <ul class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    <li><a href="<?php echo e(url('/')); ?>">Home</a></li>
                </ul>
                <ul class="nav navbar-nav">
                    <li><a href="<?php echo e(url('/clients')); ?>">Our Talent</a></li>
                </ul>





                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    <?php if(Auth::guest()): ?>
                        <li><a href="<?php echo e(url('/login')); ?>">Login</a></li>
                        <li><a href="<?php echo e(url('/register')); ?>">Register</a></li>
                    <?php else: ?>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="<?php echo e(url('/logout')); ?>"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                                <li><a href="<?php echo e(url('/bookedTalent')); ?>"><i class="fa fa-btn fa-sign-out"></i>Booked</a></li>
                            </ul>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>

    <?php echo $__env->yieldContent('content'); ?>

    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <?php /* <script src="<?php echo e(elixir('js/app.js')); ?>"></script> */ ?>
    <footer class="container-fluid bg-4 text-center">
        <p>Contact Us</p>
        <p>TELP : 081929000075</p>
        <p>E-mail : tesyafebbyl@gmail.com</p>
        <p>@copyright  IdeaCreative 2018</p>
    </footer>
</body>
</html>
