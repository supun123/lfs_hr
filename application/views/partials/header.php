
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">

    <link href="<?php echo base_url("public/css/bootstrap.css");?>" rel="stylesheet">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">


    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="<?php echo base_url("/public/login/images/icons/favicon.ico")?>"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("/public/login/vendor/bootstrap/css/bootstrap.min.css")?>">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("/public/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css")?>">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("/public/login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css")?>">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("/public/login/vendor/animate/animate.css")?>">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("/public/login/vendor/css-hamburgers/hamburgers.min.css")?>">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("/public/login/vendor/animsition/css/animsition.min.css")?>">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("/public/login/vendor/select2/select2.min.css")?>">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("/public/login/vendor/daterangepicker/daterangepicker.css")?>">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("/public/login/css/util.css")?> ">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("/public/login/css/main.css")?>">
    <!--===============================================================================================-->

    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
</head>
<body >

<nav class="navbar navbar-expand-lg navbar-light bg-light" style="width:100%">
    <a class="navbar-brand " href="#">lanka Software Foundation HR</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link" href=<?php echo base_url('/')?>>Home <span class="sr-only">(current)</span></a>
            </li>

            <?php
            if(!$this->session->userdata('loggedin')){?>
                <li class="nav-item " >
                    <a class="nav-link" href="<?php echo base_url('/admin/get_register_form')?>">Register</a>
                </li>
                <li class="nav-item " >
                    <a class="nav-link" href="<?php echo base_url('/admin/get_signIn_page')?>">Sign In</a>
                </li>
            <?php } else{ ?>
                <li class="nav-item " >
                    <a class="nav-link" href="<?php echo base_url('/admin/')?>">Filter Data</a>
                </li>
                <li class="nav-item " >
                    <a class="nav-link" href="<?php echo base_url('/admin/sign_out')?>">Sign Out </a>
                </li>
                <li class="nav-item " >
                    <a class="nav-link" href="<?php echo base_url('/')?>"><?php echo$this->session->userdata('name') ;?></a>
                </li>
            <?php }?>

        </ul>

    </div>
</nav>

