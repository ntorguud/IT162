<?php include 'includes/header.php' ?>

<!--start slideshow-->
<div class="slideshow">
    <div class="mySlides fade">
        <img src="images/banner1.jpg" alt="banner1">
    </div>

    <div class="mySlides fade">
        <img src="images/banner2.jpg" alt="banner2">
    </div>

    <div class="mySlides fade">
        <img src="images/banner3.jpg" alt="banner3">
    </div>

</div>
<br>

<div style="text-align:center">
    <span class="dot" onclick="currentSlide(1)"></span>
    <span class="dot" onclick="currentSlide(2)"></span>
    <span class="dot" onclick="currentSlide(3)"></span>
</div>

<script>
    var slideIndex = 0;
    carousel();

    function carousel() {
        var i;
        var x = document.getElementsByClassName("mySlides");
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        slideIndex++;
        if (slideIndex > x.length) {
            slideIndex = 1
        }
        x[slideIndex - 1].style.display = "block";
        setTimeout(carousel, 3000); // Change image every 3 seconds
    }
</script>

<!-- end slideshow -->
<br>

<div style="text-align:center">
    <span class="dot" onclick="currentSlide(1)"></span>
    <span class="dot" onclick="currentSlide(2)"></span>
    <span class="dot" onclick="currentSlide(3)"></span>
</div>

<!-- <script>
    
var slideIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > x.length) {slideIndex = 1}
  x[slideIndex-1].style.display = "block";
  setTimeout(carousel, 3000); // Change image every 3 seconds
}
</script> -->

<!-- end slideshow -->

<main>
    <h1>Smile With Confidence</h1>
    <div class="row">

        <div class="text">
            <h2> Welcome </h2>
            <img class="left" src="images/adult1.jpg" alt="adult">
            <p>Welcome to Dental Care Seattle!
                Our team strives to provide the best service to each and every client.<br>
                We always make sure that our clients are satisfied and happy every time they walk through our doors. Whether it’s a checkup or in need of corrective care, you can trust in us.<br>
                Our goal is to make you shine your biggest and brightest smile!</p>

        </div>
        <!--end text-->


    </div>
    <!--end row-->


    <div class="row">

        <div class="text">
            <h2> Pediatric Dental At Dental Care Seattle</h2>
            <img class="left" src="images/kid1.jpg" alt="kid">
            <p>There’s nothing more important than your child’s health and wellbeing. At Dental Care Seattle, we care for your kids as if they were our own in our dedicated and separate kid-friendly zone. Our team always goes above and beyond to make sure every young patient’s visit is a positive experience that will set them up for a lifetime of optimal dental health.</p>

        </div>
        <!--end text-->
    </div>
    <!--end row-->

    <div class="text-2">
        <h2>Learn more about Dental Care Seattle</h2>
        <p>No matter where you are in your dental health journey, Dental Care Seattle wants to help with guidance and support. By offering an affordable new patient appointment, we hope you'll call us today and become a patient for life!</p>
    </div>

</main>




<aside>
    <img src="images/teeth.png" alt="teeth">
    <form action="formhandler1.php" method="post">
        <div class="signup">
            <h3>E-NEWSLETTER SIGNUP</h3>
            <p>SUBSCRIBE</p>
            <p>Subscribe to our newsletter for the latest news and services updates straight to your inbox.</p>
        </div>
        <div class="signup">
            <input type="text" placeholder="Email" name="mail">
            <input type="submit" value="Subscribe">

        </div>
    </form>
</aside>

<?php include 'includes/footer.php' ?>

</div> <!-- end wrapper -->
</body>

</html>