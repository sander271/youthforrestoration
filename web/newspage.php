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
    <link type="text/css" rel="stylesheet" href="CSS/newspage.css"/>
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
        <div id="news" class="container">
            <ul id="newslist">
                <li class="text newsitem">
                    <a class="newspagelink" target="_blank" href="http://www.twcnews.com/archives/nys/hudson-valley/2014/08/2/youth-helping-to-save-old-mill-house-in-beekman-NY_757971.old.html">
                        Time Warner Cable News, August 2014
                    </a>
                </li>
                <li class="text newsitem">
                    <a class="newspagelink" target="_blank" href="http://www.poughkeepsiejournal.com/story/news/2014/07/27/beekman-mill-house-youth/13252745/">
                        Youth group to restore historic Beekman Mill House, Poughkeepsie Journal, July 2014
                    </a>
                </li>
                <li class="text newsitem">​
                    <a class="newspagelink" target="_blank" href="http://www.hvmag.com/Hudson-Valley-Magazine/June-2014/High-School-Students-Travel-the-Valley-to-Restore-Historic-Sites">
                        High School Students Travel the Valley to Restore Historic Sites, Hudson Valley Magazine, June 2014
                    </a>
                </li>
                <li class="text newsitem">
                    <a class="newspagelink" target="_blank" href="http://youthforrestoration.blogspot.com/2014/01/the-poughkeepsie-journal-covers-youth.html">
                        Volunteers at work, Poughkeepsie Journal, November 2012
                    </a>
                </li>
                <li class="text newsitem">
                    <a class="newspagelink" target="_blank" href="http://www.townofbeekman.com/index.asp?Type=B_BASIC&SEC=%7B1116D09E-F248-4CD3-B50B-7812F9DD6EEF%7D">
                        Town of Beekman
                    </a>
                </li>
            </ul>
            <img id="newsimg" src="https://scontent-lga.xx.fbcdn.net/hphotos-xpa1/v/t1.0-9/10482594_361220890692536_898378672072388254_n.jpg?oh=7f27865149646ab8d85fe9ba55c64248&oe=55AD5EDE"/>
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