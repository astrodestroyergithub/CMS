<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="icon" type="image/x-icon" href="favicon.ico">
        <title>Module Selection Page</title>
        <link rel="stylesheet" href="modStyle.css?v=<?php echo time(); ?>">
    </head>
    <body>
        <div class="head-wrap">
            <center><b><span id="heading">CRISIS MODULE SELECTION</span></b></center>
        </div>
        <div class="module">
            <span id="list-style">
            <ul>
                <li><a href="chatIndex.php">CHAT COUNSELLING</a></li>
                <li><a href="vidChat.html">VIDEO CONFERENCE COUNSELLING</a></li>
                <li><a href="geo_index.php">ROUTE TRACKER INFORMER</a></li>
                <li><a href="news.html">DAILY NEWS UPDATES</a></li>
                <li><a href="fitness.html">FITNESS & WELLBEING TRACKER</a></li>
                <li><a href="cov.html">COVID-19 STATUS CHECKER</a></li>
                <li><a href="https://www.youtube.com/channel/UCCiKcWcW6IUaRibl-5opkyg">VIDEO STREAMING</a></li>
                <li><a href="donate.html">DONATION DRIVE</a></li>
            </ul>
            </span>
        </div>
    </body>
</html>