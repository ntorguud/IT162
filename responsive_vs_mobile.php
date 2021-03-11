  <!DOCTYPE html>
  <html>

  <head>
      <meta charset="utf-8" />
      <title>Naran Torguud's SCC IT162 "Research1" Page</title>
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
      <h1><img class="left" src="images/home.png" alt="logo" width="35">Naran Torguud's SCC IT162 Research1 "Responsive vs Mobile" Page</h1>
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
          <h1>Responsive Webpage versus Mobile Application</h1>
          <p>In modern days, it's a customer's choice whether to use a responsive website or mobile application due to their advantages over other one.
              While mobile (native) apps are most likely targeted to the regular customers due to their safety, responsive webpages are targeted to new, and occasional customers because of their fast and easy accessibility.
          </p>
          <p>What are advantages of tesponsive websites? As I mentioned before, those are easy to access. Besides you are supposed to download and install mobile apps from AppStore or PlayStore, you don't have to download anything when you are using responsive websites.
              They work equally on any browsers as well. Responsive websites are cheaper to build than making mobile apps. These kinds of websites are more shareable; you can share only the URL.
              In addition, responsive websites can be found on search engines, such as Google etc. compared to native apps. However, all of these facts do not mean that responsive webpage is the best choice.
          </p>
          <p>Mobile applications, on the other hand, much safer than responsive websites, and can work offline. You always need the internet in order to access responsive webpages. Mobile apps have better performance, and it is consistent with its operating system.</p>
          <br>
          <h2>Works Cited:</h2>
          <p>Babich, Nick. “Deciding Between Responsive Web or Native Apps.” Xd Ideas, 7 Apr 2020, https://xd.Adobe.com/ideas/principles/web-design/responsive-web-or-native-app/, Accessed 6 Feb 2021.
          </p>
          <p>Karol, Viktor. “Responsive Website vs Mobile App: Comparison.” ThinkMobiles, Updated 18 Dec 2020, https://thinkmobiles.com/blog/responsive-website-vs-mobile-app/, Accessed 6 Feb 2021.
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