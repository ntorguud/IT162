<?php include 'includes/portal-config.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title><?= $title ?></title>
    <script src="https://use.fontawesome.com/ea1242b543.js"></script>
</head>

<h1><i class="logo fa <?= $logo ?>" <?= $logo_color ?>></i><?=$PageID?></h1>

<div id="cssmenu">
  <ul>
     <li><a href="index.php"><span><i class="fa fa-fw fa-home"></i> Portal</span></a></li>
     <li><a href="big/index.php"><span><i class="fa fa-fw fa-bank"></i> BIG</span></a></li>
     <li><a href="aia.php"><span><i class="fa fa-fw fa-table"></i> AIA</span></a></li>
     <li><a href="flowchart.php"><span><i class="fa fa-fw fa-pencil-square-o"></i> Flowchart</span></a></li>
     <li><a href="fp/index.php"><span><i class="fa fa-fw fa-universal-access"></i> Final Project</span></a></li>
     <li><a href="contactme.php"><span><i class="fa fa-fw fa-phone"></i> Contact Naran</span></a></li>
  </ul>