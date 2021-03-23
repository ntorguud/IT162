<?php include 'includes/config.php' ?>
<!doctype html>
<html lang='en'>
<head>
    <title><?=$title?></title>
    <meta name="viewport" content="width=device-width initial-scale=1"/>
    <meta name="robots" content="noindex,nofollow"/>
    <meta charset='utf-8'>
    <link rel="stylesheet" href="css/nav.css"/>
    <link rel="stylesheet" href="css/big.css"/>
    <link rel="stylesheet" href="css/forms.css"/>

    <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
    <script src="https://s3.amazonaws.com/menumaker/menumaker.min.js" type="text/javascript"></script>
    <script src="js/big.script.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"/>
</head>


<h1><i class="logo fa <?=$logo?>"<?=$logo_color?>></i>Naran Torguud's SCC IT162 Big Page</h1>

<body>

    <div id="cssmenu">
        <ul>
            <li><a href="../index.php"><span><i class="fa fa-fw fa-bank"></i> IT162</span></a></li>
            <li><a href="index.php"><span><i class="fa fa-fw fa-home"></i> BIG</span></a></li>
            <li><a href="flexbox.php"><span><i class="fa fa-fw fa-cube"></i> Flexbox</span></a></li>
            <li><a href="galleries.php"><span><i class="fa fa-fw fa-camera-retro"></i> Galleries</span></a></li>
            <li><a href="#"><span><i class="fa fa-fw fa-chevron-down"></i> Google</span></a>
                <ul>
                    <li><a href="calendar.php"><span><i class="fa fa-fw fa-calendar"></i> Calendar</span></a></li>
                    <li><a href="map.php"><span><i class="fa fa-fw fa-map-o"></i> Map</span></a></li>
                    <li><a href="youtube.php"><span><i class="fa fa-fw fa-youtube-square"></i> YouTube</span></a></li>
                </ul>
            </li>
            <li><a href="responsive_vs_mobile.php"><span><i class="fa fa-fw fa-html5"></i> Responsive vs Mobile App</span></a></li>
            <li><a href="webcam.php"><span><i class="fa fa-fw fa-eye"></i> Web Cam</span></a></li>
        </ul>
    </div>
