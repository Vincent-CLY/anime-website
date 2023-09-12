<?php
    session_start();
    //login.php

        require_once 'dbh.php';
        require_once 'functions.php';

        echo  $row['name'], $row['pw'], $name, $pw;

        if ($name == $row['name']) {
            if ($pw == $row['pw']){
                $_SESSION['token'] = 'yes';
                $_SESSION['name'] = $name;
                //echo $_SESSION['token'];
                header("location: index.php");
                exit();  
            } 
        } 
        else {
            header("location: index.php?wrong_username/password");
            exit();
            }
        

?>