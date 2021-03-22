  <?php include 'it162/includes/header.php' ?>

  <!-- <!doctype html> -->
  <html lang='en'>

  <head>
      <meta charset='utf-8'>
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Naran Torguud's IT162 Big Page</title>

      <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
      <script src="https://s3.amazonaws.com/menumaker/menumaker.min.js" type="text/javascript"></script>
      <script src="big.script.js"></script>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="big.css">
  </head>

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
      
      <section>
          <h1>Flexbox</h1>
          <p>According to the W3C, there are three types of Flexbox syntax in modern browsers. Those are:
              <ul>
                  <li>new syntax which is "display: flex;"</li>
                  <li>tweener syntax from 2012 which is "display: flexbox;"</li>
                  <li>legacy syntax which is "display: box," or "-webkit-display: box;"</li>
              </ul>
          </p>
      </section>

      <aside>
          <h2>Works Cited:</h2>
          <p>“CSS Flexbox.” CSS Flexbox (Flexible Box), w3schools.com, www.w3schools.com/css/css3_flexbox.asp. Accessed 11 Feb, 2021.
          </p>
          <p>“Flexbox: Browser Support.” CSS Mine: Blog and e-Book on CSS3 and Web UI Development, www.cssmine.com/ebook/flexbox-browsers. Accessed 11 Feb, 2021.
          </p>
      </aside>
  </body>
  </html>

  <?php include 'it162/includes/footer.php' ?>