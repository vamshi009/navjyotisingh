<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8">
<title>[ Navjyoti | Talks ]</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Font Awesome Icons -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

<!-- Bootstrap -->
<link href="css3/bootstrap.min.css" rel="stylesheet">
<!--<link href="css/bootstrap.min.css" rel="stylesheet">-->

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="js3/html5shiv.js"></script>
<script src="js3/respond.min.js"></script>
<![endif]-->


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js3/bootstrap.min.js"></script>
<script type="text/javascript" src="js3/arrow78.js"></script><html>

<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.isotope.min.js"></script>
<script type="text/javascript" src="js/jquery.tipsy.js"></script>
<script type="text/javascript" src="js/jquery.fancybox-1.3.4.pack.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
<link rel="stylesheet" type="text/css" href="css/custom.css"/>
<link rel="stylesheet" type="text/css" href="css3/tipsy.css"/>
<link rel="stylesheet" type="text/css" href="css3/fancybox.css"/>


<script language="JavaScript">
<!--
    function spiderjam(mym, myd){
        document.write("<a href=mailto:"	+ mym + "&#64;" + myd + ">" + mym + "&#64;" + myd + "</a>");
    }
-->
</script>

<body id="page-top" class="index">

<!-- Navigation -->
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button onclick="javascript:firefox();" type="button" class="navbar-toggle collapsed" data-toggle="collapse" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <a href="onclick="javascript:$('#bs-example-navbar-collapse-2').toggle();"><span onclick="javascript:$('#bs-example-navbar-collapse-2').toggle();" class="glyphicon glyphicon-search"></span></a>
            </button>
            <button id="button2" type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                Home<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                    <li><a href="../index.html#intro">Introduction</a></li>
                        <li><a href="../bio.html">Short Bio</a></li>
                        <li><a target="_blank" href="../navjyotisingh.pdf">CV (PDF)</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                Publications<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                    <li><a href="../index.html#publications">Selected</a></li>
                        <li><a href="index.php">All</a></li>
                    </ul>
                </li>
                <li class="page-scroll">
                    <a href="../talks/">Talks</a>
                </li>
                <li class="page-scroll">
                    <a href="../index.html#courses">Courses</a>
                </li>
                <li class="page-scroll">
                    <a href="../index.html#awards">Awards</a>
                </li>
                <li class="page-scroll">
                    <a href="../index.html#service">Service</a>
                </li>
                <li class="page-scroll">
                <a href="../index.html#advising">Advising</a>
                </li>

                <li class="page-scroll">
                    <a href="../index.html#contact">Contact</a>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->

    </div><!-- /.container-fluid -->
</nav>

<section id="tree" style="margin-top:50px">
    <div class="container">
        <a href="../index.html">Navjyoti</a> > Talks
    </div>
</section>

<!-- Home Section -->
<section id="home">
    <div class="container" id="publications">
    <br>
    <h1 align="CENTER">Talks of Demetris Zeinalipour</h1>
    <br>

<?php

                //error_reporting(E_ALL);
                // ini_set('display_errors', '1');

                $sortby = array('invited','english', 'greek');
                $sortbyTitle = array('Invited Talks','Other Talks', 'Talks in Greek');

                include './presentations/BibTex.php';
                /*

                Enter the location of your BibTex file

                */
                $bibTexFile = './presentations/demo.bib';

                $bibTex = new ClassTeX_Parser();
                $bibTex->parser($file = $bibTexFile);
            ?>

        </div>
    </div>
</section>
</body>
</html>
