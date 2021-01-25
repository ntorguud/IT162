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

    <div id="wrapper"></div>

    <h1><img class="left" src="images/home.png" alt="logo" width="35">Naran Torguud's SCC IT162 Contact Form Page</h1>



    <nav>
        <ul>
            <li><a href="index.html">Welcome</a></li>
            <li><a href="big.html">Big</a></li>
            <li><a href="aia.html">AIA</a></li>
            <li><a href="flowchart.html">Flowchart</a></li>
            <li><a href="finalproject.html">Final Project</a></li>
            <li><a href="contactme.html">Contact Naran</a></li>
        </ul>
    </nav>

    <main>
        <form action="formhandler.php" method="post">
            <!-- method="post" is secure-->
            <fieldset>
                <legend>Join "The HU" Band Fan Page</legend>
                <label>Name</label>
                <input type="text" name="name">

                <label>Email</label>
                <input type="email" name="email">

                <label>Phone Number</label>
                <input type="number" name="number">

                <label>Home Address/optional/</label>
                <input type="text" name="text">

                <label>City</label>
                <input type="text" name="text">

                <label>State</label>
                <select name="state">
                    <option value="state">Choose your state</option>
                    <option value="alabama">Alabama</option>
                    <option value="alaska">Alaska</option>
                    <option value="arizona">Arizona</option>
                    <option value="arkansas">Arkansas</option>
                    <option value="california">California</option>
                    <option value="colorado">Colorado</option>
                    <option value="connecticut">Connecticut</option>
                    <option value="delaware">Delaware</option>
                    <option value="district of columbia">District of Columbia</option>
                    <option value="florida">Florida</option>
                    <option value="georgia">Georgia</option>
                    <option value="hawaii">Hawaii</option>
                    <option value="idaho">Idaho</option>
                    <option value="illinois">Illinois</option>
                    <option value="indiana">Indiana</option>
                    <option value="iowa">Iowa</option>
                    <option value="kansas">Kansas</option>
                    <option value="kentucky">Kentucky</option>
                    <option value="louisana">Louisana</option>
                    <option value="maine">Maine</option>
                    <option value="maryland">Maryland</option>
                    <option value="massachusetts">Massachusetts</option>
                    <option value="michigan">Michigan</option>
                    <option value="minnesota">Minnesota</option>
                    <option value="mississipi">Mississipi</option>
                    <option value="missouri">Missouri</option>
                    <option value="montana">Montana</option>
                    <option value="nebraska">Nebraska</option>
                    <option value="nevada">Nevada</option>
                    <option value="new hampshire">New Hampshire</option>
                    <option value="new jersey">New Jersey</option>
                    <option value="new mexico">New Mexico</option>
                    <option value="new york">New York</option>
                    <option value="north carolina">North Carolina</option>
                    <option value="north dakota">North Dakota</option>
                    <option value="ohio">Ohio</option>
                    <option value="oklahama">Oklahama</option>
                    <option value="oregon">Oregon</option>
                    <option value="pennsylvania">Pennsylvania</option>
                    <option value="rhode island">Rhode Island</option>
                    <option value="south carolina">South Carolina</option>
                    <option value="south dakota">South Dakota</option>
                    <option value="tennessee">Tennessee</option>
                    <option value="texas">Texas</option>
                    <option value="utah">Utah</option>
                    <option value="velmont">Velmont</option>
                    <option value="virginia">Virginia</option>
                    <option value="washington">Washington</option>
                    <option value="west virginia">West Virginia</option>
                    <option value="wisconsin">Wisconsin</option>
                    <option value="wyoming">Wyoming</option>
                </select>

                <label>Gender</label>
                <select name="gender">
                    <option value="gender">Gender</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>

                <label>Where did you hear about us?</label>
                <ul>
                    <li><input type="checkbox" name="where[]" value="friend">A friend or colleague</li>
                    <li><input type="checkbox" name="where[]" value="google">Google</li>
                    <li><input type="checkbox" name="where[]" value="blogspot">Blogspot</li>
                    <li><input type="checkbox" name="where[]" value="article">News article</li>
                </ul> <!-- [] is for checking several things -->

                <label>Which application do you prefer?</label>
                <ul>
                    <li><input type="checkbox" name="app[]" value="spotify">Spotify</li>
                    <li><input type="checkbox" name="app[]" value="amazon">Amazon</li>
                    <li><input type="checkbox" name="app[]" value="apple">Apple Music</li>
                    <li><input type="checkbox" name="app[]" value="deezer">Deezer</li>
                </ul>

                <label>How would you like to receive the latest information?</label>
                <ul>
                    <li><input type="radio" name="info" value="email">Email</li>
                    <li><input type="radio" name="info" value="text">Text Message</li>
                    <li><input type="radio" name="info" value="mailbox">Mailbox</li>
                    <li><input type="radio" name="info" value="no info">No Info</li>
                </ul>

                <label>Comments</label>
                <textarea name="comments"></textarea>

                <input type="submit" value="Join now !">
            </fieldset>
        </form>
    </main>

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