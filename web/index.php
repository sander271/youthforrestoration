<?php include "sitecake/server/sitecake_entry.php"; ?>
<!DOCTYPE html>
<html>
<head>
    <title>YouthForRestoration</title>
    <script>
        function home(){
            location.assign("index.php");
        }
        function aboutpage(){
            location.assign("aboutpage.php");
        }
        function contactpage(){
            location.assign("contactpage.php");
        }
        function projectpage(){
            location.assign("projectspage.php");
        }
        function newspage(){
            location.assign("newspage.php");
        }
        function donatepage(){
            location.assign("donatepage.php");
        }
    </script>
    <link type="text/css" rel="stylesheet" href="CSS/layout.css"/>
    <link type="text/css" rel="stylesheet" href="CSS/homepage.css"/>
</head>
<body id="body">
<div id="contentwrapper">
    <div id="navbarspace"></div>
    <div id="navbar">
        <ul id="menubar" class="container">
            <li class="nav-item" onclick=home()>Home</li>
            <li class="nav-item" onclick=aboutpage()>About Us</li>
            <li class="nav-item" onclick="projectpage()">Projects</li>
            <li class="nav-item" onclick="newspage()">News</li>
            <li class="nav-item" onclick="contactpage()">Contact</li>
            <li class="nav-item" onclick="donatepage()">Donate</li>
        </ul>
    </div>
    <div id="body-wrapper" class="sc-content-editable">
        <div id="homepagespace"></div>
        <div id="homepagecontent" class="container">
            <h2 class="text">Youth for Restoration is a youth-led, nonprofit  organization located in the Hudson Valley, New York.
                We are dedicated to preserving and restoring local historic sites. ​</h2>
        </div>
    </div>
    <div class="clearfooter"></div>
</div>
<div id="bottombar" class="container">
    <a href="https://www.facebook.com/youthforrestoration" target="_blank">
        <img class="thumbnail" src = "https://www.facebook.com/images/fb_icon_325x325.png" />
    </a>
    <a href="https://twitter.com/Y_F_R_" target="_blank">
        <img class="thumbnail" src = "http://www.buggytours.nl/img/Twitterbutton.png" />
    </a>
    <a href="http://youthforrestoration.blogspot.com/" target="_blank">
        <img class="thumbnail" src = "http://icons.iconarchive.com/icons/marcus-roberto/google-play/512/Blogger-icon.png" />
    </a>
    <h3 class="text">Copyright@2014 by Youth For Restoration, All rights reserved</h3>
</div>
</body>
</html>

