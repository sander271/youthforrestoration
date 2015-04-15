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
    <link type="text/css" rel="stylesheet" href="CSS/donatepage.css"/>
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
            <tbody>
            <tr>
                <td id="donatepagetdleft">
                    <div id="leftside" class="container">
                        <h1 class="text donateheader">Ways to Give</h1>
                        <p class="text donatetext">​
                            Your contribution, no matter how large or small, will help support the<br> ​
                            YFR campaign to restore and preserve our history.</p>
                        <p class="text donatetext">Here is how you can lend your support:</p>
                        <h1 class="text donateheader">Donate Online</h1>
                        <p class="text donatetext">Click here to donate using PayPal</p>
                        <h1 class="text donateheader">Donate by Mail</h1>
                        <p class="text donatetext">Mail your contribution check, payable to “Youth For Restoration” to:</p>
                        <p class="text donatetext">Youth For Restoration<br>​
                            27 Noble Hill Drive<br>​
                            Poughquag, NY 12570</p>
                        <p class="text donatetext">Youth for Restoration is a registered 501 © (3) private foundation,​
                            donations are deductible for federal income tax purposes in​
                            accordance with applicable law.</p>
                    </div>
                </td>
                <td id="donatepagetdright">
                    <div id="rightside" class="container">
                        <h1 class="text donateheader">Ways to Get Involved</h1>
                        <ul>
                            <li class="text donatelistitem">Sign up to volunteer</li>
                            <li class="text donatelistitem">Sponsor a project</li>
                            <li class="text donatelistitem">Start a YFR Chapter</li>
                            <li class="text donatelistitem">Recruit leaders​</li>
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