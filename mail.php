<?php

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$subject_plus = "Website Contact: ".$subject;

$mailheader = "From: ".$name."<".$email.">\r\n";

$recipient = "jabberjazz2018@gmail.com";

mail($recipient, $subject_plus, $message, $mailheader)
or die("Error!");

echo'

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">

    <link href="style.css" rel="stylesheet">

    <title>Jabber Jazz</title>
</head>
<script src="https://unpkg.com/feather-icons"></script>
<body>
    <div class="container">
        <img id="main-jj" src="images/jj-yellow-white-02.png" alt="Double J, Jabber Jazz Logo">
        <img id="main-lettering" src="images/lettering-yellow-05.png" alt="Lettering, Jabber Jazz Logo">
        <div class="core-text">
            <h1>No-ad, Fan-driven</h2>
            <h1><span class="highlight">Utah Jazz</span> Content</h1>
        </div>
        <div class="links">
            <a href="https://twitter.com/Jabber_Jazz" target="_blank"><i class="f-30" data-feather="twitter"></i></a>
            <a href="https://www.youtube.com/jabberjazz" target="_blank"><i class="f-30" data-feather="youtube"></i></a>
            <a href="https://linktr.ee/jabberjazz" target="_blank"><i class="f-30" data-feather="headphones"></i></a>
        </div>
    </div>
    <!-- Main Content -->
    <div class="main-content">
        <div id="latest" class="main">
            <div id="about-jj" class="main">
                <div class="heading">
                    <h1>Thank You!</h1>
                    <i class="f-30" data-feather="thumbs-up"></i>
                </div>
                <div class="txt">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam incidunt at quis in nulla ab tempore provident dolorem impedit unde, dicta veniam nobis quae iste repellat voluptatibus nam atque vitae?</p>
                    <a class="to-store" href="/index.html">
                        <div class="to-store-link">
                            <h2>Return Home</h2>
                            <i class="f-30" data-feather="corner-up-left"></i>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer -->
    <footer id="foot">
        <div class="container">
            <img src="images/lettering-yellow-05.png">
            <p>Copyright &copy; 2022, Jabber Jazz</p>
            <p>Designed and Powered by Adam Bushman</p>
        </div>
    </footer>
    <script>
        feather.replace()
    </script>
</body>
</html>

';

?>