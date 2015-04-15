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
    <link type="text/css" rel="stylesheet" href="CSS/projectpage.css"/>
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
        <br/>
        <br/>
        <div id="projectoverview" class="container">
            <table id="projecttable">
                <tbody>
                <tr class="projecttablerow">
                    <td class="projecttabletext">
                        <p class="text">Patent Model Museum, 2015</p>
                    </td>
                    <td>
                        <img class="projecttableimg" src="http://www.patentmodel.org/images/models/228125.jpg"/>
                    </td>
                </tr>
                <tr class="projecttablerow">
                    <td class="projecttabletext">
                        <p class="text">Artifacts at the Beekman Mill House, 2014</p>
                    </td>
                    <td>
                        <img class="projecttableimg" src="https://scontent-lga.xx.fbcdn.net/hphotos-xtf1/v/t1.0-9/1937459_366732940141331_8626747291356556578_n.jpg?oh=a2fed382d8c061826a55f0532b01e41c&oe=55AE4CC6"/>
                    </td>
                </tr>
                <tr class="projecttablerow">
                    <td class="projecttabletext">
                        <p class="text">Beekman Mill House, 2014</p>
                    </td>
                    <td>
                        <img class="projecttableimg" src="https://scontent-lga.xx.fbcdn.net/hphotos-xap1/v/t1.0-9/10482454_360153134132645_2278158058168730969_n.jpg?oh=a4b8dbcee7957aeb59b54196d991af5e&oe=55BC070B"/>
                    </td>
                </tr>
                <tr class="projecttablerow">
                    <td class="projecttabletext">
                        <p class="text">Apouquague Friends Burial Ground, 2012</p>
                    </td>
                    <td>
                        <img class="projecttableimg" src="http://1.bp.blogspot.com/-n6hVccqAzDs/UsmwJyBvtjI/AAAAAAAAACM/6jfHL-Mul-8/s640/Cemetery+Newspaper.jpeg"/>
                    </td>
                </tr>
                </tbody>
            </table>
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