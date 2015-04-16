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

        <form name="contactform" method="post" action="send_form_email.php" class="container">
            <table width="450px">
                <tr>
                    <td valign="top">
                        <label for="first_name" class="text">First Name *</label>
                    </td>
                    <td valign="top">
                        <input  type="text" name="first_name" maxlength="50" size="30">
                    </td>
                </tr>
                <tr>
                    <td valign="top"">
                    <label for="last_name" class="text">Last Name *</label>
                    </td>
                    <td valign="top">
                        <input  type="text" name="last_name" maxlength="50" size="30">
                    </td>
                </tr>
                <tr>
                    <td valign="top">
                        <label for="email" class="text">Email Address *</label>
                    </td>
                    <td valign="top">
                        <input  type="text" name="email" maxlength="80" size="30">
                    </td>
                </tr>
                <tr>
                    <td valign="top">
                        <label for="telephone" class="text">Telephone Number</label>
                    </td>
                    <td valign="top">
                        <input  type="text" name="telephone" maxlength="30" size="30">
                    </td>
                </tr>
                <tr>
                    <td valign="top">
                        <label for="comments" class="text">Comments *</label>
                    </td>
                    <td valign="top">
                        <textarea  name="comments" maxlength="1000" cols="25" rows="6"></textarea>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align:center">
                        <input type="submit" value="Submit">   <a href="http://www.freecontactform.com/email_form.php">Email Form</a>
                    </td>
                </tr>
            </table>
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