<?php
session_start();
$docroot = dirname(__FILE__);
echo $docroot;
$_SESSION['name'] = 'yes';
define('token', true);
?>
<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
        <button onclick=<?php header("Location: konosuba2(test).php") ?> >Redirect!</button>
    </body>
</html>