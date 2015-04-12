<!DOCTYPE html>
<html>
<head>
    <title>YouthForRestoration</title>
    <script>
        function home(){
            location.assign("../web/index.php");
        }
        function aboutpage(){
            location.assign("../web/aboutpage.php");
        }
        function contactpage(){
            location.assign("../web/contactpage.php");
        }
        function projectpage(){
            location.assign("../web/projectspage.php");
        }
        function newspage(){
            location.assign("../web/newspage.php");
        }
        function donatepage(){
            location.assign("../web/donatepage.php");
        }
    </script>
    <link type="text/css" rel="stylesheet" href="CSS/layout.css"/>
    <link type="text/css" rel="stylesheet" href="CSS/contactpage.css"/>
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
    <div id="body-wrapper">
        <h1 class="text" id="contactpageinfo">Please feel free to reach out to us using this form. If you would like to get involved, we welcome ​
            volunteers. Your support is invaluable in helping us preserve our history!​</h1>

        <form id="infoform" class="container">
            <label id="namelabel" class="text">Name:</label>
            <input type="text" name="fullname"/><br/>
            <br/>
            <label id="emaillabel" class="text">Email:</label>
            <input type="text" name="email"/><br/>
            <br/>
            <label id="otherinfolabel" class="text">Other contact info:</label>
            <input type="text" name="extrainfo"/><br/>
            <br/>
            <label id="textarealabel" class="text">Message:</label>
            <textarea></textarea>
        </form>
        <br/>
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