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
    <link type="text/css" rel="stylesheet" href="CSS/aboutpage.css"/>
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
        <table>
            <thead></thead>
            <tbody>
            <tr>
                <td id="aboutpagetdleft">
                    <div id="left" class="container sc-content-editable3">
                        <p class="text size13">Founded in 2012, Youth for Restoration ​
                            (YFR) is a nonprofit, tax-exempt charitable ​
                            organization under Section 501(c)(3) of the ​
                            Internal Revenue Code. </p>
                        <p class="text size13">The mission of the organization is to engage ​
                            local communities to identify and restore old ​
                            historic sites and pursue their nomination to the ​
                            State and National Register of Historic Places.</p>
                    </div>
                </td>
                <td id="aboutpagetdright">
                    <div id="right" class="container sc-content-editable4">
                        <h2 class="text">Founder</h2>
                        <ul class="info">
                            <li class="text font">Viraj Kumar</li>
                        </ul>
                        <h2 class="text">Board Members</h2>
                        <ul class="info">
                            <li class="text font">Eric Layden</li>
                            <li class="text font">Lauren Macdonald</li>
                            <li class="text font">Lauren Neville</li>
                            <li class="text font">​Jordon Scocozza​</li>
                            <li class="text font">Christian Soto</li>
                        </ul>
                    </div>
                </td>
            </tr>
            </tbody>
        </table>
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

