<?php include 'portal-config.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
<title><?=$title?></title>
<script src="https://use.fontawesome.com/ea1242b543.js"></script>
</head>

<h1><i class="logo fa <?=$logo?>"<?=$logo_color?>></i>Naran Torguud's SCC IT162 Portal</h1>

<nav>
        <ul class="topnav" id="myTopnav">
            <?= makeLinks($nav1) ?>
            <!-- START COMMENT OUT NAV
      <li><a href="index.php" class="selected">Welcome</a></li>
      <li><a href="big/index.php">Big</a></li>
      <li><a href="aia.php">AIA</a></li>
      <li><a href="flowchart.php">Flowchart</a></li>
      <li><a href="fp/index.php">Final Project</a></li>
      <li><a href="contactme.php">Contact Naran</a></li>
	END COMMENT OUT NAV -->
        </ul>
    </nav>
