<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$dbname = 'fb_database';

if ($mycon = @mysqli_connect($host, $user, $pass)) {

    if (@mysqli_select_db($mycon, $dbname)) {
    } else {
        echo 'DB Connection Failed';
    }
} else {
    echo 'Server Connection Failed';
}
