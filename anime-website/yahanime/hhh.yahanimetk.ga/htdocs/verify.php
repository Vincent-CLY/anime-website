<?php
    session_start();
    $_SESSION['token'] = 'no';
    if ($name == $row['name']) {
        if ($pw == $row['pw']){
            if ($_COOKIE['name'] != '') {
                if ($_COOKIE['H_Level'] != "") {
                    if ($_COOKIE['H_Level'] == "Pervert") {
                        $_SESSION['token'] = 'yes';
                        return $_SESSION['token'];
                    }
                }
            }
            else {
                 header("location: plzlogin.php");
            }
        }
    }
?> 