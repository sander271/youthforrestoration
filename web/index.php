<?php //include "sitecake/server/sitecake_entry.php"; ?>
<!DOCTYPE html>
<html>
<head>
    <title>YouthForRestoration</title>
    <script>
        function home(){
            location.assign("#body-wrapper-home");
        }
        function aboutpage(){
            location.assign("#body-wrapper-about");
        }
        function contactpage(){
            location.assign("#body-wrapper-contact");
        }
        function projectpage(){
            location.assign("#body-wrapper-projects");
        }
        function newspage(){
            location.assign("#body-wrapper-news");
        }
        function donatepage(){
            location.assign("#body-wrapper-donate");
        }
    </script>
    <link type="text/css" rel="stylesheet" href="CSS/layout.css"/>
    <link type="text/css" rel="stylesheet" href="CSS/homepage.css"/>
    <link type="text/css" rel="stylesheet" href="CSS/aboutpage.css"/>
    <link type="text/css" rel="stylesheet" href="CSS/projectpage.css"/>
    <link type="text/css" rel="stylesheet" href="CSS/newspage.css"/>
    <link type="text/css" rel="stylesheet" href="CSS/contactpage.css"/>
    <link type="text/css" rel="stylesheet" href="CSS/donatepage.css"/>
</head>
<body id="body">

<div id="contentwrapper">
    <div id="navbarspace"></div>
    <div id="navbar">
        <ul id="menubar" class="container">
            <?php
            $navBarName = array("Home", "About Us", "Projects", "News", "Contact", "Donate");
            $navbarFunction = array("home()", "aboutpage()", "projectpage()", "newspage()", "contactpage()", "donatepage()");
            for($i = 0; $i < count($navBarName); $i++){
                echo "<li class=\"nav-item\"' onclick=".$navbarFunction[$i].">".$navBarName[$i]."</li>";
            }
            ?>
<!--            <li class="nav-item" onclick=home()>Home</li>-->
<!--            <li class="nav-item" onclick=aboutpage()>About Us</li>-->
<!--            <li class="nav-item" onclick="projectpage()">Projects</li>-->
<!--            <li class="nav-item" onclick="newspage()">News</li>-->
<!--            <li class="nav-item" onclick="contactpage()">Contact</li>-->
<!--            <li class="nav-item" onclick="donatepage()">Donate</li>-->
        </ul>
    </div>

    <div id="body-wrapper-home">
        <div id="homepagespace"></div>
        <div id="homepagecontent" class="container sc-content-editable">
            <h2 class="text">Youth for Restoration is a youth-led, nonprofit  organization located in the Hudson Valley, New York.
                We are dedicated to preserving and restoring local historic sites. ​</h2>
        </div>
    </div>

    <div id="body-wrapper-about">
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
                            <?php
                                $names = array("Eric Layden", "Lauren Macdonald", "Lauren Neville", "Jordan Scocozza", "Christian Soto");
                                foreach($names as $name){
                                    echo "<li class=\"text font\">{$name}</li>";
                                }
                            ?>
<!--                            <li class="text font">Eric Layden</li>-->
<!--                            <li class="text font">Lauren Macdonald</li>-->
<!--                            <li class="text font">Lauren Neville</li>-->
<!--                            <li class="text font">​Jordon Scocozza​</li>-->
<!--                            <li class="text font">Christian Soto</li>-->
                        </ul>
                    </div>
                </td>
            </tr>
            </tbody>
        </table>
    </div>

    <div id="body-wrapper-projects">
        <br/>
        <br/>
        <div id="projectoverview" class="container">
            <table id="projecttable">
                <tbody>
                <?php
                    $projectLabel1 = "Patent Model Museum, 2015";
                    $projectLabel2 = "Artifacts at the Beekman Mill House, 2014";
                    $projectLabel3 = "Beekman Mill House, 2014";
                    $projectLabel4 = "Apouquague Friends Burial Ground, 2012";
                    $projectImgURL1 = "http://www.patentmodel.org/images/models/228125.jpg";
                    $projectImgURL2 = "https://scontent-lga.xx.fbcdn.net/hphotos-xtf1/v/t1.0-9/1937459_366732940141331_8626747291356556578_n.jpg?oh=a2fed382d8c061826a55f0532b01e41c&oe=55AE4CC6";
                    $projectImgURL3 = "https://scontent-lga.xx.fbcdn.net/hphotos-xap1/v/t1.0-9/10482454_360153134132645_2278158058168730969_n.jpg?oh=a4b8dbcee7957aeb59b54196d991af5e&oe=55BC070B";
                    $projectImgURL4 = "http://1.bp.blogspot.com/-n6hVccqAzDs/UsmwJyBvtjI/AAAAAAAAACM/6jfHL-Mul-8/s640/Cemetery+Newspaper.jpeg";

                    $projectLabels = array($projectLabel1, $projectLabel2, $projectLabel3, $projectLabel4);
                    $projectImgURLs = array($projectImgURL1, $projectImgURL2, $projectImgURL3, $projectImgURL4);

                    for($i = 0; $i < count($projectLabels); $i++){
                        echo "<tr class=\"projecttablerow\">";
                        echo "<td class=\"projecttabletext\">";
                        echo "<div class=\"sc-content-editable1{$i}\">";
                        echo "<p class=\"text\">{$projectLabels[$i]}</p>";
                        echo "</div>";
                        echo "</td>";
                        echo "<td><img class=\"projecttableimg\" src=\"{$projectImgURLs[$i]}\"/></td>";
                        echo "</tr>";
                    }
                ?>
<!--                <tr class="projecttablerow">-->
<!--                    <td class="projecttabletext">-->
<!--                        <div class="sc-content-editable11">-->
<!--                        <p class="text">Patent Model Museum, 2015</p>-->
<!--                        </div>-->
<!--                    </td>-->
<!--                    <td>-->
<!--                        <img class="projecttableimg" src="http://www.patentmodel.org/images/models/228125.jpg"/>-->
<!--                    </td>-->
<!--                </tr>-->
<!--                <tr class="projecttablerow">-->
<!--                    <td class="projecttabletext">-->
<!--                        <div class="sc-content-editable13">-->
<!--                        <p class="text">Artifacts at the Beekman Mill House, 2014</p>-->
<!--                        </div>-->
<!--                    </td>-->
<!--                    <td>-->
<!--                        <img class="projecttableimg" src="https://scontent-lga.xx.fbcdn.net/hphotos-xtf1/v/t1.0-9/1937459_366732940141331_8626747291356556578_n.jpg?oh=a2fed382d8c061826a55f0532b01e41c&oe=55AE4CC6"/>-->
<!--                    </td>-->
<!--                </tr>-->
<!--                <tr class="projecttablerow">-->
<!--                    <td class="projecttabletext">-->
<!--                        <div class="sc-content-editable15">-->
<!--                        <p class="text">Beekman Mill House, 2014</p>-->
<!--                        </div>-->
<!--                    </td>-->
<!--                    <td>-->
<!--                        <img class="projecttableimg" src="https://scontent-lga.xx.fbcdn.net/hphotos-xap1/v/t1.0-9/10482454_360153134132645_2278158058168730969_n.jpg?oh=a4b8dbcee7957aeb59b54196d991af5e&oe=55BC070B"/>-->
<!--                    </td>-->
<!--                </tr>-->
<!--                <tr class="projecttablerow">-->
<!--                    <td class="projecttabletext">-->
<!--                        <p class="text">Apouquague Friends Burial Ground, 2012</p>-->
<!--                    </td>-->
<!--                    <td>-->
<!--                        <img class="projecttableimg" src="http://1.bp.blogspot.com/-n6hVccqAzDs/UsmwJyBvtjI/AAAAAAAAACM/6jfHL-Mul-8/s640/Cemetery+Newspaper.jpeg"/>-->
<!--                    </td>-->
<!--                </tr>-->
                </tbody>
            </table>
        </div>
    </div>

    <div id="body-wrapper-news">
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

    <div id="body-wrapper-contact">
        <div class="sc-content-editable6">
        <h1 class="text" id="contactpageinfo">Please feel free to reach out to us using this form. If you would like to get involved, we welcome ​
            volunteers. Your support is invaluable in helping us preserve our history!​</h1>
        </div>

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

    <div id="body-wrapper-donate">
        <table>
            <tbody>
            <tr>
                <td id="donatepagetdleft">
                    <div id="leftside" class="container sc-content-editable8">
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
                    <div id="rightside" class="container sc-content-editable9">
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
        <img class="thumbnail sc-content-editable10" src = "https://www.facebook.com/images/fb_icon_325x325.png" />
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

