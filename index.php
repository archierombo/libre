<?php
/**
 * Created by PhpStorm.
 * User: archie
 * Date: 3/30/16
 * Time: 2:29 PM
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Libre Engineering | Home</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!--custom css-->
    <link href="css/custom.css" rel="stylesheet">
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" type="text/css" href="slick-1.5.9/slick/slick.css"/>
    // Add the new slick-theme.css if you want the default styling
    <link rel="stylesheet" type="text/css" href="slick-1.5.9/slick/slick-theme.css"/>
    <link href="vegas/vegas.min.css" rel="stylesheet">
</head>
<body>
<div class="container-fluid"><!--main body container-->
    <div class="row"><!--menu-->
        <div class="col-sm-12 col-md-12">
            <nav class="navbar navbar-default navbar-fixed-top"><!--menu-->
                <div class="container-fluid" style="box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="index.php">Libre Engineering</a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-right">
                            <li class="active"><a href="index.php">Home <span class="sr-only">(current)</span></a></li>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Services</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav><!--menu-->

        </div>
    </div><!--menu-->
    <div class="row" id="slider"><!--slideshow-->
        <div class="col-sm-12 col-md-12">

        </div>
    </div><!--slideshow-->
    <div class="clearfix">&nbsp;</div>
    <div class="row"><!--about us home-->
        <div class="col-sm-12 col-md-12">
            <p style="font-size: 12px;
color: #777777;
font-family: 'Montserrat', sans-serif;
font-weight: 400;
line-height: 22px;
margin: 0 0 10px;">es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la creación de las hojas "Letraset", las cuales contenian pasajes de Lorem Ipsum, y más recientemente con software de autoedición, como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum</p>
        </div>
    </div><!--about us home-->
</div><!--main body container-->

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/ie10-viewport-bug-workaround.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="vegas/vegas.min.js"></script>
<script>
    $('#slider').vegas({
        timer: true,
        shuffle: true,
        transition: [ 'fade', 'slideLeft', 'slideLeft2' ],
        transitionDuration: 5000,
        delay:7000,
        cover:true,
        slides: [
            { src: './img/1.jpg' },
            { src: './img/2.jpg' },
            { src: '/img/3.jpg' },
            { src: './img/4.jpg' }
        ]

    });
</script>
</body>
</html>
