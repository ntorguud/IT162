  <!DOCTYPE html>
 <html>

 <head>
     <meta charset="utf-8" />
     <title>Naran Torguud's SCC IT162 Big Page</title>
     <meta name="viewport" content="initial-scale=1">
     <meta name="robots" content="noindex,nofollow" />
     <link rel="stylesheet" type="text/css" href="css/blueberry.css">
     <link href="css/styles.css" type="text/css" rel="stylesheet">

     <!--[if ltIE9]>
       <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
     <![endif]-->
</head>

 <body>
     <h1><img class="left" src="images/home.png" alt="logo" width="35">Naran Torguud's SCC IT162 Big Page</h1>
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
         <main>
             <iframe src="https://calendar.google.com/calendar/embed?height=600&amp;wkst=1&amp;bgcolor=%23ffffff&amp;ctz=America%2FLos_Angeles&amp;src=bnRvcmd1dWRAZ21haWwuY29t&amp;src=YWRkcmVzc2Jvb2sjY29udGFjdHNAZ3JvdXAudi5jYWxlbmRhci5nb29nbGUuY29t&amp;src=ZW4udXNhI2hvbGlkYXlAZ3JvdXAudi5jYWxlbmRhci5nb29nbGUuY29t&amp;color=%23039BE5&amp;color=%2333B679&amp;color=%230B8043" style="border:solid 1px #777" width="800" height="600" frameborder="0" scrolling="no">
             </iframe>
         </main>
         <aside>
             <iframe width="560" height="315" src="https://www.youtube.com/embed/-ao_Kc_8rpE" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
             </iframe>

             <div class="mapouter">
                 <div class="gmap_canvas">
                     <iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=1701%20broadway%20seattle&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
                     </iframe>
                     <a href="https://putlocker-is.org">putlocker</a>
                     <br>
                     <style>
                         .mapouter {
                             position: relative;
                             text-align: right;
                             height: 500px;
                             width: 600px;
                         }
                     </style>
                     <a href="https://www.embedgooglemap.net">google maps for my website</a>
                     <style>
                         .gmap_canvas {
                             overflow: hidden;
                             background: none !important;
                             height: 500px;
                             width: 600px;
                         }
                     </style>
                 </div>
             </div>
         </aside>
     </div>

     <header>
         <h3>Contact Us!</h3>
     </header>
     <!-- <p>Inside the source of this file, you can un-comment and test
        2 different types of forms:
        <div class="indent">
            <ul>
                <li><b>loadContact('simple.php');</b> - a simple contact form with reCAPTCHA</li>
                <li><b>loadContact('multiple.php');</b> - a complex form with reCAPTCHA</li>
            </ul>
        </div>
    </p> -->
     <?php
        /*
         * Below are 2 different forms to be re-used       
         * 
         * Only use one at a time, comment out the other!       
         *
         */

        include 'includes/contact_include.php'; #site keys & code here

        $toAddress = "jenny.oyuka@gmail.com";  //place your/your client's email address here
        $toName = "Enkhzul Jargalsaikhan"; //place your client's name here
        $website = "MichidDent.mn";  //place NAME of your client's website

        //echo loadContact('simple.php');#demonstrates a simple contact form
        echo loadContact('multiple.php');#demonstrates multiple form elements

        ?>
     </main>
     <footer>
         <small>&copy; 2013-<?= date('Y') ?>, All Rights Reserved ~
             <a href="http://validator.w3.org/check/referer" target="_blank">Valid HTML</a> ~
             <a href="http://jigsaw.w3.org/css-validator/check?uri=referer" target="_blank">Valid CSS</a>
         </small>
     </footer>
     <!-- END Footer -->
 </body>

 </html>