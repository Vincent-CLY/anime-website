<?php
    // functions.php
    require_once("dbh.php");
    $name = mysqli_real_escape_string($conn, $_COOKIE['name']);
    $pw = mysqli_real_escape_string($conn, $_COOKIE['pw']);
    $sql = "SELECT * FROM users WHERE name=? AND pw=?";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        echo "SQL statement failed!";
    }
    else {
        mysqli_stmt_bind_param($stmt, "ss", $name, $pw);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        while ($row = mysqli_fetch_assoc($result)) {
            return $row['name']; 
            return $row['pw'];
        }
    }
    return $row['name'];
    return $row['pw'];


      