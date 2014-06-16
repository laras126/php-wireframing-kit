<?php require('include/helpers.php'); ?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>The Sky's Website</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">
		
		<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />

        <link rel="stylesheet" href="assets/css/main.min.css">

        <script src="assets/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>

    </head>

    <body>
        <!--[if lt IE 9]>
            <p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
        <![endif]-->

        <header class="header" role="banner">
            <div class="contain">

                <div class="col-4">
                    <h1 class="title">The Sky</h1>    
                </div>
                <nav role="navigation" class="nav nav--main col-8">
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="about.php">About Us</li>
                        <li><a href="gallery.php">Gallery</a></li>
                        <li><a href="updates.php">Updates</a></li>
                    </ul>
                </nav>
            </div>
        </header> <!-- /.header -->

        <main class="main" role="main">
            <?php if( $contain ) { ?>
                <div class="contain">
            <?php } ?>
