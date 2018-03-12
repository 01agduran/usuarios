<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>

<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Login</title>
    <!--    jQuery-->
    <script src="libs/jquery-3.3.1/jquery-3.3.1.js" type="text/javascript"></script>
    <!--    bootstrap-->
    <script src="libs/bootstrap-4.0.0-dist/js/bootstrap.js" type="text/javascript"></script>
    <script src="libs/bootstrap-4.0.0-dist/js/popper.min.js" type="text/javascript"></script>
    <link href="libs/bootstrap-4.0.0-dist/css/bootstrap.css" rel="stylesheet">
    <script src="libs/own/js/util.js" type="text/javascript"></script>
    <style type="text/css">
        html,body{
            height: 100%;
            background-color: #343a40 !important;
        }
        body {
            display: -ms-flexbox;
            display: -webkit-box;
            display: flex;
            -ms-flex-align: center;
            -ms-flex-pack: center;
            -webkit-box-align: center;
            align-items: center;
            -webkit-box-pack: center;
            justify-content: center;
            padding-top: 40px;
            padding-bottom: 40px;
            /*Agregados recientemente*/
            background-color: #f5f5f5;
            color: #6c757d !important;
        }

    </style>
    <script>

    </script>

</head>
<body class="text-center">

<!--<header>
    Holaaaaa
</header>-->
<form class="form-signin" style="border-style: inset; border-color:#010101; margin-top:10px; padding: 20px;"role="form" method="post" action="">
<!--    <div class="container">-->
<!--        Bienvenido al Login-->
<!--    </div>-->
    <img src="<?php echo base_url('resources/images/profile_white.svg'); ?> " style="width: 72px; height: 72px;"/>
    <h1 class="h3 mb-3 font-weight-normal ">Iniciar Sesion</h1>
    <div class="input-group md-3">
        <div class="input-group-prepend">
            <span class="input-group-text" id="addon">USR</span>
        </div>
        <input id="user_name" name="user_name" type="text" class="form-control" placeholder="Username" aria-label="Username"
               aria-describedby="basic-addon1" required autofocus>
    </div>
    <br/>
    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text" id="addon1">PWD</span>
        </div>
        <input id="password" name="password" type="password" class="form-control" placeholder="Password" aria-label="Username"
               aria-describedby="basic-addon1" required>
    </div>
    <!--<div class="checkbox mb-3">
        <label>
            <input type="checkbox" value="remember-me"> Recordar
        </label>
    </div>-->
    <button class="btn btn-lg btn-primary btn-block " type="submit">Iniciar Sesion</button>
    <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>
</form>

<!--<footer>
    asdhasj
</footer>-->
</body>
</html>