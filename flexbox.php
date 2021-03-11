  <!DOCTYPE html>
  <html>

  <head>
      <meta charset="utf-8" />
      <title>Naran Torguud's SCC IT162 "Research3" Page</title>
      <meta name="viewport" content="initial-scale=1">
      <meta name="robots" content="noindex,nofollow" />
      <link rel="stylesheet" type="text/css" href="css/blueberry.css">
      <link href="css/styles.css" type="text/css" rel="stylesheet">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
      <script src="js/jquery.blueberry.js"></script>

      <script>
          $(window).load(function() {
              $('.blueberry').blueberry();
          });
      </script>

      <!--[if ltIE9]>
       <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
     <![endif]-->
  </head>

  <body>
      <h1><img class="left" src="images/home.png" alt="logo" width="35">Naran Torguud's SCC IT162 Research3 "Flexbox" Page</h1>
      <br>

      <nav id="primary">
          <ul>
              <li><a href="index.php">Welcome</a></li>
              <li><a href="big.php">Big</a>
                  <ul class="drop-down">
                      <li><a href="responsive_vs_mobile.php">Research 1</a></li>
                      <li><a href="galleries.php">Research 2</a></li>
                      <li><a href="flexbox.php">Research 3</a></li>
                  </ul>
              </li>
              <li><a href="aia.php">AIA</a></li>
              <li><a href="flowchart.php">Flowchart</a></li>
              <li><a href="finalproject.php">Final Project</a></li>
              <li><a href="contactme.php">Contact Naran</a></li>
          </ul>
      </nav>

      <div id="wrapper">
          <h1>Flexbox</h1>
          <p>According to the W3C, there are three types of Flexbox syntax in modern browsers. Those are:
              <ul>
                  <li>new syntax which is "display: flex;"</li>
                  <li>tweener syntax from 2012 which is "display: flexbox;"</li>
                  <li>legacy syntax which is "display: box," or "-webkit-display: box;"</li>
              </ul>
          </p>
          <!-- <p>The most recent browsers support the new syntax.</p> -->
          <h2>Works Cited:</h2>
          <p>“CSS Flexbox.” CSS Flexbox (Flexible Box), w3schools.com, www.w3schools.com/css/css3_flexbox.asp. Accessed 11 Feb, 2021.
          </p>
          <p>“Flexbox: Browser Support.” CSS Mine: Blog and e-Book on CSS3 and Web UI Development, www.cssmine.com/ebook/flexbox-browsers. Accessed 11 Feb, 2021.
          </p>
      </div>

      <header>
          <h3>Contact Us!</h3>
      </header>
      </main>
      <footer>
          <small>&copy; 2013-<?= date('Y') ?>, All Rights Reserved ~
              <a href="http://validator.w3.org/check/referer" target="_blank">Valid HTML</a> ~
              <a href="http://jigsaw.w3.org/css-validator/check?uri=referer" target="_blank">Valid CSS</a>
              <a href="big.php" target="_blank">by Naran Torguud</a>
          </small>
      </footer>
      <!-- END Footer -->
  </body>

  </html>