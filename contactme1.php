<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>My ContactForm HTML page</title>
    <link rel="stylesheet" type="text/css" href="css/blueberry.css">
    <link href="css/forms.css" type="text/css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
    <script src="js/jquery.blueberry.js"></script>

    <script>
        $(window).load(function() {
            $('.blueberry').blueberry();
        });
    </script>
</head>

<body>
    <h1><img class="left" src="images/home.png" alt="logo" width="35">Naran Torguud's SCC IT162 Contact Form Page</h1>
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
            <form action="formhandler.php" method="post">
                <!-- method="post" is secure-->
                <fieldset>
                    <legend>Join "Michid Dent" Dental Clinic</legend>
                    <label>First Name</label>
                    <input type="text" name="name">

                    <label>Last Name</label>
                    <input type="text" name="name">

                    <label>Enter your birthday:
                        <input type="date" name="bday"></label>

                    <label>Gender /optional/</label>
                    <select name="gender">
                        <option value="gender">Gender</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select>

                    <label>Age</label>
                    <input type="number" name="age">

                    <label>Email</label>
                    <input type="email" name="email">

                    <label>Phone Number</label>
                    <input type="number" name="number">

                    <label>Home Address/optional/</label>
                    <input type="text" name="text">

                    <label>District</label>
                    <select name="district">
                        <option value="district">Choose your district</option>
                        <option value="baganuur">Baganuur</option>
                        <option value="bagakhangai">Bagakhangai</option>
                        <option value="bayangol">Bayangol</option>
                        <option value="bayanzurkh">Bayanzurkh</option>
                        <option value="chingeltei">Chingeltei</option>
                        <option value="khanuul">Khan-Uul</option>
                        <option value="nalaikh">Nalaikh</option>
                        <option value="songinokhairkhan">Songinokhairkhan</option>
                        <option value="sukhbaatar">Sukhbaatar</option>
                        <option value="none">None of above</option>
                    </select>

                    <label>City</label>
                    <input type="text" name="text">

                    <label>Where did you hear about us?</label>
                    <ul>
                        <li><input type="checkbox" name="where[]" value="friend">A friend or colleague</li>
                        <li><input type="checkbox" name="where[]" value="google">A Recommendation of Family Doctor</li>
                        <li><input type="checkbox" name="where[]" value="blogspot">An Advertisement</li>
                        <li><input type="checkbox" name="where[]" value="article">Internet or Medical Journals</li>
                    </ul> <!-- [] is for checking several things -->

                    <input type="submit" value="Join now !">
                </fieldset>
                <br>

                <fieldset>
                    <legend>Make an Appointment</legend>
                    <label>What service are you looking for?</label>
                    <ul>
                        <li><input type="checkbox" name="what[]" value="exams">Complete Exams</li>
                        <li><input type="checkbox" name="what[]" value="xray">X-Ray</li>
                        <li><input type="checkbox" name="what[]" value="cleanings">Dental Cleanings</li>
                        <li><input type="checkbox" name="what[]" value="fillings">Fillings</li>
                        <li><input type="checkbox" name="what[]" value="rootcanals">Root Canals</li>
                        <li><input type="checkbox" name="what[]" value="extractions">Extractions</li>
                        <li><input type="checkbox" name="what[]" value="implants">Implants</li>
                        <li><input type="checkbox" name="what[]" value="crowns">Crowns</li>
                        <li><input type="checkbox" name="what[]" value="bridge">Bridge</li>
                        <li><input type="checkbox" name="what[]" value="dentures">Full/Partial Dentures</li>
                        <li><input type="checkbox" name="what[]" value="orthodontics">Orthodontics</li>
                        <li><input type="checkbox" name="what[]" value="oralappliances">Oral Appliances for control of sleep apnea</li>
                        <li><input type="checkbox" name="what[]" value="whitening">Whitening</li>
                        <li><input type="checkbox" name="what[]" value="porcelain">Porcelain</li>
                        <li><input type="checkbox" name="what[]" value="compositeveneers">Composite Veneers</li>
                        <li><input type="checkbox" name="what[]" value="advice">Preventive Advice</li>
                    </ul>
                    <br>

                    <label>What are your Dental Issues?</label>
                    <textarea name="comments"></textarea>
                    <br>

                    <label>Do you have a Health Insurance?</label>
                    <select name="insurance">
                        <option value="insurance"></option>
                        <option value="yes">Yes</option>
                        <option value="no">No</option>
                    </select>

                    <label>Doctor's Name</label>
                    <input type="text" name="drname">

                    <label>Date:
                        <input type="date" name="appday"></label>

                    <label>Time:
                        <input type="time" name="apptime"></label>

                    <label>How would you like to receive an important information and notifications?</label>
                    <ul>
                        <li><input type="radio" name="info" value="email">Email</li>
                        <li><input type="radio" name="info" value="text">Text Message</li>
                        <li><input type="radio" name="info" value="mailbox">Mailbox</li>
                        <li><input type="radio" name="info" value="no info">No Notification</li>
                    </ul>
                    <br>

                    <p>* Please have your valid Passport or photo ID, and Medical Story.</p>
                    <p>* Be prepared to fill out your health related information thoroughly.</p>
                    <p>* Be ready 15 minutes before your appointment time.</p>
                    <br>

                    <input type="submit" value="Submit">

                    <label>Comments</label>
                    <textarea name="comments"></textarea>
                </fieldset>
            </form>
        </main>

    </div>

    <footer>
        <ul>
            <li>&copy; 2021-<?= date('Y') ?>
            <li>by <a href="http://central.mystudentswa.com/naranto/web110/">Naran Torguud</a></li>
            <li>All Rights Reserved</li>
            <li><a href="https://validator.w3.org/check?uri=referer"><img src="images/html5.png" alt="html5"></a></li>
            <li><a href="http://jigsaw.w3.org/css-validator/#validate_by_input">Valid CSS</a></li>
        </ul>
    </footer>
</body>

</html>