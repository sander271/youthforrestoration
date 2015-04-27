<?php
/**
 * Created by PhpStorm.
 * User: Aston
 * Date: 4/27/2015
 * Time: 3:29 PM
 */
?>
<?php include "sitecake/server/sitecake_entry.php"; ?>
<!DOCTYPE html>
<html>
    <head>
        <link type="text/css" rel="stylesheet" href="CSS/layout.css"/>
        <link type="text/css" rel="stylesheet" href="CSS/projects.css"/>
        <title>Projects</title>
        <script>
            function back(){
                location.assign("index.php#projects-bar");
            }
        </script>
    </head>
    <body>
        <div id="projects-wrapper" class="sc-content-editable30">
            <h3>Empty Template for projects. login to sitecake to edit</h3>
        </div>
        <button id="backButton" onclick="back()">Back</button>
        <a id="sitecakeLogin" href="#" class="text sc-login">Admin login</a>
    </body>
</html>