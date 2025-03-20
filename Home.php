<?php
session_start(); 

$userName = isset($_SESSION["name"]) ? htmlspecialchars($_SESSION["name"]) : null;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fitness Tracking Website</title>
    <link rel="stylesheet" href="nev_bar.css">
    <link rel="stylesheet" href="footerNew.css">
    <style>
        body {
            background-image: linear-gradient(rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.8)), url("images/BackgroundImage.jpg");
            background-position: center;
            background-size: cover;
            margin: 0;
        }
        .main {
            color: rgb(237, 83, 83);
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
        }
        .headingFirst {
            padding-top: 50px;
            padding-left: 50px;
            margin-bottom: 0px;
        }
        .headingsecond {
            padding-left: 90px;
            margin-top: 0px;
        }
        .nameOfUser {
            padding-left: 40px;
            color: wheat;
        }
        button {
            background-color: black;
            color: wheat;
            padding: 10px 20px;
            margin: 20px;
            border-radius: 10px;
            font-size: larger;
            margin-left: 80px;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        button:hover {
            transform: scale(1.2);
        }
        .homepage {
            display: flex;
            justify-content: space-between;
        }
        .running {
            margin-right: 20vw;
        }
        .paragraph {
            width: 60vw;
            margin-left: 10vw;
            margin-top: 10vh;
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
            color: rgb(237, 83, 83);
            letter-spacing: 2px;
        }
        .button-container {
            display: flex;
        }
    </style>
</head>
<body>
    <div class="header">
        <div class="logo">
            <img src="Heart.svg" alt="">
        </div>
        <div class="name">
            <h1>Fitness Tracker</h1>
        </div>
        <div class="element">
            <ul>
                <li><a href="Home.php">Home</a></li>
                <li><a href="aboutUS.html">About</a></li>
                <li><a href="products.html">Products</a></li>
                <li><a href="trackYourFitness.html">Track Your Fitness</a></li>
                <li><a href="contactUs.html">Contact Us</a></li>
            </ul>
        </div>
    </div>
    <div class="homepage">
        <div class="main">
        <h1 class="nameOfUser">Welcome back, <?php echo $userName ? $userName : 'Guest User'; ?>!</h1>
            <h1 class="headingFirst">Track Your</h1>
            <h1 class="headingsecond">Active Lifestyle</h1>
            <div class="button-container">
                <?php if (isset($_SESSION["name"])): ?>
                    <form action="logout.php" method="POST">
                        <button type="submit">Logout</button>
                    </form>
                <?php else: ?>
                    <form action="LoginScreen.html">
                        <button>Login</button>
                    </form>
                    <form action="signUpPage.html">
                        <button>Sign Up</button>
                    </form>
                <?php endif; ?>
            </div>
        </div>
        <div class="running">
            <img src="runningMan.svg" alt="">
        </div>
    </div>
    <div class="paragraph">
        <p>Welcome to Fitness Tracker, your ultimate companion on the journey to a healthier, fitter you. With our state-of-the-art real-time tracking, personalized workout plans, and detailed progress reports, staying motivated and achieving your fitness goals has never been easier. Join a supportive community of fitness enthusiasts, get expert tips and advice, and take control of your health with our easy-to-use platform. Start your journey today and transform your body and mind with FitLife Tracker. Sign up now and discover the difference that dedicated fitness tracking can make!</p>
    </div>
    <div class="footer-top">
        <div class="footer-section">
            <h3>Help</h3>
            <a href="LoginScreen.html">Log In / Register</a>
            <a href="privacy.html">Privacy Center</a>
            <a href="support.html">Support</a>
            <a href="developer.html">Developer / API</a>
        </div>
        <div class="footer-section">
            <h3>About</h3>
            <a href="contactUs.html">Contact Us</a>
            <a href="team.html">Join Our Team</a>
        </div>
        <div class="footer-section">
            <h3>Connect</h3>
            <a href="https://www.facebook.com">
                <img src="facebookLogo.svg" alt="Facebook Icon" class="social-icon"> Facebook
            </a>
            <a href="https://www.instagram.com">
                <img src="instagramLogo.svg" alt="Instagram Icon" class="social-icon"> Instagram
            </a>
            <a href="https://www.twitter.com">
                <img src="twitterLogo.svg" alt="Twitter Icon" class="social-icon"> Twitter
            </a>
            <a href="https://www.linkedin.com">
                <img src="linkidinLogo.svg" alt="LinkedIn Icon" class="social-icon"> LinkedIn
            </a>
        </div>
    </div>

    <footer>
        <div class="left">
            <div class="CompanyLogo"><img src="Heart.svg" alt="logo"></div>
            <div class="rights">©2024 Fitness Tracker®, Inc. All rights reserved</div>
        </div>
        <div class="right">
            <a href="privacy.html" aria-label="Privacy Policy">Privacy Policy</a>
            <a href="terms.html" aria-label="Terms of Use">Terms of Use</a>
            <a href="cookie.html" aria-label="Cookie Policy">Cookie Policy</a>
        </div>
    </footer>
</body>
</html>
