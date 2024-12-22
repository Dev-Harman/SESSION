<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login_system";
$conn = new mysqli($servername, $username, $password, $dbname);
if (!$conn) {
    echo "Connection Fail.........................";
}