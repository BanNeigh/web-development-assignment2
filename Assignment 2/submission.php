<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="validation.js">
    </script>
</head>
    <body>

        <div class="navbar">
            <a href="index.html">Home</a>
            <a href="about.html">About us</a>
            <a href="special.html">Specials</a>
            <a class="active" href="signup.html">Sign Up</a>
        </div>

        <div class="bg-signup"></div>
        <div class="centered">
        <p class="submission">
            <h1 style="font-size:50px">Thank you for signing up to our news letter.</h1><br>
            <hr width="50%">
            <h4>
            <i>Here are your details: </i><br>
            Your Name: <?php echo $_POST["name"];?>
            <br>
            Your Email: <?php echo $_POST["email"];?>
            <br>
            Products you prefer to be notified on: <?php

                if (isset($_POST["section1"])){
                    print "Donuts ";}

                if (isset($_POST["section2"])){
                    print "Vanilla Slice ";}

                if (isset($_POST["section3"])){
                    print "Randy Tart";}

                if (isset($_POST["section4"])){
                    print "Custard Tart";}

                if (isset($_POST["section5"])){
                    print "Raspberry Cheesecake";}

                if (isset($_POST["section6"])){
                    print "Apple Cake";} ?>

            <br>
            Your Birthdate: <?php echo $_POST["date"];?>
            </h4>
        </p>
        </div>

        <div id="footer">
            <p><a href="index.html">Home</a> | <a href="about.html">About us</a> | <a href="special.html">Specials</a> | <a href="signup.html">Sign Up</a> | Contact: 0455 5555 555 | Cathering: 0433 3333 333 | Address: 123 Prize Lane, Kirwan, QLD</p>
        </div>
    </body>
</html>