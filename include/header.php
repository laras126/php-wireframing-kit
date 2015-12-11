<?php require('include/helpers.php'); ?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Lara's PHP Wireframing Kit</title>
        <meta name="description" content="A nice prototyping kit. PHP can be nice.">
        <meta name="viewport" content="width=device-width">
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
        <link rel="stylesheet" href="assets/css/main.css">
    </head>

    <body class="body-<?php echo $content; ?>">

        <header class="header" role="banner">
            <div class="container">
                <h1 class="title">PHP Wireframing Kit</h1>
                <nav role="navigation" class="main-nav">
                    <ul>
                        <li><a href="index.php">Home (<code>index.php)</code></a></li>
                        <li><a href="page.php?content=about">About (<code>page.php</code>)</a></li>
                        <li><a href="blog.php">Blog (<code>blog.php</code>)</a></li>
                        <li><a href="page.php?content=gallery">A Gallery (<code>gallery.php)</code></a></li>
                    </ul>
                </nav>
            </div>
        </header> <!-- /.header -->

        <main class="main container" role="main">