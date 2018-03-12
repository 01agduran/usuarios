<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Usuarios</title>
    <!--    jQuery-->
    <script src="libs/jquery-3.3.1/jquery-3.3.1.js" type="text/javascript"></script>
    <!--    bootstrap-->
    <script src="libs/bootstrap-4.0.0-dist/js/bootstrap.js" type="text/javascript"></script>
    <script src="libs/bootstrap-4.0.0-dist/js/popper.min.js" type="text/javascript"></script>
    <link href="libs/bootstrap-4.0.0-dist/css/bootstrap.css" rel="stylesheet">
    <script src="libs/own/js/util.js" type="text/javascript"></script>
 <style type="text/css">

 </style>

</head>
<body>
<header>
    <div>
        s
    </div>
    <div>
     s
    </div>

    <div>
        s
    </div>
    <div>
        s
    </div>


    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <!--        <a class="navbar-brand" href="#">Negro</a>-->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">

            <ul id="" class="navbar-nav mr-auto mt-2 mt-lg-0">

                <?php $dropdown_menu = 'nav-link dropdown-toggle'; ?>
                <?php $only_menu = 'nav-link'; ?>
                <?php $sw = false; ?>
                <?php $var_a = 1; ?>
                <?php for ($i = 0; $i < count($menu); $i++) : ?>
                    <li class="nav-item dropdown">
                        <?php if ($menu[$i]['nro'] > 0): ?>
                            <a class="<?php echo $dropdown_menu ?>" href=""
                               data-toggle="dropdown"><?php echo $menu[$i]['descripcion'] ?></a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <?php for ($j = 0; $j < count($categoria); $j++) : ?>
                                    <?php if ($menu[$i]['idMenu'] == $categoria[$j]['idMenu']): ?>
                                        <a class="dropdown-item" href="#"><?php echo $categoria[$j]['descripcion'] ?></a>
                                    <?php endif; ?>
                                <?php endfor; ?>
                            </div>
                        <?php else : ?>
                            <a class="<?php echo $only_menu ?>" href="" data-toggle="dropdown"><?php echo $menu[$i]['descripcion'] ?></a>
                        <?php endif ?>
                    </li>
                <?php endfor; ?>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Dropdown
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
            </ul>


<!--            Holaaaaa alvaro-->
            <!--<form class="form-inline mt-2 mt-md-0">
                <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>-->

            <div id="profile-user" class="">

                <!---->< class="">
       <!--             <span>&nbsp; </span>-->
                    <img class="rounded-circle" src="<?php echo base_url('resources/images/profile_white.svg') ;?> " style="width: 30px; height: 30px;" />
                    <label style="color: white">asdasd</label><br/>
                    <label style="color: white">asdasd</label>
<!--            </div>-->
             </div>
    </nav>


    <img src="<?php echo base_url('resources/images/profile_white.svg') ;?> " style="width: 50px; height: 50px;" />
    <BR/>
    <img class="rounded-circle" src="resources/images/profile.svg" style="width: 50px; height: 50px;"/>
</header>
</body>
</html>